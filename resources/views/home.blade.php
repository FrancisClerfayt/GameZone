@extends('layouts.app')

@section('content')
<img src="{{ asset ('images/header_index.png')}}" alt="Parc d'attraction jeux vidéos" style="width:100%">
<div class="container">
  <div class="row justify-content-around">
    <img class="logo_gamezone col-lg-6" src="{{ asset('images/logo_gamezone.png')}}" alt="logo gamezone geek cybercenter">
    <p class="presentation col-lg-6">
      GEEK CYBERCENTER est un groupe possédant plusieurs parcs d’attractions dans le monde comme : BATTLE KART VR, FORTNITE
      ADVENTURE, PUBG SURVIVOR. En septembre 2019, le groupe a ouvert un nouveau parc : GAME ZONE. Ce dernier sera le premier parc d’attraction au monde entièrement dédié à l’univers des jeux-vidéo.
    </p>

  </div>
  <h1 class="mt-4 mb-5">Decouvrez-nous !</h1>
  <div class="row justify-content-around">
    <div class="card offer_card sm-align-self-center col-sm-12 col-md-6 col-lg-4" style="width: 100%;">
      <img src="{{ asset('images/fairground_index.png')}}" class="card-img-top" alt="parc d'attraction de nuit">
      <div class="card-body title_card">
        <p class="text-center"><a class="offer" href="{{ route('Tarifs.index') }}">Découvrez nos offres</a></p>
      </div>
    </div>
    <div class="card  offer_card sm-align-self-center col-sm-12 col-md-6 col-lg-4" style="width: 100%;">
      <img src="{{ asset('images/arcade_girls_index.png')}}" class="card-img-top" alt="femme sur jeu d'arcade">
      <div class="card-body title_card">
        <p class="text-center"><a class="offer" href="{{ route('Attraction.index') }}">Découvrez nos attractions</a></p>
      </div>
    </div>
    <div class="card offer_card sm-align-self-center col-sm-12 col-md-6 col-lg-4" style="width: 100%;">
      <img src="{{ asset('images/open_index.png')}}" class="card-img-top" alt="enseigne néon open">
      <div class="card-body title_card">
        <p class="text-center"><a class="offer" href="{{ route('calendar') }}">Découvrez nos horaires</a></p>
      </div>
    </div>
    <div class="card offer_card sm-align-self-center col-sm-12 col-md-6 col-lg-4" style="width: 100%;">
      <img src="{{ asset('images/store_index.png')}}" class="card-img-top" alt="gallerie marchande">
      <div class="card-body title_card">
        <p class="text-center"><a class="offer" href="{{ route('miniGame') }}">Découvrez notre mini-jeu</a></p>
      </div>
    </div>
    <div class="card offer_card sm-align-self-center col-sm-12 col-md-6 col-lg-4" style="width: 100%;">
      <img src="{{ asset('images/underground_index.png')}}" class="card-img-top" alt="métro">
      <div class="card-body title_card">
        <p class="text-center"><a class="offer" href="{{ route('geolocalisation') }}">Se rendre au parc ? Par ici !</a></p>
      </div>
    </div>
    <div class="card offer_card sm-align-self-center col-sm-12 col-md-6 col-lg-4" style="width: 100%;">
      <img src="{{ asset('images/restaurant_burger_index.png')}}" class="card-img-top" alt="restaurant américain>
      <div class="card-body title_card">
        <p class="text-center"><a class="offer" href="{{ route('Restaurant.index') }}">Découvrez nos restaurants</a></p>
      </div>
    </div>

  </div>
  <h2 class="text-center best_attraction">Nos attractions phares</h2>
  <div class="row justify-content-around">
    <div class="card offer_card sm-align-self-center col-md-4" style="width: 100%;">
      <img src="{{ asset('images/arcade_justice_league.jpg')}}" class="card-img-top" alt="jeux d'arcades">
      <div class="card-body title_card">
        <p class="text-center offer">Heroes Team</p>
      </div>
    </div>
    <div class="card offer_card sm-align-self-center col-md-4" style="width: 100%;">
      <img src="{{ asset('images/vr_entrance.png')}}" class="card-img-top" alt="entrée réalité virtuelle">
      <div class="card-body title_card">
        <p class="text-center offer">Contagion VR</p>
      </div>
    </div>
    <div class="card offer_card sm-align-self-center col-md-4" style="width: 100%;">
      <img src="{{ asset('images/arcade_with_boy.png')}}" class="card-img-top" alt="jeu d'arcade pour enfant">
      <div class="card-body title_card">
        <p class="text-center offer">Game Center</p>
      </div>
    </div>

  </div>
  <h2 class="text-center title_index">Nos actualités !</h2>
  <p class="text-center news">En raison des conditions sanitaires que vous connaissez, le parc est actuellement fermé jusqu'à nouvel ordre</p>



</div>
@endsection
