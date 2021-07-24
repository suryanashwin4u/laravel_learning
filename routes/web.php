<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\controller1;

//access web pages inside views using name at url from view folder inside resources
Route::get('/', function () {
    return view('hello');
});

// accessing hello.blade.php from view folder directly
Route::view('hello',"hello");

// accessing hello.blade.php and showing passed parameters in view
Route::get('/hello/{name}', function ($name) {
    return view('hello',["name"=>$name]);
});

// access show function of controller1 class inside controller folder
Route::get('controller1',[controller1::class,'show']);

// access show function of controller1 class inside controller folder
Route::get('controller1/{name}',[controller1::class,'show_name']);

// access hello1.blade.php and calling controller1 class function with dynamic parameters passed from url
Route::get('hello1/{name}',[controller1::class,'show_view_with_parameters']);