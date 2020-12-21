@extends('layouts.app')

@section('content')
		<div class="container">
			<div class="row justify-content-center align-item-center">
				<div class="card">
					<div class="card-header">
						<h2>Modifier une attraction</h2>
					</div>
					<div class="card-body">
						<form action="{{route('Attraction.update', ['Attraction' => $attraction->id])}}" class="form" enctype="multipart/form-data" method="POST">
							@csrf
							@method('PUT')
							<div class="form-group">
								<label for="name">Nom de l'attraction</label>
								<input type="text" name="name" id="name" value=" {{ $attraction->name }} ">
							</div>
							<div class="form-group">
								<label for="xp_gain">Gain d'XP de l'attraction</label>
								<input type="text" name="xp_gain" id="xp_gain" value=" {{ $attraction->xp_gain }} ">
							</div>
							<div class="form-group">
								<label for="description">Description de l'attraction</label>
								<textarea name="description" id="description">
									{{ $attraction->description }}
								</textarea>
							</div>
							<div class="form-group">
								<label for="background_image">Image de fond de l'attraction</label>
								<img src="{{asset('storage/'.$attraction->background_image)}}" alt="{{$attraction->background_image_alt}}">
								<input type="file" name="background_image" id="background_image">
							</div>
							<div class="form-group">
								<label for="background_image_alt">Texte alternatif de l'image de fond</label>
								<input type="text" name="background_image_alt" id="background_image_alt">
							</div>
							<div class="form-group">
								<label for="logo">Logo de l'attraction</label>
								<img src="{{asset('storage/'.$attraction->logo)}}" alt="{{$attraction->logo_alt}}">
								<input type="file" name="logo" id="logo">
							</div>
							<div class="form-group">
								<label for="logo_alt">Texte alternatif du logo</label>
								<input type="text" name="logo_alt" id="logo_alt" value="{{$attraction->logo_alt}}">
							</div>
							<div class="form-group">
								<label for="restriction">Restriction de l'attraction</label>
								<input type="text" name="restriction" id="restriction" value="{{$attraction->restriction}}">
							</div>
							<input type="submit" value="modifier attraction" class="btn btn-primary text-secondary">
						</form>
						<form action="{{route('Attraction.destroy', ['Attraction' => $attraction->id])}}" method="POST" class="form">
							@csrf
							@method('DELETE')
							<input type="submit" value="Supprimer l'attraction" class="btn btn-danger">
						</form>
					</div>
				</div>
			</div>
		</div>
@endsection