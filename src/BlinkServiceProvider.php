<?php

namespace Duke\Blink;

use Illuminate\Support\ServiceProvider;

class BlinkServiceProvider extends ServiceProvider
{
    public function boot()
    {
        require_once __DIR__.'/helpers.php';

        $this->publishes([
            __DIR__ . '/../config/blink.php' => config_path('blink.php'),
        ]);
    }

    public function register()
    {
        $this->app->singleton('blink', function()
        {
            return new Blink;
        });
    }
}