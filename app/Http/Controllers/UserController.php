<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){

        return view('users.index');
    }
    public function show(){
        return view('users.show');

    }

    public function test()
    {
        return view('test');
    }

}
