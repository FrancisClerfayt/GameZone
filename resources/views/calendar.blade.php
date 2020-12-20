@extends('layouts.app')

@section('content')

<img src="{{ asset('images/open.jpg')}}" alt="open neon sign" style="width: 100%;">

	<h1 class="mt-5 mb-5">NOS HORAIRES</h1>
	<h2 id="today"></h2>
	<section>
	<div id="app-calendar">
		
<div class="grid-container">
	<div class="grid-item">Lundi</div>
	<div class="grid-item">Mardi</div>
	<div class="grid-item">Mercredi</div>  
	<div class="grid-item">Jeudi</div>
	<div class="grid-item">Vendredi</div>
	<div class="grid-item">Samedi</div>  
	<div class="grid-item">Dimanche</div>
</div>
	</div>
	<li>les horaires d’ouverture et de fermeture du jour.</li>
	<ul>Du lundi au jeudi : 9h-19h</ul>
	<ul> Du vendredi au samedi : 9h-20h : Tous les vendredis et samedis: nocturnes</ul>
	<ul>Fermé tous les premiers mardi du mois</ul>
	<ul>Tous les derniers dimanches du mois soirée spéciale</ul>
</section>
	<script src="{{asset('js/calendar.js')}}"></script>
</div>


@endsection