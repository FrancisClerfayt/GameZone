@extends('layouts.app') 

@section('content')
<img src="{{ asset('images/gamezone.jpg')}}" alt="game zone" style="width: 100%;">
<h1 class="titre_recrute mt-4 mb-5">Vous souhaitez nous rejoindre</h1>
<p class="text_recrute">Notre équipe recrute de temps à autre les postes suivants : personnel de direction, personnel technique, personnel de vente, personnel de service. Si vous êtes intéressé, veuillez nous appeler ou nous envoyer un email.</p>
<div class="contact_recrute">
<img src="{{ URL::asset('images/icon_phone.png') }}" alt="téléphone" class="icon_recrute">
<p class="short_text">08 59 62 08 59</p>
</div>

<div class="contact_recrute">
<img src="{{ URL::asset('images/icon_email.png') }}" alt="enveloppe" class="icon_recrute">
<p class="short_text">gamezone@gmail.com</p>
</div>

@endsection

