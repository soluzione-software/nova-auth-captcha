@if ($errors->any())
    <p class="text-center font-semibold text-danger my-3">
        @if ($errors->has('email'))
            {{ $errors->first('email') }}
        @elseif($errors->has('password'))
            {{ $errors->first('password') }}
        @elseif($errors->has('g-recaptcha-response'))
            {{ $errors->first('g-recaptcha-response') }}
        @endif
    </p>
@endif
