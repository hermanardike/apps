<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){

        $user = DB::table('radcheck')->get();

        return view('users.index', [
            'user' => $user
        ]);
    }
    public function show($user){

        return view('users.show', [
            'user' => $user
        ]);

    }



}
