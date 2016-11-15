<?php

namespace App\Http\Controllers;

use App\ManualAuth\Guard;
use App\ManualAuth\UserProviders\UserProvider;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Hash;
use Session;

class LoginController extends Controller
{
    protected $guard;

    protected $userprovider;

    /**
     * LoginController constructor.
     * @param $guard
     * @param $userprovider
     */
    public function __construct(Guard $guard, UserProvider $userprovider)
    {
        $this->guard = $guard;
        $this->userprovider = $userprovider;
    }


    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Primer pas. Validate login form -> Required fields, response with error, etc.
        $this->validateLogin($request);

        //Check too many attempts TODO

        // Delegar intent d'autentificació a algú altre i tenir en compte
        // que poden haver-hi diferents Users Providers (SQL, ldap...)

        $credentials = $request->only(['email','password']);

        if($this->guard->validate($credentials)){
         //OK TODO
            $this->guard->setUser($this->userprovider->getUserByCredentials($credentials));
            return redirect('home');
        }

        Session::flash('errors',collect(["Login incorrecte"]));
        return redirect('login');

        //OK ->
        //    crear la cookie (cookieguard) o parameterguard,
        //    redirect to home
        //NOT OK -> redirect to login with error messages

    }

    private function validateLogin($request)
    {
        $this->validate($request, [
            'email' => 'email|required', 'password' => 'required',
        ]);

    }

    public function logout()
    {
        \Cookie::forget('user');
        return redirect ('login');
    }

    //Pas 1. Obtenir de la base de dades l'usuari amb email --> Model User
        // Comprovar el password:
        // - Hash del password proporcionat (bcrypt).
        // - Comparar amb el de la base de dades.
        // ERROR -> return to login page
        // CORRECT -> redirect to home
//        try{
//            $user = User::where(["email" => $request->input('email') ])->firstOrFail();
//        }catch (\Exception $e){
//            return redirect('login');
//        }
//
//        if(Hash::check($request->input('password'),$user->password) ){
//            return redirect('home');
//        }else {
//            return redirect('login');
//        }
//
//
//    }
}
