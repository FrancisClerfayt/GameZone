@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center align-items-center">
		<div class="card">
			<div class="card-header">
				<h1 class="mt-4 mb-5">Ajouter un Restaurant</h1>
			</div>
			<div class="card-body">
				<form action="{{route('Restaurant.store')}}" class="form" method="POST" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
						<label for="name">Nom du restaurant</label>
						<input type="text" name="name" id="name">
					</div>
					<div class="form-group">
						<label for="description">Description du restaurant</label>
						<textarea name="description" id="description">
						</textarea>
					</div>
					<div class="form-group">
						<label for="image">Image du restaurant</label>
						<input type="file" name="image" id="image">
					</div>
					<div class="form-group">
						<label for="menu_adult">Prix formule adulte</label>
						<input type="text" name="menu_adult" id="menu_adult">
					</div>
					<div class="form-group">
						<label for="menu_child">Prix formule enfant</label>
						<input type="text" name="menu_child" id="menu_child">
					</div>
					<input type="submit" value="Créer restaurant">
				</form>
			</div>
		</div>
	</div>
</div>
@endsection