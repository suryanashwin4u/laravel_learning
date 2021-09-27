<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class httpmethodsController extends Controller
{
    //
    function test_REQUESTS(Request $req){
        return $req->input();
    }    
}
