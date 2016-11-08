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
            return false;
        }

        if(Hash::check($credentials['password'],$user->password) ){
            return true;
        }else {
            return false;
        }
    }
}