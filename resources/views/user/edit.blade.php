@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8 card">
			<div class="card-header">
				<h2> {{ __('Modifiez vos informations') }} </h2>
			</div>
			<div class="card-body">
				<form method="POST" action="{{ route('User.update', ['User' => $user->id]) }}">
					@csrf
					@method('PUT')
					<div class="form-group row">
						<label for="user_name" class="col-md-4 col-form-label text-md-right">
							{{ __('Identifiant : ') }}
						</label>
						<div class="col-md-6">
							<input id="user_name" type="text" class="form-control @error('user_name') is-invalid @enderror" name="user_name" value="{{ $user->user_name }}" autocomplete="user_name" autofocus required>
							@error('user_name')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>
					</div>

					<div class="form-group row">
						<label for="email" class="col-md-4 col-form-label text-md-right">
							{{ __('Votre e-mail') }}
						</label>
						<div class="col-md-6">
							<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">
							@error('email')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>
					</div>
					
					<div class="form-group row">
						<label for="first_name" class="col-md-4 col-form-label text-md-right">
							{{ __('Votre prénom : ') }}
						</label>
						
						<div class="col-md-6">
							<input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ $user->first_name }}" autocomplete="first_name" autofocus>
							
							@error('first_name')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>
					</div>

					<div class="form-group row">
						<label for="last_name" class="col-md-4 col-form-label text-md-right">
							{{ __('Votre nom : ') }}
						</label>
						<div class="col-md-6">
							<input id="last_name" type="text" class="form-control @error('name') is-invalid @enderror" name="last_name" value="{{ $user->last_name }}" autocomplete="last_name" autofocus>
							@error('last_name')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>
					</div>

					<div class="form-group row">
						<label for="city" class="col-md-4 col-form-label text-md-right">
							{{ __('Votre ville : ') }}
						</label>
						<div class="col-md-6">
							<input id="city" type="text" class="form-control @error('name') is-invalid @enderror" name="city" value="{{ $user->city }}" autocomplete="city" autofocus>
							@error('city')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>
					</div>
					
					<div class="form-group row">
						<div class="col-lg-3 col-md-6 col-sm-10">
							<input type="radio" name="avatar" id="avatar1" value="images/avatar_eagle.png">
							<label for="avatar1" id="avatar1">
								<img class="w-100" src=" {{ asset('images/avatar_eagle.png') }} " alt="an avatar with an eagle head">
							</label>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-10">
							<input type="radio" name="avatar" id="avatar2" value="images/avatar_pirate.png">
							<label for="avatar2" id="avatar2">
								<img class="w-100" src=" {{ asset('images/avatar_pirate.png') }} " alt="an avatar with an pirate head">
							</label>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-10">
							<input type="radio" name="avatar" id="avatar3" value="images/avatar_wolf.png">
							<label for="avatar3" id="avatar3">
								<img class="w-100" src=" {{ asset('images/avatar_wolf.png') }} " alt="an avatar with a wolf head">
							</label>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-10">
							<input type="radio" name="avatar" id="avatar4" value="images/avatar_snake.png">
							<label for="avatar4" id="avatar4">
								<img class="w-100" src=" {{ asset('images/avatar_snake.png') }} " alt="an avatar with a snake head">
							</label>
						</div>
					</div>
					
					<div class="form-group row mb-0">
						<div class="col-md-6 offset-md-4">
							<button type="submit" class="btn btn-primary">
								{{ __('Valider') }}
							</button>
						</div>
					</div>
				</form>
				<form method="POST" action="{{ route('User.destroy', ['User' => $user->id]) }}" style="display: contents">
				@csrf
				@method('DELETE')
				<input class="btn btn-danger" type="submit" value="Supprimer votre compte">
				</form>
			</div>
		</div>
	</div>
</div>
@endsection