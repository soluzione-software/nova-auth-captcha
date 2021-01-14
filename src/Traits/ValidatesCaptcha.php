<?php

namespace SoluzioneSoftware\Nova\AuthCaptcha\Traits;

use Illuminate\Support\Facades\Config;

trait ValidatesCaptcha
{
    protected function appendCaptchaValidationRules(array $rules): array
    {
        if (!Config::get('nova_auth_captcha.enabled')) {
            return $rules;
        }

        return array_merge($rules, [
            'g-recaptcha-response' => [
                'required',
                'recaptcha',
            ],
        ]);
    }
}
