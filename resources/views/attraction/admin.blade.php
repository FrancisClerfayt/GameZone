@extends('layouts.app')

@section('title', 'GameZone - Administrer attraction')

@section('content')
<div class="container">
	<div class="row">
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Nom de l'attraction</th>
					<th>Description</th>
					<th>Gain d'XP</th>
					<th>Restriction</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($attractions as $attraction)
				<tr>
					<td>{{$attraction->name}}</td>
					<td>{{$attraction->description}}</td>
					<td>{{$attraction->xp_gain}}</td>
					<td>{{$attraction->restriction}}</td>
					<td>
						<a href="{{route('Attraction.edit', ['Attraction'=>$attraction->id])}}" class="btn btn-primary">
							<span class="fa fa-edit"> Modifier</span>
						</a>
						<form action="{{route('Attraction.destroy', ['Attraction'=>$attraction->id])}}" method="POST" style="display: contents">
							@csrf
							@method('DELETE')
							<button class="btn btn-danger" type="submit">
								<span class="fa fa-trash"> Supprimer</span>
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