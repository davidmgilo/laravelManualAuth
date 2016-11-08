<?php

namespace App\ManualAuth\UserProviders;


use App\User;
use Hash;
use Session;

class EloquentUserProvider implements UserProvider
{

    public function validate(array $credentials)
    {
        try{
            $user = User::where(["email" => $credentials['email'] ])->firstOrFail();
        }catch (\Exception $e){
            Session::flash('error',["Usuari no trobat a la base de dades"]);
            return redirect('login');
        }

        if(Hash::check($credentials['password'],$user->password) ){
            return redirect('home');
        }else {
            Session::flash('error',["Password incorrecte"]);
            return redirect('login');
        }
    }
}