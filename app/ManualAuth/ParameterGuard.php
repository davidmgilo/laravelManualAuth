<?php

namespace App\ManualAuth;
use Illuminate\Http\Request;

/**
 * Created by PhpStorm.
 * User: alumne
 * Date: 25/10/16
 * Time: 20:08
 */
class ParameterGuard implements Guard
{
    protected $request;

    /**
     * ParameterGuard constructor.
     * @param $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }


    public function check()
    {
        //return isset($_COOKIE['user']) ? true : false;
        if($this->request->has('id')){
            return true;
        }
        return false;
    }

    public function validate(array $credentials)
    {
        return true;
    }

    public function setUser($user)
    {
        // TODO: Implement setUser() method.
    }
}