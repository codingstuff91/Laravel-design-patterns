<?php

namespace App\Patterns\Creational\Manager;

class BikeDriver implements SushiDeliveryInterface
{
    public function deliver(): string
    {
        return "Sushi delivering with a bike";
    }
}
