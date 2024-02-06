<?php

namespace App\Patterns\Decorator\Drinks\Decorators;

class Caramel extends IngredientDecorator
{
    public function getDescription()
    {
        return "Caramel";
    }

    public function getCost()
    {
        return 0.5;
    }
}
