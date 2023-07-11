<?php

namespace App\Providers;

use App\Http\Controllers\AController;
use App\Http\Controllers\BaseController;
use Illuminate\Support\ServiceProvider;

class AProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
//        $this->app->bind(AController::class, function ($app) {
        $this->app->singleton(AController::class, function ($app) {
            return new AController($app->make(BaseController::class));
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
