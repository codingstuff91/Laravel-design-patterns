<?php

namespace App\Patterns\Decorator\Drinks\Decorators;

class Milk extends IngredientDecorator
{
    public function getDescription()
    {
        return "Milk";
    }

    public function getCost()
    {
        return 1;
    }
}
