<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PrestationRepository")
 */
class Prestation
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
    private $title;

    /**
     * @ORM\Column(type="boolean")
     */
    private $active;

    /**
     * @ORM\Column(type="float")
     */
    private $price_high;

    /**
     * @ORM\Column(type="float")
     */
    private $price_mid;

    /**
     * @ORM\Column(type="float")
     */
    private $price_low;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Category", mappedBy="prestations")
     */
    private $categories;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\ReservationPrestation", mappedBy="prestation")
     */
    private $reservationPrestation;


    public function __construct()
    {
        $this->categories = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getPriceHigh(): ?float
    {
        return $this->price_high;
    }

    public function setPriceHigh(float $price_high): self
    {
        $this->price_high = $price_high;

        return $this;
    }

    public function getPriceMid(): ?float
    {
        return $this->price_mid;
    }

    public function setPriceMid(float $price_mid): self
    {
        $this->price_mid = $price_mid;

        return $this;
    }

    public function getPriceLow(): ?float
    {
        return $this->price_low;
    }

    public function setPriceLow(float $price_low): self
    {
        $this->price_low = $price_low;

        return $this;
    }

    /**
     * @return Collection|Category[]
     */
    public function getCategories(): Collection
    {
        return $this->categories;
    }

    public function addCategory(Category $category): self
    {
        if (!$this->categories->contains($category)) {
            $this->categories[] = $category;
            $category->addPrestation($this);
        }

        return $this;
    }

    public function removeCategory(Category $category): self
    {
        if ($this->categories->contains($category)) {
            $this->categories->removeElement($category);
            $category->removePrestation($this);
        }

        return $this;
    }

    /**
     * @return mixed
     */
    public function getReservationPrestation()
    {
        return $this->reservationPrestation;
    }

    /**
     * @param mixed $reservationPrestation
     */
    public function setReservationPrestation($reservationPrestation): void
    {
        $this->reservationPrestation = $reservationPrestation;
    }
}
