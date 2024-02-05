<?php

namespace App\Providers;

use App\Patterns\Manager\ExchangeRatesManager;
use App\Patterns\Manager\SushiDeliveryManager;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(
            abstract: ExchangeRatesManager::class,
            concrete: fn (Application $app) => new ExchangeRatesManager($app),
        );

        $this->app->singleton(
            abstract: SushiDeliveryManager::class,
            concrete: fn (Application $app) => new SushiDeliveryManager($app),
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
