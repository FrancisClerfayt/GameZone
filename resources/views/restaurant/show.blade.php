

@extends('layouts.app')    

<!-- 单个restaurant的显示页面，它的css可以直接放到本文件的html里，也可以尝试到public-> css->style.css 里 -->

@section('content')
   <h2 class="first_titre_r">{{ $restaurant->name }}</h2>
    <div class="container_restaurant_i">
       
              
                    <div class="restaurant_items">
                       
                         <img src=" {{asset($restaurant->image)}} " class="img_i_left" >
                         <div class="restaurant_right_i">  
                            <h3>FORMULE</h3>
                            <p class="restaurant_text_i">{{$restaurant->menu_adult}}</p>
                            <p class="restaurant_text_i">{{$restaurant->menu_child}}</p>
                            <p class="text_restaurant_i">{{$restaurant->description}}</p>
                            <a href=" {{ route('Restaurant.index') }} " class="restaurant_button">Retour</a>

                         </div>
                    </div>
               
             
        +
    </div>

@endsection