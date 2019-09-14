<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BillRepository")
 * @UniqueEntity("bill_number")
 */
class Bill
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
    private $bill_number;

    /**
     * @ORM\Column(type="float")
     */
    private $price_tva;

    /**
     * @ORM\Column(type="float")
     */
    private $price_ttc;

    /**
     * @ORM\Column(type="date")
     */
    private $date;

    /**
     * @ORM\Column(type="float")
     */
    private $total_price;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Reservation", inversedBy="bills")
     */
    private $Reservation;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBilleNumber(): ?string
    {
        return $this->bill_number;
    }

    public function setBillNumber(string $bill_number): self
    {
        $this->bill_number = $bill_number;

        return $this;
    }

    public function getPriceTva(): ?float
    {
        return $this->price_tva;
    }

    public function setPriceTva(float $price_tva): self
    {
        $this->price_tva = $price_tva;

        return $this;
    }

    public function getPriceTtc(): ?float
    {
        return $this->price_ttc;
    }

    public function setPriceTtc(float $price_ttc): self
    {
        $this->price_ttc = $price_ttc;

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

    public function getTotalPrice(): ?float
    {
        return $this->total_price;
    }

    public function setTotalPrice(float $total_price): self
    {
        $this->total_price = $total_price;

        return $this;
    }

    public function getReservation(): ?Reservation
    {
        return $this->Reservation;
    }

    public function setReservation(?Reservation $Reservation): self
    {
        $this->Reservation = $Reservation;

        return $this;
    }
}
