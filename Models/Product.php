<?php

class Product
{
    private $img;
    private $name;
    private $category;
    private $price;
    private $description;

    function __construct(string $img, string $name, Category $category, float $price, string $description)
    {
        $this->img = $img;
        $this->name = $name;
        $this->category = $category;
        $this->price = $price;
        $this->description = $description;
    }
}
