<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    //

    public function index(Request $request)
    {

        // if($request->search){
        //     $propert = Property::where('title','LIKE', '%{request->search}%');
        // }
        $properties = Property::latest()->filter()->get();


        $categories = Category::all();

     

        return  view('pages.property', compact('properties', 'categories'));
    }



    public function show(Property $property)
    {

        return view('pages.single-page', compact('property'));
    }
}
