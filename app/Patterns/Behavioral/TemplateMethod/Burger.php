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

    protected function bakeBuns(): self {
        var_dump('Baking the buns');

        return $this;
    }

    protected function addSauce(): self {
        var_dump('Adding the secret sauce');

        return $this;
    }

    abstract public function addPrimaryTopping(): self;

    protected function addCheese(): self{
        var_dump('Adding slice of cheese');

        return $this;
    }
}
