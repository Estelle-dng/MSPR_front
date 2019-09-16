<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CategoryRepository")
 * @UniqueEntity("name")
 */
class Category
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\CategoryHasSeason", mappedBy="category", cascade={"remove"})
     */
    private $CategorySeason;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Spot", mappedBy="Category")
     */
    private $spots;

    /**
     * @ORM\Column(type="text")
     */
    private $info;

    /**
     * @ORM\ManyToOne(targetEntity="Media", inversedBy="categories")
     */
    protected $media;

    /**
     * @ORM\Column(type="integer")
     */
    private $capacity;


    public function __construct()
    {
        $this->CategorySeason = new ArrayCollection();
        $this->spots = new ArrayCollection();
    }

    public function __toString()
    {
        return $this->name;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection|CategoryHasSeason[]
     */
    public function getCategorySeason(): Collection
    {
        return $this->CategorySeason;
    }

    public function addCategorySeason(CategoryHasSeason $categorySeason): self
    {
        if (!$this->CategorySeason->contains($categorySeason)) {
            $this->CategorySeason[] = $categorySeason;
            $categorySeason->setCategory($this);
        }

        return $this;
    }

    public function removeCategorySeason(CategoryHasSeason $categorySeason): self
    {
        if ($this->CategorySeason->contains($categorySeason)) {
            $this->CategorySeason->removeElement($categorySeason);
            // set the owning side to null (unless already changed)
            if ($categorySeason->getCategory() === $this) {
                $categorySeason->setCategory(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Spot[]
     */
    public function getSpots(): Collection
    {
        return $this->spots;
    }

    public function addSpot(Spot $spot): self
    {
        if (!$this->spots->contains($spot)) {
            $this->spots[] = $spot;
            $spot->setCategory($this);
        }

        return $this;
    }

    public function removeSpot(Spot $spot): self
    {
        if ($this->spots->contains($spot)) {
            $this->spots->removeElement($spot);
            // set the owning side to null (unless already changed)
            if ($spot->getCategory() === $this) {
                $spot->setCategory(null);
            }
        }

        return $this;
    }

    public function getInfo(): ?string
    {
        return $this->info;
    }

    public function setInfo(string $info): self
    {
        $this->info = $info;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMedia()
    {
        return $this->media;
    }

    /**
     * @param mixed $media
     * @return Category
     */
    public function setMedia($media)
    {
        $this->media = $media;
        return $this;
    }

    public function getCapacity(): ?int
    {
        return $this->capacity;
    }

    public function setCapacity(int $capacity): self
    {
        $this->capacity = $capacity;

        return $this;
    }


}
