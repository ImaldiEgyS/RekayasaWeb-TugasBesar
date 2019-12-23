@extends('layouts/main')

@section('title', 'Login')
@section('csstambahan', 'login.css')
@section('iniIsi')

<div class="iniIsi">
    <div id="flow">
        <span class="flow-1"></span>
        <span class="flow-2"></span>
        <span class="flow-3"></span>
    </div>

    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-black">{{ __('Login') }}</h3>
                    <!-- <hr class="login-hr"> -->
                    <div class="box">
                        <figure class="avatar">
                            <img src="https://placehold.it/128x128">
                        </figure>
                        <form method="POST" action="{{ route('login') }}">
                        @csrf
                            <div class="field">
                                <div class="control">
                                    <input id="email" type="email" class="input is-large @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Your Email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input id="password" type="password" class="input is-large @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Your Password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="field">
                                <label class="checkbox">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
                                </label>
                            </div>

                            <button type="submit" class="button is-block is-info is-large is-fullwidth">{{ __('Login') }} <i class="fa fa-sign-in" aria-hidden="true"></i></button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script async type="text/javascript" src="../js/bulma.js"></script>
</div>