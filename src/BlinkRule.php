<?php

namespace Duke\Blink;

use Duke\Blink\Traits\Parses;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Validation\Validator;

class BlinkRule implements Rule
{
    use Parses;

    public static function handle()
    {
        return 'blink';
    }

    public function validate($attribute, $value, $params, Validator $validator)
    {
        $handle = $this->handle();

        $validator->setCustomMessages([
            $handle => $this->message(),
        ]);

        return $this->passes($attribute, $value);
    }

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
