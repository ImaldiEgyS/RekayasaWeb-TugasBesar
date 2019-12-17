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
						<div class="field">
							<label class="label">Name</label>
							<div class="control">
								<input class="input is-medium" type="text">
							</div>
						</div>
						<div class="field">
							<label class="label">Email</label>
							<div class="control">
								<input class="input is-medium" type="text">
							</div>
						</div>
						<div class="field">
							<label class="label">Password</label>
							<div class="control">
								<input class="input is-medium" type="text">
							</div>
						</div>
						<div class="control">
							<button type="submit" class="button is-link is-fullwidth has-text-weight-medium is-medium">Register</button>
						</div>
					</div>
				</div>
			</div>
		</div>
    </section>
</div>