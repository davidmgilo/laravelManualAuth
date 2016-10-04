<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use PDO;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // $name = 'Victoria';
       // $data= ['username'=>'Victoria'];
        //equivalent compact($user)
        //return view('home',['username'=>'Victoria']);
        //return view('home')->with('username','Victoria');

        //$user=new Usuari('Sergi','Tur');
        // return view('home')->withUser($user);

        //$user = new User();

//        $user= User::find(1);
//
//        return view('home')
//            ->withUser($user);

//        $pdo = new PDO('sqlite:/home/alumne/Code/laravelManualAuth/database/database.sqlite');
//        $query = $pdo->prepare('SELECT * FROM users WHERE id=1');
//        $query->execute();
//        $row = $query->fetch();
        //dd($row);

//        Auth::loginUsingId(1);
//        Auth::logout();


        //Middleware
        // S'executa enmig. Entre els usuaris i el codi


            $user= Auth::user();

            return view('home')
                ->withUser($user);




    }
}
