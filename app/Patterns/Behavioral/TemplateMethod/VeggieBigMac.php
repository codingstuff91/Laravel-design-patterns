<?php

namespace App\Patterns\Behavioral\TemplateMethod;

class VeggieBigMac extends Burger
{
    public function addPrimaryTopping(): self
    {
        var_dump('Ajout de galette de soja');

        return $this;
    }
}
