<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //

    function welcome() {
        
        $tasks = ['<script>alert("Eh kamu");</script>', 'Minum', 'Tidur', 'Coding', 'Ibadah'];

        return view('layouts.welcome', ['tasks' => $tasks] );
    }

    function contact(){
        return view('layouts.contact') ;
    }

    function about(){
        return view('layouts.about') ;
    }

}
