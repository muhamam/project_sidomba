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
        style="background-color: #979494;  color: #020302; margin-top: 20px;" href="{{ route('admin.home') }}">
        <i class="fi fi-rr-arrow-left" style="margin-right: 15px; font-size: 20px;"></i>Kembali
    </a>
</div>

<div class="container">
    <center>
        <div class="totaltransaksi  ms-3 justify-content-center">

            <h4>Total Transaksi Keseluruhan : </h4>
            <h2 style="color: #25C517;">Rp.300.000.000</h2>
            <br>
            <h4> Transaksi Hari Ini :</h4>
            <h2 style="color: #25C517;">+Rp. 30.000.000</h2>

        </div>
    </center>

    <div class="container row d-flex justify-content-strat">


        <div class="input-group rounded justify-content-strat" style="width: 300px;">
            <input type="search" class="form-control rounded rounded-pill border-3"
                placeholder="Cari ID Disini" aria-label="Search" aria-describedby="search-addon" />
            <span class="input-group-text border-0" id="search-addon">
                <i class="fas fa-search"></i>
            </span>
        </div>

        <div class="judulvalidasi col-md-11 d-flex justify-content-center" style="margin-top: 20px; ;">
            <table class="table " style="color: black;">
                <thead style="background: #C4C4C4;">
                    <tr>
                        <th scope="col">ID </th>
                        <th scope="col">Peternak</th>
                        <th scope="col">Pembeli</th>
                        <th scope="col">Tanggal Transaksi</th>
                        <th scope="col">Nominal</th>
                        <th scope="col">Status</th>
                        <th scope="col">Detail</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1128212</th>
                        <td>Peternak A</td>
                        <td>User A</td>
                        <td>20/03/2021</td>
                        <td>
                            Rp. 2,500,000
                        </td>
                        <td>
                            <p class="rounded-pill d-flex justify-content-center"
                                style="background-color: #25C517;">Tervalidasi</p>
                        </td>

                        <td>
                            1x Domba Putih

                        </td>

                    </tr>
                    <tr>
                        <th scope="row">1128212</th>
                        <td>Peternak B</td>
                        <td>User B</td>
                        <td>20/03/2021</td>
                        <td>
                            Rp. 3,500,000
                        </td>
                        <td>
                            <p class="rounded-pill d-flex justify-content-center"
                                style="background-color: #ff0000;">Menunggu validasi</p>
                        </td>

                        <td>
                            3x Domba Putih

                        </td>

                    </tr>
                    <tr>
                        <th scope="row">1128212</th>
                        <td>Peternak C</td>
                        <td>User C</td>
                        <td>20/03/2021</td>
                        <td>
                            Rp. 5,500,000
                        </td>
                        <td>
                            <p class="rounded-pill d-flex justify-content-center"
                                style="background-color: #25C517;">Tervalidasi</p>
                        </td>

                        <td>
                            2x Domba Putih

                        </td>

                    </tr>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>

    <!-- <div class="kotak">

        <div class="satu">
            <div class="ms-3">

                <h6>Total User :</h6>
                <h5>1276 User</h5>
                <h6>(+25 User Baru Hari Ini)</h6>
                <a href="#">Klik Untuk Info Selanjutnya</a>

                <img src="img/userlogo.png" alt="">

            </div>
        </div>

        <div class="dua">
            <div class="ms-3">

                <h6>Total Peternak :</h6>
                <h5>1276 User</h5>
                <h6>(+10 Peternak Baru Hari Ini)</h6>
                <a href="#">Klik Untuk Info Selanjutnya</a>

                <img src="img/farminglogo.png" alt="">

            </div>
        </div>
        <div class="tiga">
            <div class="ms-3">

                <h6>Total Investor :</h6>
                <h5>1276 User</h5>
                <h6>(+30 Investor Baru Hari Ini)</h6>
                <a href="#">Klik Untuk Info Selanjutnya</a>

                <img src="img/investor.png" alt="">

            </div>
        </div>
        <div class="empat">
            <div class="ms-3">

                <h6>Total Transaksi Hari Ini :</h6>
                <h5>1276 User</h5>
                <h6>(+1000 Transaksi Baru Hari Ini)</h6>
                <a href="#">Klik Untuk Info Selanjutnya</a>

                <img src="img/moneylogo.png" alt="">

            </div>
        </div>

        <div class="lima">
            <div class="ms-3">

                <h6>Total Investasi Hari Ini :</h6>
                <h5>1276 User</h5>
                <h6>(+100 Investasi Baru Hari Ini)</h6>
                <a href="#">Klik Untuk Info Selanjutnya</a>

                <img src="img/investasilogo.png" alt="">

            </div>
        </div>

    </div>



    <table class="table" style="color: black; position: relative; top: -250px;">
        <tbody>
            <tr>
                <td>
                    <h2>Notifikasi</h2>
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
                <td><a href="validasi.html" class="btn btn-primary">Periksa</a></td>
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

-->

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