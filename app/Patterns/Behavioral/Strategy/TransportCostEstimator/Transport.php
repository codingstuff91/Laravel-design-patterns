<?php

namespace App\Patterns\Behavioral\Strategy\TransportCostEstimator;

class Transport
{
    public function __construct(private Transportable $transport)
    {
        //
    }

    public function defineCost()
    {
        return "cout du trajet : " . $this->transport->getCost(25) . " euros";
    }
}
