@extends('layouts.app')

@section('content')
<div class="container">
  <blockquote class="blockquote">
    <img class="logo_gamezone" src="{{ asset('images/logo_gamezone.png')}}" alt="logo gamezone geek cybercenter">
    <p class="text-end">
      GEEK CYBERCENTER est une SAS au capital de 45 824 123 euros. Il s’agit d’un groupe possédant plusieurs parcs d’attractions dans le monde comme : BATTLE KART VR, FORTNITE
      ADVENTURE, PUBG SURVIVOR. En septembre 2019, le groupe a ouvert un nouveau parc : GAME ZONE. Ce dernier sera le premier parc d’attraction au monde entièrement dédié à l’univers des jeux-vidéo.
    </p>
  </blockquote>
  <div class="card sm-align-self-center" style="width: 100%;">
  <img src="{{ asset('images/night_fairground.png')}}" class="card-img-top" alt="...">
  <div class="card-body title_card">
    <p class="text-center offer">Découvrez nos offres</p>
  </div>
</div>
<div class="card align-self-center" style="width: 100%;">
<img src="{{ asset('images/arcade_girls.jpg')}}" class="card-img-top" alt="...">
<div class="card-body title_card">
  <p class="text-center offer">Découvrez nos attractions</p>
</div>
</div>
<div class="card align-self-center" style="width: 100%;">
<img src="{{ asset('images/open.jpg')}}" class="card-img-top" alt="...">
<div class="card-body title_card">
  <p class="text-center offer">Découvrez nos horaires</p>
</div>
</div>
<div class="card align-self-center" style="width: 100%;">
<img src="{{ asset('images/gallery.jpg')}}" class="card-img-top" alt="...">
<div class="card-body title_card">
  <p class="text-center offer">Découvrez notre boutique en ligne</p>
</div>
</div>
<div class="card align-self-center" style="width: 100%;">
<img src="{{ asset('images/underground.jpg')}}" class="card-img-top" alt="...">
<div class="card-body title_card">
  <p class="text-center offer">Se rendre au parc ? Par ici !</p>
</div>
</div>
<div class="card align-self-center" style="width: 100%;">
<img src="{{ asset('images/restaurant_burger.jpg')}}" class="card-img-top" alt="...">
<div class="card-body title_card">
  <p class="text-center offer">Découvrez nos restaurants</p>
</div>
</div>

</div>
@endsection
