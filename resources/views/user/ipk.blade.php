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
        <div class="container " style="background-color: white; width: 994px; height:1800px;">
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

                        <div class="col-3 row">
                            <div class="">
                                <h5>Data
                                    Peternakan</h5>
                                <a href="#">Peternakan
                                    Udin</a>
                                <p class="">
                                    Soreang, Bandung
                                </p>
                                <span class="iconify" data-icon="flat-color-icons:rating" data-width="25"
                                    data-height="25"></span>
                                <span class="iconify" data-icon="flat-color-icons:rating" data-width="25"
                                    data-height="25"></span>
                                <span class="iconify" data-icon="flat-color-icons:rating" data-width="25"
                                    data-height="25"></span>
                                <span class="iconify" data-icon="flat-color-icons:rating" data-width="25"
                                    data-height="25"></span>
                                <span class="iconify" data-icon="flat-color-icons:rating" data-width="25"
                                    data-height="25"></span>
                                <br>
                                <a href="#(link menju peternak)">Lihat
                                    Peternakan</a>
                            </div>
                        </div>
                        <div class="col-2 " style="padding:0;">
                            <center>
                                <div class="mt-4">
                                    <h6 class=""><b> Harga</b></h6>
                                    <h3><a class="" href="#">Rp1.450.000,00</a>
                                    </h3>
                                </div>
                            </center>
                        </div>


                    </div>
                    <center>
                        <div class="dotted mt-5 col-md-11"></div>
                    </center>
                    <br>

                    <h6 class="ml-3 mb-3">Apa kendala Anda terhadap Domba Ini?</h6>
                    <div class="row d-flex justify-content-around">
                        <a href="#" class="btn btn-outline-primary col-3">Uang Belum Diterima</a>
                        <a href="#" class="btn btn-outline-primary col-5">Berat Domba Tidak Sesuai Dengan Yang
                            Tertera</a>
                        <a href="#" class="btn btn-outline-primary col-2">Ada Kecacatan</a>
                        <a href="#" class="btn btn-outline-primary col-4 mt-3 mb-3">Domba Tidak Sama
                            Dengan Foto</a>
                        <a href="#" class="btn btn-outline-primary col-4 mt-3 mb-3">Pengiriman Tidak
                            Sesuai Jadwal</a>
                    </div>
                    <div class="">
                        <div class="form-group col-11">
                            <label for="exampleFormControlTextarea1" class="ml-3">
                                <h6> Lainya :</h6>
                            </label>
                            <textarea class="form-control ml-2 " id="exampleFormControlTextarea1" rows="3"
                                placeholder="Tuliskan komplain mu disini..."></textarea>
                        </div>
                    </div>

                    <div class="">
                        <div class="form-group col-11">
                            <label for="exampleFormControlTextarea1" class="ml-3">
                                <h6>Mohon jelaskan kendala Anda dengan rinci pada kolom dibawah ini</h6>
                            </label>
                            <textarea class="form-control ml-2 " id="exampleFormControlTextarea1" rows="3"
                                placeholder="Deskripsikan kendala Anda."></textarea>
                        </div>
                    </div>
                    <div class="">
                        <div class="form-group  col-11 ml-3 ">
                            <label for="exampleFormControlFile1">
                                <h6>Cantumkan foto bukti kendala yang dialami :</h6>
                            </label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mr-3 mb-3 mt-3" style="border-radius: 10px;">
                        <a href="#" class="btn btn-outline-primary mr-3">Batal</a>
                        <a href="#" class="btn btn-primary">Ajukan Komplain</a>
                    </div>
                </div>
            </div>
            <br>

        </div>
</div>
<br>
</div>

</section>
</div>

@endsection