<x-app-layout>

    <div class="page-heading">
        <h3>DASHBOARD ADMIN</h3>
    </div>
    <div class="page-content">
        <section class="row">
            <div class="col-12 col-lg-9">
                <div class="row">
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <a href="/users/ {{ $users->id }}/edit">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                        <div class="stats-icon purple mb-2">
                                            <i class="iconly-boldEdit-Square"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">EDIT USER</h6>
                                        <h6 class="font-extrabold mb-0">SSO</h6>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>


                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                        <div class="stats-icon red mb-2">
                                            <i class="iconly-boldUser"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">TOTAL USERS</h6>
                                        <h6 class="font-extrabold mb-0">112</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <section id="basic-horizontal-layouts">
                    <div class="row match-height">
                        <div class="container">
                            <div class="row gutters">
                                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <div class="account-settings">
                                                <div class="user-profile">
                                                    <div class="user-avatar">
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Maxwell Admin">
                                                    </div>
                                                    <h5 class="user-name">{{$users->name}}</h5>
                                                    <h6 class="user-email">{{$users->nip}}</h6>

                                                    <h6 class="user-email">{{ \Carbon\Carbon::parse($users->created_at)->format('d F, Y') }}</h6>
                                                </div>
                                                <div class="about">
                                                    <h5 class="mb-2 text-primary">Alamat Pengguna</h5>
                                                    <p>{{$users->alamat}}</p>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <div class="row gutters">
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <h6 class="mb-3 text-primary">Account Details</h6>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="fullName">Nama</label>

                                                        <input type="text"  value="{{$users->name}}" class="form-control" id="fullName" placeholder=""  readonly disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="username">Username SSO</label>
                                                        <input type="username" class="form-control" id="username" placeholder="{{$users->username}}" readonly disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="phone">Email</label>
                                                        <input type="text" class="form-control" id="phone" placeholder="{{$users->email}}" readonly disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="website">Phone</label>
                                                        <input type="url" class="form-control" id="website" placeholder="{{$users->telp}}" readonly disabled>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row gutters">
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <h6 class="mb-3 text-primary">Unit Details</h6>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="Street">Unit</label>
                                                        <input type="name" class="form-control" id="Street" placeholder="{{$users->id_unit}}" readonly disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="ciTy">Jurusan</label>
                                                        <input type="name" class="form-control" id="ciTy" placeholder="{{$users->id_jurusan}}" readonly disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="sTate">Prodi</label>
                                                        <input type="text" class="form-control" id="sTate" placeholder="{{$users->id_prodi}}" readonly disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="zIp">Tanggal Lahir</label>

                                                        <input type="text" class="form-control" id="zIp" placeholder="{{ \Carbon\Carbon::parse($users->tgl_lahir)->format('d F, Y') }}" readonly disabled>
                                                    </div>
                                                </div>


                                            </div>
{{--                                            <div class="row gutters">--}}
{{--                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">--}}
{{--                                                    <div class="text-right">--}}
{{--                                                        <button type="button" id="submit" name="submit" class="btn btn-secondary">Cancel</button>--}}
{{--                                                        <button type="button" id="submit" name="submit" class="btn btn-primary">Update</button>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
                                        </div>
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
