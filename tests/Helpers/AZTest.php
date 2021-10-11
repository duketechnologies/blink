<?php

namespace Duke\Blink\Tests\Helpers;

use Duke\Blink\Facades\Blink;
use Duke\Blink\Tests\TestCase;
use Validator;

class AZTest extends TestCase
{
    public $incoming = '+994 11 222 33 44';
    public $clear = '+994112223344';
    public $beautify = '+994 11 222 33 44';
    public $hide = '+994 11 XXX XX 44';

    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('blink.country', 'AZ');
    }

    public function test_clear()
    {
        $clear = Blink::clear($this->incoming);

        var_dump($clear);

        $this->assertEquals($this->clear, $clear);
    }

    public function test_beautify()
    {
        $beautify = Blink::beautify($this->clear);

        var_dump($beautify);

        $this->assertEquals($this->beautify, $beautify);
    }

    public function test_hide()
    {
        $hide = Blink::hide($this->clear);

        var_dump($hide);

        $this->assertEquals($this->hide, $hide);
    }

    public function test_mask()
    {
        $fake = Blink::mask();

        var_dump($fake);

        $this->assertTrue(true);
    }

    public function test_fake()
    {
        $fake = Blink::fake();

        var_dump($fake);

        $this->assertTrue(true);
    }
}
