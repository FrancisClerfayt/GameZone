@extends('layouts.app') 

@section('title', 'GameZone - Nous recrutons')

@section('content')
<h2 class="titre_recrute">Vous souhaitez nous rejoindre</h2>
<p class="text_recrute">
	Notre équipe recrute de temps à autre les postes suivants: personnel de direction, personnel technique, personnel de vente, personnel de service. Si vous êtes intéressé, veuillez nous appeler ou nous envoyer un email.
</p>
<div class="contact_recrute">
	<img src="{{asset('images/icon_phone.png')}}" alt="icone de téléphone " class="icon_recrute">
	<a class="short_text" href="tel:+33606006006">0606006006</a>
</div>

<div class="contact_recrute">
	<img src="{{asset('images/icon_email.png')}}" alt="icone d'enveloppe" class="icon_recrute">
	<a class="short_text" href="mailto:gamezone@gmail.com">gamezone@gmail.com</a>
</div>
@endsection