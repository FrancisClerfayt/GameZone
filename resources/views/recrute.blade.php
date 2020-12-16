@extends('layouts.app') 

<!-- -->

@section('content')
<h2 class="titre_recrute">Vous souhaitez nous rejoindre</h2>
<p class="text_recrute">Notre équipe recrute de temps à autre les postes suivants: personnel de direction, personnel technique, personnel de vente, personnel de service. Si vous êtes intéressé, veuillez nous appeler ou nous envoyer un email.</p>
<div class="contact_recrute">
<img src="{{ URL::asset('images/icon_phone.png') }}" alt="" class="icon_recrute">
<p class="short_text">0606006006</p>
</div>

<div class="contact_recrute">
<img src="{{ URL::asset('images/icon_email.png') }}" alt="" class="icon_recrute">
<p class="short_text">gamezone@gamil.com</p>
</div>

<img src="{{ URL::asset('images/gril.jpeg') }}" alt="" class="gril_footer">
@endsection

