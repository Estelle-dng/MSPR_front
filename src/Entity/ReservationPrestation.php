<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ReservationPrestationRepository")
 */
class ReservationPrestation
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Reservation")
     * @ORM\JoinColumn(nullable=false)
     */
    private $reservation;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Prestation")
     * @ORM\JoinColumn(nullable=false)
     */
    private $prestation;

    /**
     * @ORM\Column(type="integer")
     */
    private $amount;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReservation(): ?reservation
    {
        return $this->reservation;
    }

    public function setReservation(?reservation $reservation): self
    {
        $this->reservation = $reservation;

        return $this;
    }

    public function getPrestation(): ?Prestation
    {
        return $this->prestation;
    }

    public function setPrestation(?Prestation $prestation): self
    {
        $this->prestation = $prestation;

        return $this;
    }

    public function getAmount(): ?int
    {
        return $this->amount;
    }

    public function setAmount(int $amount): self
    {
        $this->amount = $amount;

        return $this;
    }
}
