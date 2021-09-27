<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\member;

class member_controller extends Controller
{
    //add data into database using controller and form
    function adddata(Request $req)
    {
        $member = new member;
        $member -> m_name = $req -> name;
        $member -> m_email = $req -> email;
        $member -> m_address = $req -> address;
        $member -> save();
        return redirect('add');
    }
}
