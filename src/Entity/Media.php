<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use App\Validator\Constraints\MediaExtension;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MediaRepository")
 * @ORM\Table(name="media")
 * @ORM\HasLifecycleCallbacks
 */
class Media {
    /**
     * @ORM\Id
     * @ORM\Column(name="id",type="guid")
     * @ORM\GeneratedValue(strategy="UUID")
     */
    protected $id;

    /**
     * @Assert\NotBlank(message="model.media.error.empty")
     * @Assert\File(maxSize="6000000")
     */
    protected $file;

    /**
     * @Assert\NotBlank(message="model.media.error.empty",groups={"all"})
     * @ORM\Column(name="name", type="string", length=255)
     */
    protected $nom;

    /**
     * @ORM\Column(name="createdAt", type="datetime", nullable=false)
     */
    protected $createdAt;

    /**
     * @ORM\Column(name="editAt", type="datetime", nullable=false)
     */
    protected $editAt;

    /**
     * @var string
     * @Assert\NotBlank(message="model.media.error.empty",groups={"all"})
     * @MediaExtension(message="model.media.error.extension",groups={"all"})
     * @ORM\Column(name="extension", type="string", length=255, nullable=false)
     */
    protected $extension;

    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=true)
     * @var User $user
     */
    protected $user;

    /**
     * @ORM\Column(name="public", type="boolean", nullable=false, options={"default"=true})
     */
    protected $public;

    /**
     * @ORM\PrePersist
     * @ORM\PreUpdate
     */
    public function autoUpdateDate() {
        $this->editAt = new \DateTime();
    }

    public function __construct() {
        $this->createdAt = new \DateTime();
        $this->editAt = new \DateTime();
        $this->public = true;
    }

    function getId() {
        return $this->id;
    }

    function getFile() {
        return $this->file;
    }

    function getCreatedAt() {
        return $this->createdAt;
    }

    function getEditAt() {
        return $this->editAt;
    }

    function getExtension() {
        return $this->extension;
    }

    function setFile($file) {
        $this->file = $file;
    }

    function setCreatedAt($createdAt) {
        $this->createdAt = $createdAt;
    }

    function setEditAt($editAt) {
        $this->editAt = $editAt;
    }

    function setExtension($extension) {
        $this->extension = $extension;
    }

    function getNom() {
        return $this->nom;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    public function isPublic() {
        return $this->public;
    }

    public function setPublic($public) {
        $this->public = $public;
    }

    public function getAbsolutePath() {
        return null === $this->extension ? null : $this->getUploadRootDir() . '/' . $this->id . '.' . $this->extension;
    }

    public function getUploadRootDir() {
        // le chemin absolu du répertoire où les documents uploadés doivent être sauvegardés
        return __DIR__ . '/../../../../' . $this->getUploadDir();
    }

    public function getUploadDir() {
        // on se débarrasse de « __DIR__ » afin de ne pas avoir de problème lorsqu'on affiche
        // le document/image dans la vue.
        return 'uploads/media';
    }

    function getUser() {
        return $this->user;
    }

    function setUser($user) {
        $this->user = $user;
    }

    // propriété utilisé temporairement pour la suppression
    private $filenameForRemove;

    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    public function upload() {
        if (null === $this->file) {
            return;
        }

        // vous devez lancer une exception ici si le fichier ne peut pas
        // être déplacé afin que l'entité ne soit pas persistée dans la
        // base de données comme le fait la méthode move() de UploadedFile

        if(!file_exists($this->getUploadRootDir())) {
            mkdir($this->getUploadRootDir(), 0775,true);
        }

        $this->file->move($this->getUploadRootDir(), $this->id.'.'.$this->extension);

        $supported_formats = [
            'gif',
            'jpg',
            'jpeg',
            'png',
            'bmp'
        ];
        if( in_array($this->extension, $supported_formats)) {
            $this->image_fix_orientation($this->getUploadRootDir() . "/" . $this->id . '.' . $this->extension);
        }

        unset($this->file);
    }

    function image_fix_orientation($filename) {
        $exif = @exif_read_data($filename);
        if (!empty($exif['Orientation'])) {
            $image = imagecreatefromjpeg($filename);
            switch ($exif['Orientation']) {
                case 3:
                    $image = imagerotate($image, 180, 0);
                    break;

                case 6:
                    $image = imagerotate($image, -90, 0);
                    break;

                case 8:
                    $image = imagerotate($image, 90, 0);
                    break;
            }

            imagejpeg($image, $filename, 90);
        }
    }

    /**
     * @ORM\PreRemove()
     */
    public function storeFilenameForRemove() {
        $this->filenameForRemove = $this->getAbsolutePath();
    }

    public function getFilename() {
        return $this->nom.".".$this->extension;
    }

    /**
     * @ORM\PostRemove()
     */
    public function removeUpload() {
        if ($this->filenameForRemove && file_exists($this->filenameForRemove)) {
            unlink($this->filenameForRemove);
        }
    }
}
