<?php

namespace App\Patterns\Structural\Decorator\CarMaintenance;

class TechnicalControl implements CarService
{
    private $carService;

    public function __construct(CarService $carService)
    {
        $this->carService = $carService;
    }

    public function getCost()
    {
        return 70 + $this->carService->getCost();
    }

    public function getDescription()
    {
        return $this->carService->getDescription() . ' and a technical revision';
    }
}
