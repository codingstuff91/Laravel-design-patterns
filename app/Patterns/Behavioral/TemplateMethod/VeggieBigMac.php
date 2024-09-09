<?php

namespace App\Patterns\Behavioral\TemplateMethod;

class VeggieBigMac extends Burger
{
    public function addPrimaryTopping()
    {
        var_dump('Adding a veggie slice');

        return $this;
    }
}
