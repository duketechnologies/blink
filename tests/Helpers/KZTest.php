<?php

namespace Duke\Blink\Tests\Helpers;

use Duke\Blink\Facades\Blink;
use Duke\Blink\Tests\TestCase;
use Validator;

class KZTest extends TestCase
{
    public $incoming = '+7 777 111 22 33';
    public $clear = '+77771112233';
    public $beautify = '+7 777 111 22 33';
    public $hide = '+7 777 XXX XX 33';

    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('blink.country', 'KZ');
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
