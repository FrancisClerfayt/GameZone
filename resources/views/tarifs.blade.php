@extends('layouts.app') 

<!-- -->

@section('content')
<h2 class="first_titre_r">Bienvenue sur la billeterie Gamezone !</h2>
<p class="tarifs_text">Découvrez nos tarifs exclusives et venez vous amuser avec nous !</p>

<p class="tarif_age">L’entrée pour les enfants de -2 ans est gratuite !</p>

<div class="contenaire_tarifs">
<div class="tarifs_items">
    <img src="{{ URL::asset('images/ticket_children_2to8yr.png') }}" alt="" class="img_tarifs">
    <p class="text_intems text_intems1">Tarifs enfants de 2 a 8 ans <br>12,50 € </p>
</div>
<div class="tarifs_items">
    <img src="{{ URL::asset('images/ticket_children_over8yr.jpg') }}" alt="" class="img_tarifs">
    <p class="text_intems text_intems2">Tarifs enfants de plus de 8 ans<br>13,50 €</p>
</div>
<div class="tarifs_items">
    <img src="{{ URL::asset('images/ticket_adults_over18yr.jpg') }}" alt="" class="img_tarifs">
    <p class="text_intems text_intems3">Tarifs adulte (+18) <br>15 € </p>
</div>
</div>

<h3 class="tarifs_text_tiket">Vous pourrez faire l’achat des billets à votre arrivée au parc</h3>
<p class="text_tarifs_bottom">Estimez le prix de votre journée en quelques clis seulement !</p>

<img src="{{ URL::asset('images/gril.jpeg') }}" alt="" class="gril_footer">
@endsection