<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use PDO;

class HomeController extends Controller
{


    public function index()
    {
        $this->setUserCookie();
        //ESTAT SESSIÓ
        if ($this->userIsAuthenticated()){
        $user = $this->getuser();
        return view('home')
            ->withUser($user);
        }   else{

            return redirect('login');
        }

      //  '{"name" : "David", "sn1" : "Martinez"}'

    }

    private function setUserCookie(){
        $user= User::find(1);
        setcookie('user',json_encode($user));
    }

    private function userIsAuthenticated()
    {
        if (isset($_COOKIE['user'])){
            return true;
        }else{
            return false;
        }

    }

    private function getuser()
    {
        //Opció 1: Query_String $_GET
        //dd(json_decode($_GET['user']));
        //return json_decode($_GET['user']);
        $id = $_GET['user'];
        return User::findOrFail($id);

    }
}
