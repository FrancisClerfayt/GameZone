@extends('layouts.app')

@section('content')
		<div class="container">
			<div class="row">
				<form action="{{route('Attraction.update', ['Attraction' => $attraction->id])}}" class="form">
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

					</div>
					<div class="form-group">

					</div>
					<div class="form-group">

					</div>
					<div class="form-group">

					</div>
				</form>
			</div>
		</div>
@endsection