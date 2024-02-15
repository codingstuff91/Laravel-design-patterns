<?php

namespace App\Patterns\Behavioral\Strategy\TransportCostEstimator;

class Bus implements Transportable
{
    private const BUS_TICKET_PRICE = 3;
    public function getCost(int $distance)
    {
        return self::BUS_TICKET_PRICE;
    }
}
