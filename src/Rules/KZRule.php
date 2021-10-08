<?php

namespace Duke\Blink\Rules;

use Illuminate\Contracts\Validation\Rule;

class KZRule implements Rule
{
    public function passes($attribute, $value)
    {
        if(preg_match_all('/^(\+7|7|8)?[\s\-]?\(?7[0-9]{2}\)?[\s\-]?[0-9]{3}[\s\-]?[0-9]{2}[\s\-]?[0-9]{2}$/', $value)) {
            $phone = str_replace([' ', '-', '(', ')', '+'], '', $value);
            if(strlen($phone) == 11) {
                $acceptedCodes = [
                    700,
                    701,
                    702,
                    705,
                    706,
                    707,
                    708,
                    747,
                    771,
                    775,
                    776,
                    777,
                    778
                ];
                $phone = substr($phone, 1, 3);
                if(in_array($phone, $acceptedCodes)) {
                    return true;
                }
            }
        }
        return false;
    }

    public function message()
    {
        return __('validation.regex');
    }
}
