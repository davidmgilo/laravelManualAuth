<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use PDO;

class HomeController extends Controller
{


    public function index()
    {
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

    private function userIsAuthenticated()
    {
        if (isset($_GET['user'])){
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
