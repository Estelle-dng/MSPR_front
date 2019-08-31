<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CategoryRepository")
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
     * @ORM\OneToMany(targetEntity="App\Entity\CategoryHasSeason", mappedBy="category")
     */
    private $CategorySeason;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Spot", mappedBy="Category")
     */
    private $spots;

    public function __construct()
    {
        $this->CategorySeason = new ArrayCollection();
        $this->spots = new ArrayCollection();
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
}
