<?php

namespace App\Patterns\Structural\Decorator\Drinks;

class Cappucino extends Beverage
{
    public string $description;

    public function __construct()
    {
        $this->description = "Capuccino";
    }

    public function getDescription()
    {
        return "A basic cappucino";
    }

    public function getCost()
    {
        return 2.3;
    }
}
