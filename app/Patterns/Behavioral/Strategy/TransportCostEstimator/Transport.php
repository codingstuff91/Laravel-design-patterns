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
        $distanceToAirport = $this->calculateTravelDistanceFromAirport();

        return "cout du trajet : " . $this->transport->getCost($distanceToAirport) . " euros";
    }

    private function calculateTravelDistanceFromAirport()
    {
        return 25;
    }
}
