<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ReservationRepository")
 */
class Reservation
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $reservation_start;

    /**
     * @ORM\Column(type="date")
     */
    private $reservation_end;

    /**
     * @ORM\Column(type="float")
     */
    private $total_price;

    /**
     * @ORM\Column(type="boolean")
     */
    private $is_cancelled;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\spot", inversedBy="reservations")
     * @ORM\JoinColumn(nullable=false)
     */
    private $spot;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Payment", mappedBy="reservation")
     */
    private $payments;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\ReservationPrestation", mappedBy="reservation")
     */
    private $reservationPrestation;

    public function __construct()
    {
        $this->payments = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getTotalPrice(): ?float
    {
        return $this->total_price;
    }

    public function setTotalPrice(float $total_price): self
    {
        $this->total_price = $total_price;

        return $this;
    }

    public function getIsCancelled(): ?bool
    {
        return $this->is_cancelled;
    }

    public function setIsCancelled(bool $is_cancelled): self
    {
        $this->is_cancelled = $is_cancelled;

        return $this;
    }

    public function getSpot(): ?spot
    {
        return $this->spot;
    }

    public function setSpot(?spot $spot): self
    {
        $this->spot = $spot;

        return $this;
    }

    /**
     * @return Collection|Payment[]
     */
    public function getPayments(): Collection
    {
        return $this->payments;
    }

    public function addPayment(Payment $payment): self
    {
        if (!$this->payments->contains($payment)) {
            $this->payments[] = $payment;
            $payment->setReservation($this);
        }

        return $this;
    }

    public function removePayment(Payment $payment): self
    {
        if ($this->payments->contains($payment)) {
            $this->payments->removeElement($payment);
            // set the owning side to null (unless already changed)
            if ($payment->getReservation() === $this) {
                $payment->setReservation(null);
            }
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
