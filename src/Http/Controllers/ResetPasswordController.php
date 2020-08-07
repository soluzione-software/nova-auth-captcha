<?php

namespace SoluzioneSoftware\Nova\AuthCaptcha\Http\Controllers;

use Illuminate\Support\Facades\Config;

class ResetPasswordController extends \Laravel\Nova\Http\Controllers\ResetPasswordController
{
    /**
     * @inheritDoc
     */
    public function rules()
    {
        return array_merge(parent::rules(), [
            'g-recaptcha-response' => [
                Config::get('nova_auth_captcha.enabled') ? 'required' : 'nullable',
                'recaptcha',
            ],
        ]);
    }
}
