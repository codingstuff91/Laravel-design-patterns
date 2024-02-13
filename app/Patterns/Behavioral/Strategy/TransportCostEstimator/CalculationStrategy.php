<?php

namespace App\Patterns\Behavioral\Strategy\TransportCostEstimator;

interface CalculationStrategy
{
    public function travelCost(int $distance);
}
