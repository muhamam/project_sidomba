@extends('layouts.admin')

@section('content')

<div class="container-xxl position-relative bg-white d-flex p-0">

    @include('layouts.sidebarAdmin')

    <!-- Content Start -->
    <div class="content">
        
        @include('layouts.navbarAdmin')
<!-- Sale & Revenue Start -->

<div class="container">

    <div class="tombol justify-content-between">
        <a class="rounded-pill d-flex justify-content-center  col-md-2"
            style="background-color: #979494;  color: #020302; margin-top: 20px;" href="{{route('admin.account')}}">
            <i class="fi fi-rr-arrow-left" style="margin-right: 15px; font-size: 20px;"></i>Kembali
        </a>
    </div>

    <!-- Content Start -->
    <div class="container-fluid">
        <div class="row align-items-center justify-content-center">
            <div class="col-20 col-sm-8 col-md-12 col-lg-5 col-xl-8">

                <div class="row">
                    <div class="gambar col-6 ">
                        <center><img src="img/password.png" alt="" style="width: 261px; height: 261px;">

                            <h1>Ganti Password</h1>

                        </center>

                    </div>
                    <div class="  col-6" style="border-left:3px solid black ; ">
                        <!-- <div class="d-flex align-items-center justify-content-center mb-3">

                    <h3>Password Saat Ini</h3>
                </div> -->

                        <form>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label"
                                    style="color: black;">Password
                                    Saat Ini :</label>
                                <input type="password" class="form-control rounded-pill"
                                    id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label"
                                    style="color: black;">Password
                                    Baru :</label>
                                <input type="password" class="form-control rounded-pill"
                                    id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label"
                                    style="color: black;">Konfirmasi Password :</label>
                                <input type="password" class="form-control rounded-pill"
                                    id="exampleInputPassword1">
                            </div>



                            <center>

                                <br>
                                <a href="konfirmasipw.html" type="submit"
                                    class="btn btn-primary rounded-pill col-md-6">Ubah
                                    Password</a>
                            </center>
                        </form>
                    </div>




                </div>
            </div>
        </div>

    </div>

</div>



<!-- Footer Start -->

<div class="container-fluid pt-4 px-4">
    <div class="bg-light rounded-top p-4">
        <div class="row">
            <center>
                <div class="col-12 col-sm-6 text-center text-sm-start">
                    &copy; <a href="#">Si-domba</a>, Company.
                </div>
            </center>
        </div>
    </div>
</div>

<!-- Footer End -->
</div>
<!-- Content End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>


@endsection