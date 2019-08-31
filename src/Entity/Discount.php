<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DiscountRepository")
 */
class Discount
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
    private $discount_value;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\CommandDetails", mappedBy="discount")
     */
    private $command_details;

    public function __construct()
    {
        $this->command_details = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDiscountValue(): ?float
    {
        return $this->discount_value;
    }

    public function setDiscountValue(float $discount_value): self
    {
        $this->discount_value = $discount_value;

        return $this;
    }

    /**
     * @return Collection|CommandDetails[]
     */
    public function getCommandDetails(): Collection
    {
        return $this->command_details;
    }

    public function addCommandDetail(CommandDetails $commandDetail): self
    {
        if (!$this->command_details->contains($commandDetail)) {
            $this->command_details[] = $commandDetail;
            $commandDetail->setDiscount($this);
        }

        return $this;
    }

    public function removeCommandDetail(CommandDetails $commandDetail): self
    {
        if ($this->command_details->contains($commandDetail)) {
            $this->command_details->removeElement($commandDetail);
            // set the owning side to null (unless already changed)
            if ($commandDetail->getDiscount() === $this) {
                $commandDetail->setDiscount(null);
            }
        }

        return $this;
    }
}
