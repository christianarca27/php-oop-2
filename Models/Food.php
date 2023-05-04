<?php

class Food extends Product
{
    private $quantity;
    private $ingredients;
    private $dosage;

    function __construct(string $img, string $name, Category $category, float $price, string $description, string $quantity, array $ingredients, string $dosage)
    {
        parent::__construct($img, $name, $category, $price, $description);

        $this->quantity = $quantity;
        $this->ingredients = $ingredients;
        $this->dosage = $dosage;
    }

    public static function getClassName()
    {
        return "Cibo";
    }
}
