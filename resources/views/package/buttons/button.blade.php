<button
        class="{{ $class }} g-recaptcha"
        data-sitekey="{{ \Illuminate\Support\Facades\Config::get('recaptcha.api_site_key') }}"
        data-callback="onSubmit"
        type="submit"
>
    {{ $slot }}
</button>
