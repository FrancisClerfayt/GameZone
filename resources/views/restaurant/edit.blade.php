@extends('layouts.app')

@section('title', 'GameZone - Nos attractions')

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
          @method('PUT')
					<div class="form-group">
						<label for="name">Nom du restaurant</label>
						<br>
						<input type="text" name="name" id="name" value=" {{ $Restaurant->name }} ">
					</div>
					<div class="form-group">
						<label for="description">Description du restaurant</label>
						<br>
						<textarea name="description" id="description" value= " {{ $Restaurant->description }} ">
						</textarea>
					</div>
					<div class="form-group">
						<label for="image">Image du restaurant</label>
						<br>
            <img src="{{asset('storage/'.$Restaurant->image)}}" alt="{{$Restaurant->restaurant_image_alt}}">
						<br>
						<input type="file" name="image" id="image" value= " {{ 'storage/'.$Restaurant->image }} ">
					</div>
					<div class="form-group">
						<label for="image_alt">Texte alternatif de l'image</label>
						<br>
						<input type="text" name="image_alt" id="image_alt" value= " {{ $Restaurant->restaurant_image_alt }} ">
					</div>
					<div class="form-group">
						<label for="menu_adult">Prix de la formule Adulte</label>
						<br>
						<input type="text" name="menu_adult" id="menu_adult" value= " {{ $Restaurant->menu_adult }} ">
					</div>
					<div class="form-group">
						<label for="menu_child">Prix de la formule Enfant</label>
						<br>
						<input type="text" name="menu_child" id="menu_child" value= " {{ $Restaurant->menu-_child}} ">
					</div>
					<input type="submit" value="Créer restaurant">
				</form>
        <form action="{{route('Restaurant.destroy', ['Restaurant' => $Restaurant->id])}}" method="POST" class="form" style="display: contents;">
					@csrf
					@method('DELETE')
					<input type="submit" value="Supprimer le restaurant" class="btn btn-danger mt-3">
				</form>
			</div>
		</div>
	</div>
</div>

@endsection