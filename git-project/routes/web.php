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

Route::get('/', function () {
    $comments = Comment::all();
    return view('welcome', compact('comments'));
    // just some placeholder shit
});

Route::get('/create', function(){
    return view('create');
});

Route::get('/create', function(){
    return view('create');
});

Route::get('/create', function(){
    return view('create');
});

Route::get('/create', function(){
    return view('create');
});

