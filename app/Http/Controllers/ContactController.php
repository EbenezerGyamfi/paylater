<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    //


    public function store(Request $request){

       
    $validator = Validator::make($request->all(), [
        'email' => 'required|email',
        'content' => 'required|',
    ]);

    if ($validator->fails()) {
         return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
    }

    Contact::create([
        'email' => $request->email,
        'content' => $request->content
    ]);

       return redirect()->back()->withToastSuccess('Message Sent Successfully!');

    }
}
