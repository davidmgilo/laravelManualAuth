<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class RegisterController extends Controller
{
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $this->validateRegister($request);
    }

    private function validateRegister($request)
    {
        $this->validate($request,[
             'nom'=> 'required', 'email' => 'email|required', 'password' => 'required|confirmed',
        ]);
    }
}
