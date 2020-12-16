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
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
	
	<!-- Styles -->
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<link rel="stylesheet" href="{{ asset('css/style.css')}}">
</head>
<body>
	<div id="app">
		{{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
			<div class="container">
				<a class="navbar-brand" href="{{ url('/') }}">
					{{ config('app.name', 'Laravel') }}
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
					<span class="navbar-toggler-icon"></span>
				</button>
				
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<!-- Left Side Of Navbar -->
					<ul class="navbar-nav mr-auto">
						
					</ul>
					
					<!-- Right Side Of Navbar -->
					<ul class="navbar-nav ml-auto">
						<!-- Authentication Links -->
						@guest
						<li class="nav-item">
							<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
						</li>
						@if (Route::has('register'))
						<li class="nav-item">
							<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
						</li>
						@endif
						@else
						<li class="nav-item dropdown">
							<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
								{{ Auth::user()->name }}
							</a>
							
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="{{ route('logout') }}"
								onclick="event.preventDefault();
								document.getElementById('logout-form').submit();">
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
	</nav> --}}

	<nav class="navbar navbar-expand-lg navbar-light bg-light nav-fill">	
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="{{ route('Attraction.index') }}">Attractions</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Plan du parc</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">My game</a>
				</li>


				<li class="nav-item">
					<a class="nav-link" href="{{ route('home') }}">
						<img src="{{ asset('images/logo_gamezone.png') }}" width="200" height="120" alt="" loading="lazy">
					</a>
				</li>


				
				<li class="nav-item">
					<a class="nav-link" href="#">Boutique</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Préparer ma visite
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">Comment venir?</a>
						<a class="dropdown-item" href="#">Tarifs & Billeterie</a>
						<a class="dropdown-item" href="#">Calendrier</a>
						<a class="dropdown-item" href="{{ route('Restaurant.index') }}">Nos Restaurants</a>
					</div>
				</li>
{{-- 

				<ul class="navbar-nav ml-auto">
					<!-- Authentication Links -->

					<li class="nav-item">
						<a class="nav-link" href="{{ route('') }}">Mon compte</a>
					</li>

					@guest
					<li class="nav-item">
						<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
					</li>
					@if (Route::has('register'))
					<li class="nav-item">
						<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
					</li>
					@endif
					@else
					<li class="nav-item dropdown">
						<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
							{{ Auth::user()->name }}
						</a>
						
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="{{ route('logout') }}"
							onclick="event.preventDefault();
							document.getElementById('logout-form').submit();">
							{{ __('Logout') }}
						</a>
						
						<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
							@csrf
						</form>
					</div>
				</li>
				@endguest
			</ul>
 --}}


				
				{{-- <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Français
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">English</a>
						<a class="dropdown-item" href="#">Español</a>
					</div>
				</li> --}}

				<select class=form-control>
					<option value=un>Français</option>
					<option value=deux>English</option>
					<option value=trois>Español</option>
				 </select>	


			</ul>
		</div>
	</nav>
	<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<h1 class="display-4">Fluid jumbotron</h1>
			<p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
		</div>
	</div>



	
	<main class="py-4">
		@yield('content')
	</main>

	<footer>
		<div class="container">
			<!-- Content here -->
			<p>Horaires du parc :</p>
			<p>Du lundi au jeudi : 9h-19h</p>
			<p>Du vendredi au samedi : 9h-20h</p>
			<p>Le dimanche : 9h – 18h</p>
			<p>Fermé tous les premiers mardis du mois</p>
			<p>Besoin d’aide  08 59 62 08 59</p>

		</div>
		<div>
			<a class="nav-link" href="#">A propos du Parc</a>
			<a class="nav-link" href="#">On rescrute</a>
			<a class="nav-link" href="#">Dans la presse</a>
			<a class="nav-link" href="#">Nous contacter</a>
		</div>
	</footer>


</div>
</body>
</html> 
