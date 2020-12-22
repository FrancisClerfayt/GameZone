<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Laravel') }}</title>

	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}" defer></script>

	<!-- Fonts -->
	<link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Press+Start+2P">

	<!-- Styles -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">


	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<link rel="stylesheet" href="{{ asset('css/style.css')}}">
</head>
<body>
	<div id="app">
		<nav class="navbar navbar-expand-md shadow-sm">
			<div class="container">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
					<span class="fas fa-bars ham"></span>
				</button>

				<div class="collapse navbar-collapse " id="navbarSupportedContent">
					<ul class="navbar-nav row justify-content-center align-items-center">
						<li class="nav-item col">
							<a class="menu nav-link " href=" {{ route('Attraction.index') }} ">
								Attractions
							</a>
						</li>
						<li class="nav-item col">
							<a class="menu nav-link " href="{{ route('map') }}">
								Plan du parc
							</a>
						</li>
						<li class="nav-item col">
							<a class="menu nav-link " href="{{ route('info') }}">
								Infos
							</a>
						</li>
						<li class="nav-item col">
							<a href=" {{ route('home') }} ">
								<img class="logo_header" src="{{ asset('images/logo_gamezone.png')}}" alt="logo GameZone le parc d'attraction entièrement dédié aux jeux-vidéo">
							</a>
						</li>
						<li class=" nav-item col">
							<a class="menu nav-link" href=" {{ route('miniGame') }} ">
								My game
							</a>
						</li>
						<li class="nav-item col">
							<div class="dropdown">
								<a class="menu dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Préparer votre visite
								</a>
								<div class="dropdown-menu" aria-labelledby="dropdownMenu2">
									<a class="dropdown-item btn" href="{{ route('geolocalisation') }}">Se rendre au parc</a>
									<a class="dropdown-item btn" href="{{ route('Tarifs.index') }}">Tarifs et billeteries</a>
									<a class="dropdown-item btn" href="{{ route('calendar') }}">Horaires et calendrier</a>
									<a class="dropdown-item btn" href="{{ route('Restaurant.index') }}">Nos restaurants</a>
								</div>
							</div>
						</li>
						{{-- <li class="nav-item col">
							<a class="menu nav-link nav-item" href="#">Boutique</a>
						</li> --}}
						<!-- Authentication Links -->
						@guest
						<a class="menu nav-item nav-link" href="{{ route('login') }}">
							{{ __('Connexion') }}
						</a>
						@if (Route::has('register'))
						<a class="menu nav-item nav-link" href="{{ route('register') }}">
							{{ __('S\'enregistrer') }}
						</a>
						@endif
						@else

						<li class="nav-item dropdown">
							<img class="userAvatar" src="{{ asset(Auth::user()->avatar) }}" alt="user avatar">
							<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
								{{ Auth::user()->user_name }}
							</a>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
								@if (Auth::user()->isAdmin)
								<a class="dropdown-item" href="{{route('admin')}}">Page d'admministration</a>
								@endif
								<a href=" {{ route('User.show', ['User' => Auth::user()->id]) }} " class="dropdown-item">
									Mon Compte
								</a>
								<a class="dropdown-item" href="{{ route('logout') }}"	onclick="event.preventDefault();document.getElementById('logout-form').submit();">
									{{ __('Logout') }}
								</a>

								<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
									@csrf
								</form>
							</div>
						</li>
						@endguest
					</ul>
				</div>
			</div>
		</nav>
		
		<main>
			@if(session()->has('message'))
			<div class="container-fluid justify-content-center align-items-center">
				{{ session()->get('message') }}
			</div>
			@endif
			@yield('content')
		</main>
		
		<footer class="container-fluid">
			<div class="row">
				<div class="timetable text-center col-sm-12 col-md-12 col-lg-4">
					<h4 class="text_footer">Horaires du parc :</h4>
					<p class="text_footer">Du lundi au jeudi : 9h - 19h</p>
					<p class="text_footer">Du vendredi au samedi : 9h - 20h</p>
					<p class="text_footer">Le dimanche : 9h - 18h</p>
					<p class="text_footer">Fermé tous les premiers mardis du mois</p>
					<p class="text_footer">Besoin d'aide ? 08 59 62 08 59</p>
				</div>
				<div class="text-center col-sm-12 col-md-10 mx-md-auto col-lg-4 pt-lg-5 pt-sm-1">
					<h4 class="text_footer">Suivez-nous !</h4>
					<div class="logo">
						<a href="#" target="_blank"><i class="icon fab fa-facebook fa-3x"></i></a>
						<a href="#" target="_blank"><i class="icon fab fa-instagram fa-3x"></i></a>
						<a href="#" target="_blank"><i class="icon fab fa-linkedin fa-3x"></i></a>
						<a href="#" target="_blank"><i class="icon fab fa-youtube fa-3x"></i></a>
					</div>
				</div>
				<div class="info text-center col-sm-12 col-md-12 col-lg-4">
					<ul>
						<li><a class="text_footer" href="{{ route('info') }}">A propos du parc</a></li>
						<li><a class="text_footer" href="{{ route('Recrute.index') }}">On recrute</a></li>
						<li><a class="text_footer" href="">Dans la presse</a></li>
						<li><a class="text_footer" href="tel:0859620859">Nous contacter</a></li>
					</ul>
				</div>
			</div>
			<div class="row justify-content-around text-center">
				<p><a class="text_footer col-lg-4" href="{{ route('terms_of_sales') }}">Conditions de vente</a></p>
				<p class="copyright">© Copyright 2020 GameZone</p>
				<p><a class="text_footer col-lg-4" href="{{ route('legal_notice') }}">Mentions Légales</a></p>
			</div>
		</footer>
	</div>
</body>
</html>
