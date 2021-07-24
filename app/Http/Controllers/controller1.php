<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controller1 extends Controller
{
    function show(){
        return "running show function of controller 1 class";
    }

    function show_name($name){
        return "taking data from url and return on screen:".$name;
    }

    function show_view_with_parameters($name){
        return view('hello1',['name'=>$name]);
    }
}
