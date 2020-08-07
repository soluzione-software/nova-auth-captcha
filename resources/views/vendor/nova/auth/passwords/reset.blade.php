@extends('nova::auth.layout')

@section('content')

@include('nova::auth.partials.header')

<form
    class="bg-white shadow rounded-lg p-8 max-w-login mx-auto"
    method="POST"
    action="{{ route('nova.password.request') }}"
>
    {{ csrf_field() }}

    @component('nova::partials.heading')
        {{ __('Reset Password') }}
    @endcomponent

    @include('nova::auth.partials.errors')

    <input type="hidden" name="token" value="{{ $token }}">

    <div class="mb-6 {{ $errors->has('email') ? ' has-error' : '' }}">
        <label class="block font-bold mb-2" for="email">{{ __('Email Address') }}</label>
        <input class="form-control form-input form-input-bordered w-full" id="email" type="email" name="email" value="{{ $email ?? old('email') }}" required autofocus>
    </div>

    <div class="mb-6 {{ $errors->has('password') ? ' has-error' : '' }}">
        <label class="block font-bold mb-2" for="password">{{ __('Password') }}</label>
        <input class="form-control form-input form-input-bordered w-full" id="password" type="password" name="password" required>
    </div>

    <div class="mb-6 {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
        <label class="block font-bold mb-2" for="password-confirm">{{ __('Confirm Password') }}</label>
        <input class="form-control form-input form-input-bordered w-full" id="password-confirm" type="password" name="password_confirmation" required>
    </div>

    @include('nova-auth-captcha::buttons.reset-password')
</form>
@endsection
