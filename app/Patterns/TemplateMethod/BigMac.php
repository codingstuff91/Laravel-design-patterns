<?php

namespace App\Patterns\TemplateMethod;

class BigMac extends Burger
{
    public function prepare()
    {
        return $this
            ->bakeBuns()
            ->addSauce()
            ->addPrimaryTopping()
            ->addCheese();
    }

    public function addPrimaryTopping()
    {
        var_dump('A big slice of beef meet');

        return $this;
    }
}
