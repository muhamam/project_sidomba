@extends('layouts.admin')

@section('content')

<div class="container-xxl position-relative bg-white d-flex p-0">

    @include('layouts.sidebarAdmin')

    <!-- Content Start -->
    <div class="content">
        
        @include('layouts.navbarAdmin')


        <div class="tombol justify-content-between">
            <a class="rounded-pill d-flex justify-content-center  col-md-2"
                style="background-color: #979494;  color: #020302; margin-top: 20px;" href="{{route('admin.home')}}">
                <i class="fi fi-rr-arrow-left" style="margin-right: 15px; font-size: 20px;"></i>Kembali
            </a>
        </div>
        <br>


        <div class=" col-md-12  ">

            <div class="inti row">
                <div class="image col-md-2 col">
                    <img class="col-1 rounded-circle col-md-5" src="img/testimonial-1.jpg"
                        style="width: 100px; height: 100px;">

                </div>
                <div class="tulis col">
                    <h2 class="col-md-5">Si Tampan</h2>
                    <h4 style="font-weight: lighter;">sitampan@gmail.com - <span style="font-weight: bold;">
                            Administrator</span> </h4>
                    <h4 style="font-weight: lighter;"> 0812 - 3456 - 7890</h4>
                </div>
            </div>
            <div class="garis" style="border-bottom: 3px solid black;"></div>


            <div class=" col-md-12 justify-content-center "
                style="background: #C4C4C4; color:black ;margin-top: 20px; height: 50px;">

                <h4>Profil</h4>

            </div>
            <table class="table" style="color: black;">
                <thead>
                    <tr>
                    </tr>
                </thead>
                <tbody>
                    <tr>

                        <td>Username</td>
                        <td>:</td>
                        <td>Sitampan</td>
                    </tr>
                    <tr>

                        <td>Nama Lengkap</td>
                        <td>:</td>
                        <td>Mikey Sitampan</td>
                    </tr>
                    <tr>

                        <td>Email</td>
                        <td>:</td>
                        <td>sitampan@gmail.com</td>
                    </tr>
                    <tr>

                        <td>No. Telepon</td>
                        <td>:</td>
                        <td>0812 - 3456 - 7890</td>
                    </tr>
                    <tr>

                        <td>Posisi</td>
                        <td>:</td>
                        <td>Administrator</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <br>
        <br>
        <br>
        <div class="tbawah d-flex justify-content-between">


            <a class="rounded-pill  justify-content-center  col-md-2" style="background-color:
                #00A3FF; color: #020302; margin-top: 20px; width: 170px;
                height: 38px;" href="{{route('admin.gantipw')}}">-
                <i class="fi fi-rr-arrow-left" style="margin-right: 15px; font-size: large;">Ubah Password</i>
            </a>


            <a class="rounded-pill  justify-content-center  col-md-2" style="background-color:
                #00A3FF; color: #020302; margin-top: 20px; width: 170px;
                height: 38px;" href="{{route('admin.updateprofil')}}">-
                <i class="fi fi-rr-arrow-left" style="margin-right: 15px; font-size: large;">Update Profil</i>
            </a>
        </div>







        <!-- Footer Start -->

        <div class="container-fluid pt-9 px-9" style="margin-top: 100%;">
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
    <!-- <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div> -->


@endsection