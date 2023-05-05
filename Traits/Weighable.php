<?php

trait Weighable
{
    protected $weightInGrams;

    public function getWeightInGrams()
    {
        return $this->weightInGrams;
    }

    public function getWeightInKg()
    {
        return $this->weightInGrams / 1000.0;
    }
}
