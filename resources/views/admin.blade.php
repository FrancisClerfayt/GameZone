@extends('layouts.app')

@section('title', 'GameZone - Panneau d\'administration')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<h1 class="mt-4 mb-5">Panneau d'administration</h1>
		<div class="col-12">
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-3 col-md-6 col-sm-12 px-4 py-2">
					<h2>Attractions</h2>
					<div>
						<a href="{{route('Attraction.create')}}" class="btn btn-primary text-secondary mx-4 my-2">
							Ajouter une attraction
						</a>
						<a href="{{route('adminAttraction')}}" class="btn btn-primary text-secondary mx-4 my-2">
							Modifier une attraction
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 px-4 py-2">
					<h2>Restaurants</h2>
					<div>
						<a href="{{route('Restaurant.create')}}" class="btn btn-primary text-secondary mx-4 my-2">
							Ajouter un restaurant
						</a>
						<a href="{{route('adminRestaurant')}}" class="btn btn-primary text-secondary mx-4 my-2">
							Modifier un restaurant
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 px-4 py-2">
					<h2>Articles</h2>
					<div>
						<a href="" class="btn btn-primary text-secondary mx-4 my-2">
							Ajouter un article
						</a>
						<a href="" class="btn btn-primary text-secondary mx-4 my-2">
							Modifier un article
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 px-4 py-2">
					<h2>Utilisateurs</h2>
					<div>
						<a href="" class="btn btn-primary text-secondary mx-4 my-2">
							Modifier un utilisateur
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection