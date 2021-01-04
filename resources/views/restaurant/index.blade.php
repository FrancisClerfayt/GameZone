@extends('layouts.app')    

@section('title', 'GameZone - Nos restaurants')

@section('content')
<h2 class="first_titre_r">Nos restaurants</h2>
<div class="container_restaurant">
	@foreach ($restaurants as $restaurant)
	<div class="items_restaurant">
		<img src=" {{asset($restaurant->image)}} " class="img_r_left" >
		<div class="restaurant_right">  
			<h3>{{$restaurant->name}}</h3>
			<p class="restaurant_text">{{$restaurant->description}}</p>
			<a href=" {{route('Restaurant.show', ['Restaurant' => $restaurant->id])}}" class="restaurant_button">En savoir plus</a>
		</div>
	</div>
	@endforeach
</div>
@endsection