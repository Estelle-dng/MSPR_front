<?php


namespace App\Entity;


class CategorySearch
{

    /**
     * @var int|null
     */
   private $minCapacity;

   /**
    * @var string|null
    */
    private $Name;

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->Name;
    }

    /**
     * @param string|null $Name
     * @return CategorySearch
     */
    public function setName(?string $Name): CategorySearch
    {
        $this->Name = $Name;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getMinCapacity(): ?int
    {
        return $this->minCapacity;
    }

    /**
     * @param int|null $minCapacity
     * @return CategorySearch
     */
    public function setMinCapacity(?int $minCapacity): CategorySearch
    {
        $this->minCapacity = $minCapacity;
        return $this;
    }



}