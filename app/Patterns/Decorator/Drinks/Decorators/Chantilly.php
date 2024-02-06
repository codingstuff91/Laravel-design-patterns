<?php

namespace App\Patterns\Decorator\Drinks\Decorators;

use App\Patterns\Decorator\Drinks\Beverage;

class Chantilly extends IngredientDecorator
{
    public Beverage $beverage;

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function getDescription()
    {
        return $this->beverage->getDescription() . ' and some chantilly cream';
    }

    public function getCost()
    {
        return $this->beverage->getCost() + 1;
    }
}
