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
        //return false if description is blank and status !=open
        if($value =='' && request('status') !='open'){
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
        return 'The validation error message.';
    }
}
