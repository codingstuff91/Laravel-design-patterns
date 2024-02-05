<?php

namespace App\Patterns\Builder;

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
