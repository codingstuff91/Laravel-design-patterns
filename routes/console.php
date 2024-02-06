<?php

use App\Patterns\Builder\MargarithaBuilder;
use App\Patterns\Builder\PizzaBuilder;
use App\Patterns\Decorator\BasicInspectionAndBatteryChange;
use App\Patterns\Decorator\BasicRevisionAndTechnicalControl;
use App\Patterns\Decorator\CarMaintenance\CalculateMaintenanceCost;
use App\Patterns\Decorator\Drinks\StarboucCoffee;
use App\Patterns\Decorator\RevisionCalculator;
use App\Patterns\FactoryAndStrategy\RegisterFactory;
use App\Patterns\Manager\PizzaManager;
use App\Patterns\Manager\SushiDeliveryManager;
use App\Patterns\Strategy\App;
use App\Patterns\TemplateMethod\BigMac;
use Illuminate\Support\Facades\Artisan;

Artisan::command('decorator', function () {
//    $totalCost = (new CalculateMaintenanceCost())->getCost();
//
//    dd($totalCost);

    dd(StarboucCoffee::calculateOrderCost());
});

Artisan::command('strategy', function () {
    $result = (new App())->log();

    dd($result);
});

Artisan::command('factory', function () {
    $strategy = RegisterFactory::create('game_master');

    echo $strategy->handle();
});

Artisan::command('template', function () {
    $burger = (new BigMac())->prepare();

//    $burger = (new VeggieBigMac())->prepare();
});

Artisan::command('builder', function () {
    $pizza = (new PizzaBuilder)->make(new MargarithaBuilder());
});

Artisan::command('manager', function () {
//    app(ExchangeRatesManager::class)
//        ->driver('open-exchange-rates')
//        ->exchangeRate(
//        from: 'GBP',
//        to: 'USD',
//    );

    echo app(SushiDeliveryManager::class)->deliver();
});

