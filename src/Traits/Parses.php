<?php

namespace Duke\Blink\Traits;

trait Parses
{
    static $available_countries = ['KZ', 'BY', 'GE', 'AZ', 'UZ', 'AM'];

    public static function parseCountries()
    {
        $country_from_settings = config('blink.country') ? config('blink.country') : (env('BLINK_COUNTRY') ? env('BLINK_COUNTRY') : 'KZ');

        if (in_array($country_from_settings, self::$available_countries))
            return $country_from_settings;
        else
            throw new \Exception('The selected country is not available');
    }

    public function parseEncryptKey()
    {
        return config('blink.encrypt_key') ? config('blink.encrypt_key') : (env('BLINK_ENCRYPT_KEY') ? env('BLINK_ENCRYPT_KEY') : 'M,yHKZW#"A3$NrRv');
    }
}
