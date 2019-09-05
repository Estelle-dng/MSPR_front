<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\OptionRepository")
 * @ORM\Table(name="`Option`")
 */
class Option
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
     * @ORM\OneToMany(targetEntity="App\Entity\CommandDetailsHasOption", mappedBy="Options")
     */
    private $Option_CommandDetails_has_option;

    /**
     * @ORM\Column(type="float")
     */
    private $price;

    public function __construct()
    {
        $this->Option_CommandDetails_has_option = new ArrayCollection();
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

    /**
     * @return Collection|CommandDetailsHasOption[]
     */
    public function getOptionCommandDetailsHasOption(): Collection
    {
        return $this->Option_CommandDetails_has_option;
    }

    public function addOptionCommandDetailsHasOption(CommandDetailsHasOption $optionCommandDetailsHasOption): self
    {
        if (!$this->Option_CommandDetails_has_option->contains($optionCommandDetailsHasOption)) {
            $this->Option_CommandDetails_has_option[] = $optionCommandDetailsHasOption;
            $optionCommandDetailsHasOption->setOptions($this);
        }

        return $this;
    }

    public function removeOptionCommandDetailsHasOption(CommandDetailsHasOption $optionCommandDetailsHasOption): self
    {
        if ($this->Option_CommandDetails_has_option->contains($optionCommandDetailsHasOption)) {
            $this->Option_CommandDetails_has_option->removeElement($optionCommandDetailsHasOption);
            // set the owning side to null (unless already changed)
            if ($optionCommandDetailsHasOption->getOptions() === $this) {
                $optionCommandDetailsHasOption->setOptions(null);
            }
        }

        return $this;
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
}
