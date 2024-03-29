<?php

namespace Duke\Blink\Helpers;

use Duke\Blink\Traits\ForHelpers;

class BlinkHelperAM
{
    use ForHelpers;

    public function clear($phone)
    {
        $phone = $this->remove_chars($phone);
        return '+374'.substr($phone, 3, 8);
    }

    public function beautify($phone, $format = '+### ## ## ## ##', $number_char = '#')
    {
        $phone = $this->remove_chars($phone);
        return $this->merge_for_beautify($phone, $format, $number_char);
    }

    public function hide($phone, $format = '+### ## XX XX ##', $number_char = '#', $hide_char = 'X')
    {
        $phone = $this->remove_chars($phone);
        return $this->merge_for_hide($phone, $format, $number_char, $hide_char);
    }

    public function mask()
    {
        return addslashes('+374 99 99 99 99');
    }

    public function fake()
    {
        return \Faker\Provider\Base::numerify('+374########');
    }
}