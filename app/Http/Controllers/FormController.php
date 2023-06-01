<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function input(){
        return view('input');
    }

    public function proses(Request $request){
        $this->validate($request,[
            'name' => 'required|min:5|max:30',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        return view('proses',['data' => $request]);
    }
}
