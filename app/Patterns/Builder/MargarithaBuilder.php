<?php

namespace App\Patterns\Builder;

class MargarithaBuilder implements PizzaBuilderInterface
{
    protected $pizza;
    public function rollDough(): self
    {
        $this->pizza = new Pizza();

        var_dump('Rolling a circular dough like an italian');
        return $this;
    }

    public function setToppings(): self
    {
        var_dump('Add the pizza specific ingredients');

        $this->pizza->setIngredients(['Tomato', 'Mozzarella', 'Basil']);

        return $this;
    }

    public function bake(): Pizza
    {
        var_dump('Bake pizza at 220°c');

        return $this->pizza;
    }
}
