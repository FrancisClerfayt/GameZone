@extends('layouts.app')

@section('content')

<h1 class="text-center title_index">Nos attractions</h1>
  <div class="row justify-content-around">
    <div class="card offer_card sm-align-self-center col-sm-12 col-md-6 col-lg-5" style="width: 100%;">
      
    <div class="d-flex flex-row bd-highlight mb-3">  
      <img src="{{ asset('images/logo_vr.png')}}" class="card-img-top p-2 bd-highlight" alt="logo contagion virtual reality" style="width: 50%;">

    
      <img src="{{ asset('images/icon_male.svg')}}" class="card-img-top p-2 bd-highlight" alt="logo contagion virtual reality" style="width: 5%;">
      <p class="p-2 bd-highlight">Taille minimum d’1m30</p>
    </div>

      <img src="{{ asset('images/vr_entrance.png')}}" class="card-img-top" alt="virtual reality entrance">
      <div class="card-body">
        <p class="text-center offer trans">Vous dirigez une équipe de soldats en charge de découvrir ce qui est arrivé aux scientifiques du laboratoire minier Omega Centuri B.<br>
          Une fois à bord, vous apprenez qu’un terrible virus a fait muter tout l’équipage, et que la station spatiale est maintenant infestée par d’horribles zombies !<br>
          Vous devez donc évacuer votre équipe en tentant de survivre le plus longtemps possible.</p>
      </div>
    </div>
    <div class="card  offer_card sm-align-self-center col-sm-12 col-md-6 col-lg-5" style="width: 100%;">
      <img src="{{ asset('images/logo_battle_kart.png')}}" class="card-img-top" alt="logo battle kart" style="width: 40%">
      <img src="{{ asset('images/battle_kart.png')}}" class="card-img-top" alt="karts">
      <div class="card-body">
        <p class="text-center offer">BattleKart, c’est la quintessence du jeu vidéo, de la réalité augmentée et du karting électrique, ré-unis pour vous procurer des sensations inédites entre amis, en familles ou entre collègues ! C’est avant tout l’un des plus grands écrans de cinéma au monde (deux pistes de 2.000 m2) sur lequel nous projetons différents circuits et modes de jeu, et sur lequel vous évoluez réellement plein gaz à bord d’un kart électrique, tout en interagissant avec le décor, les bonus, et les autres pilotes.</p>
      </div>
    </div>
    <div class="card offer_card sm-align-self-center col-sm-12 col-md-6 col-lg-5" style="width: 100%;">
      <img src="{{ asset('images/logo_champions_league.png')}}" class="card-img-top" alt="logo champions league" style="width: 40%">
      <img src="{{ asset('images/football_pitch.jpg')}}" class="card-img-top" alt="football pitch">
      <div class="card-body">
        <p class="text-center offer">Dans ce jeu vous bénéficiez de la toute dernière technologie hologramme pour affronter les légendes du football en partenariat avec Konami et la licence de simulation de football PES. Venez affronter sur le terrain Maradona, Pelé, Zidane, Messi et bien d’autres.</p>
      </div>
    </div>
    <div class="card offer_card sm-align-self-center col-sm-12 col-md-5 col-lg-5" style="width: 100%;">
      <img src="{{ asset('images/logo_champions_league_survivor.png')}}" class="card-img-top" alt="logo champions league survivor" style="width: 40%">
      <img src="{{ asset('images/champions_league_survivor_football_pitch.png')}}" class="card-img-top" alt="football pitch">
      <div class="card-body">
        <p class="text-center offer">Dans cette version alternative du jeu Champions League, les joueurs de foot sont remplacès par des vampires, des loups
          garous et des zombies. Vous devrez donc marquer des buts sans vous faire dévorer par
          d’horribles créatures.</p>
      </div>
    </div>
    <div class="card offer_card sm-align-self-center col-sm-12 col-md-5 col-lg-5" style="width: 100%;">
      <img src="{{ asset('images/logo_game_center.png')}}" class="card-img-top" alt="logo game center" style="width: 40%">
      <img src="{{ asset('images/arcade_joystick.jpg')}}" class="card-img-top" alt="arcade joystick">
      <div class="card-body">
        <p class="text-center offer">Un espace de 3000 m2 dédié au Retro Gaming. Vous retrouverez toute l’ambiance des salles d’arcade des années 80 avec les bornes de l’époque pour défier vos amis dans les meilleurs jeux retro : Mario, Centipede, Q Bert, Space invaders, Pac-Man...</p>
      </div>
    </div>
    <div class="card offer_card sm-align-self-center col-sm-12 col-md-5 col-lg-5" style="width: 100%;">
      <img src="{{ asset('images/logo_fighter_hard_team.png')}}" class="card-img-top" alt="logo fighter hard team" style="width: 40%">
      <img src="{{ asset('images/boxer.jpg')}}" class="card-img-top" alt="boxer">
      <div class="card-body">
        <p class="text-center offer">Dans ce jeu, il n’y a plus de règle. Vous êtes équipé de la dernière armure sensitive et vous ressentirez tous les coups que vos adversaires vont vous porter.<br>
        Attention donc à ne pas prendre de mauvais coups. Une attraction déconseillée aux femmes enceintes.</p>
      </div>
    </div>
    <div class="card offer_card sm-align-self-center col-sm-12 col-md-5 col-lg-5" style="width: 100%;">
      <img src="{{ asset('images/logo_super_fighter_league.png')}}" class="card-img-top" alt="logo super fighter league" style="width: 40%">
      <img src="{{ asset('images/super_fighter_league_night_fairground.png')}}" class="card-img-top" alt="fairground at night">
      <div class="card-body">
        <p class="text-center offer">Vous aimez les jeux de combat alors bienvenue dans ce grand 8 aux couleurs des plus grands combattants de l’histoire du jeu-vidéo : Ryu, Raiden, Akuma, Yoshimitsu, Sub Zero, Scorpion et plus encore vont vous défier dans ce manège à sensation.</p>
      </div>
    </div>
    <div class="card offer_card sm-align-self-center col-sm-12 col-md-5 col-lg-5" style="width: 100%;">
      <img src="{{ asset('images/logo_heroes_team.png')}}" class="card-img-top" alt="logo heroes team" style="width: 40%">
      <img src="{{ asset('images/heroes_team_iron_man.jpg')}}" class="card-img-top" alt="iron man">
      <div class="card-body">
        <p class="text-center offer">L’attraction ultime de notre parc, un univers entièrement consacré aux super héros Marvel. Embarquez dans une navette qui vous fera voyager dans l’univers des gardiens de la galaxy, Spider-Man, Thor, Iron Man et plus encore. Une aventure unique dont vous serez le héros durant tout le voyage.</p>
      </div>
    </div>
    <div class="card offer_card sm-align-self-center col-sm-12 col-md-5 col-lg-5" style="width: 100%;">
      <img src="{{ asset('images/logo_awesome_heroes_team.png')}}" class="card-img-top" alt="logo awesome heroes team" style="width: 40%">
      <img src="{{ asset('images/knight.jpg')}}" class="card-img-top" alt="knight">
      <div class="card-body">
        <p class="text-center offer">Une plongée épique dans l’univers des vikings et des chevaliers. Vous retrouverez l’ambiance du célèbre jeu For Honor du studio français Ubisoft. Une attraction riche en sensations fortes déconseillée aux âmes sensibles.</p>
      </div>
    </div>

    <h1>Nos attractions</h1>
    <div class="attractions_container">
      <div class="contagion attraction_card">

      </div>
      <div class="battle_kart attraction_card"></div>
      <div class="champions_league attraction_card"></div>
      <div class="champions_league_survivor attraction_card"></div>
      <div class="game_center attraction_card"></div>
      <div class="fighter_hard_team attraction_card"></div>
      <div class="super_fighter_league attraction_card"></div>
      <div class="heroes_team attraction_card"></div>
      <div class="awesome-heroes_team attraction_card"></div>
    </div>





@endsection
