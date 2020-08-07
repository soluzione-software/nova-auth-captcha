@if (\Illuminate\Support\Facades\Config::get('nova_auth_captcha.enabled'))
    <script src="//www.google.com/recaptcha/api.js" async defer></script>
    <script>
        function onSubmit() {
            document.getElementsByTagName("form")[0].submit();
        }
    </script>
@endif
