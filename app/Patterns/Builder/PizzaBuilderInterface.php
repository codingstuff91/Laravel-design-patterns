<?php

namespace App\Patterns\Builder;

interface PizzaBuilderInterface
{
    public function rollDough();

    public function setToppings();

    public function bake();
}
