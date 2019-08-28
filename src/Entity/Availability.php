<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AvailabilityRepository")
 */
class Availability
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
    private $start_date;

    /**
     * @ORM\Column(type="date")
     */
    private $end_date;

    /**
     * @ORM\Column(type="smallint")
     */
    private $season;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Spot", inversedBy="availabilities")
     */
    private $spots;


    /**
     * @ORM\Column(name="createdAt", type="datetime", nullable=false)
     */
    protected $createdAt;

    /**
     * @ORM\Column(name="editAt", type="datetime", nullable=false)
     */
    protected $editAt;

    /**
     * @ORM\PrePersist
     * @ORM\PreUpdate
     */
    public function autoUpdateDate() {
        $this->editAt = new \DateTime();
    }

    public function __construct() {
        $this->createdAt = new \DateTime();
        $this->editAt = new \DateTime();
        $this->spots = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->start_date;
    }

    public function setStartDate(\DateTimeInterface $start_date): self
    {
        $this->start_date = $start_date;

        return $this;
    }

    public function getEndDate(): ?\DateTimeInterface
    {
        return $this->end_date;
    }

    public function setEndDate(\DateTimeInterface $end_date): self
    {
        $this->end_date = $end_date;

        return $this;
    }

    public function getSeason(): ?int
    {
        return $this->season;
    }

    public function setSeason(int $season): self
    {
        $this->season = $season;

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
        }

        return $this;
    }

    public function removeSpot(Spot $spot): self
    {
        if ($this->spots->contains($spot)) {
            $this->spots->removeElement($spot);
        }

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param mixed $createdAt
     * @return Availability
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEditAt()
    {
        return $this->editAt;
    }

    /**
     * @param mixed $editAt
     * @return Availability
     */
    public function setEditAt($editAt)
    {
        $this->editAt = $editAt;
        return $this;
    }


}
