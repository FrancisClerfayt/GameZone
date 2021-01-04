@extends('layouts.app')

@section('title', 'GameZone - Ajouter un restaurant')

@section('content')
<div class="container">
	<div class="row justify-content-center align-items-center">
		<div class="card">
			<div class="card-header">
				<h2>Ajouter un restaurant</h2>
			</div>
			<div class="card-body">
				<form action="{{route('Restaurant.store')}}" class="form" method="post" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
						<label for="name">Nom du restaurant</label>
						<br>
						<input type="text" name="name" id="name">
					</div>
					<div class="form-group">
						<label for="description">Description du restaurant</label>
						<br>
						<textarea name="description" id="description">
						</textarea>
					</div>
					<div class="form-group">
						<label for="image">Image du restaurant</label>
						<br>
						<input type="file" name="image" id="image">
					</div>
					<div class="form-group">
						<label for="image_alt">Texte alternatif de l'image</label>
						<br>
						<input type="text" name="image_alt" id="image_alt">
					</div>
					<div class="form-group">
						<label for="menu_adult">Prix de la formule Adulte</label>
						<br>
						<input type="text" name="menu_adult" id="menu_adult">
					</div>
					<div class="form-group">
						<label for="menu_child">Prix de la formule Enfant</label>
						<br>
						<input type="text" name="menu_child" id="menu_child">
					</div>
					<input type="submit" value="Créer restaurant">
				</form>
			</div>
		</div>
	</div>
</div>
@endsection