<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class upload_controller extends Controller
{

    function uploader(Request $req){
        return $req->file('file')->store('img');
    }
    
}
