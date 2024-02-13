<?php

namespace App\Patterns\Creational\Builder;

class Pizza
{
    public array $ingredients;

    public function setIngredients(array $ingredients): void
    {
        $this->ingredients = $ingredients;
    }
}
