<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    // function loadView(){
    //     return view("users");
    // }

    // function loadView(){
    //     // return view("users",["names" => ['anil','bruce','sam']]);
    //     // return view( "users", ["names"=>"peter"] );
    //     $data = ['anil','sam','tonny'];
    //     return view( "users", ["users"=>$data] );
    // }
    
    // function loadView(){
    //     $data = ['anil','sam','tonny'];
    //     return view( "hello", ["users"=>$data] );   
    // }

    // accept form data using form at form.blade.php and show json format
    function getData(Request $req){
        return $req->input();
    }

}
