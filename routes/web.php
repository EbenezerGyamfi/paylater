<?php


use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CustomerAppointmentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\RegisterController;
use App\Models\Property;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|ro
*/


Route::get('/', [HomeController::class,'index'])->name('index');

// Route::get('/',[])   

Route::view('/about', 'pages.about')->name('about');
Route::view('/property', 'pages.property')->name('property');
Route::view('/contact', 'pages.contact')->name('contact');
Route::get('/cart-page',[CartController::class,'index'])->name('cart-page');

Route::get('/properties',[PropertyController::class,'index'])->name('properties-home');

Route::post('/pay/{property}',[PaymentController::class,'submit_payment'])->name('pay')->middleware('auth');

Route::get('pay/callback', [PaymentController::class,'callback'])->name('pay.callback');

Route::post('/customer-message/{property}', [CustomerAppointmentController::class,'store_appointment'])->name('customer.appointment');

Route::get('/propert-detail/{property}',function(Property $property){

    return view('pages.single-page',compact('property'));

})->name('single');


Route::post('/contact/store',[ContactController::class,'store'])->name('add');


Route::get('/auth-user',[PaymentController::class,'history'])->name('dashboard');


Route::get('/login', function(){
    return view('forms.login');
})->name('login');


Route::get('/register', function(){

    return view('forms.register');
})->name('register')->middleware('guest');

Route::post('/register',[RegisterController::class,'store'])->name('add-user')->middleware('guest');


Route::get('/logout',[RegisterController::class,'logout'])->name('logout')->middleware('auth');


// Route::post('/login',[RegisterController::class,'add'])->name('login');


Route::post('/login-user',[RegisterController::class,'save'])->name('store-user');