@extends('layouts.app') 

<!--  -->

@section('content')

<h2 class="first_titre_r">Votre panier</h2>

<div class="frist_ligne_cart">
<p class="frist_ligne_content"></p>
<p class="frist_ligne_content"></p>
<p class="frist_ligne_content"></p>
<p class="frist_ligne_content"></p>
</div>



<div class="container_product">
@foreach ($products as $product)

<div class="items_product">
<img src=" {{asset($products->image)}} " class="img_product" >
<p class="info_product">
{{$products->name}} <br> {{$products->price}}
</p>

<button class="achter_button">Ajouter au panier</button>
</div>

@endforeach

</div>

<div class="button_flex">
<a href="{{ route('Cart.index') }} " class="carts">
<img src="{{ asset('images/carts.png') }}" alt="" class="icon_carts">
</a>
<a href="{{ route('Cart.index') }} " class="carts">
<img src="{{ asset('images/carts.png') }}" alt="" class="icon_carts">
</a>
</div>

<div class="flex_cart_bottom">
<div class="flex_items"></div>
<div class="flex_items"></div>
<div class="flex_items"></div>
</div>
@endsection
