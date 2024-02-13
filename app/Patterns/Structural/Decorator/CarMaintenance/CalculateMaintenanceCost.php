<?php

namespace App\Patterns\Structural\Decorator\CarMaintenance;

class CalculateMaintenanceCost
{
    public function getCost()
    {
        return (new BatteryChange(new TechnicalControl(new basicRevision)))->getDescription();
    }
}
