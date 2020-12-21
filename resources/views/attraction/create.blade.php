@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center align-items-center">
		<div class="card">
			<div class="card-header">
				<h2>Ajouter une Attraction</h2>
			</div>
			<div class="card-body">
				<form action="{{route('Attraction.store')}}" class="form" method="POST" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
						<label for="name">Nom de l'attraction</label>
						<input type="text" name="name" id="name">
					</div>
					<div class="form-group">
						<label for="xp_gain">Gain d'XP de l'attraction</label>
						<input type="number" name="xp_gain" id="xp_gain">
					</div>
					<div class="form-group">
						<label for="description">Description de l'attraction</label>
						<textarea name="description" id="description">
						</textarea>
					</div>
					<div class="form-group">
						<label for="background_image">Image de fond de l'attraction</label>
						<input type="file" name="background_image" id="background_image">
					</div>
					<div class="form-group">
						<label for="background_image_alt">Texte alternatif de l'image de fond</label>
						<input type="text" name="background_image_alt" id="background_image_alt">
					</div>
					<div class="form-group">
						<label for="logo">Logo de l'attraction</label>
						<input type="file" name="logo" id="logo">
					</div>
					<div class="form-group">
						<label for="logo_alt">Texte alternatif du logo</label>
						<input type="text" name="logo_alt" id="logo_alt">
					</div>
					<div class="form-group">
						<label for="restriction">Restriction de l'attraction</label>
						<input type="text" name="restriction" id="restriction">
					</div>
					<input type="submit" value="Créer attraction">
				</form>
			</div>
		</div>
	</div>
</div>
@endsection