<?php

namespace Duke\Blink\Tests\Helpers;

use Duke\Blink\Facades\Blink;
use Duke\Blink\Tests\TestCase;
use Validator;

class CryptTest extends TestCase
{
    public function testEncrypt()
    {
        $encrypt = Blink::encrypt('test');

        $this->assertNotEquals('test', $encrypt);
    }

    public function testDecrypt()
    {
        $encrypt = Blink::encrypt('test');
        $decrypt = Blink::decrypt($encrypt);

        $this->assertEquals('test', $decrypt);
    }
}
