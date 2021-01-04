@extends('layouts.app') 

@section('title', 'GameZone - Infos parc')

@section('content')
<h2 class="first_titre_info">Covid-19</h2>
<p class="covid_text">
	En cette période difficile, le parc est actuellement fermé jusqu’a nouvel ordre.
	<br>
	Prenez soin de vous et de vos proches et a bientôt dans votre GameZone !
</p>

<h2 class="first_titre_info">Gamezone geek cybercenter c’est ...</h2>
<div class="info_flex">
	<div class="info_item1">
		<p class="number_info">9</p>
		<p class="name_info">Attactions</p>
	</div>
	<div class="info_item">
		<p class="number_info">5</p>
		<p class="name_info">Restaurants</p>
	</div>
	<div class="info_item">
		<p class="number_info">500K</p>
		<p class="name_info">visiteurs</p>
	</div>
	<div class="info_item">
		<p class="number_info">9000</p>
		<p class="name_info">Hectares</p>
	</div>
</div>

<p class="text_after_info">
	Situé au 80 avenue Roland Moreno, 59410 Anzin, le Gamezone est le premier parc dédié uniquement à l’univers des jeux-vidéos !
	<br>
	Le groupe Geek Cybercenter est une SAS au capital de 45 824 123 euros
	<br>
	Le groupe a également plusieurs parc situé un peu partout dans le monde comme le BATTLE KART VR, FORTNITE ADVENTURE, PUBG SURVIVOR.
</p>
<p class="last_text_info">Une question ? Contactez-nous au 08 59 62 08 59</p>
@endsection