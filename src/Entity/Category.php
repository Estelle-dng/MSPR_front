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
     * @ORM\OneToMany(targetEntity="App\Entity\Spot", mappedBy="category")
     */
    private $spots;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\prestation", inversedBy="categories")
     */
    private $prestations;

    public function __construct()
    {
        $this->spots = new ArrayCollection();
        $this->prestations = new ArrayCollection();
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

    /**
     * @return Collection|prestation[]
     */
    public function getPrestations(): Collection
    {
        return $this->prestations;
    }

    public function addPrestation(prestation $prestation): self
    {
        if (!$this->prestations->contains($prestation)) {
            $this->prestations[] = $prestation;
        }

        return $this;
    }

    public function removePrestation(prestation $prestation): self
    {
        if ($this->prestations->contains($prestation)) {
            $this->prestations->removeElement($prestation);
        }

        return $this;
    }
}
