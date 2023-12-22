<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class OpenTicketDescriptionRule implements Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if ($value == '' && request('status') != 'Open') {
            return false;
        }

        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The description is required when the status is not "Open".';
    }
}
