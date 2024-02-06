<?php

namespace App\Patterns\Decorator\CarMaintenance;

class BatteryChange implements CarService
{
    private $carService;

    public function __construct(CarService $carService)
    {
        $this->carService = $carService;
    }

    public function getCost()
    {
        return 40;
    }

    public function getDescription()
    {
        return $this->carService->getDescription() . ' and a battery change';
    }
}
