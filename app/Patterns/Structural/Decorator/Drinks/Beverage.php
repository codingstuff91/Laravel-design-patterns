<?php

namespace App\Patterns\Structural\Decorator\Drinks;

abstract class Beverage
{
    public abstract function getDescription();
    public abstract function getCost();
}
