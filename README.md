# Laravel Nova Auth Captcha
[![Latest Version](http://img.shields.io/packagist/v/soluzione-software/nova-auth-captcha.svg?label=Release&style=for-the-badge)](https://packagist.org/packages/soluzione-software/nova-auth-captcha)
[![MIT License](https://img.shields.io/github/license/soluzione-software/nova-auth-captcha.svg?label=License&color=blue&style=for-the-badge)](https://github.com/soluzione-software/nova-auth-captcha/blob/master/LICENSE.md)

> Note the package is currently in beta. During the beta period things can and probably will change. Don't use it in production until a stable version has been released. We appreciate you helping out with testing and reporting any bugs.

The package adds captcha(only reCAPTCHA for now) to laravel nova authentication forms. Under the hood it uses https://github.com/biscolab/laravel-recaptcha

## Installation & Configuration

```bash
composer require soluzione-software/nova-auth-captcha
```

Replace `Laravel\Nova\Nova` with `SoluzioneSoftware\Nova\AuthCaptcha\Nova` in `app/Providers/NovaServiceProvider.php`

publish nova views:
```bash
php artisan vendor:publish --tag=nova-auth-captcha-vendor-views
```

Edit `.env` file as described in https://laravel-recaptcha-docs.biscolab.com/docs/configuration#add-your-api-keys

(Optional) Edit translation files as described in https://laravel-recaptcha-docs.biscolab.com/docs/configuration#customize-error-message

### Disabling locally
Add the following line to `.env` in order to disable the captcha: 
```env
NOVA_AUTH_CAPTCHA_ENABLED=false
```
