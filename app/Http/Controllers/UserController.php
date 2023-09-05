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


    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => ['required'],
//            'attribute' => ['required'],
//            'op' => ['required'],
            'value' => ['required'],
            'nip' => ['required'],
            'name' => ['required'],
            'tgl_lahir' => ['required'],
            'id_unit' => ['required'],
            'id_jurusan' => ['required'],
            'id_prodi' => ['required'],
            'id_status' => ['required'],
            'telp' => ['required'],
            'email' => ['required'],
            'alamat' => ['required']
        ],
            [
                'username.required' => 'Username Wajib diisi',
                'value.required' => 'Password Wajib diisi',
                'nip.required' => 'NPM atau NIP Wajib diisi',
                'name.required' => 'Nama Lengkap Wajib diisi',
                'tgl_lahir.required' => 'Tanggal Lahir  Wajib diisi',
                'id_unit' => 'Unit Wajib diisi',
                'id_jurusan' => 'Username Wajib diisi',
                'id_prodi' => 'Prodi Wajib diisi',
                'id_status' => 'Status User Wajib diisi',
                'telp' => 'Nomor Kontak Wajib diisi',
                'email' => 'Email  Wajib diisi',
                'alamat' => 'Alamat User Wajib Diisi',
            ]);


        DB::table('radcheck')->insert([

            'username' => $request->username,
            'attribute' => 'ClearPassword-Text',
            'op' => ':=',
            'value' => $request->value,
            'nip' => $request->nip,
            'name' => $request->name,
            'tgl_lahir' => $request->tgl_lahir,
            'id_unit' => $request->id_unit,
            'id_jurusan' => $request->id_jurusan,
            'id_prodi' => $request->id_prodi,
            'id_status' => $request->id_status,
            'alamat' => $request->alamat,
            'telp' => $request->telp,
            'email' => $request->email,
            'photo' => $request->photo,
            'created_at' => now(),
            'updated_at' => now(),

            ]);

        return redirect('/users/create');
    }

    public function edit(Request $request , $id){

        return view('users.edit', [
            'users' => DB::table('radcheck')->find($id)
        ]);

    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'username' => ['required'],
//            'attribute' => ['required'],
//            'op' => ['required'],
            'value' => ['required'],
            'nip' => ['required'],
            'name' => ['required'],
            'tgl_lahir' => ['required'],
            'id_unit' => ['required'],
            'id_jurusan' => ['required'],
            'id_prodi' => ['required'],
            'id_status' => ['required'],
            'telp' => ['required'],
            'email' => ['required'],
            'alamat' => ['required']
        ],
            [
                'username.required' => 'Username Wajib diisi',
                'value.required' => 'Password Wajib diisi',
                'nip.required' => 'NPM atau NIP Wajib diisi',
                'name.required' => 'Nama Lengkap Wajib diisi',
                'tgl_lahir.required' => 'Tanggal Lahir  Wajib diisi',
                'id_unit' => 'Unit Wajib diisi',
                'id_jurusan' => 'Username Wajib diisi',
                'id_prodi' => 'Prodi Wajib diisi',
                'id_status' => 'Status User Wajib diisi',
                'telp' => 'Nomor Kontak Wajib diisi',
                'email' => 'Email  Wajib diisi',
                'alamat' => 'Alamat User Wajib Diisi',
            ]);

        $users =  DB::table('radcheck')->where('id', $id)->first();

        DB::table('radcheck')->where('id', $id)->update([
            'username' => $request->username,
            'attribute' => 'ClearPassword-Text',
            'op' => ':=',
            'value' => $request->value,
            'nip' => $request->nip,
            'name' => $request->name,
            'tgl_lahir' => $request->tgl_lahir,
            'id_unit' => $request->id_unit,
            'id_jurusan' => $request->id_jurusan,
            'id_prodi' => $request->id_prodi,
            'id_status' => $request->id_status,
            'alamat' => $request->alamat,
            'telp' => $request->telp,
            'email' => $request->email,
            'photo' => $request->photo,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect("/users/{$users->id}");
    }


    public function show($id){

        return view('users.show', [
            'users' => DB::table('radcheck')->find($id)
        ]);
    }













}
