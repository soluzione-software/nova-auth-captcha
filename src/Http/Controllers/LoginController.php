<?php

namespace SoluzioneSoftware\Nova\AuthCaptcha\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class LoginController extends \Laravel\Nova\Http\Controllers\LoginController
{
    /**
     * @inheritDoc
     */
    public function validateLogin(Request $request)
    {
        $request->validate([
            $this->username() => 'required|string',
            'password' => 'required|string',
            'g-recaptcha-response' => [
                Config::get('nova_auth_captcha.enabled') ? 'required' : 'nullable',
                'recaptcha',
            ],
        ]);
    }
}
