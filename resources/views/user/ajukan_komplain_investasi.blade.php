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
                            <ul class="d-flex" style="list-style-type: disc; color:red; font-size:12px;">
                                <li>
                                    <span style="color: black;">Peternakan</span>
                                </li>
                                <li class="ml-4">
                                    <span style="color: black;">Investasi</span>
                                </li>
                            </ul>
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
    <section class="ftco-section col " style="margin-top: 165px;">
        <div class="container " style="background-color: white; width: 994px;">
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
                <h5>Transaksi Yang Bisa Dikomplain :</h5>
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

                        <div class="col-5 row" style="margin-left:-35px;">

                            <div class="col ">
                                <h5 style="font-size: 15px;"> Nominasi Investasi</h5>
                                <h3 style="font-size: 15px;"><a class="ml-3" href="#"
                                        style="font-size: 15px;">Rp1.450.000,00</a>
                                </h3>


                            </div>
                            <div class="col  ">
                                <h5 style="font-size: 15px;">Bagi Hasil</h5>
                                <h3 style="font-size: 15px;"><a class="ml-3" href="#" style="font-size: 15px;">50%</a>
                                </h3>


                            </div>

                            <div class=" row">
                                <div class="col  ">
                                    <h5 style="font-size: 15px;" class="ml-2">Harga Jual</h5>
                                    <h3 style="font-size: 15px;"><a class="mr-2" href="#"
                                            style="font-size: 15px;">Rp3.700.000,00</a>
                                    </h3>


                                </div>
                                <div class="col ">
                                    <h5 style="font-size: 15px;" class="ml-3">Keuntungan</h5>
                                    <h3 style="font-size: 15px;"><a class="ml-3" href="#"
                                            style="font-size: 15px;">Rp1.850.000,00</a>
                                    </h3>


                                </div>
                            </div>

                        </div>
                        <div class="col-2 " style="padding:0;">
                            <center>
                                <div class="mt-4">
                                    <h5 class=""><b> Laba</b></h5>
                                    <h6 style=""><a href="#">Rp1.450.000,00</a>
                                    </h6>
                                </div>
                            </center>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <a href="#" class="btn btn-primary col-2 mt-3 mr-3" data-toggle="modal"
                                data-target="#exampleModal-1" style="border-radius:15px; ">Selesaikan</a>
                            <a href="#" class="btn btn-danger col-2 mt-3 mr-3" style="border-radius:15px; ">Ajukan
                                Komplain</a>
                        </div>
                        <!-- Modal -->
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
                                                54 <h5><b> </b>Laba</h5>
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

                    </div>
                    <!-- modal end -->
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

                        <div class="col-5 row" style="margin-left:-35px;">

                            <div class="col ">
                                <h5 style="font-size: 15px;"> Nominasi Investasi</h5>
                                <h3 style="font-size: 15px;"><a class="ml-3" href="#"
                                        style="font-size: 15px;">Rp1.450.000,00</a>
                                </h3>


                            </div>
                            <div class="col  ">
                                <h5 style="font-size: 15px;">Bagi Hasil</h5>
                                <h3 style="font-size: 15px;"><a class="ml-3" href="#" style="font-size: 15px;">50%</a>
                                </h3>


                            </div>

                            <div class=" row">
                                <div class="col  ">
                                    <h5 style="font-size: 15px;" class="ml-2">Harga Jual</h5>
                                    <h3 style="font-size: 15px;"><a class="mr-2" href="#"
                                            style="font-size: 15px;">Rp3.700.000,00</a>
                                    </h3>


                                </div>
                                <div class="col ">
                                    <h5 style="font-size: 15px;" class="ml-3">Keuntungan</h5>
                                    <h3 style="font-size: 15px;"><a class="ml-3" href="#"
                                            style="font-size: 15px;">Rp1.850.000,00</a>
                                    </h3>


                                </div>
                            </div>

                        </div>
                        <div class="col-2 " style="padding:0;">
                            <center>
                                <div class="mt-4">
                                    <h5 class=""><b> Laba</b></h5>
                                    <h6><a href="#" style="color:red;"> - Rp1.450.000,00</a>
                                    </h6>
                                </div>
                            </center>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <a href="#" class="btn btn-primary col-2 mt-3 mr-3" data-toggle="modal"
                                data-target="#exampleModal-1" style="border-radius:15px; ">Selesaikan</a>
                            <a href="#" class="btn btn-danger col-2 mt-3 mr-3" style="border-radius:15px; ">Ajukan
                                Komplain</a>
                        </div>
                        <!-- Modal -->
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

                    </div>
                    <!-- modal end -->
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

                        <div class="col-5 row" style="margin-left:-35px;">

                            <div class="col ">
                                <h5 style="font-size: 15px;"> Nominasi Investasi</h5>
                                <h3 style="font-size: 15px;"><a class="ml-3" href="#"
                                        style="font-size: 15px;">Rp1.450.000,00</a>
                                </h3>


                            </div>
                            <div class="col  ">
                                <h5 style="font-size: 15px;">Bagi Hasil</h5>
                                <h3 style="font-size: 15px;"><a class="ml-3" href="#" style="font-size: 15px;">50%</a>
                                </h3>


                            </div>

                            <div class=" row">
                                <div class="col  ">
                                    <h5 style="font-size: 15px;" class="ml-2">Harga Jual</h5>
                                    <h3 style="font-size: 15px;"><a class="mr-2" href="#"
                                            style="font-size: 15px;">Rp3.700.000,00</a>
                                    </h3>


                                </div>
                                <div class="col ">
                                    <h5 style="font-size: 15px;" class="ml-3">Keuntungan</h5>
                                    <h3 style="font-size: 15px;"><a class="ml-3" href="#"
                                            style="font-size: 15px;">Rp1.850.000,00</a>
                                    </h3>


                                </div>
                            </div>

                        </div>
                        <div class="col-2 " style="padding:0;">
                            <center>
                                <div class="mt-4">
                                    <h5 class=""><b> Laba</b></h5>
                                    <h6 style=""><a href="#">Rp1.450.000,00</a>
                                    </h6>
                                </div>
                            </center>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <a href="#" class="btn btn-primary col-2 mt-3 mr-3" data-toggle="modal"
                                data-target="#exampleModal-1" style="border-radius:15px; ">Selesaikan</a>
                            <a href="#" class="btn btn-danger col-2 mt-3 mr-3" style="border-radius:15px; ">Ajukan
                                Komplain</a>
                        </div>
                        <!-- Modal -->
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

                    </div>
                    <!-- modal end -->
                </div>

                <br>
            </div>
        </div>
        <br>
</div>

</section>
</div>

@endsection