<?php

namespace Duke\Blink\Tests\Helpers;

use Duke\Blink\BlinkServiceProvider;
use Duke\Blink\Helpers\KZHelper;
use Orchestra\Testbench\TestCase;
use Validator;

class KZTest extends TestCase
{
    public $incoming = '+7 777 111 22 33';
    public $clear = '+77771112233';
    public $beautify = '+7 777 111 22 33';
    public $hide = '+7 777 XXX XX 33';

    protected function getPackageProviders($app)
    {
        return [
            BlinkServiceProvider::class,
        ];
    }

    public function test_clear()
    {
        $clear = (new KZHelper())->clear($this->incoming);

        var_dump($clear);

        $this->assertEquals($this->clear, $clear);
    }

    public function test_beautify()
    {
        $beautify = (new KZHelper())->beautify($this->clear);

        var_dump($beautify);

        $this->assertEquals($this->beautify, $beautify);
    }

    public function test_hide()
    {
        $hide = (new KZHelper())->hide($this->clear);

        var_dump($hide);

        $this->assertEquals($this->hide, $hide);
    }

    public function test_mask()
    {
        $fake = (new KZHelper())->mask();

        var_dump($fake);

        $this->assertTrue(true);
    }

    public function test_fake()
    {
        $fake = (new KZHelper())->fake();

        var_dump($fake);

        $this->assertTrue(true);
    }
}
