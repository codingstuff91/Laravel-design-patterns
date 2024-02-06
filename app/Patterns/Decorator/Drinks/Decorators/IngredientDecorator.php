<?php

namespace App\Patterns\Decorator\Drinks\Decorators;

use App\Patterns\Decorator\Drinks\Beverage;

abstract class IngredientDecorator extends Beverage
{
    public abstract function getDescription();
}
