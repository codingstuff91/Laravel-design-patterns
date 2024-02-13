<?php

namespace App\Patterns\Creational\Builder;

class PizzaBuilder
{
    public function make(PizzaBuilderInterface $pizza): Pizza
    {
        return $pizza
            ->rollDough()
            ->setToppings()
            ->bake();
    }
}
