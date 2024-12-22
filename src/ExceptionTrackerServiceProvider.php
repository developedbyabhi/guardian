<?php

namespace Guardian\ExceptionTracker;

use Illuminate\Support\ServiceProvider;

class ExceptionTrackerServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/config/guardian.php', 'guardian');
    }

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'guardian');
        $this->publishes([
            __DIR__ . '/config/guardian.php' => config_path('guardian.php'),
            __DIR__ . '/database/migrations/' => database_path('migrations'),
        ], 'guardian');
    }
}