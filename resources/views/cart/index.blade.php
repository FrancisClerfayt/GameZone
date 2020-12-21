@extends('layouts.app') 

<!--  -->

@section('content')

<h2 class="first_titre_r">Votre panier</h2>

<div class="frist_ligne_cart">
<p class="frist_ligne_content">Produit</p>
<p class="frist_ligne_content">Prix unitaire TTC</p>
<p class="frist_ligne_content">Quantité</p>
<p class="frist_ligne_content">Total TTC</p>
</div>



<div class="container_product">
@foreach ($cart as $product)

<div class="items_cart_product">
<img src=" {{asset($products->image)}} " class="img_carts" >
<p class="info_product">{{$products->name}} </p>
<p class="info_product">{{$products->price}} </p>
<p class="info_product">{{$Cart_products->quantity}} </p>
<p class="info_product">{{$Cart_products->totalTTC}} </p>
</div>

@endforeach
<P class="total_cart">Total articles: {{$cart->total}} €</P>

</div>

<div class="button_flex">
<a href="{{ route('Prouduct.index') }} " class="carts">Continuer mes achats</a>
<a href="{{ route('') }} " class="carts">Continuer la commande </a>
</div>

<div class="flex_cart_bottom">
<div class="flex_items">
<img src=" {{asset('images/icon_truck.png')}} " class="icone_bottom_carts" >   
<h4 class="litte_titre_bottom"></h4>
<p class="text_bottom_cart"></p>
</div>

<div class="flex_items">
<img src=" {{asset('images/icon_phone.png')}} " class="icone_bottom_carts" >
<h4 class="litte_titre_bottom"></h4>
<p class="text_bottom_cart"></p>
</div>

<div class="flex_items">
<img src=" {{asset('images/icon_credit_cards.png')}} " class="icone_bottom_carts" >
<h4 class="litte_titre_bottom"></h4>
<p class="text_bottom_cart"></p>
</div>
</div>
@endsection
