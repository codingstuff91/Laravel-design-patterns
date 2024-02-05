<?php

namespace App\Patterns\Manager;

class CarDriver implements SushiDeliveryInterface
{
    public function deliver(): string
    {
        return "Deliver the sushi order with a car";
    }
}
