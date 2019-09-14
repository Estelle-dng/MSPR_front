<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FaqRepository")
 * @UniqueEntity("title")
 * @UniqueEntity("answer")
 */
class Faq
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $title;

    /**
     * @ORM\Column(type="text")
     */
    private $answer;

    /**
     * @ORM\Column(type="datetime")
     */
    private $created_at;

    /**
     *
     * @ORM\Column(type="datetime")
     */
    private $edited_at;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="faqs")
     */
    private $User;

    public function __construct()
    {
        $this->created_at = new \DateTime();
        $this->edited_at = new \DateTime();

    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Faq
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     * @return Faq
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAnswer()
    {
        return $this->answer;
    }

    /**
     * @param mixed $answer
     * @return Faq
     */
    public function setAnswer($answer)
    {
        $this->answer = $answer;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @param mixed $created_at
     * @return Faq
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEditedAt()
    {
        return $this->edited_at;
    }

    /**
     * @param mixed $edited_at
     * @return Faq
     */
    public function setEditedAt($edited_at)
    {
        $this->edited_at = $edited_at;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->User;
    }

    /**
     * @param mixed $User
     * @return Faq
     */
    public function setUser($User)
    {
        $this->User = $User;
        return $this;
    }

}
