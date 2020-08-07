<?php

namespace SoluzioneSoftware\Nova\AuthCaptcha\Http\Controllers;

use Illuminate\Http\Request;

class ForgotPasswordController extends \Laravel\Nova\Http\Controllers\ForgotPasswordController
{
    /**
     * @inheritDoc
     */
    protected function validateEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'g-recaptcha-response' => 'required|recaptcha',
        ]);
    }
}
