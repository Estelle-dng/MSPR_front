<?php
// src/Entity/User.php

namespace App\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $address;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $newsletter;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $city;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $country;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $postal_code;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $phone;

    /**
     * @ORM\Column(type="date")
     */
    private $birthdate;

    /**
     * @ORM\OneToMany(targetEntity="faq", mappedBy="user")
     */
    private $faqs;

    /**
     * @ORM\OneToMany(targetEntity="slider", mappedBy="user")
     */
    private $sliders;

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

    public function __construct()
    {
        parent::__construct();
        $this->createdAt = new \DateTime();
        $this->editAt = new \DateTime();
    }

    /**
     * @return mixed
     */
    public function getNewsletter() {
        return $this->newsletter;
    }

    /**
     * @param mixed $newsletter
     */
    public function setNewsletter($newsletter) {
        $this->newsletter = $newsletter;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address): void
    {
        $this->address = $address;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(string $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getPostalCode(): ?string
    {
        return $this->postal_code;
    }

    public function setPostalCode(string $postal_code): self
    {
        $this->postal_code = $postal_code;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getBirthdate(): ?\DateTimeInterface
    {
        return $this->birthdate;
    }

    public function setBirthdate(\DateTimeInterface $birthdate): self
    {
        $this->birthdate = $birthdate;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFaqs()
    {
        return $this->faqs;
    }

    /**
     * @return mixed
     */
    public function getSliders()
    {
        return $this->sliders;
    }
}