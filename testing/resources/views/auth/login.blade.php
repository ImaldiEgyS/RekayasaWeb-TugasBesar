@extends('main')

@section('title', 'Login')
@section('csstambahan', 'login.css')
@section('iniIsi')

<div class="iniIsi">
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-black">Login</h3>
                    <div>{{ __('Login') }}</div>
                    <hr class="login-hr">
                    <p class="subtitle has-text-black">Please login to proceed.</p>
                    <div class="box">
                        <figure class="avatar">
                            <img src="https://placehold.it/128x128">
                        </figure>

                        <form method="POST" action="{{ route('login') }}">
                        @csrf
                            <div class="field">
                                <div class="control">
                                <label for="email">{{ __('E-Mail Address') }}</label>
                                    <input class="input is-large @error('email') is-invalid @enderror"  id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Your Email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                <label for="password">{{ __('Password') }}</label>
                                    <input id="password"  class="input is-large @error('password') is-invalid @enderror" type="password"  name="password" required autocomplete="current-password" placeholder="Your Password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                </div>
                            </div>
                            <div class="field">
                                <label class="checkbox" for="remember">
                  <input type="checkbox" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                  {{ __('Remember Me') }}
                </label>
                            </div>
                            <button class="button is-block is-info is-large is-fullwidth">{{ __('Login') }} <i class="fa fa-sign-in" aria-hidden="true"></i></button>

                            @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                
                        </form>
                    </div>
                    <p class="has-text-grey">
                        <a href="../">Sign Up</a> &nbsp;·&nbsp;
                        <a href="../">Forgot Password</a> &nbsp;·&nbsp;
                        <a href="../">Need Help?</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <script async type="text/javascript" src="../js/bulma.js"></script>
</div>