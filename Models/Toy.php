<?php

class Toy extends Product
{
    private $size;

    function __construct(string $img, string $name, Category $category, float $price, string $description, string $size)
    {
        parent::__construct($img, $name, $category, $price, $description);

        $this->size = $size;
    }
}
