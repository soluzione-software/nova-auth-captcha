<?php

namespace SoluzioneSoftware\Nova\AuthCaptcha;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->views();
    }

    private function views()
    {
        $this->publishes([
            __DIR__ . '/../resources/views/vendor' => App::resourcePath('views/vendor'),
        ], ['views', 'nova-auth-captcha', 'nova-auth-captcha-vendor-views']);

        $this->publishes([
            __DIR__ . '/../resources/views/package' => App::resourcePath('views/vendor/nova-auth-captcha'),
        ], ['views', 'nova-auth-captcha', 'nova-auth-captcha-package-views']);

        $this->loadViewsFrom(__DIR__ . '/../resources/views/package', 'nova-auth-captcha');
    }
}
