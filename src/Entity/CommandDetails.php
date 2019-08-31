<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CommandDetailsRepository")
 */
class CommandDetails
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="float")
     */
    private $price;

    /**
     * @ORM\Column(type="date")
     */
    private $date;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Reservation", mappedBy="commandDetails")
     */
    private $Reservation;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Discount", inversedBy="command_details")
     */
    private $discount;

    /**
     * @ORM\Column(type="date")
     */
    private $reservation_start;

    /**
     * @ORM\Column(type="date")
     */
    private $reservation_end;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\CommandDetailsHasOption", inversedBy="CommandDetails")
     */
    private $commandDetailsHasOption;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\CategoryHasSeason", inversedBy="commandDetails")
     */
    private $Category_has_season;




    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    /**
     * @return Collection|Reservation[]
     */
    public function getReservation(): Collection
    {
        return $this->Reservation;
    }

    public function addReservation(Reservation $reservation): self
    {
        if (!$this->Reservation->contains($reservation)) {
            $this->Reservation[] = $reservation;
            $reservation->setCommandDetails($this);
        }

        return $this;
    }

    public function removeReservation(Reservation $reservation): self
    {
        if ($this->Reservation->contains($reservation)) {
            $this->Reservation->removeElement($reservation);
            // set the owning side to null (unless already changed)
            if ($reservation->getCommandDetails() === $this) {
                $reservation->setCommandDetails(null);
            }
        }

        return $this;
    }

    public function getDiscount(): ?Discount
    {
        return $this->discount;
    }

    public function setDiscount(?Discount $discount): self
    {
        $this->discount = $discount;

        return $this;
    }

    public function getReservationStart(): ?\DateTimeInterface
    {
        return $this->reservation_start;
    }

    public function setReservationStart(\DateTimeInterface $reservation_start): self
    {
        $this->reservation_start = $reservation_start;

        return $this;
    }

    public function getReservationEnd(): ?\DateTimeInterface
    {
        return $this->reservation_end;
    }

    public function setReservationEnd(\DateTimeInterface $reservation_end): self
    {
        $this->reservation_end = $reservation_end;

        return $this;
    }

    public function getCommandDetailsHasOption(): ?CommandDetailsHasOption
    {
        return $this->commandDetailsHasOption;
    }

    public function setCommandDetailsHasOption(?CommandDetailsHasOption $commandDetailsHasOption): self
    {
        $this->commandDetailsHasOption = $commandDetailsHasOption;

        return $this;
    }

    public function getCategoryHasSeason(): ?CategoryHasSeason
    {
        return $this->Category_has_season;
    }

    public function setCategoryHasSeason(?CategoryHasSeason $Category_has_season): self
    {
        $this->Category_has_season = $Category_has_season;

        return $this;
    }
}
