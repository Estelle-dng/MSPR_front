<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

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
     * @Assert\Expression("value >= this.dateStart")
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
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="Reservation")
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\CommandDetails", inversedBy="Reservation")
     * @ORM\JoinColumn(nullable=false)
     */
    private $commandDetails;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Bill", mappedBy="Reservation")
     */
    private $bills;

    public function __construct()
    {
        $this->bills = new ArrayCollection();
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

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getCommandDetails(): ?CommandDetails
    {
        return $this->commandDetails;
    }

    public function setCommandDetails(?CommandDetails $commandDetails): self
    {
        $this->commandDetails = $commandDetails;

        return $this;
    }

    /**
     * @return Collection|Bill[]
     */
    public function getBills(): Collection
    {
        return $this->bills;
    }

    public function addBill(Bill $bill): self
    {
        if (!$this->bills->contains($bill)) {
            $this->bills[] = $bill;
            $bill->setReservation($this);
        }

        return $this;
    }

    public function removeBill(Bill $bill): self
    {
        if ($this->bills->contains($bill)) {
            $this->bills->removeElement($bill);
            // set the owning side to null (unless already changed)
            if ($bill->getReservation() === $this) {
                $bill->setReservation(null);
            }
        }

        return $this;
    }



}
