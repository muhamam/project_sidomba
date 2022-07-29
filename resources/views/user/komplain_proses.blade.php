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
    <section class="ftco-section col " style="margin-top: 165px;">
        <div class="container " style="background-color: white; width: 994px; ">
            <!-- Notifikasi komplain Start -->
            <center>
                <div class="col-4 rounded p-2 mb-3" style="background-color:#44F060 ;">
                    <span class="iconify" data-icon="akar-icons:check" data-width="30" data-height="30"></span>
                    <h6>Komplain Anda telah berhasil diajukan! Pantau terus komplain Anda di menu Komplain > Diproses
                    </h6>
                </div>
            </center>
            <!-- Notifikasi komplain end-->
            <!-- Notifikasi solusi Start -->
            <center>
                <div class="col-4 rounded p-2 mb-3" style="background-color:#44F060 ;">
                    <span class="iconify" data-icon="akar-icons:check" data-width="30" data-height="30"></span>
                    <h6>Solusi diterima! Harap melakukan proses penyelesaian komplain segera.
                    </h6>
                </div>
            </center>
            <!-- Notifikasi solusi end-->
            <!-- Notifikasi return Start -->
            <center>
                <div class="col-4 rounded p-2 mb-3" style="background-color:#44F060 ;">
                    <span class="iconify" data-icon="akar-icons:check" data-width="30" data-height="30"></span>
                    <h6>Retur berhasil! Harap tunggu konfirmasi penerimaan retur dari peternak.
                    </h6>
                </div>
            </center>
            <!-- Notifikasi return end-->
            <div class="d-flex flex-row " style=" margin-left:20px;">
                <a class="" href="investasi_riwayat.html" style="color: #000;">
                    <h5>Ajukan Komplain</h5>
                </a>
                <a class="ml-4" href="investasi_negosiasi.html" style="color: #000;">
                    <h5>Diproses</h5>
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
                <!-- menunggu respon admin start -->
                <div class="kabeh rounded-lg" style="border: 1px solid #000; ">
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
                        <div class=" col-2 mb-3">
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

                        <div class="col-3 ml-4  " style="font-size:12px;">
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
                                    <h6><a class="" href="#" style="color:#F77E21;">Menunggu respon Admin dan Peternak
                                            yang bersangkutan</a></h6>
                                </div>
                            </center>
                        </div>
                        <div class="col-3 " style="padding:0;">
                            <center>
                                <h5>Komplain</h5>
                                <ul>
                                    <li>Domba memiliki penyakit</li>
                                    <li>Ada kecacatan</li>
                                    <li>+2 kendala lainya</li>
                                </ul>
                                <!-- Modal start-->
                                <div class="row d-flex justify-content-center">
                                    <a href="#" class="btn btn-outline-primary col-3" data-toggle="modal"
                                        data-target="#exampleModal-1" style="border-radius:5px; ">Detail</a>
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
                                                    <div class="col-8">
                                                        <h4>Detail Komplain</h4>
                                                        <ul>
                                                            <li>Domba memiliki penyakit</li>
                                                            <li>Ada kecacatan</li>
                                                            <li>Berat domba tidak sesuai</li>
                                                            <li>Domba tidak sesuai dengan foto</li>
                                                        </ul>
                                                    </div>
                                                </center>
                                                <center>
                                                    <div class="col-12">
                                                        <h4>Deskripsi</h4>
                                                        <p>Domba seperti tidak kuat berdiri. Saya curiga ada semacam
                                                            penyakit yang membuat domba ini lemas. Kemudian, terdapat
                                                            cacat
                                                            pada telinganya, yaitu seperti terpotong. Berat domba juga
                                                            kurang 2Kg dari berat yang tertera, yaitu 27Kg. Bulu
                                                            dombanya
                                                            juga terdapat perbedaan dengan yang di foto, saya curiga
                                                            domba
                                                            yang dikirim beda dengan yang saya inginkan. </p>
                                                    </div>
                                                    <div class="col-6">
                                                        <h5>Status</h5>
                                                        <p style="color: #F77E21;">Menunggu respon Admin dan Peternak
                                                            yang bersangkutan</p>
                                                    </div>

                                                    <div class="mt-3 mb-1"
                                                        style="width: 100%; height:1px; background-color: #3A8BCD;">
                                                    </div>
                                                    <div class="col-10">
                                                        <h5>Solusi</h5>
                                                        <p>Solusi belum ditemukan. Mohon tunggu respon dari Admin dan
                                                            Peternak yang bersangkutan</p>
                                                        <a href="#" class="btn btn-outline-primary"
                                                            data-dismiss="modal">Tutup</a>
                                                        <a href="#" class="btn btn-primary">Batalkan Komplain</a>
                                                    </div>

                                                </center>
                                            </div>


                                            <br>
                                        </div>

                                    </div>
                                </div>
                                <!-- modal end -->
                            </center>
                        </div>
                    </div>
                </div>
                <!-- menunggu respon admin end -->

                <!-- menunggu respon anda star -->
                <div class="kabeh rounded-lg mt-4" style="border: 1px solid #000; ">
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
                        <div class=" col-2 mb-3">
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

                        <div class="col-3 ml-4  " style="font-size:12px;">
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
                                    <h6><a class="" href="#" style="color:#AC17F2;">Menunggu respon Anda</a></h6>
                                </div>
                            </center>
                        </div>
                        <div class="col-3 " style="padding:0;">
                            <center>
                                <h5>Komplain</h5>
                                <ul>
                                    <li>Domba memiliki penyakit</li>
                                    <li>Ada kecacatan</li>
                                    <li>+2 kendala lainya</li>
                                </ul>
                                <!-- Modal start-->
                                <div class="row d-flex justify-content-center">
                                    <a href="#" class="btn btn-outline-primary col-3" data-toggle="modal"
                                        data-target="#exampleModal-2" style="border-radius:5px; ">Detail</a>
                                </div>
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
                                                    <div class="col-8">
                                                        <h4>Detail Komplain</h4>
                                                        <ul>
                                                            <li>Domba memiliki penyakit</li>
                                                            <li>Ada kecacatan</li>
                                                            <li>Berat domba tidak sesuai</li>
                                                            <li>Domba tidak sesuai dengan foto</li>
                                                        </ul>
                                                    </div>
                                                </center>
                                                <center>
                                                    <div class="col-12">
                                                        <h4>Deskripsi</h4>
                                                        <p>Domba seperti tidak kuat berdiri. Saya curiga ada semacam
                                                            penyakit yang membuat domba ini lemas. Kemudian, terdapat
                                                            cacat
                                                            pada telinganya, yaitu seperti terpotong. Berat domba juga
                                                            kurang 2Kg dari berat yang tertera, yaitu 27Kg. Bulu
                                                            dombanya
                                                            juga terdapat perbedaan dengan yang di foto, saya curiga
                                                            domba
                                                            yang dikirim beda dengan yang saya inginkan. </p>
                                                    </div>
                                                    <div class="col-6">
                                                        <h5>Status</h5>
                                                        <p style="color: #AC17F2;">Menunggu respon Anda</p>
                                                    </div>

                                                    <div class="mt-3 mb-1"
                                                        style="width: 100%; height:1px; background-color: #3A8BCD;">
                                                    </div>
                                                    <div class="col-10">
                                                        <h5>Solusi</h5>
                                                        <h6><a href="#">Retur Domba</a></h6>
                                                        <p>Jangka waktu retur : 7 hari dari sekarang</p>
                                                        <p>Admin dan Peternak telah berdiskusi dan bersepakat untuk
                                                            melakukan retur domba. Hal ini dikarenakan peternak mengakui
                                                            adanya kesalahan dalam pengiriman domba. Peternak akan
                                                            mengirimkan domba yang sesuai setelah retur dilakukan.</p>
                                                        <p>Ketentuan :</p>
                                                        <ul>
                                                            <li>Domba harus diretur sebagaimana kondisi saat diterima
                                                            </li>
                                                            <li>Tidak lewat dari batas waktu retur (7 hari)</li>
                                                            <li>Ada bukti berupa foto saat pengiriman kembali ke
                                                                peternak</li>
                                                        </ul>
                                                        <p>Jika Anda menyetujui solusi ini, maka Anda menyetujui
                                                            ketentuan diatas. Jika ketentuan tidak dipenuhi, maka proses
                                                            retur akan dibatalkan. </p>

                                                        <a href="#" class="btn btn-primary">Terima Solusi</a>
                                                        <a href="#" class="btn btn-warning">Ajukan Solusi Lain</a>
                                                    </div>

                                                </center>
                                            </div>


                                            <br>
                                        </div>

                                    </div>
                                </div>
                                <!-- modal end -->
                            </center>
                        </div>
                    </div>
                </div>
                <!-- menunggu respon anda end -->

                <!-- solusi di setujui start-->
                <div class="kabeh rounded-lg mt-4" style="border: 1px solid #000; ">
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
                        <div class=" col-2 mb-3">
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

                        <div class="col-3 ml-4  " style="font-size:12px;">
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
                                    <h6><a class="" href="#" style="color:#3A8BCD;">Solusi Diterima :
                                            Retur Domba</a></h6>
                                </div>
                            </center>
                        </div>
                        <div class="col-3 " style="padding:0;">
                            <center>
                                <h5>Aksi</h5>
                                <p style="color:#F77E21;">Harap segera melakukan retur </p>
                                <!-- Modal start-->
                                <div class="row d-flex justify-content-center">
                                    <a href="#" class="col-4 btn btn-outline-primary mr-4" data-toggle="modal"
                                        data-target="#exampleModal-3" style="border-radius:5px; ">Detail</a>
                                    <a href="#" class="col-5 btn btn-primary" data-toggle="modal"
                                        data-target="#exampleModal-4" style="border-radius:5px; ">Selesaikan</a>
                                </div>
                                <div class="modal fade" id="exampleModal-3" aria-labelledby="exampleModalLabel">
                                    <div class="modal-dialog ">
                                        <div class="modal-content">
                                            <div class="p-0">
                                                <div class="row" id="exampleModalLabel">
                                                    <div class="col-4 mt-5">
                                                        <a href="">
                                                            <img class="rounded" src="../img/1.jpg" width="150px"
                                                                height="150px">
                                                        </a>w
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
                                                    <div class="col-8">
                                                        <h4>Detail Komplain</h4>
                                                        <ul>
                                                            <li>Domba memiliki penyakit</li>
                                                            <li>Ada kecacatan</li>
                                                            <li>Berat domba tidak sesuai</li>
                                                            <li>Domba tidak sesuai dengan foto</li>
                                                        </ul>
                                                    </div>
                                                </center>
                                                <center>
                                                    <div class="col-12">
                                                        <h4>Deskripsi</h4>
                                                        <p>Domba seperti tidak kuat berdiri. Saya curiga ada semacam
                                                            penyakit yang membuat domba ini lemas. Kemudian, terdapat
                                                            cacat
                                                            pada telinganya, yaitu seperti terpotong. Berat domba juga
                                                            kurang 2Kg dari berat yang tertera, yaitu 27Kg. Bulu
                                                            dombanya
                                                            juga terdapat perbedaan dengan yang di foto, saya curiga
                                                            domba
                                                            yang dikirim beda dengan yang saya inginkan. </p>
                                                    </div>
                                                    <div class="col-6">
                                                        <h5>Status</h5>
                                                        <p style="color: #3A8BCD;">Solusi Diterima : Retur Domba</p>
                                                    </div>

                                                    <div class="mt-3 mb-1"
                                                        style="width: 100%; height:1px; background-color: #3A8BCD;">
                                                    </div>
                                                    <div class="col-10">
                                                        <h5>Solusi</h5>
                                                        <h6><a href="#">Retur Domba</a></h6>
                                                        <p>Jangka waktu retur : 7 hari dari sekarang</p>
                                                        <p>Admin dan Peternak telah berdiskusi dan bersepakat untuk
                                                            melakukan retur domba. Hal ini dikarenakan peternak mengakui
                                                            adanya kesalahan dalam pengiriman domba. Peternak akan
                                                            mengirimkan domba yang sesuai setelah retur dilakukan.</p>
                                                        <p>Ketentuan :</p>
                                                        <ul>
                                                            <li>Domba harus diretur sebagaimana kondisi saat diterima
                                                            </li>
                                                            <li>Tidak lewat dari batas waktu retur (7 hari)</li>
                                                            <li>Ada bukti berupa foto saat pengiriman kembali ke
                                                                peternak</li>
                                                        </ul>
                                                        <p>Jika Anda menyetujui solusi ini, maka Anda menyetujui
                                                            ketentuan diatas. Jika ketentuan tidak dipenuhi, maka proses
                                                            retur akan dibatalkan. </p>
                                                        <h6>Respon Anda</h6>
                                                        <p><a href="#">Menyetujui solusi</a></p>
                                                        <a href="#" class="btn btn-outline-primary">Tutup</a>
                                                        <a href="#" class="btn btn-primary">Batalkan Komplain</a>
                                                    </div>

                                                </center>
                                            </div>


                                            <br>
                                        </div>

                                    </div>
                                </div>

                                <!-- modal end -->
                            </center>
                        </div>
                    </div>
                </div>
                <!-- solusi di setujui end-->
                <!-- konfirmasi return dari peternak star -->
                <div class="kabeh rounded-lg mt-4" style="border: 1px solid #000; ">
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
                        <div class=" col-2 mb-3">
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

                        <div class="col-3 ml-4  " style="font-size:12px;">
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
                                    <h6><a class="" href="#" style="color:#3A8BCD;">Solusi Diterima :
                                            Retur Domba</a></h6>
                                </div>
                            </center>
                        </div>
                        <div class="col-3 " style="padding:0;">
                            <center>
                                <h5>Aksi</h5>
                                <p style="color:#F77E21;">Menunggu penerimaan retur dari peternak </p>
                                <!-- Modal start-->
                                <div class="row d-flex justify-content-center">
                                    <a href="#" class="col-4 btn btn-outline-primary mr-4" data-toggle="modal"
                                        data-target="#exampleModal-5" style="border-radius:5px; ">Detail</a>
                                    <div class="modal fade" id="exampleModal-5" aria-labelledby="exampleModalLabel">
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
                                                        <div class="col-8">
                                                            <h4>Detail Komplain</h4>
                                                            <ul>
                                                                <li>Domba memiliki penyakit</li>
                                                                <li>Ada kecacatan</li>
                                                                <li>Berat domba tidak sesuai</li>
                                                                <li>Domba tidak sesuai dengan foto</li>
                                                            </ul>
                                                        </div>
                                                    </center>
                                                    <center>
                                                        <div class="col-12">
                                                            <h4>Deskripsi</h4>
                                                            <p>Domba seperti tidak kuat berdiri. Saya curiga ada semacam
                                                                penyakit yang membuat domba ini lemas. Kemudian,
                                                                terdapat
                                                                cacat
                                                                pada telinganya, yaitu seperti terpotong. Berat domba
                                                                juga
                                                                kurang 2Kg dari berat yang tertera, yaitu 27Kg. Bulu
                                                                dombanya
                                                                juga terdapat perbedaan dengan yang di foto, saya curiga
                                                                domba
                                                                yang dikirim beda dengan yang saya inginkan. </p>
                                                        </div>
                                                        <div class="col-6">
                                                            <h5>Status</h5>
                                                            <p style="color: #3A8BCD;">Solusi Diterima : Retur Domba</p>
                                                        </div>

                                                        <div class="mt-3 mb-1"
                                                            style="width: 100%; height:1px; background-color: #3A8BCD;">
                                                        </div>
                                                        <div class="col-10">
                                                            <h5>Solusi</h5>
                                                            <h6><a href="#">Retur Domba</a></h6>
                                                            <p>Jangka waktu retur : 7 hari dari sekarang</p>
                                                            <p>Admin dan Peternak telah berdiskusi dan bersepakat untuk
                                                                melakukan retur domba. Hal ini dikarenakan peternak
                                                                mengakui
                                                                adanya kesalahan dalam pengiriman domba. Peternak akan
                                                                mengirimkan domba yang sesuai setelah retur dilakukan.
                                                            </p>
                                                            <p>Ketentuan :</p>
                                                            <ul>
                                                                <li>Domba harus diretur sebagaimana kondisi saat
                                                                    diterima
                                                                </li>
                                                                <li>Tidak lewat dari batas waktu retur (7 hari)</li>
                                                                <li>Ada bukti berupa foto saat pengiriman kembali ke
                                                                    peternak</li>
                                                            </ul>
                                                            <p>Jika Anda menyetujui solusi ini, maka Anda menyetujui
                                                                ketentuan diatas. Jika ketentuan tidak dipenuhi, maka
                                                                proses
                                                                retur akan dibatalkan. </p>
                                                            <h6>Respon Anda</h6>
                                                            <p><a href="#">Menyetujui solusi</a></p>
                                                            <center>
                                                                <div class="mt-3 mb-3"
                                                                    style="width: 100%; height:1px; background-color: #3A8BCD;">
                                                                </div>
                                                            </center>
                                                            <h6>Detail Return</h6>
                                                            <table class="mb-3">
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
                                                                        <th scope="row">Tanggal Retur</th>
                                                                        <td></td>
                                                                        <td>:</td>
                                                                        <td>25/07/2022</td>

                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Alamat Retur</th>
                                                                        <td></td>
                                                                        <td>:</td>
                                                                        <td>Jl. Asia Afrika No. 99, Soreang, Bandung
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Bukti Pengiriman</th>
                                                                        <td></td>
                                                                        <td>:</td>
                                                                        <td><img src="../img/transaksi.jpg" alt=""
                                                                                width="200px" height="150px"></td>
                                                                    </tr>

                                                                </tbody>
                                                            </table>
                                                            <a href="#" class="btn btn-outline-primary"
                                                                data-dismiss="modal">Tutup</a>
                                                            <a href="#" class="btn btn-primary">Batalkan Komplain</a>
                                                        </div>

                                                    </center>
                                                </div>


                                                <br>
                                            </div>

                                        </div>
                                    </div>

                                    <!-- modal end -->
                            </center>
                        </div>
                    </div>
                </div>
                <!-- konfirmasi return dari peternak end -->
            </div>
            <br>
        </div>
</div>
<br>
</div>

</section>
</div>

@endsection