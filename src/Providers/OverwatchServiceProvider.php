<?php

namespace JarrettAndLam\Overwatch\Providers;

use Illuminate\Support\ServiceProvider;
use JarrettAndLam\Overwatch\Overwatch;

class OverwatchServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(Overwatch::class, function () {
            return new Overwatch;
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
