<?php

namespace Duke\Blink\Rules;

use Illuminate\Contracts\Validation\Rule;

class BYRule implements Rule
{
    public function passes($attribute, $value)
    {
        if(preg_match_all('/^(\+|)?\(?375\)?[\s\-]?\(?[0-9]{2}\)?[\s\-]?[0-9]{3}[\s\-]?[0-9]{2}[\s\-]?[0-9]{2}$/', $value)) {
            $phone = str_replace([' ', '-', '(', ')', '+'], '', $value);
            if(strlen($phone) == 12) {
                return true;
            }
        }
        return false;
    }

    public function message()
    {
        return __('validation.regex');
    }
}
