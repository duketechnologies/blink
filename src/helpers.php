<?php

if (! function_exists('blink')) {
    /**
     * @method string clear(string $phone)
     * @method string beautify(string $phone, string $format = '+# ### ### ## ##', string $number_char = '#')
     * @method string hide(string $phone, string $format = '+# ### XXX XX ##', string $number_char = '#', string $hide_char = 'X')
     * @method string mask()
     * @method string fake()
     * @method string encrypt(string $value)
     * @method string decrypt(string $value)
     *
     * @return \Duke\Blink\Blink|\Duke\Blink\Facades\Blink
     */
    function blink() {
        return app('blink');
    }
}