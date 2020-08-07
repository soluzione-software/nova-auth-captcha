<?php

namespace SoluzioneSoftware\Nova\AuthCaptcha\Http\Controllers;

class ResetPasswordController extends \Laravel\Nova\Http\Controllers\ResetPasswordController
{
    /**
     * @inheritDoc
     */
    public function rules()
    {
        return array_merge(parent::rules(), ['g-recaptcha-response' => 'required|recaptcha']);
    }
}
