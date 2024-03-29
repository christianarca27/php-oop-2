<?php

require_once __DIR__ . '/Category.php';

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

    public function getImageUrl()
    {
        return $this->img;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setPrice($price)
    {
        if ($price > 0) {
            $this->price = $price;
        } else {
            throw new Exception("Prezzo inserito non valido. Inserisci un valore maggiore di 0.");
        }
    }

    public static function getClassName()
    {
        return "Altro";
    }
}
