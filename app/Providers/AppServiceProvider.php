<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app
        ->when(\App\Http\Controllers\Test1Controller::class)
        ->needs('$timezone')
        ->give('American/New_york');

        $this->app
        ->when(\App\Http\Controllers\Test2Controller::class)
        ->needs('$timezone')
        ->give('American/Chicago');
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
