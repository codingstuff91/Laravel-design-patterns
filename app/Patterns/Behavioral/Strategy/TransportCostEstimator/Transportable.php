<?php

namespace App\Patterns\Behavioral\Strategy\TransportCostEstimator;

interface Transportable
{
    public function getCost(int $distance): int;
}
