<?php

namespace App\Patterns\Structural\Decorator\Drinks\Decorators;

use App\Patterns\Structural\Decorator\Drinks\Beverage;

abstract class IngredientDecorator extends Beverage
{
    public abstract function getDescription();
}
