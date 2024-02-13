<?php

namespace App\Patterns\Behavioral\Strategy\TransportCostEstimator;

class Bus implements Estimable
{
    private const BUS_TICKET_PRICE = 3;
    public function travelCost(int $distance)
    {
        return self::BUS_TICKET_PRICE;
    }
}
