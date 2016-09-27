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
        return view('home')
            ->withUsername('Victoria')
            ->withSurname('Tur');
    }
}
