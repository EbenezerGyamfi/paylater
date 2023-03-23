<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index(){
        $properties = Property::take(3)->get();

        // dd($properties[0]->pictures);
       return view('home',compact('properties'));
    }
}
