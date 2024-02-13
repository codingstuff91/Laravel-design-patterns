<?php

namespace App\Patterns\Structural\Decorator\CarMaintenance;

class BasicRevision implements CarService
{
    public function getCost()
    {
        return 25;
    }

    public function getDescription()
    {
        return 'Classic vehicle revision';
    }
}
