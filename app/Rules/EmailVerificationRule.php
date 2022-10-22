<?php

namespace App\Rules;

use App\User;
use Illuminate\Contracts\Validation\Rule;

class EmailVerificationRule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $User = User::where('email', $value)->first();
        if ($User->email_verified_at == null) {
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
        return 'Email needs to be verified.';
    }
}
