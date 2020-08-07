<button
        @if (\Illuminate\Support\Facades\Config::get('nova_auth_captcha.enabled'))
        class="{{ $class }} g-recaptcha"
        data-sitekey="{{ \Illuminate\Support\Facades\Config::get('recaptcha.api_site_key') }}"
        data-callback="onSubmit"
        @else
        class="{{ $class }}"
        @endif
        type="submit"
>
    {{ $slot }}
</button>
