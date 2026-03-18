<?php

namespace Teqnogen\Units;

use Illuminate\Support\ServiceProvider;

class UnitServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(UnitConverter::class);
    }

    public function boot()
    {
        // Load migrations from package
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        // Optional: publish migrations
        $this->publishes([
            __DIR__.'/../database/migrations' => database_path('migrations')
        ], 'unit-migrations');
    }
}