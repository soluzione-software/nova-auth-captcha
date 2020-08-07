<?php

namespace SoluzioneSoftware\Nova\AuthCaptcha\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class ForgotPasswordController extends \Laravel\Nova\Http\Controllers\ForgotPasswordController
{
    /**
     * @inheritDoc
     */
    protected function validateEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'g-recaptcha-response' => [
                Config::get('nova_auth_captcha.enabled') ? 'required' : 'nullable',
                'recaptcha',
            ],
        ]);
    }
}
