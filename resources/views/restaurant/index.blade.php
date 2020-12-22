@extends('layouts.app')    

@section('content')
<img src="{{ asset('images/restaurant_tables.jpg')}}" alt="game zone" style="width: 100%;">
<h1 class="mt-4 mb-5">Nos restaurants</h1>
<div class="container_restaurant">
  @foreach ($restaurants as $restaurant)
  <div class="items_restaurant">
    <img src=" {{asset('storage/'.$restaurant->image)}} " class="img_r_left" >
    <div class="restaurant_right">  
      <h3>{{$restaurant->name}}</h3>
      <p class="restaurant_text">{{$restaurant->description}}</p>
      <p>Formule adulte : <span>{{$restaurant->menu_adult}} €</span></p>
      <p>Formule enfant : <span>{{$restaurant->menu_child}} €</span></p>

      {{-- <a href=" {{ route('Restaurant.show', ['Restaurant' => $restaurant->id]) }} " class="restaurant_button">En savoir plus</a> --}}
    </div>
  </div>
  @endforeach
</div>

@endsection