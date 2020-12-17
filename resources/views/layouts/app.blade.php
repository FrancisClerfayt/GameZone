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

	<nav class="navbar nav nav-fill">
		<a class="menu nav-link nav-item" href="#">Attractions</a>
		<a class="menu nav-link nav-item" href="#">Le plan</a>
		<a class="menu nav-link nav-item" href="#">Infos</a>
		<a class="menu nav-link nav-item" href="#">My game</a>
		<img class="logo_header" src="{{ asset('images/logo_gamezone.png')}}" alt="">
		<a class="menu nav-link nav-item" href="#">Boutique</a>
		<div class="dropdown">
	  <a class="menu dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    Se préparer à votre visite
	  </a>
	  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
	    <button class="dropdown-item" type="button">Se rendre au parc</button>
	    <button class="dropdown-item" type="button">Tarifs et billeteries</button>
	    <button class="dropdown-item" type="button">Horaires et calendrier</button>
			<button class="dropdown-item" type="button">Nos restaurants</button>
	  </div>
	</div>
		<a class="menu nav-link nav-item" href="#">Mon compte</a>
	</nav>

	@guest
	<li class="nav-item">
		<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
	</li>
	@if (Route::has('register'))
	<li class="nav-item">
		<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
	</li>

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
		@endif

	</div>
</li>
@endguest
</ul>
</div>
</nav>


<p class="title_header">Le premier parc d’attraction dédié aux jeux-video</p>
<div class="jumbotron jumbotron-fluid">
	<div class="container-fluid">
		<img class="jumbotron_image" src="{{ asset ('images/header_index.png')}}" alt="Parc d'attraction jeux vidéos">
	</div>
</div>



<main class="py-4">
	@yield('content')
</main>
</div>
</body>
</html>
