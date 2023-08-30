<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Termwind\renderUsing;

class UserController extends Controller
{
    public function index(){

        $user = DB::table('radcheck')->get();

        return view('users.index', [
            'user' => $user
        ]);
    }
    public function show($id){

        return view('users.show', [
            'users' => DB::table('radcheck')->find($id)
        ]);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        dd('ok Masuk');
    }









}
