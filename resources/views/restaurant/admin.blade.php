@extends('layouts.app')

@section('title', 'GameZone - Administrer restaurant')

@section('content')
<div class="container">
	<div class="row">
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Nom du restaurant</th>
					<th>Description</th>
					<th>Menu adulte</th>
					<th>Menu enfant</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($restaurants as $restaurant)
				<tr>
					<td>{{$restaurant->name}}</td>
					<td>{{$restaurant->description}}</td>
					<td>{{$restaurant->menu_adult}}</td>
					<td>{{$restaurant->menu_child}}</td>
					<td>
						<a href="{{route('Restaurant.edit', ['Restaurant'=>$restaurant->id])}}" class="btn btn-primary">
							<span class="fa fa-edit">Modifier</span>
						</a>
						<form action="{{route('Restaurant.destroy', ['Restaurant'=>$restaurant->id])}}" method="POST" style="display: contents">
							@csrf
							@method('DELETE')
							<button class="btn btn-danger" type="submit">
								<span class="fa fa-trash">Supprimer</span>
							</button>
						</form>
					</td>
				</tr>		
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection