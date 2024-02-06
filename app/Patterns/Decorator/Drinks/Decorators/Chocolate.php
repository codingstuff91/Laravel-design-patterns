<?php

namespace App\Patterns\Decorator\Drinks\Decorators;

use App\Patterns\Decorator\Drinks\Beverage;

class Chocolate extends IngredientDecorator
{
    public Beverage $beverage;

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function getDescription()
    {
        return $this->beverage->getDescription() . ' and some Chocolate';
    }

    public function getCost()
    {
        return 0.5 + $this->beverage->getCost();
    }
}
