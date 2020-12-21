@extends('layouts.app')

<!-- -->

@section('content')
<h2 class="first_titre_r">Bienvenue sur la billeterie Gamezone !</h2>
<p class="tarifs_text">Découvrez nos tarifs exclusives et venez vous amuser avec nous !</p>

<p class="tarif_age">L’entrée pour les enfants de -2 ans est gratuite !</p>

<!-- <div class="contenaire_tarifs">
<div class="tarifs_items">
    <img src="{{ URL::asset('images/ticket_children_2to8yr.png') }}" alt="" class="img_tarifs">
    <p class="text_intems text_intems1">Tarifs enfants de 2 a 8 ans <br>12,50 € </p>
</div>
<div class="tarifs_items">
    <img src="{{ URL::asset('images/ticket_children_over8yr.jpg') }}" alt="" class="img_tarifs">
    <p class="text_intems text_intems2">Tarifs enfants de plus de 8 ans<br>13,50 €</p>
</div>
<div class="tarifs_items">
    <img src="{{ URL::asset('images/ticket_adults_over18yr.png') }}" alt="" class="img_tarifs">
    <p class="text_intems text_intems3">Tarifs adulte (+18) <br>15 € </p>
</div>
</div> -->

<div class="contenaire_tarifs">


    <img src="{{ URL::asset('images/ticket_children_2to8yr.png') }}" alt="" class="img_tarifs">

    <img src="{{ URL::asset('images/ticket_children_over8yr.jpg') }}" alt="" class="img_tarifs">

    <img src="{{ URL::asset('images/ticket_adults_over18yr.png') }}" alt="" class="img_tarifs">

</div>

<h3 class="tarifs_text_tiket">Vous pourrez faire l’achat des billets dés votre arrivée au parc</h3>
<p class="text_tarifs_bottom">Estimez le prix de votre journée en quelques clis seulement !</p>

<div class="tickets_price text-center">
  <div class="tickets">
    <div>
      <label for="children">Nombre d'enfants entre 2 et 8 ans</label>
    </div>
    <div>
      <p>Place à 12,50 €</p>
    </div>
    <div>
      <select name="children" id="children">
        @for ($i = 0; $i < 11; $i++)
          <option value="{{ $i }}">{{ $i }}</option>
        @endfor
      </select>
    </div>
    </div>
  <div class="tickets">
    <div>
      <label for="children_8">Nombre d'enfants de plus de 8 ans</label>
    </div>
    <div>
      <p>Place à 13,50 €</p>
    </div>
    <div>
      <select name="children_8" id="children_8">
        @for ($i = 0; $i < 11; $i++)
          <option value="{{ $i }}">{{ $i }}</option>
        @endfor
      </select>
    </div>
  </div>
  <div class="tickets">
    <div>
      <label for="adult">Nombre d'adultes(+18)</label>
    </div>
    <div>
      <p>Place à 15 €</p>
    </div>
    <div>
      <select name="adult" id="adult">
        @for ($i = 0; $i < 11; $i++)
          <option value="{{ $i }}">{{ $i }}</option>
        @endfor
      </select>
    </div>
  </div>
  <div>
    <p class="total_price tickets">Le montant total de vos tickets est de <span id="total_price">0€</span></p>
  </div>
</div>
<script type="text/javascript" src="{{ asset('js/price.js') }}"></script>
@endsection
