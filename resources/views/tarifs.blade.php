@extends('layouts.app')

@section('content')
<h1 class="mt-4 mb-5">BIENVENUE SUR LA BILLETERIE DE GAME ZONE !</h1>
<p class="price_text">Découvrez nos tarifs exclusifs et venez vous amuser avec nous !</p>

<p class="price_age">L’entrée pour les enfants de -2 ans est gratuite !</p>

<div class="container_prices">


    <img src="{{ URL::asset('images/ticket_children_2to8yr.png') }}" alt="tarifs enfants de 2 à 8 ans" class="img_prices">
 
    <img src="{{ URL::asset('images/ticket_children_over8yr.jpg') }}" alt="tarifs enfants de plus de 8 ans" class="img_prices">
   
    <img src="{{ URL::asset('images/ticket_adults_over18yr.png') }}" alt="tarifs adultes de plus de 18 ans" class="img_prices">
   
</div>

<h3 class="prices_text_ticket">Vous pourrez faire l’achat des billets à votre arrivée au parc</h3>
<p class="text_prices_bottom">Estimez le prix de votre journée en quelques clics seulement !</p>

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