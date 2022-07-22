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
        style="background-color: #979494;  color: #020302; margin-top: 20px;" href="{{ route('admin.total-user') }}">
        <i class="fi fi-rr-arrow-left" style="margin-right: 15px; font-size: 20px;"></i>Kembali
    </a>
</div>

<div class="container">

    <center>
        <div class="gambar ">

            @if ($user->avatar==null)
                <img src="{{asset('/img/profile.svg')}}" alt="" class="rounded-circle" style="width: 150px; height: 150px;">
            @else
                <img src="{{$user->avatar}}" alt="" class="rounded-circle" style="width: 150px;height: 150px;">
            @endif
            
            <h1>{{$user->name}}</h1>
            <h3>{{$user->email}}</h3>
            <h5>Loyalty Status : <span style="color: goldenrod;">Gold<i class="fi fi-rr-badge"></i></span>
            </h5>
            <div class="garis" style="border-bottom: 5px solid black;"></div>
        </div>
    </center>
    <div class="judulvalidasi  col-md-12 d-flex justify-content-center"
        style="margin-top: 20px;background: #C4C4C4;">

        <h2>Profil User</h2>

    </div>
    <table class="table" style="color: #020302;">

        <tbody>
            <tr>

                <td>ID User</td>
                <td> : </td>
                <td>U1234</td>

            </tr>
            <tr>

                <td>Nama Lengkap</td>
                <td> : </td>
                <td>{{$user->name}}</td>

            </tr>
            <tr>

                <td>No. Telepon</td>
                <td> : </td>
                <td>0812 - 9999 - 9999</td>

            </tr>
            <tr>

                <td>Email</td>
                <td> : </td>
                <td>{{$user->email}}</td>

            </tr>
            <tr>

                <td>Kota</td>
                <td> : </td>
                <td>Tasikmalaya</td>

            </tr>
            <tr>

                <td>Alamat</td>
                <td> : </td>
                <td>Jl. Siiwangi</td>

            </tr>
            <tr>

                <td>Total Pembelian</td>
                <td> : </td>
                <td>Rp. 999,999,999</td>

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