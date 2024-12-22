<?php// src/Providers/GuardianServiceProvider.php

namespace Guardian\ExceptionTracker\Providers;

use Illuminate\Support\ServiceProvider;

class GuardianServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Register any bindings here
    }

    public function boot()
    {
        // Publish migrations and views
        $this->publishes([
            __DIR__ . '/../Database/Migrations' => database_path('migrations'),
        ], 'migrations');

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/guardian'),
        ], 'views');

        // Load the routes
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
    }

}
