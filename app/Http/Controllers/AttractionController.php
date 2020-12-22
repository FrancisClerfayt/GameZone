<?php

namespace App\Http\Controllers;

use App\Attraction;
use Illuminate\Http\Request;

class AttractionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attractions = Attraction::all();
        return view ('attraction.index',['attractions'=>$attractions]);
    }

    public function adminIndex()
    {
        $attractions = Attraction::all();
        return view ('attraction.adminIndex',['attractions'=>$attractions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('attraction.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
			'name' => 'required',
            'xp_gain' => 'required',
            'description' => 'required',
            'background_image' => 'required',
            'background_image_alt' => 'required',
            'logo' => 'required',
            'logo_alt' => 'required',
            'restriction' => 'required'
        ]);

        $logo = $request->file('logo')->store('public/attractions');
        $background_image = $request->file('background_image')->store('public/attractions');
        $logo = substr($logo, 7);
        $background_image = substr($background_image, 7);
        
        $attraction = new Attraction([
            'name' => $request->get('name'),
            'xp_gain' => $request->get('xp_gain'),
            'description' => $request->get('description'),
            'background_image' => $background_image,
            'background_image_alt' => $request->get('background_image_alt'),
            'logo' => $logo,
            'logo_alt' => $request->get('logo_alt'),
            'restriction' => $request->get('restriction')
        ]);
        $attraction->save();

        return redirect()->route('admin')->with('message', 'L\'attraction à bien été ajouté');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Attraction  $attraction
     * @return \Illuminate\Http\Response
     */
    public function show(Attraction $attraction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Attraction  $attraction
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $attraction = Attraction::find($id);
        return view('attraction.edit', ['Attraction' => $attraction]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Attraction  $attraction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $attraction = Attraction::find($id);
        
        $attraction->fill([
            'name',
            'xp_gain',
            'description',
            'background_image_alt',
            'logo_alt',
            'restriction'
        ]);

        if($request->hasFile('logo')){
            $logo = $request->file('logo')->store('public/attractions');
            $logo = substr($logo, 7);
            $attraction->fill(['logo' => $logo]);
        }

        if($request->hasFile('background_image')){
            $background_image = $request->file('background_image')->store('public/attractions');
            $background_image = substr($background_image, 7);
            $attraction->fill(['background_image'=>$background_image]);
        }
        
        $attraction->save();

        return redirect()->route('Attraction.index')->with('message', 'L\'attraction à bien été modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Attraction  $attraction
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $attraction = Attraction::find($id);
        $attraction->delete();

        return redirect()->route('Attraction.index')->with('message', 'L\'attraction a bien été supprimée !');
    }
}
