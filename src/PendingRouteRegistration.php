<?php

namespace SoluzioneSoftware\Nova\AuthCaptcha;

use Illuminate\Support\Facades\Route;
use Laravel\Nova\Nova;

class PendingRouteRegistration extends \Laravel\Nova\PendingRouteRegistration
{
    /**
     * @inheritDoc
     */
    public function withAuthenticationRoutes($middleware = ['web'])
    {
        Route::namespace('SoluzioneSoftware\Nova\AuthCaptcha\Http\Controllers')
            ->domain(config('nova.domain', null))
            ->middleware($middleware)
            ->as('nova.')
            ->prefix(Nova::path())
            ->group(function () {
                Route::get('/login', 'LoginController@showLoginForm');
                Route::post('/login', 'LoginController@login')->name('login');
            });

        Route::namespace('SoluzioneSoftware\Nova\AuthCaptcha\Http\Controllers')
            ->domain(config('nova.domain', null))
            ->middleware(config('nova.middleware', []))
            ->as('nova.')
            ->prefix(Nova::path())
            ->group(function () {
                Route::get('/logout', 'LoginController@logout')->name('logout');
            });

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function withPasswordResetRoutes($middleware = ['web'])
    {
        Nova::$resetsPasswords = true;

        Route::namespace('SoluzioneSoftware\Nova\AuthCaptcha\Http\Controllers')
            ->domain(config('nova.domain', null))
            ->middleware($middleware)
            ->as('nova.')
            ->prefix(Nova::path())
            ->group(function () {
                Route::get('/password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
                Route::post('/password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
                Route::get('/password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
                Route::post('/password/reset', 'ResetPasswordController@reset');
            });

        return $this;
    }
}
