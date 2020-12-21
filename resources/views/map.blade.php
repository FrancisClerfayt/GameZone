@extends('layouts.app')

@section('content')

<section class="mapContainer">
	<h1 class="mt-4 mb-5">Plan du parc</h1>
	<div class="legend">
		<div class="filters">
			<div class="form-group">
				<input type="checkbox" name="servicesFilter" id="servicesFilter" checked>
				<label for="servicesFilter">
					<img class="legendPin" src=" {{ asset('images/icon_services.png') }} " alt="épingle rose qui indique les services sur la carte">
					Services
				</label>
			</div>
			<div class="form-group">
				<input type="checkbox" name="restaurantsFilter" id="restaurantsFilter" checked>
				<label for="restaurantsFilter">
					<img class="legendPin" src=" {{ asset('images/icon_restaurant.png') }} " alt="épingle bleue foncée qui indique les restaurants sur la carte">
					Restaurants
				</label>
			</div>
			<div class="form-group">
				<input type="checkbox" name="shopsFilter" id="shopsFilter" checked>
				<label for="shopsFilter">
					<img class="legendPin" src=" {{ asset('images/icon_shops.png') }} " alt="épingle bleue claire qui indique les boutiques sur la carte">
					Boutiques
				</label>
			</div>
			<div class="form-group">
				<input type="checkbox" name="photoSpotFilter" id="photoSpotFilter" checked>
				<label for="photoSpotFilter">
					<img class="legendPin" src=" {{ asset('images/icon_photo_spots.png') }} " alt="épingle jaune qui indique les points photo sur la carte">
					Points photo
				</label>
			</div>
			<div class="form-group">
				<label for="restrictionFilter">Filtrer selon restriction</label>
				<select name="restrictionFilter" id="restrictionFilter">
					<option value="all" selected>Toutes les attractions</option>
					<option value="noRestriction">Accessible à tous</option>
					<option value="more1m10">Taille minimum 1m10</option>
					<option value="more1m30">Taille minimum 1m30</option>
				</select>
			</div>
		</div>
	</div>
	
	<div class="map mb-5">
		<img src="{{ asset('images/map_empty.jpg') }}" class="fullMap" alt="plan du parc">

		<img src="{{ asset('images/icon_photo_spots.png') }}" class="photoSpot1" id="photoSpots" alt="épingles jaunes">
		<img src="{{ asset('images/icon_photo_spots.png') }}" class="photoSpot2" id="photoSpots" alt="épingles jaunes">
		<img src="{{ asset('images/icon_photo_spots.png') }}" class="photoSpot3" id="photoSpots" alt="épingles jaunes">
		<img src="{{ asset('images/icon_photo_spots.png') }}" class="photoSpot4" id="photoSpots" alt="épingles jaunes">
		<img src="{{ asset('images/icon_photo_spots.png') }}" class="photoSpot5" id="photoSpots" alt="épingles jaunes">
		
		<img src="{{ asset('images/icon_restaurant.png') }}" class="restaurant1" id="restaurants" alt="épingle bleue foncée">
		<img src="{{ asset('images/icon_restaurant.png') }}" class="restaurant2" id="restaurants"alt="épingle bleue foncée">
		<img src="{{ asset('images/icon_restaurant.png') }}" class="restaurant3" id="restaurants"alt="épingle bleue foncée">
		<img src="{{ asset('images/icon_restaurant.png') }}" class="restaurant4" id="restaurants"alt="épingle bleue foncée">
		<img src="{{ asset('images/icon_restaurant.png') }}" class="restaurant5" id="restaurants"alt="épingle bleue foncée">
		
		<img src="{{ asset('images/icon_shops.png') }}" class="shop1" id="shops" alt="épingle bleue claire">
		<img src="{{ asset('images/icon_shops.png') }}" class="shop2" id="shops" alt="épingle bleue claire">
		<img src="{{ asset('images/icon_shops.png') }}" class="shop3" id="shops" alt="épingle bleue claire">
		<img src="{{ asset('images/icon_shops.png') }}" class="shop4" id="shops" alt="épingle bleue claire">
		<img src="{{ asset('images/icon_shops.png') }}" class="shop5" id="shops" alt="épingle bleue claire">
		
		<img src="{{ asset('images/icon_services.png') }}" class="service1" id="services" alt="épingle rose">
		<img src="{{ asset('images/icon_services.png') }}" class="service2" id="services" alt="épingle rose">
		<img src="{{ asset('images/icon_services.png') }}" class="service3" id="services" alt="épingle rose">
		<img src="{{ asset('images/icon_services.png') }}" class="service4" id="services" alt="épingle rose">
		<img src="{{ asset('images/icon_services.png') }}" class="service5" id="services" alt="épingle rose">
		
		<img class="championsLeagueSurvivor" src="{{asset('images/logo_champions_league_survivor.png')}}" alt="logo de l'attraction champions league survivor">
		<img class="superFighterLeague" src="{{asset('images/logo_super_fighter_league.png')}}" alt="logo de l'attraction super fighter league">
		<img class="fighterHardTeam" src="{{asset('images/logo_fighter_hard_team.png')}}" alt="logo de l'attraction fight hard team">
		<img class="awesomeHeroes" src="{{asset('images/logo_awesome_heroes_team.png')}}" alt="logo de l'attraction awesome heroes team">
		<img class="championsLeague" src="{{asset('images/logo_champions_league.png')}}" alt="logo de l'attraction champions leaguge">
		<img class="contagionVR" src="{{asset('images/logo_contagion_vr.png')}}" alt="logo de l'attraction contagion vr">
		<img class="battleKart" src="{{asset('images/logo_battle_kart.png')}}" alt="logo de l'attraction battle kart">
		<img class="gameCenter" src="{{asset('images/logo_game_center.png')}}" alt="logo de l'attraction game center">
		<img class="heroesTeam" src="{{asset('images/logo_heroes_team.png')}}" alt="logo de l'attraction heroes team">
	</div>
	
</section>
<script src="js/map.js"></script>

@endsection