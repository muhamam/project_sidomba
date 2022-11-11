@extends('layouts.admin')

@section('content')

<div class="container-xxl position-relative bg-white d-flex p-0">

    @include('layouts.sidebarAdmin')

    <!-- Content Start -->
    <div class="content">
        
        @include('layouts.navbarAdmin')

<!-- Sale & Revenue Start -->
<div class="tombol justify-content-between">
    <a class="rounded-pill d-flex justify-content-center  col-md-2"
        style="background-color: #979494;  color: #020302; margin-top: 20px;" href="{{ route('admin.total-peternak')}}">
        <i class="fi fi-rr-arrow-left" style="margin-right: 15px; font-size: 20px;"></i>Kembali
    </a>
</div>

<div class="container">

    <center>
        <div class="gambar ">
            <img src="img/naruto-gbd3ae04bd_640.png" alt="" class="rounded-circle" style="width: 150px;
            height: 150px;">
            <h1> Peternak A</h1>
            <h3>valhallafarm@gmail.com</h3>
            <div class="garis" style="border-bottom: 5px solid black;"></div>
        </div>
    </center>
    <div class="judulvalidasi  col-md-12 d-flex justify-content-center"
        style="margin-top: 20px;background: #C4C4C4;">

        <h2>Profil Peternak</h2>

    </div>
    <table class="table" style="color: #020302;">

        <tbody>
            <tr>

                <td>ID Peternak</td>
                <td> : </td>
                <td>F69420</td>

            </tr>
            <tr>

                <td>Nama Lengkap</td>
                <td> : </td>
                <td>Peternak A</td>

            </tr>
            <tr>

                <td>Nama Peternakan</td>
                <td> : </td>
                <td>Valhalla</td>

            </tr>
            <tr>

                <td>No. Telepon</td>
                <td> : </td>
                <td>0812 - 1111 - 1111</td>

            </tr>
            <tr>

                <td>Email</td>
                <td> : </td>
                <td>valhallafarm@gmail.com</td>

            </tr>
            <tr>

                <td>Kota</td>
                <td> : </td>
                <td>Bandung</td>

            </tr>
            <tr>

                <td>Alamat</td>
                <td> : </td>
                <td>Jl. Jalan no. 420</td>

            </tr>


        </tbody>
    </table>
    <div class="garis" style="border-bottom: 5px solid black;"></div>
    <div class="judulvalidasi  col-md-12 d-flex justify-content-center"
        style="margin-top: 20px;background: #C4C4C4;">

        <h2>Profil Peternakan</h2>

    </div>
    <table class="table" style="color: #020302;">

        <tbody>
            <tr>

                <td>Total Domba Keseluruhan</td>
                <td> : </td>
                <td> 500 Ekor</td>

            </tr>
            <tr>

                <td>Jenis Domba yang Dijual : </td>



            </tr>






        </tbody>
    </table>
    <div class="gambar  col-md-12">
        <div class="row">
            <div class="col">
                <img src="img/domba1.jpg" alt="" style="width: 184px;
                    height: 183px;">

            </div>
            <div class="col">
                <img src="img/domba2.jpg" alt="" style="width: 184px;
                    height: 183px;">
            </div>
            <div class="col">
                <img src="img/domba3.jpg" alt="" style="width: 184px;
                    height: 183px;">
            </div>

        </div>

        <div class="row">
            <div class="col" style="margin-left: 20px;">

                <h5>Domba Ekor Tipis</h5>

            </div>
            <div class="col" style="margin-left: 30px;">
                <h5>Domba Garut</h5>
            </div>
            <div class="col">
                <h5>Domba Ekor Gemuk</h5>
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