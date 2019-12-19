@extends('main')

@section('title', 'Create My Account')
@section('csstambahan', 'contact.css')
@section('iniIsi')

<div class="iniIsi">
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
			<div class="container has-text-centered">
				<div class="columns is-8 is-variable ">
					<div class="column is-two-thirds has-text-left">
                        <h1 class="is-size-2 warnaku">Create Your Account</h1>
						
						<p class="is-size-6 warnaku">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla eligendi soluta
							voluptate facere molestiae consequatur.</p>
					</div>
					<div class="column is-one-third has-text-left">
					<form method="POST" action="{{ route('register') }}">
					@csrf

						<div class="field">
							<label for="name" class="label">{{ __('Name') }}</label>
							<div class="control">
								<input class="input is-medium @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus type="text" >

								@error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>
						</div>
						<div class="field">
							<label for="email" class="label">{{ __('E-Mail Address') }}</label>
							<div class="control">
								<input class="input is-medium @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" type="text">

								@error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>
						</div>
						<div class="field">
							<label for="password" class="label">{{ __('Password') }}</label>
							<div class="control">
								<input class="input is-medium @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" type="password">

								@error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>
						</div>

						<div class="field">
							<label for="password-confirm" class="label">{{ __('Confirm Password') }}</label>
							<div class="control">
								<input class="input is-medium"  id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">
							</div>
						</div>
						<div class="control">
							<button type="submit" class="button is-link is-fullwidth has-text-weight-medium is-medium">{{ __('Register') }}</button>
						</div>
					</div>
				</div>
			</div>
		</div>
    </section>
</div>