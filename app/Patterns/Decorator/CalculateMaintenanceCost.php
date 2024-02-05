<?php

namespace App\Patterns\Decorator;

class CalculateMaintenanceCost
{
    public function getCost()
    {
        return (new BatteryChange(new TechnicalControl(new basicRevision)))->getDescription();
    }
}
