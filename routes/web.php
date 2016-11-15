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
//
use App\User;
//use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

//$user= User::findOrFail(1);
//setcookie('user',$user->token);



//PAS 1: Middleware. Com protegir pàgines.
Route::group(['middleware' => 'manualauth'], function () {
    Route::get('/tasques', function () {
        return view('tasques');
    });
    Route::get('/home', function () {
        return "Home!!";
    });
});

Route::get('/login', function () {
    return view('login');
});

//PAS 2. User providers

Route::get('/login', 'LoginController@showLoginForm');
Route::post('/login', 'LoginController@login');

Route::get('/register', 'RegisterController@showRegisterForm');
Route::post('/register', 'RegisterController@register');

Route::get('/logout','LoginController@logout');


//
//Route::get('/hola', function () {
//    echo"hola!";
//}); //funcions anònimes o Closures
//
////Auth::logout();
////Auth::loginUsingId(1);
//
////SOLID
////SRP Single Responsability Principle
////Que el codi faci només una cosa.
////
////Route::group(['middleware' => 'auth'] , function(){
////    Route::get('/home','HomeController@index');
////        //->middleware('auth');
//////El contrari es amb 'guest'
////});
//
//Route::get('/home','HomeController@index');
//
////Route::get('/login', function (){
////    return view('auth.login');
////});
//
//Route::get('/login', 'LoginController@showLoginForm');
//Route::post('/login', 'LoginController@login');
//
//Route::get('/register', 'RegisterController@register');
//Route::get('/register', function (){
//    return view('auth.register');
//});