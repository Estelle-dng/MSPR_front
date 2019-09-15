<?php
namespace App\Entity;

class CategorySearch{

    /**
     * @var int|null
     */
    private $minCapacity; /* Je documente ces propriétés pour aider l'IDE et à la relecture du code */
                          /* Si je ne rentre pas de valeur ça sera considéré comme null */
    /**
     * @var string|null
     */
    private $category;

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
    public function setMinCapacity(int $minCapacity): CategorySearch
    {
        $this->minCapacity = $minCapacity;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCategory(): ?string
    {
        return $this->category;
    }

    /**
     * @param string|null $category
     * @return CategorySearch
     */
    public function setCategory(string $category): CategorySearch
    {
        $this->category = $category;
        return $this;
    }


}