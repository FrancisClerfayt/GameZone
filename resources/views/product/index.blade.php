@extends('layouts.app') 

<!-- //restaurant的显示页面，它的css可以直接放到本文件的html里，也可以尝试到public-> css->style.css 里 -->

@section('content')


<h2 class="first_titre_r">Pour garder un souvenir ou pour tout simplement vous faire plaisir avec nos produits 100% jeux-vidéos !</h2>
<a href="{{ route('Cart.index') }} " class="carts">
<img src="{{ asset('images/carts.png') }}" alt="" class="icon_carts">
</a>



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

@endsection


