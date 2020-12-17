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
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;700&display=swap" rel="stylesheet">

	<!-- Styles -->
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<link rel="stylesheet" href="{{ asset('css/style.css')}}">
</head>
<body>
	<div id="app">
		<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
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
	</nav>

	<main class="py-4">
		@yield('content')
	</main>
	<footer class="w-100">
		<div class="row">
			<div class="timetable text-center col-sm-12 col-md-12 col-lg-4">
				<h4 class="text_footer">Horaires du parc :</h4>
				<p class="text_footer">Du lundi au jeudi : 9h-19h</p>
				<p class="text_footer">Du vendredi au samedi : 9h-20h</p>
				<p class="text_footer">Le dimanche : 9h – 18h</p>
				<p class="text_footer">Fermé tous les premiers mardis du mois</p>
				<p class="text_footer">Besoin d'aide ? 08 59 62 08 59</p>
			</div>
			<div class="text-center col-sm-12 col-md-12 col-lg-4 pt-lg-5 pt-sm-1">
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
					<li><a class="text_footer" href="#">A propos du parc</a></li>
					<li><a class="text_footer" href="#">On recrute</a></li>
					<li><a class="text_footer" href="#">Dans la presse</a></li>
					<li><a class="text_footer" href="#">Nous contacter</a></li>
				</ul>
			</div>
		</div>
		<div class="row justify-content-around text-center">
			<p><a class="text_footer col-lg-4" href="#">Conditions de vente</a></p>
			<p><a class="text_footer col-lg-4" href="#">© Copyright 2020 GameZone</a></p>
			<p><a class="text_footer col-lg-4" href="#">Mentions Légales</a></p>
		</div>
	</footer>
</div>
</body>
</html>
