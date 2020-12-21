@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <div class="jumbotron jumbotron-fluid">
    <div class="container-fluid">
      <img class="jumbotron_image" src="{{ asset ('images/header_index.png')}}" alt="Parc d'attraction jeux vidéos">
    </div>
  </div>
</div>
<div class="container">
  <div class="row justify-content-around">
    <img class="logo_gamezone col-lg-6" src="{{ asset('images/logo_gamezone.png')}}" alt="logo gamezone geek cybercenter">
    <p class="presentation col-lg-6">
      GEEK CYBERCENTER est une SAS au capital de 45 824 123 euros. Il s’agit d’un groupe possédant plusieurs parcs d’attractions dans le monde comme : BATTLE KART VR, FORTNITE
      ADVENTURE, PUBG SURVIVOR. En septembre 2019, le groupe a ouvert un nouveau parc : GAME ZONE. Ce dernier sera le premier parc d’attraction au monde entièrement dédié à l’univers des jeux-vidéo.
    </p>

  </div>
  <h2 class="text-center title_index">Découvrez-nous !</h2>
  <div class="row justify-content-around">
    <div class="card offer_card sm-align-self-center col-sm-12 col-md-6 col-lg-4" style="width: 100%;">
      <img src="{{ asset('images/fairground_index.png')}}" class="card-img-top" alt="...">
      <div class="card-body title_card">
        <p class="text-center offer"><a href="{{ route('Tarifs.index') }}">Découvrez nos offres</a></p>
      </div>
    </div>
    <div class="card  offer_card sm-align-self-center col-sm-12 col-md-6 col-lg-4" style="width: 100%;">
      <img src="{{ asset('images/arcade_girls_index.png')}}" class="card-img-top" alt="...">
      <div class="card-body title_card">
        <p class="text-center offer"><a href="{{ route('Attraction.index') }}">Découvrez nos attractions</a></p>
      </div>
    </div>
    <div class="card offer_card sm-align-self-center col-sm-12 col-md-6 col-lg-4" style="width: 100%;">
      <img src="{{ asset('images/open_index.png')}}" class="card-img-top" alt="...">
      <div class="card-body title_card">
        <p class="text-center offer"><a href="{{ route('Tarifs.index') }}">Découvrez nos horaires</a></p>
      </div>
    </div>
    <div class="card offer_card sm-align-self-center col-sm-12 col-md-6 col-lg-4" style="width: 100%;">
      <img src="{{ asset('images/store_index.png')}}" class="card-img-top" alt="...">
      <div class="card-body title_card">
        <p class="text-center offer"><a href="{{ route('miniGame') }}">Découvrez notre mini-jeu</a></p>
      </div>
    </div>
    <div class="card offer_card sm-align-self-center col-sm-12 col-md-6 col-lg-4" style="width: 100%;">
      <img src="{{ asset('images/underground_index.png')}}" class="card-img-top" alt="...">
      <div class="card-body title_card">
        <p class="text-center offer"><a href="{{ route('Tarifs.index') }}">Se rendre au parc ? Par ici !</a></p>
      </div>
    </div>
    <div class="card offer_card sm-align-self-center col-sm-12 col-md-6 col-lg-4" style="width: 100%;">
      <img src="{{ asset('images/restaurant_burger_index.png')}}" class="card-img-top" alt="...">
      <div class="card-body title_card">
        <p class="text-center offer">Découvrez nos restaurants</p>
      </div>
    </div>

  </div>
  <h2 class="text-center best_attraction">Nos attractions phares</h2>
  <div class="row justify-content-around">
    <div class="card offer_card sm-align-self-center col-md-4" style="width: 100%;">
      <img src="{{ asset('images/arcade_justice_league.jpg')}}" class="card-img-top" alt="...">
      <div class="card-body title_card">
        <p class="text-center offer">Heroes Team</p>
      </div>
    </div>
    <div class="card offer_card sm-align-self-center col-md-4" style="width: 100%;">
      <img src="{{ asset('images/vr_entrance.png')}}" class="card-img-top" alt="...">
      <div class="card-body title_card">
        <p class="text-center offer">Contagion VR</p>
      </div>
    </div>
    <div class="card offer_card sm-align-self-center col-md-4" style="width: 100%;">
      <img src="{{ asset('images/arcade_with_boy.png')}}" class="card-img-top" alt="...">
      <div class="card-body title_card">
        <p class="text-center offer">Game Center</p>
      </div>
    </div>

  </div>
  <h2 class="text-center title_index">Nos actualités !</h2>
  <p class="text-center actuality">En raison des conditions sanitaires que vous connaissez, le parc est actuellement fermé jusqu'à nouvel ordre</p>



</div>
@endsection
