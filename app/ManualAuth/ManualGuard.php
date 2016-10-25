<?php

namespace App\ManualAuth;
/**
 * Created by PhpStorm.
 * User: alumne
 * Date: 25/10/16
 * Time: 20:08
 */
class ManualGuard
{

    /**
     * ManualGuard constructor.
     */
    public function __construct()
    {

    }

    public function check()
    {
        $token = $_COOKIE['user'];
        return User::where(["token" => $token ])->first();
    }
}