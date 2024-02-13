<?php

namespace App\Patterns\Behavioral\TemplateMethod;

abstract class Burger
{
    public function prepare()
    {
        return $this
            ->bakeBuns()
            ->addSauce()
            ->addPrimaryTopping()
            ->addCheese();
    }

    protected function bakeBuns() {
        var_dump('Baking the buns');

        return $this;
    }

    protected function addSauce() {
        var_dump('Adding the secret sauce');

        return $this;
    }

    abstract public function addPrimaryTopping();

    protected function addCheese() {
        var_dump('Adding slice of cheese');

        return $this;
    }
}
