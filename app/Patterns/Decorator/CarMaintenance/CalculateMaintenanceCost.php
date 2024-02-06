<?php

namespace App\Patterns\Decorator\CarMaintenance;

class CalculateMaintenanceCost
{
    public function getCost()
    {
        return (new BatteryChange(new TechnicalControl(new basicRevision)))->getDescription();
    }
}
