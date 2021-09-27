<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class user_authenticate extends Controller
{
    function user_login(Request $req){
         
        $data_1 = $req -> input('username');
        $data_2 = $req -> input('password');
        $req -> session() -> put('username', $data_1);
        $req -> session() -> put('password', $data_2);
        return redirect('profile');

    }
}
