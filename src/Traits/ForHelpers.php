<?php

namespace Duke\Blink\Traits;

trait ForHelpers
{
    public function remove_chars($phone)
    {
        return str_replace([' ', '-', '(', ')', '+'], '', $phone);
    }

    public function merge_for_beautify($phone, $format, $number_char)
    {
        $beautify = '';
        $j = 0;

        for($i = 0;$i <= strlen($format) - 1; $i++){
            if($format[$i] == $number_char) { if (isset($phone[$j])) $beautify .= $phone[$j++]; }
            else { if (isset($format[$i])) $beautify .= $format[$i]; }
        }

        return $beautify;
    }

    public function merge_for_hide($phone, $format, $number_char, $hide_char)
    {
        $hide = '';
        $j = 0;

        for($i = 0;$i <= strlen($format) - 1; $i++){
            if($format[$i] == $number_char) { if (isset($phone[$j])) $hide .= $phone[$j++]; }
            elseif($format[$i] == $hide_char) { $hide .= $format[$i]; $j++; }
            else { if (isset($format[$i])) $hide .= $format[$i]; }
        }

        return $hide;
    }
}