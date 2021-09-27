<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\member;

class list_edit_delete extends Controller
{
    function show_list_data(){
        $data = member::all();
        return view('list_edit',['members'=>$data]);
    }

    function edit_function($id){
        return member::find($id);
    }

    function delete_function($id){
        $data = member::find($id);
        $data->delete();
        return redirect('list_edit');
    }
}
