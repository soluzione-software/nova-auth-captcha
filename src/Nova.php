<?php

namespace SoluzioneSoftware\Nova\AuthCaptcha;

class Nova extends \Laravel\Nova\Nova
{
    public static function routes()
    {
        parent::routes();

        return new PendingRouteRegistration();
    }
}
