<?php

namespace App\Patterns\Behavioral\Strategy\TransportCostEstimator;

use Exception;

class TransportCalculator
{
    public function getCost(string $type, int $distance): int
    {
        if ($type === 'taxi') {
            return $distance * 2;
        }

        if ($type === 'bus') {
            return 3;
        }

        if ($type === 'bike') {
            return 0;
        }

        Throw new Exception('invalid transport type');
    }
}
