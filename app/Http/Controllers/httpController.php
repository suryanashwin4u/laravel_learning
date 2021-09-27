<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class httpController extends Controller
{
    function index(){
        //pass api string here to fetch data from api and show in the page
        $data = Http::get("https://gorest.co.in/public/v1/users");
        return view('http_view',['collection'=>$data['data']]);
    }
}
