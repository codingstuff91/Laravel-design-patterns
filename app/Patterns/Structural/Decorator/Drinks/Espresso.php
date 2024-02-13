<?php

namespace App\Patterns\Structural\Decorator\Drinks;

class Espresso extends Beverage
{
    public string $description;

    public function __construct()
    {
        $this->description = "Espresso";
    }

    public function getCost()
    {
        return 1.99;
    }

    public function getDescription()
    {
        return "A basic espresso";
    }
}
