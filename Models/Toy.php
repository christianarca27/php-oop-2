<?php

require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Category.php';
require_once __DIR__ . '/../Traits/Weighable.php';

class Toy extends Product
{
    use Weighable;

    private $size;

    function __construct(string $img, string $name, Category $category, float $price, string $description, string $size, int $weightInGrams)
    {
        parent::__construct($img, $name, $category, $price, $description);

        $this->size = $size;

        $this->weightInGrams = $weightInGrams;
    }

    public static function getClassName()
    {
        return "Giochi";
    }
}
