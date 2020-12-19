@extends('layouts.app')

@section('content')
<div class="container">
		<div class="card">
			<div class="card-body row">
				<div class="col">
					<img src="{{ asset($user->avatar) }}" alt="The user avatar">
				</div>
				<div class="col">
					<h2 class="text-primary">Votre Compte</h2>
					<p>Votre identifiant : <span> {{ $user->user_name }} </span></p>
					<p>Votre email : <span> {{ $user->email }} </span></p>
					<p>Votre nom : <span> {{ $user->last_name }} </span></p>
					<p>Votre prénom : <span> {{ $user->first_name }} </span></p>
					<p>Votre ville : <span> {{ $user->city }} </span></p>
					<a class="btn btn-primary text-secondary" href=" {{ route('User.edit', ['User' => $user->id]) }} ">
						Modifiez vos informations
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection