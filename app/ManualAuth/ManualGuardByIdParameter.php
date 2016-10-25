<?php

namespace App\ManualAuth;
use Illuminate\Http\Request;

/**
 * Created by PhpStorm.
 * User: alumne
 * Date: 25/10/16
 * Time: 20:08
 */
class ManualGuardByIdParameter implements Guard 
{
    protected $request;

    /**
     * ManualGuardByIdParameter constructor.
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
}