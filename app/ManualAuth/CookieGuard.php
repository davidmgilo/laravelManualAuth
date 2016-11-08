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
    protected $provider;

//    /**
//     * CookieGuard constructor.
//     * @param $provider
//     */
//    public function __construct(UserProvider $provider)
//    {
//        $this->provider = $provider;
//    }


    public function check()
    {
        return isset($_COOKIE['user']) ? true : false;
    }

    public function validate(array $credentials)
    {
//       return $this->provider->validate($credentials);
    }

    public function setUser($user)
    {
        // TODO: Implement setUser() method.
    }
}