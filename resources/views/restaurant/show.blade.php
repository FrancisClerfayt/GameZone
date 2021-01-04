@extends('layouts.app')    

@section('title', 'GameZone - {{$restaurant->name}}')

@section('content')
<h2 class="first_titre_r">{{ $restaurant->name }}</h2>
<div class="container_restaurant_i">
	
	
	<div class="restaurant_items">
		
		<img src=" {{asset($restaurant->image)}} " class="img_i_left" >
		<div class="restaurant_right_i">  
			<h3>FORMULE</h3>
			<p class="restaurant_text_i">Menu_adult: {{$restaurant->menu_adult}}€</p>
			<p class="restaurant_text_i">Menu_child: {{$restaurant->menu_child}}€</p>
		</div>
	</div>
	
	<p class="text_restaurant_i">{{$restaurant->description}}</p>
	<a href=" {{ route('Restaurant.index') }} " class="restaurant_button">Retour</a>    
</div>
@endsection