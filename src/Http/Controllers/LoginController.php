<?php

namespace SoluzioneSoftware\Nova\AuthCaptcha\Http\Controllers;

use Illuminate\Http\Request;
use SoluzioneSoftware\Nova\AuthCaptcha\Traits\ValidatesCaptcha;

class LoginController extends \Laravel\Nova\Http\Controllers\LoginController
{
    use ValidatesCaptcha;

    /**
     * @inheritDoc
     */
    public function validateLogin(Request $request)
    {
        $request->validate($this->appendCaptchaValidationRules([
            $this->username() => 'required|string',
            'password' => 'required|string',
        ]));
    }
}
