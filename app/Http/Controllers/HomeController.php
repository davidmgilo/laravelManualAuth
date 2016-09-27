<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    public function index()
    {
        // $name = 'Victoria';
       // $data= ['username'=>'Victoria'];
        //return view('home',['username'=>'Victoria']);
        //return view('home')->with('username','Victoria');

        //$user=new Usuari('Sergi','Tur');
        // return view('home')->withUser($user);

        return view('home')
            ->withUsername('Victoria')
            ->withSurname('Tur');
    }
}
