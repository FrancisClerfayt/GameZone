<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TarifsController extends Controller
{   
    public function index()
    {
        return view('tarifs');
    }
    
}
