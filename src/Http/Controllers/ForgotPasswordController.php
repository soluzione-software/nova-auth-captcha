<?php

namespace SoluzioneSoftware\Nova\AuthCaptcha\Http\Controllers;

use Illuminate\Http\Request;
use SoluzioneSoftware\Nova\AuthCaptcha\Traits\ValidatesCaptcha;

class ForgotPasswordController extends \Laravel\Nova\Http\Controllers\ForgotPasswordController
{
    use ValidatesCaptcha;

    /**
     * @inheritDoc
     */
    protected function validateEmail(Request $request)
    {
        $request->validate($this->appendCaptchaValidationRules([
            'email' => 'required|email',
        ]));
    }
}
