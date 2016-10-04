<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hola', function () {
    echo"hola!";
}); //funcions anònimes o Closures

Auth::logout();
Auth::loginUsingId(1);

//SOLID
//SRP Single Responsability Principle
//Que el codi faci només una cosa.
//
//Route::group(['middleware' => 'auth'] , function(){
//    Route::get('/home','HomeController@index');
//        //->middleware('auth');
////El contrari es amb 'guest'
//});

Route::get('/home','HomeController@index');

//Route::get('/login', function (){
//    return view('auth.login');
//});

Route::get('/login', 'LoginController@login');

Route::get('/register', 'RegisterController@register');
//Route::get('/register', function (){
//    return view('auth.register');
//});