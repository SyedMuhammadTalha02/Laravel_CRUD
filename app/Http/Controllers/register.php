<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class register extends Controller
{
    public function index(){
        return view('Registartion');
    }
    public function register(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'pass'=>'required',
            'address'=>'required',
            'gender'=>'required',
            'date'=>'required'
        ]);
        echo '<pre>';
        print_r($request->all());
    }
}
