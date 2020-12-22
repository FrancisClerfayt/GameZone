@extends('layouts.app')

@section('content')

<img src="{{ asset('images/between_reality_and_virtual.png')}}" alt="virtual reality sentence" style="width: 100%;">

<h1 class="mt-4 mb-5">Nos attractions</h1>
<div class="row justify-content-around">
  @foreach ($attractions as $attraction)
      
 
  <div class="card text-white col-lg-5 col-md-10 mx-2 mb-4" >
    <img src="{{ asset('storage/'.$attraction->background_image)}}" class="card-img" alt="{{$attraction->background_image_alt}}" style="height: 500px">
    <div class="card-img-overlay">
      <img src="{{ asset('storage/'.$attraction->logo)}}" class="card-img-top p-2 bd-highlight logo-attraction" alt="{{$attraction->logo_alt}}">
      <div>
        <img src="{{ asset('images/icon_man_light.png')}}" class="card-img-top p-2 bd-highlight d-inline-flex" alt="icon man" style="width: 5%;">
        <p class="p-2 bd-highlight d-inline-flex">{{$attraction->restriction}}</p>
      </div>
      <h3>XP {{$attraction->xp_gain}} par partie</h3>
      <p class="card-text">{{$attraction->description}}</p>
    </div>
  </div>
  @endforeach
</div> 

@endsection
