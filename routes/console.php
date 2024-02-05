<?php

use App\Patterns\Builder\MargarithaBuilder;
use App\Patterns\Builder\PizzaBuilder;
use App\Patterns\Decorator\BasicInspectionAndBatteryChange;
use App\Patterns\Decorator\BasicRevisionAndTechnicalControl;
use App\Patterns\Decorator\CalculateMaintenanceCost;
use App\Patterns\Decorator\RevisionCalculator;
use App\Patterns\FactoryAndStrategy\RegisterFactory;
use App\Patterns\Manager\PizzaManager;
use App\Patterns\Manager\ExchangeRatesManager;
use App\Patterns\Manager\SushiDeliveryManager;
use App\Patterns\Strategy\App;
use App\Patterns\Strategy\LogToDatabase;
use App\Patterns\Strategy\LogToFile;
use App\Patterns\TemplateMethod\BigMac;
use App\Patterns\TemplateMethod\Burger;
use App\Patterns\TemplateMethod\VeggieBigMac;
use Illuminate\Support\Facades\Artisan;

Artisan::command('decorator', function () {
    $totalCost = (new CalculateMaintenanceCost())->getCost();

    dd($totalCost);
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
    /**
     * Another example of manager and driver
     * @see https://www.honeybadger.io/blog/laravel-manager-pattern/
     */
//    app(ExchangeRatesManager::class)
//        ->driver('open-exchange-rates')
//        ->exchangeRate(
//        from: 'GBP',
//        to: 'USD',
//    );

    echo app(SushiDeliveryManager::class)->deliver();
});

