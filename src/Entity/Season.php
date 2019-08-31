<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SeasonRepository")
 */
class Season
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
     * @ORM\Column(type="date")
     */
    private $date_start;

    /**
     * @ORM\Column(type="date")
     */
    private $date_end;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\CategoryHasSeason", mappedBy="season")
     */
    private $CategoryHasSeason;

    public function __construct()
    {
        $this->CategoryHasSeason = new ArrayCollection();
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

    public function getDateStart(): ?\DateTimeInterface
    {
        return $this->date_start;
    }

    public function setDateStart(\DateTimeInterface $date_start): self
    {
        $this->date_start = $date_start;

        return $this;
    }

    public function getDateEnd(): ?\DateTimeInterface
    {
        return $this->date_end;
    }

    public function setDateEnd(\DateTimeInterface $date_end): self
    {
        $this->date_end = $date_end;

        return $this;
    }

    /**
     * @return Collection|CategoryHasSeason[]
     */
    public function getCategoryHasSeason(): Collection
    {
        return $this->CategoryHasSeason;
    }

    public function addCategoryHasSeason(CategoryHasSeason $categoryHasSeason): self
    {
        if (!$this->CategoryHasSeason->contains($categoryHasSeason)) {
            $this->CategoryHasSeason[] = $categoryHasSeason;
            $categoryHasSeason->setSeason($this);
        }

        return $this;
    }

    public function removeCategoryHasSeason(CategoryHasSeason $categoryHasSeason): self
    {
        if ($this->CategoryHasSeason->contains($categoryHasSeason)) {
            $this->CategoryHasSeason->removeElement($categoryHasSeason);
            // set the owning side to null (unless already changed)
            if ($categoryHasSeason->getSeason() === $this) {
                $categoryHasSeason->setSeason(null);
            }
        }

        return $this;
    }
}
