@extends('layouts.app')

@section('content')

<img src="{{ asset('images/open.jpg')}}" alt="open neon sign" style="width: 100%;">

	<h1 class="mt-5 mb-5">NOS HORAIRES</h1>
	<h2 id="today"> Aujourd'hui nous sommes le : </h2>
	<section>
	<div id="app-calendar row justify-content-around">
		
<div class="grid-container col-lg-6 col-md-10 col-sm-8 mx-auto mb-4">
	<div class="grid-item">Lundi</div>
	<div class="grid-item">Mardi</div>
	<div class="grid-item">Mercredi</div>  
	<div class="grid-item">Jeudi</div>
	<div class="grid-item">Vendredi</div>
	<div class="grid-item">Samedi</div>  
	<div class="grid-item">Dimanche</div>
</div>
	</div>
	<div class="col-lg-5 col-md-10 col-sm-6 mx-auto mb-4">
	<h3>Les horaires d’ouverture et de fermeture</h3>
	<ul class="schedule-weekdays schedules">Du lundi au jeudi : 9h-19h</ul>
	<ul class="schedule-weekend schedules"> Du vendredi au samedi (journées prolongées) : 9h-20h</ul>
	<ul class="schedule-first-tuesday schedules">Fermé tous les premiers mardi du mois</ul>
	<ul class="schedule-last-sunday schedules">Tous les derniers dimanches du mois : journée spéciale</ul>
	</div>
</section>
	<script src="{{asset('js/calendar.js')}}"></script>
</div>

@endsection