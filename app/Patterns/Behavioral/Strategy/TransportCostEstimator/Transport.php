<?php

namespace App\Patterns\Behavioral\Strategy\TransportCostEstimator;

class Transport
{
    public function __construct(private CalculationStrategy $calculation)
    {
        //
    }

    public function calculateCost()
    {
        $distanceToAirport = $this->calculateTravelDistanceFromAirport();

        return "cout du trajet : " . $this->calculation->travelCost($distanceToAirport) . " euros";
    }

    private function calculateTravelDistanceFromAirport()
    {
        return 25;
    }
}
