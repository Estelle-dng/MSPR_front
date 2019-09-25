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
    private $name;

    /**
     * @return string|null
     */
    public function getname(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $Name
     * @return CategorySearch
     */
    public function setname(?string $name): CategorySearch
    {
        $this->name = $name;
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