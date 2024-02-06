<?php

namespace App\Patterns\Decorator\Drinks;

abstract class Beverage
{
    public abstract function getDescription();
    public abstract function getCost();
}
