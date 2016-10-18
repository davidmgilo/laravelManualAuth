<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        //Pas 1. Obtenir de la base de dades l'usuari amb email --> Model User
        // Comprovar el password:
        // - Hash del password proporcionat (bcrypt).
        // - Comparar amb el de la base de dades.
        // ERROR -> return to login page
        // CORRECT -> redirect to home
        try{
            $user = User::where(["email" => $request->input('email') ])->firstOrFail();
        }catch (\Exception $e){
            return redirect('login');
        }

        if(Hash::check($request->input('password'),$user->password) ){
            return redirect('home');
        }else {
            return redirect('login');
        }


    }
}
