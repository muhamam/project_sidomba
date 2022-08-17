@extends('layouts.user')

@section('content')


@include('layouts.sidebarUser')
<div class='mainContent'>
    <!--[ Content section ]-->
    <div class='mainInner sectionInner'>
        <!--[ Large ads ]-->

        <!--[ Blog content ]-->
        <div class='blogContent'>
            <!--[ Main content ]-->
            <main class='mainbar'>
                <div class='section' id='top-widget'>
                    <div class='widget FeaturedPost' data-version='2' id='FeaturedPost00'>
                        <div class='itemFeatured' role='feed'>
                            <article class='item'>
                                <section class="ftco-section col">
                                    <div class="container " style="background-color: white;  border-radius:20px;">
                                        <div class="d-flex flex-row">
                                            <a class="mt-3" href="{{route('account.index')}}" style="color: #000;">
                                                <h5>Biodata</h5>
                                            </a>
                                            <a class="ml-5 mt-3" href="{{route('password.index')}}"
                                                style="color: #000;">
                                                <h5> Ubah Password</h5>
                                            </a>
                                            <a class="ml-5 mt-3" href="{{route('address.index')}}" style="color: #000;">
                                                <h5> Alamat</h5>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="mb-3" style="width: 100%; height:1px; background-color: #3A8BCD; ">
                                    </div>
                                    <div class="row">
                                        <div class=" col-md-4 text-center">
                                            <center><a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModalinti">
                                                    <img class="rounded"
                                                        src="{{ Auth::user()->avatar === null ? asset('img/boy.png') : asset(Auth::user()->avatar) }}"
                                                        width="200px" height="200px">
                                                </a>
                                                <div class="modal fade mt-5" id="exampleModalinti" tabindex="-1"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <img src="{{ Auth::user()->avatar === null ? asset('img/boy.png') : asset(Auth::user()->avatar) }}"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </center>
                                            <div class=" mt-3 ml-4">
                                                <!-- Button trigger modal -->
                                                <a type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#exampleModal" style="color: white;">
                                                    Edit foto Profile
                                                </a>

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
                                                <p style="font-size: 13px;">(Ukuran foto maksimum adalah 10 MB. Jenis
                                                    file yang
                                                    diperbolehkan yaitu .JPG, .JPEG, dan
                                                    .PNG)</p>
                                            </div>
                                        </div>
                                        <div class=" col gutters-sm">

                                            <div class=" ">
                                                <table>
                                                    <thead>
                                                        <tr>
                                                            <td colspan="">
                                                                <b>Profil</b> <a
                                                                    href="{{route('editaccount.index')}}">(Edit
                                                                    Profil)</a>
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
                                                            <td><b>{{Auth::user()->fullname}}</b></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">Tanggal Lahir</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td><b>{{Auth::user()->birth_date}}</b></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">Jenis Kelamin</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td><b>{{Auth::user()->gender}}</b></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <br>
                                            <div class="mb-3"
                                                style="width: 100%; height:1px; background-color: #3A8BCD; "></div>
                                            <div class=" ">
                                                <table>
                                                    <thead>
                                                        <tr>
                                                            <tD scope="col"> <b>Kontak</b> <a
                                                                    href="{{route('contact.index')}}">(Edit
                                                                    Kontak)</a></tD>
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
                                            </div>

                                            <!-- kondisi satu ini ketika siuser belum mengaktifkan investor dan peternak -->
                                            <div class="mt-3"
                                                style="width: 100%; height:1px; background-color: #3A8BCD; "></div>

                                            <button class="buttoneffect center mt-3">
                                                <center><span class="iconify" data-icon="bxs:user" data-width="30"
                                                        data-height="30"></span>
                                                    <h6><b>Akun User</b></h6>
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
                                                            <td><a style="color: black;">
                                                                    {{Auth::user()->id}}</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">Username</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td><a style="color: black;">{{Auth::user()->username}}</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">Tanggal Gabung</td>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td><a style="color: green">{{Auth::user()->created_at}}</a>
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                                <br>

                                                <button class="buttoneffect center">
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
                                                    <a href="#" class="btn btn-primary mb-3"
                                                        style="border-radius: 10px;">
                                                        Aktivasi
                                                        Akun</a>

                                                </button>


                                                <Button class="buttoneffect center">
                                                    <center><span class="iconify" data-icon="akar-icons:percentage"
                                                            data-width="30" data-height="30"></span>
                                                        <h6><b>Akun Investor</b></h6>
                                                        <span class="iconify" data-icon="akar-icons:circle-x"
                                                            style="color: red;" data-width="40" data-height="40"></span>
                                                    </center>
                                                    <p>Maaf, Anda belum mengaktivasi akun investor Anda. Silakan
                                                        aktivasi dengan
                                                        meng-klik tombol dibawah ini</p>
                                                    <a href="#" class="btn btn-primary mb-3"
                                                        style="border-radius: 10px;">
                                                        Aktivasi
                                                        Akun</a>

                                                </Button>

                                        </div>





                                    </div>


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
                    </section>
                    </article>
                </div>
        </div>
    </div>



    </main>

</div>
</div>
</div>
@endsection