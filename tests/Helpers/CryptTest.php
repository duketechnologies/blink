<?php

namespace Duke\Blink\Tests\Helpers;

use Duke\Blink\Facades\Blink;
use Duke\Blink\BlinkServiceProvider;
use Duke\Blink\Helpers\KZHelper;
use Orchestra\Testbench\TestCase;
use Validator;

class CryptTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            BlinkServiceProvider::class,
        ];
    }

    public function testEncrypt()
    {
        $encrypt = blink()->encrypt('test');

        $this->assertNotEquals('test', $encrypt);
    }

    public function testDecrypt()
    {
        $encrypt = blink()->encrypt('test');
        $decrypt = blink()->decrypt($encrypt);

        $this->assertEquals('test', $decrypt);
    }
}
