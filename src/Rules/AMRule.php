<?php

namespace Duke\Blink\Rules;

use Illuminate\Contracts\Validation\Rule;

class AMRule implements Rule
{
    public function passes($attribute, $value)
    {
        if(preg_match_all('/^(\+|)?\(?374\)?[\s\-]?\(?[0-9]{2}\)?[\s\-]?[0-9]{2}[\s\-]?[0-9]{2}[\s\-]?[0-9]{2}$/', $value)) {
            $phone = str_replace([' ', '-', '(', ')', '+'], '', $value);
            if(strlen($phone) == 11) {
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
