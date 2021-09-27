<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\member;
class member_list_controller extends Controller
{
    function show()
    {
        // to fetch all database data
        // $data = member::all(); 

        // to fetch only 5 rows at a time
        $data = member::paginate(2);

        // send data to view page
        return view('list',['members'=>$data]);
    }
}

