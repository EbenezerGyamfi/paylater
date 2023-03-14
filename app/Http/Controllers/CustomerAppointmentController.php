<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CustomerAppointmentController extends Controller
{
    //

    public function store_appointment(Request $request, Property $property){


   $appointment =  Appointment::create([
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'date' => $request->date,
        'time' => $request->time,
        'propertyname' => $property->title,
    ]);

    if($appointment){
 return  redirect()->back()->with('success','Thank you for contacting us, we will be in touch shortly');
    }


    $validator = Validator::make($request->all(), [
        'name' => 'required',
        'email' => 'email|required',
        'phone' => 'required',
        'date' =>  'required',
        'time' => 'required',
        'property_name' => 'required'
    ]);

    if ($validator->fails()) {
        return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
    }
      return redirect()->back()->with('toast_success', 'User Created Successfully!');
   
}
}
