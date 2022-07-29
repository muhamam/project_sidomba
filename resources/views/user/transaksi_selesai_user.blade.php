@extends('layouts.user')

@section('content')

<div class="row">
    <div class="col " style="margin-left: 30px; margin-top:180px; width: 300px;">
        <div class=" bg-light ">
            <center>
                <table>
                    <tr>
                        <td> <span><img src="../img/about-us.jpg" alt="" style="width: 85px; height:85px; "
                                    class="  ml-3 rounded-circle">
                            </span></td>
                        <td>
                            <a href="#" class="  " style="color:#000000 ;">Muhammad
                                anas
                            </a>
                            <a href="#" style="font-size:9px;color:#000000 ;">muhammadanasaiman0@gmail.com</a><br>

                            <a href="#" style="color:#000000 ;">ID Investor : X001</a>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                </table>
                <div class="garis" style="width: 95%; height: 2px; background-color: black; margin-left: 5px; margin-right:
                        5px;">
                    <p></p>
                </div>
                <div class="dalam ">
                    <span class="iconify" data-icon="ic:baseline-account-box" data-width="25" data-height="25"
                        style="margin-right: 130px; margin-bottom: -60px;"></span>
                    <a href="dashboard_investor.html" class="dropdown-item ">Akun</a>
                    <span class="iconify" data-icon="bi:chat-text" data-width="25" data-height="25"
                        style="margin-right: 130px; margin-bottom: -60px;"></span>
                    <a href="pasar.html" class="dropdown-item ">Chat</a>
                    <span class="iconify" data-icon="carbon:star-review" data-width="25" data-height="25"
                        style="margin-right: 130px; margin-bottom: -60px;"></span>
                    <a href="investasi_saya_semua.html" class="dropdown-item">Ulasan</a>
                    <span class="iconify" data-icon="carbon:warning" data-width="25" data-height="25"
                        style="margin-right: 130px; margin-bottom: -60px;"></span>
                    <a href="investasi_riwayat.html" class="dropdown-item">Komplain</a>
                    <span class="iconify" data-icon="bi:list-stars" data-width="25" data-height="25"
                        style="margin-right: 130px; margin-bottom: -60px;"></span>
                    <a href="#" class="dropdown-item ml-3">Wishlist</a>
                    <span class="iconify" data-icon="carbon:money" data-width="25" data-height="25"
                        style="margin-right: 130px; margin-bottom: -60px;"></span>
                    <a href="#" class="dropdown-item ml-3 ">Transaksi</a>
                </div>

            </center>
        </div>

    </div>
    <section class="ftco-section col " style="margin-top: 95px;">
        <div class="tengah d-flex d-flex justify-content-center " style="margin-bottom: 20px; margin-top:-50px;">

            <img src="../img/domba.png" alt="" style="width: 77px; height: 77px;">

            <div class="garis"
                style="width: 4px; height: 85px; background-color: black; margin-left: 5px; margin-right: 5px;">
                <p></p>
            </div>


            <h3 class="" style="margin-top: 10px; margin-left: 10px; height: 10px;">SI-DOMBA</h3>
            <h4 class="" style="margin-top: 40px; margin-left: -120px;">Investasi</h4>



        </div>
        <div class="container " style="background-color: white; width: 994px;">
            <!-- start notif  (ini hilangkan dan munculkan kembali setelah user menekan tombol selesaikan pesanan)-->
            <center>
                <div class="col-5 " style="border: 1px solid black; background-color:#44F060; border-radius:10px;">
                    <span class="iconify" data-icon="akar-icons:double-check" data-width="30" data-height="30"></span>
                    <p>Anda telah berhasil menyelesaikan pesanan. Terimakasih telah bertransaksi domba di SI Domba!
                    </p>
                </div>
            </center>
            <!-- end notif -->
            <div class="d-flex flex-row " style=" margin-left:20px;">
                <a class="" href="investasi_riwayat.html" style="color: #000;">
                    <h5>Diproses</h5>
                </a>
                <a class="ml-4" href="investasi_negosiasi.html" style="color: #000;">
                    <h5>Menunggu Pembayaran</h5>
                </a>
                <a class="ml-4" href="investasi_negosiasi.html" style="color: #000;">
                    <h5>Selesai</h5>
                </a>
            </div>
            <div class="pb-5 " style="border:1px solid black ; padding:20px;  border-radius:20px;">
                <div class="row mb-3">
                    <a href="#" class="col-2 btn btn-outline-primary mr-3 ml-5">Pembelian</a>
                    <a href="#" class="col-2 btn btn-outline-primary">Investasi</a>
                </div>
                <div class="kabeh rounded-lg" style="border: 1px solid #000; height: 380px; ">
                    <div class="row mt-3">
                        <p class="col-3 ml-4 " style="border-right:1px solid black ; "><b>Invoice :
                                INV/001/052022 </b> </p>

                        <p class="col-3"><b> Rabu, 25 Mei 2022 </b></p>
                    </div>
                    <div class=" mb-3" style="width: 100%; height:1px; background-color: #000000; "></div>
                    <div class="row ml-5">
                        <h6 class="col-3">Peternakan Udin</h6>
                        <a href="#" class="btn btn-outline-primary rounded col-2" style="font-size: 10px;"> Sedang
                            Berlangsung</a>
                    </div>
                    <div class="row gutters-sm mt-4 ml-1">
                        <div class=" col-md-2 ">
                            <a href="btn" data-bs-toggle="modal" data-bs-target="#exampleModalinti">
                                <img class="rounded" src="../img/1.jpg" width="160px" height="180px">
                            </a>
                            <div class="modal fade mt-5" id="exampleModalinti" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <img src="../img/1.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-3 ml-5  " style="font-size:12px;">
                            <div class="row">
                                <table>
                                    <thead>
                                        <tr>
                                            <th colspan="4">
                                                <h6> Domba Suffolk </h6>
                                            </th>
                                            <th scope="col"></th>
                                            <th scope="col"></th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">ID</th>
                                            <td></td>
                                            <td>:</td>
                                            <td>DS123</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Berat</th>
                                            <td></td>
                                            <td>:</td>
                                            <td>23Kg</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Umur</th>
                                            <td></td>
                                            <td>:</td>
                                            <td>3 Bulan (21/02/2022)</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Jenis Kelamin</th>
                                            <td></td>
                                            <td>:</td>
                                            <td>Jantan </td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>

                        </div>

                        <div class="col-4 row" style="margin-left:-35px;">
                            <center>
                                <div class="col ">
                                    <h5>Status</h5>
                                    <h6><a class="" href="#" style="color:#F77E21;">Menunggu Konfirmasi</a></h6>
                                    <p>Konfirmasi otomatis dalam</p>
                                    <h4 style="border: 1px solid black; border-radius:30px;"><a class="ml-3" href="#"
                                            style="color:black;">3 Hari</a>
                                    </h4>
                                </div>
                            </center>
                        </div>
                        <div class="col-2 " style="padding:0;">
                            <center>
                                <div class="mt-4">
                                    <h6 class="ml-4"><b> Harga</b></h6>
                                    <h3><a class="ml-1" href="#">Rp1.450.000,00</a>
                                    </h3>
                                </div>
                            </center>
                        </div>
                        <!-- Modal start-->
                        <div class="row d-flex justify-content-center">
                            <a href="#" class="btn btn-primary col-2 mt-3 mr-3" data-toggle="modal"
                                data-target="#exampleModal-1" style="border-radius:15px; ">Selesaikan</a>
                            <a href="#" class="btn btn-danger col-2 mt-3 mr-3" style="border-radius:15px; ">Ajukan
                                Komplain</a>
                        </div>
                        <div class="modal fade" id="exampleModal-1" aria-labelledby="exampleModalLabel">
                            <div class="modal-dialog ">
                                <div class="modal-content">
                                    <div class="p-0">
                                        <div class="row" id="exampleModalLabel">
                                            <div class="col-4 mt-5">
                                                <a href="">
                                                    <img class="rounded" src="../img/1.jpg" width="150px"
                                                        height="150px">
                                                </a>
                                            </div>

                                            <div class="col-8">
                                                <div class="col ">

                                                    <h4>Domba Suffolk</h4>

                                                    <h5>Data Domba</h5>
                                                    <div class=" row">
                                                        <table style="font-size:12px;">
                                                            <thead>
                                                                <tr>
                                                                    <th scope=" col">
                                                                    </th>
                                                                    <th scope="col"></th>
                                                                    <th scope="col"></th>
                                                                    <th scope="col"></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <th scope="row">ID</th>
                                                                    <td></td>
                                                                    <td>:</td>
                                                                    <td>DS123</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Berat</th>
                                                                    <td></td>
                                                                    <td>:</td>
                                                                    <td>23Kg</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Umur</th>
                                                                    <td></td>
                                                                    <td>:</td>
                                                                    <td>3 Bulan (21/02/2022)</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Jenis Kelamin
                                                                    </th>
                                                                    <td></td>
                                                                    <td>:</td>
                                                                    <td>Jantan </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <center>
                                            <div class="mt-3 mb-3"
                                                style="width: 100%; height:1px; background-color: #3A8BCD;">
                                            </div>
                                        </center>
                                        <div class="row">
                                            <div class="col-4 mt-4">
                                                <a href="">
                                                    <img class="rounded" src="../img/1.jpg" width="150px"
                                                        height="150px">
                                                </a>
                                            </div>
                                            <div class="col-8">
                                                <h5>Data
                                                    Peternakan</h5>
                                                <a href="#">Peternakan
                                                    Udin</a>
                                                <p class="">
                                                    Soreang, Bandung
                                                </p>
                                                <span class="iconify" data-icon="flat-color-icons:rating"
                                                    data-width="25" data-height="25"></span>
                                                <span class="iconify" data-icon="flat-color-icons:rating"
                                                    data-width="25" data-height="25"></span>
                                                <span class="iconify" data-icon="flat-color-icons:rating"
                                                    data-width="25" data-height="25"></span>
                                                <span class="iconify" data-icon="flat-color-icons:rating"
                                                    data-width="25" data-height="25"></span>
                                                <span class="iconify" data-icon="flat-color-icons:rating"
                                                    data-width="25" data-height="25"></span>
                                                <br>
                                                <a href="#(link menju peternak)">Lihat
                                                    Peternakan</a>
                                            </div>
                                        </div>
                                        <div class="mt-3 mb-1"
                                            style="width: 100%; height:1px; background-color: #3A8BCD;">
                                        </div>
                                        <br>
                                        <center>
                                            <div>
                                                <h5><b> </b>Harga</h5>
                                                <h3><a href="#">Rp1.450.000,00</a>
                                                </h3>
                                            </div>
                                        </center>
                                        <div class="mt-3 mb-1"
                                            style="width: 100%; height:1px; background-color: #3A8BCD;">
                                        </div>
                                        <center>
                                            <h4>Detail Transaksi</h4>
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th scope=" col">
                                                        </th>
                                                        <th scope="col"></th>
                                                        <th scope="col"></th>
                                                        <th scope="col"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">Tanggal Pembayaran</th>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>24/07/2022 - 19.30 WIB</td>

                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Metode Pembayaran</th>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>Transfer Manual</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Bukti Pembayaran</th>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td><img src="../img/transaksi.jpg" alt="" width="200px"
                                                                height="150px"></td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </center>
                                        <div class="mt-3 mb-1"
                                            style="width: 100%; height:1px; background-color: #3A8BCD;">
                                        </div>
                                        <center>
                                            <h4>Pengiriman</h4>
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th scope=" col">
                                                        </th>
                                                        <th scope="col"></th>
                                                        <th scope="col"></th>
                                                        <th scope="col"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">Tanggal Kirim</th>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>25/07/2022 - 09.30 WIB</td>

                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Tanggal Diterima</th>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>25/07/2022 - 14.00</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Bukti Penerimaan</th>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td><img src="../img/diterima.jpg" alt="" width="200px"
                                                                height="150px"></td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </center>
                                        <center>
                                            <div class="mt-3 mb-1"
                                                style="width: 100%; height:1px; background-color: #3A8BCD;">
                                            </div>
                                            <div class="col-9" style="border:1px solid black;">
                                                <h6 style="color: red;">PENTING!</h6>
                                                <p>Jika Anda memilih untuk menyelesaikan pesanan ini, maka Anda tidak
                                                    bisa lagi komplain dan kami anggap telah menerima domba dengan
                                                    kondisi baik</p>
                                            </div>
                                            <div class="row d-flex justify-content-center">
                                                <a href="#" class="btn btn-primary col-4 mt-3 mr-3" data-toggle="modal"
                                                    data-target="#exampleModal-1"
                                                    style="border-radius:15px; ">Selesaikan</a>
                                                <a href="#" class="btn btn-danger col-4 mt-3 mr-3"
                                                    style="border-radius:15px; ">Ajukan
                                                    Komplain</a>
                                            </div>
                                        </center>

                                    </div>


                                    <br>
                                </div>

                            </div>
                        </div>
                        <!-- modal end -->

                    </div>

                </div>
            </div>
            <br>

            <div class="kabeh rounded-lg" style="border: 1px solid #000; height: 380px; ">
                <div class="row mt-3">
                    <p class="col-3 ml-4 " style="border-right:1px solid black ; "><b>Invoice :
                            INV/001/052022 </b> </p>

                    <p class="col-3"><b> Rabu, 25 Mei 2022 </b></p>
                </div>
                <div class=" mb-3" style="width: 100%; height:1px; background-color: #000000; "></div>
                <div class="row ml-5">
                    <h6 class="col-3">Peternakan Udin</h6>
                    <a href="#" class="btn btn-outline-primary rounded col-2" style="font-size: 10px;"> Sedang
                        Berlangsung</a>
                </div>
                <div class="row gutters-sm mt-4 ml-1">
                    <div class=" col-md-2 ">
                        <a href="btn" data-bs-toggle="modal" data-bs-target="#exampleModalinti">
                            <img class="rounded" src="../img/1.jpg" width="160px" height="180px">
                        </a>
                        <div class="modal fade mt-5" id="exampleModalinti" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <img src="../img/1.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 ml-5  " style="font-size:12px ;">
                        <div class="row">
                            <table>
                                <thead>
                                    <tr>
                                        <th colspan="4">
                                            <h6> Domba Suffolk </h6>
                                        </th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">ID</th>
                                        <td></td>
                                        <td>:</td>
                                        <td>DS123</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Berat</th>
                                        <td></td>
                                        <td>:</td>
                                        <td>23Kg</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Umur</th>
                                        <td></td>
                                        <td>:</td>
                                        <td>3 Bulan (21/02/2022)</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Jenis Kelamin</th>
                                        <td></td>
                                        <td>:</td>
                                        <td>Jantan </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="col-3 row" style="margin-left:-35px;">
                        <center>
                            <div class="col ">
                                <h5>Status</h5>
                                <h3><a class="ml-3" href="#" style="color:#3ACD52;">Selesai</a>
                                </h3>
                            </div>
                        </center>
                    </div>


                    <div class="col-3 " style="padding:0;">
                        <div class="">
                            <center>
                                <div class="">
                                    <h6 style="  margin-left:17px;"><b> Harga</b></h6>

                                    <h5><a class="ml-1" href="#" style=" color:rgb(60, 255, 0);">Rp1.450.000,00</a>
                                    </h5>
                                    <!-- Button trigger modal -->
                                    <a type="button" href="#" class="btn btn-primary " data-toggle="modal"
                                        data-target="#exampleModal-2" style=" font-size:11px;">Detail</a>
                                </div>
                            </center>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal-2" aria-labelledby="exampleModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <div class="p-0">
                                            <div class="row" id="exampleModalLabel">
                                                <div class="col-4 mt-5">
                                                    <a href="">
                                                        <img class="rounded" src="../img/1.jpg" width="150px"
                                                            height="150px">
                                                    </a>
                                                </div>

                                                <div class="col-8">
                                                    <div class="col ">

                                                        <h4>Domba Suffolk</h4>

                                                        <h5>Data Domba</h5>
                                                        <div class=" row">
                                                            <table style="font-size:12px;">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope=" col">
                                                                        </th>
                                                                        <th scope="col"></th>
                                                                        <th scope="col"></th>
                                                                        <th scope="col"></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <th scope="row">ID</th>
                                                                        <td></td>
                                                                        <td>:</td>
                                                                        <td>DS123</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Berat</th>
                                                                        <td></td>
                                                                        <td>:</td>
                                                                        <td>23Kg</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Umur</th>
                                                                        <td></td>
                                                                        <td>:</td>
                                                                        <td>3 Bulan (21/02/2022)</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Jenis Kelamin
                                                                        </th>
                                                                        <td></td>
                                                                        <td>:</td>
                                                                        <td>Jantan </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <center>
                                                <div class="mt-3 mb-3"
                                                    style="width: 100%; height:1px; background-color: #3A8BCD;">
                                                </div>
                                            </center>
                                            <div class="row">
                                                <div class="col-4 mt-4">
                                                    <a href="">
                                                        <img class="rounded" src="../img/1.jpg" width="150px"
                                                            height="150px">
                                                    </a>
                                                </div>
                                                <div class="col-8">
                                                    <h5>Data
                                                        Peternakan</h5>
                                                    <a href="#">Peternakan
                                                        Udin</a>
                                                    <p class="">
                                                        Soreang, Bandung
                                                    </p>
                                                    <span class="iconify" data-icon="flat-color-icons:rating"
                                                        data-width="25" data-height="25"></span>
                                                    <span class="iconify" data-icon="flat-color-icons:rating"
                                                        data-width="25" data-height="25"></span>
                                                    <span class="iconify" data-icon="flat-color-icons:rating"
                                                        data-width="25" data-height="25"></span>
                                                    <span class="iconify" data-icon="flat-color-icons:rating"
                                                        data-width="25" data-height="25"></span>
                                                    <span class="iconify" data-icon="flat-color-icons:rating"
                                                        data-width="25" data-height="25"></span>
                                                    <br>
                                                    <a href="#(link menju peternak)">Lihat
                                                        Peternakan</a>
                                                </div>
                                            </div>
                                            <div class="mt-3 mb-1"
                                                style="width: 100%; height:1px; background-color: #3A8BCD;">
                                            </div>
                                            <!-- <div class="row d-flex justify-content-around">
                                            <div class="col-4 rounded-lg" style="width:180px ; border: 1px solid #000;">
                                                <center>
                                                    <p>Harga Jual</p>
                                                    <h6>Rp3.700.000,00</h6>
                                                </center>
                                            </div>
                                            <div class="col-4 rounded-lg "
                                                style="width:180px ; border: 1px solid #000;">
                                                <center>
                                                    <p>Bagi Hasil</p>
                                                    <h6>50%</h6>
                                                </center>
                                            </div>
                                        </div>
                                        <div class="row d-flex justify-content-around">
                                            <div class="col-4 rounded-lg" style="width:180px ; border: 1px solid #000;">
                                                <center>
                                                    <p>Keuntungan</p>
                                                    <h6>Rp1.850.000,00</h6>
                                                </center>
                                            </div>
                                            <div class="col-4 rounded-lg "
                                                style="width:180px ; border: 1px solid #000;">
                                                <center>
                                                    <p>Laba Bersih</p>
                                                    <a href="#">
                                                        <h6 style="color: rgb(0, 255, 0);">
                                                            Rp400.000,00</h6>
                                                    </a>
                                                </center>
                                            </div>
                                        </div> -->
                                            <br>
                                            <center>
                                                <div>
                                                    <h5><b> </b>Harga</h5>
                                                    <h3><a href="#">Rp1.450.000,00</a>
                                                    </h3>
                                                </div>
                                            </center>
                                            <div class="mt-3 mb-1"
                                                style="width: 100%; height:1px; background-color: #3A8BCD;">
                                            </div>
                                            <center>
                                                <h4>Detail Transaksi</h4>
                                                <table>
                                                    <thead>
                                                        <tr>
                                                            <th scope=" col">
                                                            </th>
                                                            <th scope="col"></th>
                                                            <th scope="col"></th>
                                                            <th scope="col"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">Tanggal Pembayaran</th>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>24/07/2022 - 19.30 WIB</td>

                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Metode Pembayaran</th>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>Transfer Manual</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Bukti Pembayaran</th>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td><img src="../img/transaksi.jpg" alt="" width="200px"
                                                                    height="150px"></td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </center>
                                            <div class="mt-3 mb-1"
                                                style="width: 100%; height:1px; background-color: #3A8BCD;">
                                            </div>
                                            <center>
                                                <h4>Pengiriman</h4>
                                                <table>
                                                    <thead>
                                                        <tr>
                                                            <th scope=" col">
                                                            </th>
                                                            <th scope="col"></th>
                                                            <th scope="col"></th>
                                                            <th scope="col"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">Tanggal Kirim</th>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>25/07/2022 - 09.30 WIB</td>

                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Tanggal Diterima</th>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>25/07/2022 - 14.00</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Bukti Penerimaan</th>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td><img src="../img/diterima.jpg" alt="" width="200px"
                                                                    height="150px"></td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </center>
                                        </div>
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="kabeh rounded-lg" style="border: 1px solid #000; height: 380px; ">
                <div class="row mt-3">
                    <p class="col-3 ml-4 " style="border-right:1px solid black ; "><b>Invoice :
                            INV/001/052022 </b> </p>

                    <p class="col-3"><b> Rabu, 25 Mei 2022 </b></p>
                </div>
                <div class=" mb-3" style="width: 100%; height:1px; background-color: #000000; "></div>
                <div class="row ml-5">
                    <h6 class="col-3">Peternakan Udin</h6>
                    <a href="#" class="btn btn-outline-primary rounded col-2" style="font-size: 10px;"> Sedang
                        Berlangsung</a>
                </div>
                <div class="row gutters-sm mt-4 ml-1">
                    <div class=" col-md-2 ">
                        <a href="btn" data-bs-toggle="modal" data-bs-target="#exampleModalinti">
                            <img class="rounded" src="../img/1.jpg" width="160px" height="180px">
                        </a>
                        <div class="modal fade mt-5" id="exampleModalinti" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <img src="../img/1.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 ml-5  " style="font-size:12px ;">
                        <div class="row">
                            <table>
                                <thead>
                                    <tr>
                                        <th colspan="4">
                                            <h6> Domba Suffolk </h6>
                                        </th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">ID</th>
                                        <td></td>
                                        <td>:</td>
                                        <td>DS123</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Berat</th>
                                        <td></td>
                                        <td>:</td>
                                        <td>23Kg</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Umur</th>
                                        <td></td>
                                        <td>:</td>
                                        <td>3 Bulan (21/02/2022)</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Jenis Kelamin</th>
                                        <td></td>
                                        <td>:</td>
                                        <td>Jantan </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="col-3 row" style="margin-left:-35px;">
                        <center>
                            <div class="col ">
                                <h5 style="">Status</h5>
                                <h3><a class="ml-3" href="#" style="color:red;">Dikomplain</a>
                                </h3>
                            </div>
                        </center>
                    </div>


                    <div class="col-2 ml-5" style="padding:0;">
                        <div class="">
                            <div class="ml-">
                                <center>
                                    <h6 style=" margin-left:17px;"><b>Harga</b></h6>

                                    <h5><a class="ml-1" href="#" style="  color: rgb(255, 0, 0);">-
                                            Rp400.000,00</a>
                                    </h5>
                                    <!-- Button trigger modal -->
                                    <a type="button" href="#" class="btn btn-primary " data-toggle="modal"
                                        data-target="#exampleModal-3" style="">Detail</a>
                                </center>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal-3" aria-labelledby="exampleModalLabel">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <div class="p-0">
                                            <div class="row" id="exampleModalLabel">
                                                <div class="col-4 mt-5">
                                                    <a href="">
                                                        <img class="rounded" src="../img/1.jpg" width="150px"
                                                            height="150px">
                                                    </a>
                                                </div>

                                                <div class="col-8">
                                                    <div class="col ">

                                                        <h4>Domba Suffolk</h4>

                                                        <h5>Data Domba</h5>
                                                        <div class=" row">
                                                            <table style="font-size:12px;">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope=" col">
                                                                        </th>
                                                                        <th scope="col"></th>
                                                                        <th scope="col"></th>
                                                                        <th scope="col"></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <th scope="row">ID</th>
                                                                        <td></td>
                                                                        <td>:</td>
                                                                        <td>DS123</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Berat</th>
                                                                        <td></td>
                                                                        <td>:</td>
                                                                        <td>23Kg</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Umur</th>
                                                                        <td></td>
                                                                        <td>:</td>
                                                                        <td>3 Bulan (21/02/2022)</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Jenis Kelamin
                                                                        </th>
                                                                        <td></td>
                                                                        <td>:</td>
                                                                        <td>Jantan </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <center>
                                                <div class="mt-3 mb-3"
                                                    style="width: 100%; height:1px; background-color: #3A8BCD;">
                                                </div>
                                            </center>
                                            <div class="row">
                                                <div class="col-4 mt-4">
                                                    <a href="">
                                                        <img class="rounded" src="../img/1.jpg" width="150px"
                                                            height="150px">
                                                    </a>
                                                </div>
                                                <div class="col-8">
                                                    <h5>Data
                                                        Peternakan</h5>
                                                    <a href="#">Peternakan
                                                        Udin</a>
                                                    <p class="">
                                                        Soreang, Bandung
                                                    </p>
                                                    <span class="iconify" data-icon="flat-color-icons:rating"
                                                        data-width="25" data-height="25"></span>
                                                    <span class="iconify" data-icon="flat-color-icons:rating"
                                                        data-width="25" data-height="25"></span>
                                                    <span class="iconify" data-icon="flat-color-icons:rating"
                                                        data-width="25" data-height="25"></span>
                                                    <span class="iconify" data-icon="flat-color-icons:rating"
                                                        data-width="25" data-height="25"></span>
                                                    <span class="iconify" data-icon="flat-color-icons:rating"
                                                        data-width="25" data-height="25"></span>
                                                    <br>
                                                    <a href="#(link menju peternak)">Lihat
                                                        Peternakan</a>
                                                </div>
                                            </div>
                                            <div class="mt-3 mb-1"
                                                style="width: 100%; height:1px; background-color: #3A8BCD;">
                                            </div>
                                            <!-- <div class="row d-flex justify-content-around">
                                            <div class="col-4 rounded-lg" style="width:180px ; border: 1px solid #000;">
                                                <center>
                                                    <p>Harga Jual</p>
                                                    <h6>Rp3.700.000,00</h6>
                                                </center>
                                            </div>
                                            <div class="col-4 rounded-lg "
                                                style="width:180px ; border: 1px solid #000;">
                                                <center>
                                                    <p>Bagi Hasil</p>
                                                    <h6>50%</h6>
                                                </center>
                                            </div>
                                        </div>
                                        <div class="row d-flex justify-content-around">
                                            <div class="col-4 rounded-lg" style="width:180px ; border: 1px solid #000;">
                                                <center>
                                                    <p>Keuntungan</p>
                                                    <h6>Rp1.850.000,00</h6>
                                                </center>
                                            </div>
                                            <div class="col-4 rounded-lg "
                                                style="width:180px ; border: 1px solid #000;">
                                                <center>
                                                    <p>Laba Bersih</p>
                                                    <a href="#">
                                                        <h6 style="color: rgb(0, 255, 0);">
                                                            Rp400.000,00</h6>
                                                    </a>
                                                </center>
                                            </div>
                                        </div> -->
                                            <br>
                                            <center>
                                                <div>
                                                    <h5><b> </b>Harga</h5>
                                                    <h3><a href="#">Rp1.450.000,00</a>
                                                    </h3>
                                                </div>
                                            </center>
                                            <div class="mt-3 mb-1"
                                                style="width: 100%; height:1px; background-color: #3A8BCD;">
                                            </div>
                                            <center>
                                                <h4>Detail Transaksi</h4>
                                                <table>
                                                    <thead>
                                                        <tr>
                                                            <th scope=" col">
                                                            </th>
                                                            <th scope="col"></th>
                                                            <th scope="col"></th>
                                                            <th scope="col"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">Tanggal Pembayaran</th>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>24/07/2022 - 19.30 WIB</td>

                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Metode Pembayaran</th>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>Transfer Manual</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Bukti Pembayaran</th>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td><img src="../img/transaksi.jpg" alt="" width="200px"
                                                                    height="150px"></td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </center>
                                            <div class="mt-3 mb-1"
                                                style="width: 100%; height:1px; background-color: #3A8BCD;">
                                            </div>
                                            <center>
                                                <h4>Pengiriman</h4>
                                                <table>
                                                    <thead>
                                                        <tr>
                                                            <th scope=" col">
                                                            </th>
                                                            <th scope="col"></th>
                                                            <th scope="col"></th>
                                                            <th scope="col"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">Tanggal Kirim</th>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>25/07/2022 - 09.30 WIB</td>

                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Tanggal Diterima</th>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td>25/07/2022 - 14.00</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Bukti Penerimaan</th>
                                                            <td></td>
                                                            <td>:</td>
                                                            <td><img src="../img/diterima.jpg" alt="" width="200px"
                                                                    height="150px"></td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </center>
                                        </div>
                                        <br>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
</div>

</section>
</div>

@endsection