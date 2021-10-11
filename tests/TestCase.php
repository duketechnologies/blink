<?php

namespace Duke\Blink\Tests;

use Duke\Blink\BlinkServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

class TestCase extends OrchestraTestCase
{
    protected function getPackageProviders($app)
    {
        return [
            BlinkServiceProvider::class,
        ];
    }
}
