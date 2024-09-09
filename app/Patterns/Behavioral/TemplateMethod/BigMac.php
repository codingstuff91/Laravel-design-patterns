<?php

namespace App\Patterns\Behavioral\TemplateMethod;

class BigMac extends Burger
{
    public function addPrimaryTopping(): self
    {
        var_dump('A big slice of beef meet');

        return $this;
    }
}
