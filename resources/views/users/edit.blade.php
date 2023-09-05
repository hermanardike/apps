<x-app-layout title="Edit User SSO">

    <div class="page-heading">
        <h3>Edit User SSo</h3>
    </div>
    <div class="page-content">
        <section class="row">
            <div class="col-12 col-lg-9">
                <div class="row">
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                        <div class="stats-icon purple mb-2">
                                            <i class="iconly-boldEdit"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Profile Views</h6>
                                        <h6 class="font-extrabold mb-0">112.000</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                        <div class="stats-icon red mb-2">
                                            <i class="iconly-boldBookmark"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Saved Post</h6>
                                        <h6 class="font-extrabold mb-0">112</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <section id="multiple-column-form">
                    <div class="row match-height">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Form Pengisian User SSO</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <p><strong>Opps Something went wrong</strong></p>
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                        <form class="form" method="post" action="/users/{{$users->id}}">
                                            @csrf
                                            @method('put')
                                            <div class="row">
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="first-name-column" class="form-label">Nama Lengkap </label>
                                                        <input type="text" id="first-name-column" class="form-control"
                                                               placeholder="Nama Lengkap" name="name"  value="{{$users->name}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="last-name-column">NIK atau NPM</label>
                                                        <input type="text" id="last-name-column" class="form-control"
                                                               placeholder="Nomor Id User" name="nip" value="{{$users->nip}}">
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="">Email</label>
                                                        <input type="email-id-column" id="email" class="form-control" placeholder="email user"
                                                               name="email" value="{{$users->email}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="last-name-column">Username</label>
                                                        <input type="text" id="last-name-column" class="form-control"
                                                               placeholder="Masukan Username " name="username" value="{{$users->username}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="password">Password</label>
                                                        <input type="password" id="country-floating" class="form-control"
                                                               name="value" placeholder="Password" value="{{$users->value}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="kontak">Kontak</label>
                                                        <input type="text" id="company-column" class="form-control"
                                                               name="telp" placeholder="Nomor Telp " value="{{$users->telp}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="tanggal-lahir">Tanggal Lahir</label>
                                                        <input type="date" id="date" class="form-control"
                                                               name="tgl_lahir" placeholder="Tanggal Lahir" value="{{$users->tgl_lahir}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <label for="id_unit">Unit</label>
                                                    <div class="form-group" >
                                                        <select name="id_unit" class="choices form-select">
                                                            <option value="{{$users->id_unit}}">Square</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <label for="id_jurusan">Jurusan</label>
                                                    <div class="form-group">
                                                        <select name="id_jurusan" class="choices form-select">
                                                            <option value="{{$users->id_jurusan}}">Square</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <label for="id_prodi">Prodi</label>
                                                    <div class="form-group">
                                                        <select name="id_prodi" class="choices form-select">
                                                            <option value="{{$users->id_prodi}}">Square</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <label for="id_status">Status</label>
                                                    <div class="form-group">
                                                        <select name="id_status" class="choices form-select">
                                                            <option value="{{$users->id_status}}">Square</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="last-name-column">Photo</label>
                                                        <input type="text" id="last-name-column" class="form-control"
                                                               placeholder="Nomor Id User" name="photo" value="User Photo">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <div class="form-group mb-3">
                                                                    <label for="exampleFormControlTextarea1" class="form-label">Alamat Lengkap User</label>
                                                                    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="8" >{{$users->alamat}}</textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-12">
                                                    <div class='form-check'>
                                                        <div class="checkbox">
                                                            <input type="checkbox" id="checkbox5" class='form-check-input' checked>
                                                            <label for="checkbox5">Remember Me</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                {{--                                                <select name="stuff_type">--}}
                                                {{--                                                    @foreach($stuff_types as $stuff_type)--}}
                                                {{--                                                        <option value="{{ $stuff_type->id }}">{{ $stuff_type->name}}</option>--}}
                                                {{--                                                    @endforeach--}}
                                                {{--                                                </select>--}}
                                                <div class="col-12 d-flex justify-content-end">
                                                    <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                                    <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>

        </section>
    </div>

</x-app-layout>
