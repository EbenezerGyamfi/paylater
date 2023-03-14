<?php

namespace App\Http\Controllers;

use App\Models\History;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    //

    public function store(Request $request){

        $validator = Validator::make($request->all(), [
         'name' => 'required|min:3',
         'password' => 'required|min:3',
         'email' => 'required|email|unique:users,email'
     ]);
 
     if ($validator->fails()) {
         return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
     }
 
         $user = User::create([
             'name' => $request->name,
             'email' => $request->email,
             'password' => bcrypt($request->password)
         ]);
 
 
         Auth::login($user);
          
       return redirect('/properties')->with('toast_success', 'User Created Successfully!');
         
     }


     public function logout(){
        Auth::logout();



        return redirect('/')->with('toast_success', 'You have successfully logout');
    }


    // public function show(){
    //     return view('form.login');
    // }


    public function save(Request $request){
    
        

        $validator = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:3'
    
         ]);
    
    
        $user  = Auth::attempt($validator);

        if(!$user){
               return redirect()->back()->with('toast_error', 'Authentication failed. kindly check email and password provided');
        }

        return redirect('/properties')->with('toast_success', 'Welcome back '. auth()->user()->name);


    
            return back()->with('toast_error');
        }


        
}
