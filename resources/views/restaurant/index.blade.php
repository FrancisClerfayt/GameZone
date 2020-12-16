

@extends('layouts.app')    

<!-- //添加商品后最初的显示页面，它的css可以直接放到本文件的html里，也可以尝试到public-> css->style.css 里 -->

@section('content')
   <h2 class="first_titre">Nos restaurants</h2>
    <div class="container_restaurant">
       
                 @foreach ($restaurants as $restaurant)
                    <div class="items_restaurant">
                       
                         <img src=" {{asset($restaurant.image)}} " class="img_r_left" style="height: 200px">
                         <div class="restaurant_right">  
                            <h3>{{$restaurant->name}}</h3>
                            <p class="restaurant_text">{{$restaurant->description}}</p>
                            <a href=" {{ route('restaurant.show', ['restaurant', $restaurant]) }} " class="restaurant_button">En savoir plus</a>

                         </div>
                    </div>
                 @endforeach
             
        
    </div>

@endsection