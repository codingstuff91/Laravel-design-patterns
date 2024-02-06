<?php

namespace App\Patterns\Decorator\Drinks;

use App\Patterns\Decorator\Drinks\Decorators\Chantilly;
use App\Patterns\Decorator\Drinks\Decorators\Chocolate;

class StarboucCoffee
{
    public function calculateOrderCost()
    {
        $beverage = new Cappucino();
        $supplement = new Chocolate($beverage);
        $supplement2 = new Chocolate($supplement);
        $supplement3 = new Chantilly($supplement2);

        return $supplement3->getDescription() . " for " . $supplement3->getCost() . " euros";
    }
}
