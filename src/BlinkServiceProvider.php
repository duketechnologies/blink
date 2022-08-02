<?php

namespace Duke\Blink;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class BlinkServiceProvider extends ServiceProvider
{
    public function boot()
    {
        require_once __DIR__.'/helpers.php';

        $this->publishes([
            __DIR__ . '/../config/blink.php' => config_path('blink.php'),
        ], ['blink', 'duke-blink']);
    }

    public function register()
    {
        $this->app->singleton('blink', function()
        {
            return new Blink;
        });

        Validator::extend(BlinkRule::handle(), BlinkRule::class);
    }
}