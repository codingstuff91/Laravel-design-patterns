<?php

namespace App\Patterns\TemplateMethod;

class VeggieBigMac extends Burger
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
        var_dump('Adding a veggie slice');

        return $this;
    }
}
