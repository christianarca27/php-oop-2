<?php

class Category
{
    private $name;
    private $icon;

    function __construct(string $name, string $icon)
    {
        $this->name = $name;
        $this->icon = $icon;
    }

    public function getIcon()
    {
        return $this->icon;
    }
}
