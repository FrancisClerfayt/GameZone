<?php

namespace App\Http\Controllers;

use App\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
	/**
	* Display a listing of the resource.
	*
	* @return \Illuminate\Http\Response
	*/
	public function index()
	{
		$restaurants = Restaurant::all();
		return view('restaurant.index',['restaurants' => $restaurants]);
	}
	
	/**
	* Show the form for creating a new resource.
	*
	* @return \Illuminate\Http\Response
	*/
	public function create()
	{
		return view('restaurant.create');
	}
	
	/**
	* Store a newly created resource in storage.
	*
	* @param  \Illuminate\Http\Request  $request
	* @return \Illuminate\Http\Response
	*/
	public function store(Request $request)
	{
		$request->validate(['name' => 'required',	'description' => 'required', 'image' => 'required', 'menu_adult' => 'required', 'menu_child' => 'required']);
		
		$image = $request->file('image')->store('public/restaurants');
		$image = substr($image, 7);
		
		$restaurant = new Restaurant(['name' => $request->get('name'),'description' => $request->get('description'),'image' => $image,'menu_adult' => $request->get('menu_adult'),'menu_child' => $request->get('menu_child')]);
		
		$restaurant->save();
		
		return redirect()->route('admin')->with('message', 'Le restaurant à bien été ajouté');
	}
	
	/**
	* Display the specified resource.
	*
	* @param  int $id
	* @return \Illuminate\Http\Response
	*/
	/* public function show($id)
	{
		$restaurant = Restaurant::find($id);
		return view('restaurant.show',['restaurant' => $restaurant]);
	} */
	public function show($id)
	{
		$restaurant = Restaurant::find($id);
		return view('restaurant.show')->with('restaurant' , $restaurant);
	}
	
	
	/* Show the form for editing the specified resource.
	*
	* @param  \App\Restaurant  $restaurant
	* @return \Illuminate\Http\Response
	*/
	public function edit($id)
	{
		$restaurant = Restaurant::find($id);
		return view('restaurant.edit', ['Restaurant' => $restaurant]);
	}
	
	/**
	* Update the specified resource in storage.
	*
	* @param  \Illuminate\Http\Request  $request
	* @param  \App\Restaurant  $restaurant
	* @return \Illuminate\Http\Response
	*/
	public function update(Request $request, $id)
	{
		$restaurant = Restaurant::find($id);

		$restaurant->fill(['name', 'description', 'menu_adult', 'menu_child']);

		if($request->hasFile('image')){
			$image = $request->file('image')->store('public/restaurants');
			$image = substr($image, 7); // qui enlève 7 caractères sur le path des images restaurant
			$restaurant->fill(['image' => $image]);

		$restaurant->save();

		return redirect()->route('Restaurant.index')->with('message', 'Le restaurant à bien été modifié');
	}
	
	/**
	* Remove the specified resource from storage.
	*
	* @param  \App\Restaurant  $restaurant
	* @return \Illuminate\Http\Response
	*/
	public function destroy($id)
	{
		$restaurant = Restaurant::find($id);
		$restaurant->delete();
		
		return redirect()->route('Restaurant.index')->with('message', 'Le restaurant a bien été supprimé !');
	}
}