<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login()
    {
        //Pas 1. Obtenir de la base de dades l'usuari amb email --> Model User
        // Comprovar el password:
        // - Hash del password proporcionat (bcrypt).
        // - Comparar amb el de la base de dades.
        // ERROR -> return to login page
        // CORRECT -> redirect to home

        echo "El login se procesa aquí";
    }
}
