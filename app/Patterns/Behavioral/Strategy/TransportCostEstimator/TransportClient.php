<?php

namespace App\Patterns\Behavioral\Strategy\TransportCostEstimator;

class TransportClient
{
    public function calculateCost()
    {
        $transport = new Transport(new Bus());

        return $transport->defineCost();
    }
}
