<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'PagesController@welcome') ;

Route::get('/about', 'PagesController@about') ;

Route::get('/contact', 'PagesController@contact') ;

/*
Route::get('/', function () {

    $tasks = ['<script>alert("Eh kamu");</script>', 'Minum', 'Tidur', 'Coding', 'Ibadah'];
    
    return view('layouts.welcome' , ['tasks' => $tasks ] );

    //return view('layouts.welcome')->withTasks($tasks) ;

    //return view('layouts.welcome', compact('tasks'));
});

Route::get('/contact', function () {
    return view('layouts.contact') ;
});

Route::get('/about', function () {
    return view('layouts.about') ;
});

*/