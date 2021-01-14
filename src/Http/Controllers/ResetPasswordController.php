<?php

namespace SoluzioneSoftware\Nova\AuthCaptcha\Http\Controllers;

use SoluzioneSoftware\Nova\AuthCaptcha\Traits\ValidatesCaptcha;

class ResetPasswordController extends \Laravel\Nova\Http\Controllers\ResetPasswordController
{
    use ValidatesCaptcha;

    /**
     * @inheritDoc
     */
    public function rules()
    {
        return $this->appendCaptchaValidationRules(parent::rules());
    }
}
