<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  /**
  * Create a new controller instance.
  *
  * @return void
  */
  public function __construct()
  {
    
  }
  
  /**
  * Show the application dashboard.
  *
  * @return \Illuminate\Contracts\Support\Renderable
  */
  public function index() {
    return view('home');
  }
  
  public function map() {
    return view('map');
  }
  
  public function game() {
    return view('game');
  }
  
  public function admin() {
    return view('admin');
  }
  
  public function geolocalisation() {
    return view('geolocalisation');
  }
  
  public function info() {
    return view('info');
  }
  
  public function calendar() {
    return view('calendar');
  }
  
  public function termsOfSales() {
    return view('terms_of_sales');
  }
  
  public function legalNotice() {
    return view('legalNotice');
  }

  public function recrute() {
    return view('recrute');
  }

  public function tarifs() {
    return view('tarifs');
  }
}
