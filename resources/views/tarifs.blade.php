@extends('layouts.app') 

@section('content')
<h1>BIENVENUE SUR LA BILLETERIE DE GAME ZONE !</h1>
<p class="price_text">Découvrez nos tarifs exclusifs et venez vous amuser avec nous !</p>

<p class="price_age">L’entrée pour les enfants de -2 ans est gratuite !</p>

<div class="container_prices">


    <img src="{{ URL::asset('images/ticket_children_2to8yr.png') }}" alt="tarifs enfants de 2 à 8 ans" class="img_prices">
 
    <img src="{{ URL::asset('images/ticket_children_over8yr.jpg') }}" alt="tarifs enfants de plus de 8 ans" class="img_prices">
   
    <img src="{{ URL::asset('images/ticket_adults_over18yr.png') }}" alt="tarifs adultes de plus de 18 ans" class="img_prices">
   
</div>

<h3 class="prices_text_ticket">Vous pourrez faire l’achat des billets à votre arrivée au parc</h3>
<p class="text_prices_bottom">Estimez le prix de votre journée en quelques clics seulement !</p>

@endsection