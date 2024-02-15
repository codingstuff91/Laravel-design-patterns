<?php

use App\Patterns\Behavioral\Strategy\Logger\App;
use App\Patterns\Behavioral\Strategy\Logger\LogToDatabase;
use App\Patterns\Behavioral\Strategy\Logger\LogToFile;
use App\Patterns\Behavioral\Strategy\TransportCostEstimator\Bus;
use App\Patterns\Behavioral\Strategy\TransportCostEstimator\Transport;
use App\Patterns\Behavioral\TemplateMethod\BigMac;
use App\Patterns\Creational\Builder\MargarithaBuilder;
use App\Patterns\Creational\Builder\PizzaBuilder;
use App\Patterns\Creational\FactoryAndStrategy\RegisterFactory;
use App\Patterns\Creational\Manager\SushiDeliveryManager;
use App\Patterns\Decorator\BasicInspectionAndBatteryChange;
use App\Patterns\Decorator\BasicRevisionAndTechnicalControl;
use App\Patterns\Decorator\RevisionCalculator;
use App\Patterns\Manager\PizzaManager;
use Illuminate\Support\Facades\Artisan;

Artisan::command('decorator', function () {
    /**
     * Example with Car maintenance product
     */
//    echo (new CalculateMaintenanceCost())->getCost();

    /**
     * Example with beverages products
     */
//    echo (new StarboucCoffee)->calculateOrderCost();
});

Artisan::command('strategy', function () {
//    $logStrategy = new App( new logTofile() );
//    $result = $logStrategy->log();
//
//    dd($result);

    $transport = new transport(new Bus());
    $calculateTravelCost = $transport->defineCost();

    dd($calculateTravelCost);
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

