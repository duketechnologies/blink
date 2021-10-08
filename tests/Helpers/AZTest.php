<?php

namespace Duke\Blink\Tests\Helpers;

use Duke\Blink\BlinkServiceProvider;
use Duke\Blink\Helpers\AZHelper;
use Orchestra\Testbench\TestCase;
use Validator;

class AZTest extends TestCase
{
    public $incoming = '+994 11 222 33 44';
    public $clear = '+994112223344';
    public $beautify = '+994 11 222 33 44';
    public $hide = '+994 11 XXX XX 44';

    protected function AZtPackaAZProviders($app)
    {
        return [
            BlinkServiceProvider::class,
        ];
    }

    public function test_clear()
    {
        $clear = (new AZHelper())->clear($this->incoming);

        var_dump($clear);

        $this->assertEquals($this->clear, $clear);
    }

    public function test_beautify()
    {
        $beautify = (new AZHelper())->beautify($this->clear);

        var_dump($beautify);

        $this->assertEquals($this->beautify, $beautify);
    }

    public function test_hide()
    {
        $hide = (new AZHelper())->hide($this->clear);

        var_dump($hide);

        $this->assertEquals($this->hide, $hide);
    }

    public function test_mask()
    {
        $fake = (new AZHelper())->mask();

        var_dump($fake);

        $this->assertTrue(true);
    }

    public function test_fake()
    {
        $fake = (new AZHelper())->fake();

        var_dump($fake);

        $this->assertTrue(true);
    }
}
