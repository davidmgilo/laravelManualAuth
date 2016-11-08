<?php

namespace App\Http\Controllers;

use App\ManualAuth\UserProviders\UserProvider;
use Illuminate\Http\Request;

use App\Http\Requests;

class RegisterController extends Controller
{
    protected $userprovider;

    public function __construct(UserProvider $userprovider)
    {
        $this->userprovider = $userprovider;
    }

    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $this->validateRegister($request);
        $credentials = $request->only(['name','email','password']);
        $this->userprovider->createUser($credentials);
    }

    private function validateRegister($request)
    {
        $this->validate($request,[
             'nom'=> 'required', 'email' => 'email|required', 'password' => 'required|confirmed',
        ]);
    }
}
