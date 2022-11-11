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
        style="background-color: #979494;  color: #020302; margin-top: 20px;" href="{{ route('admin.total-investor')}}">
        <i class="fi fi-rr-arrow-left" style="margin-right: 15px; font-size: 20px;"></i>Kembali
    </a>
</div>

<div class="container">

    <center>
        <div class="gambar ">
            <img src="img/naruto-gbd3ae04bd_640.png" alt="" class="rounded-circle" style="width: 150px;
            height: 150px;">
            <h1> Investor A</h1>
            <h3>investora@gmail.com</h3>
            <div class="garis" style="border-bottom: 5px solid black;"></div>
        </div>
    </center>
    <div class="judulvalidasi  col-md-12 d-flex justify-content-center"
        style="margin-top: 20px;background: #C4C4C4;">

        <h2>Profil Investor</h2>

    </div>
    <table class="table" style="color: #020302;">

        <tbody>
            <tr>

                <td>ID Investor</td>
                <td> : </td>
                <td>I9999</td>

            </tr>
            <tr>

                <td>Nama Lengkap</td>
                <td> : </td>
                <td>Investor A</td>

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

        <h2>Keterangan Investasi</h2>

    </div>
    <table class="table" style="color: #020302;">

        <tbody>
            <tr>

                <td>Total Investasi Keseluruhan</td>
                <td> : </td>
                <td> Rp. 35,000,000</td>

            </tr>

        </tbody>
    </table>
    <div class="judulvalidasi  col-md-12 d-flex justify-content-center"
        style="margin-top: 20px;background: #C4C4C4;">

        <h2>Rincian Investasi</h2>

    </div>
    <table class="table" style="color: #020302;">

        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Tujuan Investasi</th>
                <th scope="col">Nominal</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Valhalla</td>
                <td>Rp. 10,000,000</td>

            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Bonten</td>
                <td>Rp. 10,000,000</td>

            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Touman</td>
                <td>Rp. 15,000,000</td>

            </tr>
            <tr style="margin-top: 20px;background: #C4C4C4;">
                <th scope="row"></th>
                <td>Total Investasi</td>
                <td>Rp. 35,000,000</td>

            </tr>
        </tbody>

    </table>


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