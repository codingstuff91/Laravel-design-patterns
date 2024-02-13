<?php

namespace App\Patterns\Creational\Builder;

interface PizzaBuilderInterface
{
    public function rollDough();

    public function setToppings();

    public function bake();
}
