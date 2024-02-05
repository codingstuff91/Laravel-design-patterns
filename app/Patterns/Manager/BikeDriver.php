<?php

namespace App\Patterns\Manager;

class BikeDriver implements SushiDeliveryInterface
{
    public function deliver(): string
    {
        return "Sushi delivering with a bike";
    }
}
