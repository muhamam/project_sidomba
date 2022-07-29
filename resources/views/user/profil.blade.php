@extends('layouts.user')

@section('content')
<div class="row  d-flex">
    @include('layouts.sidebarUser')

    <section class="ftco-section col" style="margin-top: 100px;">
        <div class="container " style="background-color: white; width: 994px; height: 783px;">


            <div class="d-flex flex-row   ml-3 mb-3 mt-3">
                <a class="mt-3" href="{{route('account.index')}}" style="color: #000;">
                    <h5>Biodata</h5>
                </a>
                <a class="ml-5 mt-3" href="{{route('password.index')}}" style="color: #000;">
                    <h5> Ubah Password</h5>
                </a>
                <a class="ml-5 mt-3" href="{{route('address.index')}}" style="color: #000;">
                    <h5> Alamat</h5>
                </a>
            </div>
            <div class="kabeh rounded-lg" style=" height: 380px; ">

                <div class=" mb-3" style="width: 100%; height:1px; background-color: #3A8BCD; "></div>

                <div class="row">
                    <div class=" col-md-2 ">
                        <a href="btn" data-bs-toggle="modal" data-bs-target="#exampleModalinti">
                            <img class="rounded" src="{{ Auth::user()->avatar === null ? asset('img/boy.png') : Auth::user()->avatar }}" width="200px" height="250px">
                        </a>
                        <div class="modal fade mt-5" id="exampleModalinti" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <img src="{{ Auth::user()->avatar === null ? asset('img/boy.png') : Auth::user()->avatar }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class=" mt-3 ml-4">
                            <!-- Button trigger modal -->
                            <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
                                style="color: white;">
                                Edit foto Profile
                            </a>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Foto Profil</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="col-12">
                                                <form>
                                                    <div class="form-group">
                                                        <label for="exampleFormControlFile1">
                                                            <h6>Upload Foto</h6>
                                                        </label>
                                                        <input type="file" class="form-control-file"
                                                            id="exampleFormControlFile1">
                                                        <p>(Ukuran foto maksimum adalah 10 MB. Jenis file yang
                                                            diperbolehkan yaitu .JPG, .JPEG, dan .PNG)</p>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Batal</button>
                                            <button type="button" class="btn btn-primary">Upload Photo</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p style="font-size: 11px;">(Ukuran foto maksimum adalah 10 MB. Jenis file yang
                                diperbolehkan yaitu .JPG, .JPEG, dan
                                .PNG)</p>
                        </div>
                    </div>
                    <div class=" col gutters-sm mt-4 ">
                        <div class="  " style="margin-left: 65px;">
                            <div class="row">
                                <table>
                                    <thead>
                                        <tr>
                                            <td colspan="">
                                                <b>Profil</b> <a href="{{route('editaccount.index')}}">(Edit Profil)</a>
                                            </td>
                                            <th scope="col"></th>
                                            <th scope="col"></th>
                                            <th scope="col"></th>
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
                            </div>
                        </div>
                        <div class=" mb-3 ml-5" style="width: 90%; height:1px; background-color: #3A8BCD; "></div>
                        <div class=" " style="margin-left: 55px;">
                            <table>
                                <thead>
                                    <tr>
                                        <tD scope="col"> <b>Kontak</b> <a href="{{route('contact.index')}}">(Edit Kontak)</a></tD>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row">Email</td>
                                        <td></td>
                                        <td>:</td>
                                        <td>{{Auth::user()->email}}</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">No. Telepon</td>
                                        <td></td>
                                        <td>:</td>
                                        <td>{{Auth::user()->no_HP}}</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <!-- kondisi satu ini ketika siuser belum mengaktifkan investor dan peternak -->
                        <center>
                            <div class="col-4 mt-3" style="border: 1px solid black; border-radius:10px;">
                                <span class="iconify" data-icon="bxs:user" data-width="30" data-height="30"></span>
                                <h6>Akun User</h6>
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
                                            <td>{{Auth::user()->id}}</td>
                                        </tr>
                                        <tr>
                                            <td scope="row">Username</td>
                                            <td></td>
                                            <td>:</td>
                                            <td colspan="4">{{Auth::user()->username}}</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">Tanggal Gabung</td>
                                            <td></td>
                                            <td>:</td>
                                            <td>{{Auth::user()->created_at}}</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </center>
                        <center>
                            <div class="row d-flex justify-content-around mt-3">
                                <div class="col-4" style="border: 1px solid black; border-radius:10px;">

                                    <span class="iconify" data-icon="maki:farm" data-width="30" data-height="30"></span>
                                    <h6>Akun Peternak</h6>
                                    <span class="iconify" data-icon="akar-icons:circle-x" data-width="40"
                                        data-height="40"></span>
                                    <p>Maaf, Anda belum mengaktivasi akun peternak Anda. Silakan aktivasi dengan
                                        meng-klik tombol dibawah ini</p>
                                    <a href="#" class="btn btn-primary mb-3" style="border-radius: 10px;"> Aktivasi
                                        Akun</a>

                                </div>
                                <div class="col-4" style="border: 1px solid black; border-radius:10px;">
                                    <span class="iconify" data-icon="akar-icons:percentage" data-width="30"
                                        data-height="30"></span>
                                    <h6>Akun Investor</h6>
                                    <span class="iconify" data-icon="akar-icons:circle-x" data-width="40"
                                        data-height="40"></span>
                                    <p>Maaf, Anda belum mengaktivasi akun investor Anda. Silakan aktivasi dengan
                                        meng-klik tombol dibawah ini</p>
                                    <a href="#" class="btn btn-primary mb-3" style="border-radius: 10px;"> Aktivasi
                                        Akun</a>

                                </div>
                            </div>
                        </center>

                        <!-- kondisi dua ketika user berhasil mengaktifkan investor dan peternak -->
                        <!-- <center>
                            <div class="col-4 mt-3" style="border: 1px solid black; border-radius:10px;">
                                <span class="iconify" data-icon="bxs:user" data-width="30" data-height="30"></span>
                                <h6>Akun User</h6>
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
                                            <td>U00001</td>
                                        </tr>
                                        <tr>
                                            <td scope="row">Username</td>
                                            <td></td>
                                            <td>:</td>
                                            <td colspan="4">Raihan A.</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">Tanggal Gabung</td>
                                            <td></td>
                                            <td>:</td>
                                            <td>10/02/2022</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </center>
                        <center>
                            <div class="row d-flex justify-content-around mt-3">
                                <div class="col-4" style="border: 1px solid black; border-radius:10px;">
                                    <span class="iconify" data-icon="maki:farm" data-width="30" data-height="30"></span>
                                    <h6>Akun Peternak</h6>
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
                                                <td colspan="4">ID Peternak</td>
                                                <td></td>
                                                <td>:</td>
                                                <td>P00001</td>
                                            </tr>
                                            <tr>
                                                <td colspan="4">Nama Peternakan</td>
                                                <td></td>
                                                <td>:</td>
                                                <td>Maju Jaya</td>
                                            </tr>
                                            <tr>
                                                <td colspan="4">Aktif Sejak</td>
                                                <td></td>
                                                <td>:</td>
                                                <td>15/02/2022</td>
                                            </tr>

                                        </tbody>
                                    </table>

                                </div>
                                <div class="col-4" style="border: 1px solid black; border-radius:10px;">
                                    <span class="iconify" data-icon="akar-icons:percentage" data-width="30"
                                        data-height="30"></span>
                                    <h6>Akun Investor</h6>
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
                                                <td scope="row">ID Investor</td>
                                                <td></td>
                                                <td>:</td>
                                                <td>I00001</td>
                                            </tr>
                                            <tr>
                                                <td scope="row">Aktif Sejak</td>
                                                <td></td>
                                                <td>:</td>
                                                <td colspan="4">15/02/2022</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </center> -->

                        <!-- kondisi tiga ketika user gagal mendaftarkan peternak ataupun investor -->
                        <!-- <center>
                            <div class="col-4 mt-3" style="border: 1px solid black; border-radius:10px;">
                                <span class="iconify" data-icon="bxs:user" data-width="30" data-height="30"></span>
                                <h6>Akun User</h6>
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
                                        <td>{{Auth::user()->id}}</td>
                                        </tr>
                                        <tr>
                                            <td scope="row">Username</td>
                                            <td></td>
                                            <td>:</td>
                                            <td colspan="4">{{Auth::user()->username}}</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">Tanggal Gabung</td>
                                            <td></td>
                                            <td>:</td>
                                            <td>{{Auth::user()->created_at}}</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </center>
                        <center>
                            <div class="row d-flex justify-content-around mt-3">
                                <div class="col-4" style="border: 1px solid black; border-radius:10px;">

                                    <span class="iconify" data-icon="maki:farm" data-width="30" data-height="30"></span>
                                    <h6>Akun Peternak</h6>
                                    <span class="iconify" data-icon="akar-icons:circle-x" data-width="40"
                                        data-height="40"></span>
                                    <p>Maaf, data Anda tidak valid. Silakan aktivasi kembali dengan meng-klik tombol
                                        dibawah ini</p>
                                    <a href="#" class="btn btn-primary mb-3" style="border-radius: 10px;"> Aktivasi
                                        Akun</a>

                                </div>
                                <div class="col-4" style="border: 1px solid black; border-radius:10px;">
                                    <span class="iconify" data-icon="akar-icons:percentage" data-width="30"
                                        data-height="30"></span>
                                    <h6>Akun Investor</h6>
                                    <span class="iconify" data-icon="akar-icons:circle-x" data-width="40"
                                        data-height="40"></span>
                                    <p>Maaf, data Anda tidak valid. Silakan aktivasi kembali dengan meng-klik tombol
                                        dibawah ini</p>
                                    <a href="#" class="btn btn-primary mb-3" style="border-radius: 10px;"> Aktivasi
                                        Akun</a>

                                </div>
                            </div>
                        </center> -->
                    </div>
                </div>

            </div>
            <br>

        </div>
</div>
</section>


</div>



</div>

@endsection