<?php

namespace Duke\Blink;

use Illuminate\Support\ServiceProvider;

class BlinkServiceProvider extends ServiceProvider
{
    public function boot()
    {
        require_once __DIR__.'/helpers.php';

        $this->commands([Commands\BlinkConfigCommand::class]);
    }

    public function register()
    {
        $this->app->singleton('blink', function()
        {
            return new Blink;
        });
    }

    public function provides()
    {
        return [Commands\BlinkConfigCommand::class];
    }
}