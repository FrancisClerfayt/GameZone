@extends('layouts.app')

@section('title', 'GameZone - Modifier attraction')

@section('content')
<div class="container">
	<div class="row justify-content-center align-item-center">
		<div class="card">
			<div class="card-header">
				<h1 class="mt-4 mb-5">Modifier une attraction</h1>
			</div>
			<div class="card-body">
				<form action="{{route('Attraction.update', ['Attraction' => $Attraction->id])}}" class="form" enctype="multipart/form-data" method="POST">
					@csrf
					@method('PUT')
					<div class="form-group">
						<label for="name">Nom de l'attraction</label>
						<br>
						<input type="text" name="name" id="name" value=" {{ $Attraction->name }} ">
					</div>
					<div class="form-group">
						<label for="xp_gain">Gain d'XP de l'attraction</label>
						<br>
						<input type="text" name="xp_gain" id="xp_gain" value=" {{ $Attraction->xp_gain }} ">
					</div>
					<div class="form-group">
						<label for="description">Description de l'attraction</label>
						<br>
						<textarea name="description" id="description">
							{{ $Attraction->description }}
						</textarea>
					</div>
					<div class="form-group">
						<label for="background_image">Image de fond de l'attraction</label>
						<br>
						<img src="{{asset('storage/'.$Attraction->background_image)}}" alt="{{$Attraction->background_image_alt}}">
						<br>
						<input type="file" name="background_image" id="background_image" value="{{'public/'.$Attraction->background_image}}">
					</div>
					<div class="form-group">
						<label for="background_image_alt">Texte alternatif de l'image de fond</label>
						<br>
						<input type="text" name="background_image_alt" id="background_image_alt">
					</div>
					<div class="form-group">
						<label for="logo">Logo de l'attraction</label>
						<br>
						<img src="{{asset('storage/'.$Attraction->logo)}}" alt="{{$Attraction->logo_alt}}">
						<input type="file" name="logo" id="logo" value="{{'public/'.$Attraction->logo}}">
					</div>
					<div class="form-group">
						<label for="logo_alt">Texte alternatif du logo</label>
						<br>
						<input type="text" name="logo_alt" id="logo_alt" value="{{$Attraction->logo_alt}}">
					</div>
					<div class="form-group">
						<label for="restriction">Restriction de l'attraction</label>
						<br>
						<input type="text" name="restriction" id="restriction" value="{{$Attraction->restriction}}">
					</div>
					<input type="submit" value="modifier attraction" class="btn btn-primary text-secondary">
				</form>
				<form action="{{route('Attraction.destroy', ['Attraction' => $Attraction->id])}}" method="POST" class="form" style="display: contents;">
					@csrf
					@method('DELETE')
					<input type="submit" value="Supprimer l'attraction" class="btn btn-danger mt-3">
				</form>
			</div>
		</div>
	</div>
</div>
@endsection