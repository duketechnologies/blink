<?php

namespace Duke\Blink;

use Duke\Blink\Traits\Parses;
use Illuminate\Contracts\Validation\Rule;

class BlinkRule implements Rule
{
    use Parses;

    public function passes($attribute, $value)
    {
        $classname = '\\Duke\\Blink\\Rules\\BlinkRule' . self::parseCountries();

        try {
            return call_user_func([(new $classname), 'passes'], $attribute, $value);
        } catch (\Exception $e) {
            throw new $e('Class or method not found');
        }
    }

    public function message()
    {
        return __('validation.regex');
    }
}
