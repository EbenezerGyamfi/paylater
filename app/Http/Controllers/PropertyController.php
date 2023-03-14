<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    //

    public function index (){

         $properties = Property::latest()->filter()->get();
        return  view('pages.property',compact('properties'));

    }   


   
}
