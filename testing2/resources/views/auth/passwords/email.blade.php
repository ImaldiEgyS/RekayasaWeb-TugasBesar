@extends('layouts/main')

@section('title', 'Reset Password')
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
                    <h3 class="title has-text-black">{{ __('Reset Password') }}</h3>
                    <!-- <hr class="login-hr"> -->
                    <div class="box">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

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

                            <button type="submit" class="button is-block is-info is-large is-fullwidth">{{ __('Jangan diklik masih error') }}</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script async type="text/javascript" src="../js/bulma.js"></script>
</div>