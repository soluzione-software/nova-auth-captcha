@if ($errors->any())
<p class="text-center font-semibold text-danger my-3">
    @if ($errors->has('email'))
        {{ $errors->first('email') }}
    @elseif($errors->has('password'))
        {{ $errors->first('password') }}
    @else
        {{ $errors->first('g-recaptcha-response') }}
    @endif
    </p>
@endif
