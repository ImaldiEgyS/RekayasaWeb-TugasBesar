@extends('layouts/main')

@section('title', 'Create My Account')
@section('csstambahan', 'contact.css')
@section('iniIsi')

<div class="iniIsi">
    <div id="flow">
        <span class="flow-1"></span>
        <span class="flow-2"></span>
        <span class="flow-3"></span>
    </div>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
			<div class="container is-fluid has-text-centered card large ini_regis">
				<div class="columns is-8 is-variable">
					<div class="column is-two-thirds has-text-left">
                        <h1 class="is-size-2 warnaku">{{ __('Register') }} Your Account</h1>
						<p class="is-size-6 warnaku">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
					</div>
					<div class="column is-one-third has-text-left">
						<form method="POST" action="{{ route('register') }}">
                        @csrf
							<div class="field">
								<label class="label">{{ __('Name') }}</label>
								<div class="control">
									<input id="name" type="text" class="input is-medium @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

									@error('name')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
							</div>
							<div class="field">
								<label class="label">{{ __('E-Mail Address') }}</label>
								<div class="control">
									<input id="email" type="email" class="input is-medium @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

									@error('email')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
							</div>
							<div class="field">
								<label class="label">{{ __('Password') }}</label>
								<div class="control">
									<input id="password" type="password" class="input is-medium @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

									@error('password')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
							</div>
							<div class="field">
								<label class="label">{{ __('Confirm Password') }}</label>
								<div class="control">
									<input id="password-confirm" type="password" class="input is-medium" name="password_confirmation" required autocomplete="new-password">
								</div>
							</div>

							<div class="control">
								<button type="submit" class="button is-link is-fullwidth has-text-weight-medium is-medium">{{ __('Register') }}</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
    </section>
</div>