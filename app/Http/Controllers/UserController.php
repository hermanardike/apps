<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Radcheck;

class UserController extends Controller
{
    public function index(){
        return view('users.index', [
            'user' => Radcheck::get()
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


        $users =  new Radcheck();
        $users->username    = $request->username;
        $users->attribute   = 'ClearPassword-Text';
        $users->op          = ':=';
        $users->value       = $request->value;
        $users->nip         = $request->nip;
        $users->name        = $request->name;
        $users->tgl_lahir   = $request->tgl_lahir;
        $users->id_unit     = $request->id_unit;
        $users->id_jurusan  = $request->id_jurusan;
        $users->id_prodi    = $request->id_prodi;
        $users->id_status   = $request->id_status;
        $users->alamat      = $request->alamat;
        $users->telp        = $request->telp;
        $users->email       = $request->email;
        $users->photo       = $request->photo;
        $users->save();
        return redirect('/users/create');
    }

    public function edit(Request $request , $id){
        return view('users.edit', [
            'users' => Radcheck::find($id)
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

        $users = Radcheck::where('id', $id)->first();
        $users->username    = $request->username;
        $users->attribute   = 'ClearPassword-Text';
        $users->op          = ':=';
        $users->value       = $request->value;
        $users->nip         = $request->nip;
        $users->name        = $request->name;
        $users->tgl_lahir   = $request->tgl_lahir;
        $users->id_unit     = $request->id_unit;
        $users->id_jurusan  = $request->id_jurusan;
        $users->id_prodi    = $request->id_prodi;
        $users->id_status   = $request->id_status;
        $users->alamat      = $request->alamat;
        $users->telp        = $request->telp;
        $users->email       = $request->email;
        $users->photo       = $request->photo;
        $users->save();
        return redirect("/users/{$users->id}");
    }


    public function show($id){

        return view('users.show', [
            'users' => Radcheck::find($id)
        ]);
    }

    public function destroy($id)
    {
        Radcheck::find($id)->delete();
        return redirect('/users');
    }













}
