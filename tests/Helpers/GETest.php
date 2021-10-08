<?php

namespace Duke\Blink\Tests\Helpers;

use Duke\Blink\BlinkServiceProvider;
use Duke\Blink\Helpers\GEHelper;
use Orchestra\Testbench\TestCase;
use Validator;

class GETest extends TestCase
{
    public $incoming = '+995 111 22 33 44';
    public $clear = '+995111223344';
    public $beautify = '+995 111 22 33 44';
    public $hide = '+995 111 XX XX 44';

    protected function getPackageProviders($app)
    {
        return [
            BlinkServiceProvider::class,
        ];
    }

    public function test_clear()
    {
        $clear = (new GEHelper())->clear($this->incoming);

        var_dump($clear);

        $this->assertEquals($this->clear, $clear);
    }

    public function test_beautify()
    {
        $beautify = (new GEHelper())->beautify($this->clear);

        var_dump($beautify);

        $this->assertEquals($this->beautify, $beautify);
    }

    public function test_hide()
    {
        $hide = (new GEHelper())->hide($this->clear);

        var_dump($hide);

        $this->assertEquals($this->hide, $hide);
    }

    public function test_mask()
    {
        $fake = (new GEHelper())->mask();

        var_dump($fake);

        $this->assertTrue(true);
    }

    public function test_fake()
    {
        $fake = (new GEHelper())->fake();

        var_dump($fake);

        $this->assertTrue(true);
    }
}
