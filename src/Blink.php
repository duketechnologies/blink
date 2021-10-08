<?php

namespace Duke\Blink;

use Duke\Blink\Traits\Parses;
use Illuminate\Support\Str;

class Blink
{
    use Parses;

    public function clear($args)
    {
        return $this->call_function('clear', [$args]);
    }

    public function beautify(...$args)
    {
        return $this->call_function('beautify', $args);
    }

    public function hide(...$args)
    {
        return $this->call_function('hide', $args);
    }

    public function mask()
    {
        return $this->call_function('mask', []);
    }

    public function fake()
    {
        return $this->call_function('fake', []);
    }

    public function encrypt($value)
    {
        return openssl_encrypt($value, 'AES-128-CTR', $this->parseEncryptKey(), 0, '1234567891011121');
    }

    public function decrypt($value)
    {
        return openssl_decrypt($value, 'AES-128-CTR', $this->parseEncryptKey(), 0, '1234567891011121');
    }

    public function call_function($method, $args)
    {
        $classname = '\\Duke\\Blink\\Helpers\\' . self::parseCountries() . 'Helper';

        try {
            return call_user_func([(new $classname), $method], ...$args);
        } catch (\Exception $e) {
            throw new $e('Class or method not found');
        }
    }
}