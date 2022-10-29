@extends('layouts.user')

@section('content')



<div class="container">
    @include('layouts.sidebarUser')

        <div class="row">
            <div class="col mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-row">
                            <a class="mt-3" href="{{route('account.index')}}" style="color: #000;">
                                <p class="marker">Biodata</p>
                            </a>
                            <a class="ml-5 mt-3" href="{{route('password.index')}}" style="color: #000;">
                                <p class="marker"> Ubah Password</p>
                            </a>
                            <a class="ml-5 mt-3" href="{{route('address.index')}}" style="color: #000;">
                                <p class="marker"> Alamat</p>
                            </a>
                        </div>

                        <div class="e-profile mt-1">
                            <div class="row">
                                <div class="col-12 col-sm-auto">
                                    <div class="mx-auto" style="width: 200px;">
                                        <div class="d-flex justify-content-center align-items-center rounded mt-3"
                                            style="height: 200px;">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModalinti">
                                                <img class="rounded"
                                                    src="{{ Auth::user()->avatar === null ? asset('img/boy.png') : asset(Auth::user()->avatar) }}"
                                                    style="width: 220px;height:220px;">
                                            </a>
                                        </div>
                                        <center>
                                            <a type="button" class="btn btn-primary mt-3" data-toggle="modal"
                                                data-target="#exampleModal" style="color: white;">
                                                Edit foto Profile
                                            </a>
                                        </center>
                                        <p style="font-size: 11px;">(Ukuran foto maksimum adalah 10 MB. Jenis
                                            file yang
                                            diperbolehkan yaitu .JPG, .JPEG, dan
                                            .PNG)</p>
                                    </div>
                                </div>

                                <div class="col d-flex flex-column flex-sm-row justify-content-between">
                                    <div class="text-center text-sm-left mb-2 mb-sm-0">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <td colspan="">
                                                        <b>Profil</b>
                                                    </td>
                                                    <th scope="col"></th>
                                                    <th scope="col"></th>
                                                    <th scope="col"> <a href="{{route('editaccount.index')}}">(Edit
                                                            Profil)</a></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td scope="row">Nama</td>
                                                    <td></td>
                                                    <td>:</td>
                                                    <td>{{Auth::user()->fullname}}</td>
                                                </tr>
                                                <tr>
                                                    <td scope="row">Tanggal Lahir</td>
                                                    <td></td>
                                                    <td>:</td>
                                                    <td>{{Auth::user()->birth_date}}</td>
                                                </tr>
                                                <tr>
                                                    <td scope="row">Jenis Kelamin</td>
                                                    <td></td>
                                                    <td>:</td>
                                                    <td>{{Auth::user()->gender}}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="dashed-line mt-1 mb-2"></div>
                                        <table>
                                            <thead>
                                                <tr>
                                                    <td scope="col"><b>Kontak</b></td>
                                                    <th scope="col"></th>
                                                    <th scope="col"></th>
                                                    <th scope="col"><a href="{{route('contact.index')}}">(Edit
                                                            Kontak)</a></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td scope="row">Email</td>
                                                    <td></td>
                                                    <td>:</td>
                                                    <td><b>{{Auth::user()->email}}</b></td>
                                                </tr>
                                                <tr>
                                                    <td scope="row">No. Telepon</td>
                                                    <td></td>
                                                    <td>:</td>
                                                    <td><b>{{Auth::user()->no_HP}}</b></td>
                                                </tr>

                                            </tbody>
                                        </table>
                                        <div class="dashed-line mt-1 mb-2"></div>
                                        <button type="button" class="btn btn-outline-dark">
                                            <center><span class="iconify" data-icon="bxs:user" data-width="30"
                                                    data-height="30"></span>
                                                <p>Akun User</p>
                                            </center>
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <td scope="col"></td>
                                                        <th scope="col"></th>
                                                        <th scope="col"></th>
                                                        <th scope="col"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td scope="row">ID User</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td><b>
                                                                {{Auth::user()->id}}</b>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">Username</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td><b>{{Auth::user()->username}}</b>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">Tanggal Gabung</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td><b>{{Auth::user()->created_at}}</b>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </button>

                                        <div class="row mt-3">
                                            <div class="col">
                                                <button type="button" class="btn btn-outline-danger">
                                                    <center><span class="iconify" data-icon="maki:farm" data-width="30"
                                                            data-height="30"></span>
                                                        <h6><b>Akun Peternak</b></h6>
                                                        <span class="iconify" data-icon="akar-icons:circle-x"
                                                            style="color: red;" data-width="40" data-height="40"></span>
                                                    </center>
                                                    <p>Maaf, Anda belum mengaktivasi akun peternak Anda. Silakan
                                                        aktivasi
                                                        dengan
                                                        meng-klik tombol dibawah ini</p>
                                                    <a href="{{route('aktivasiPeternak.index')}}" class="btn btn-primary mb-3"
                                                        style="border-radius: 10px;">
                                                        Aktivasi
                                                        Akun</a>
                                                </button>
                                            </div>
                                            <div class="col">
                                                <button type="button" class="btn btn-outline-danger">
                                                    <center><span class="iconify" data-icon="akar-icons:percentage"
                                                            data-width="30" data-height="30"></span>
                                                        <h6><b>Akun Investor</b></h6>
                                                        <span class="iconify" data-icon="akar-icons:circle-x"
                                                            style="color: red;" data-width="40" data-height="40"></span>
                                                    </center>
                                                    <p>Maaf, Anda belum mengaktivasi akun investor Anda. Silakan
                                                        aktivasi dengan
                                                        meng-klik tombol dibawah ini</p>
                                                    <a href="{{route('aktivasiInvestor.index')}}" class="btn btn-primary mb-3"
                                                        style="border-radius: 10px;">
                                                        Aktivasi
                                                        Akun</a>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <!-- Button trigger modal -->



                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Foto
                                                        Profil</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="{{route('avatar.update')}}" method="post"
                                                    enctype="multipart/form-data">
                                                    @method('PATCH')
                                                    @csrf
                                                    <div class="modal-body">
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="exampleFormControlFile1">
                                                                    <h6>Upload Foto</h6>
                                                                </label>
                                                                <input type="file"
                                                                    class="form-control-file @error('avatar') is-invalid @enderror"
                                                                    id="avatar" name="avatar">

                                                                <p>(Ukuran foto maksimum adalah 10 MB. Jenis
                                                                    file yang
                                                                    diperbolehkan yaitu .JPG, .JPEG, dan
                                                                    .PNG)</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Batal</button>
                                                        <button type="submit" class="btn btn-primary">Upload
                                                            Photo</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

@endsection