<?php

namespace App\ManualAuth;
/**
 * Created by PhpStorm.
 * User: alumne
 * Date: 25/10/16
 * Time: 20:08
 */
class CookieGuard implements Guard
{

    /**
     * ManualGuard constructor.
     */
    public function __construct()
    {

    }

    public function check()
    {
        return isset($_COOKIE['user']) ? true : false;
    }
}