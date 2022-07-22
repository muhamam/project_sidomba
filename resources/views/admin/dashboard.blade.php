@extends('layouts.admin')

@section('content')

<div class=" bg-white">

    @include('layouts.sidebarAdmin')

    <!-- Content Start -->
    <div class="content">

        @include('layouts.navbarAdmin')


        <!-- Sale & Revenue Start -->

        <div class="container ">

            <div class="row  " style="margin-left: 200px; margin-bottom:50px; margin-top:50px;">

                <div class="satu col-3" style="margin-right:100px;">
                    <div class="ms-3">

                        <h6>Total User :</h6>
                        <h5>{{$userCount}}</h5>
                        <h6>(+{{$sum}} User Baru Hari Ini)</h6>
                        <a href="{{ route('admin.total-user') }}">Klik Untuk Info Selanjutnya</a>

                        <img src="img/userlogo.png" alt="">

                    </div>
                </div>

                <div class="dua col-3">
                    <div class="">

                        <h6>Total Peternak :</h6>
                        <h5>1276 User</h5>
                        <h6>(+10 Peternak Baru Hari Ini)</h6>
                        <a href="{{ route('admin.total-peternak') }}">Klik Untuk Info Selanjutnya</a>

                        <img src="img/farminglogo.png" alt="">

                    </div>
                </div>

            </div>

            <div class="row ">
                <div class="tiga col-3 " style="margin-right: 50px; ">
                    <div class="">

                        <h6>Total Investor :</h6>
                        <h5>1276 User</h5>
                        <h6>(+30 Investor Baru Hari Ini)</h6>
                        <a href="{{ route('admin.total-investor') }}">Klik Untuk Info Selanjutnya</a>

                        <img src="img/investor.png" alt="">

                    </div>
                </div>
                <div class="empat col-3">
                    <div class="">

                        <h6>Total Transaksi Hari Ini :</h6>
                        <h5>1276 User</h5>
                        <h6>(+1000 Transaksi Baru Hari Ini)</h6>
                        <a href="{{ route('admin.total-transaksi') }}">Klik Untuk Info Selanjutnya</a>

                        <img src="img/moneylogo.png" alt="">

                    </div>
                </div>

                <div class="lima col-3" style="margin-top:-140px; margin-left:50px;">
                    <div class="">

                        <h6>Total Investasi Hari Ini :</h6>
                        <h5>1276 User</h5>
                        <h6>(+100 Investasi Baru Hari Ini)</h6>
                        <a href="{{ route('admin.total-investasi') }}">Klik Untuk Info Selanjutnya</a>

                        <img src="img/investasilogo.png" alt="">

                    </div>
                </div>
            </div>




            <table class="table" style="color: black; ">
                <tbody>
                    <tr>
                        <td class="col-md-5">

                            <h2><i class="fa fa-bell me-lg-2"></i>Notifikasi</h2>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:110px ;">
                            <p>(02/04/2002</p>
                        </td>
                        <td>
                            <p style="border-left:3px solid black ;">12. 30 PM) </p>

                        </td>
                        <td style="color: rgb(10, 14, 207); width: 110px;">TRNSAKSI : </td>
                        <td>Pembeli A telah meng-upload bukti transaksi </td>
                        <td><a href="{{route('admin.validasi')}}" class="btn btn-primary">Periksa</a></td>
                    </tr>
                    <tr>
                        <td style="width:110px ;">

                            <p>(02/04/2002</p>

                        </td>
                        <td style="width:110px ;">
                            <p style="border-left:3px solid black ; ">12. 30 PM) </p>

                        </td>
                        <td style="color: rgb(241, 0, 0);">KOMPLAIN : </td>
                        <td>Pembeli B menajukan komplain atas domba peternak A</td>
                        <td><a href="#" class="btn btn-primary">Periksa</a></td>
                    </tr>
                    <tr>
                        <td style="width:110px ;">

                            <p>(02/04/2002</p>

                        </td>
                        <td style="width:110px ;">
                            <p style="border-left:3px solid black ;">12. 30 PM) </p>

                        </td>
                        <td style="color: rgb(226, 214, 44);">INVESTASI : </td>
                        <td>Investor A telah mengupload Bukti investasi</td>
                        <td><a href="#" class="btn btn-primary">Periksa</a></td>
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