<?php

namespace Duke\Blink\Helpers;

use Duke\Blink\Traits\ForHelpers;

class BlinkHelperKZ
{
    use ForHelpers;

    public function clear($phone)
    {
        $phone = $this->remove_chars($phone);
        return '+7'.substr($phone, 1, 11);
    }

    public function beautify($phone, $format = '+# ### ### ## ##', $number_char = '#')
    {
        $phone = $this->remove_chars($phone);
        return $this->merge_for_beautify($phone, $format, $number_char);
    }

    public function hide($phone, $format = '+# ### XXX XX ##', $number_char = '#', $hide_char = 'X')
    {
        $phone = $this->remove_chars($phone);
        return $this->merge_for_hide($phone, $format, $number_char, $hide_char);
    }

    public function mask()
    {
        return addslashes('+7 799 999 99 99');
    }

    public function fake()
    {
        return \Faker\Provider\Base::numerify('+77#########');
    }
}