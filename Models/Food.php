<?php

require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Category.php';
require_once __DIR__ . '/../Traits/Weighable.php';

class Food extends Product
{
    use Weighable;

    private $ingredients;
    private $dosage;

    function __construct(string $img, string $name, Category $category, float $price, string $description, array $ingredients, string $dosage, int $weightInGrams)
    {
        parent::__construct($img, $name, $category, $price, $description);

        $this->ingredients = $ingredients;
        $this->dosage = $dosage;

        $this->weightInGrams = $weightInGrams;
    }

    public static function getClassName()
    {
        return "Cibo";
    }
}
