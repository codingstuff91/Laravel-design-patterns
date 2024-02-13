<?php

namespace App\Patterns\Behavioral\Strategy\TransportCostEstimator;

class TransportCostEstimator
{
    public function calculateCost(Estimable $estimable)
    {
        $distanceToAirport = $this->calculateTravelDistanceFromAirport();

        return "cout du trajet : " . $estimable->travelCost($distanceToAirport) . " euros";
    }

    private function calculateTravelDistanceFromAirport()
    {
        return 25;
    }
}
