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

        $this->app->bind(\App\Contracts\Dvr::class, \App\Implementations\Haydonwell::class);
        // $this->app->bind(\App\Contracts\Dvr::class, \App\Implementations\Haydon::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
