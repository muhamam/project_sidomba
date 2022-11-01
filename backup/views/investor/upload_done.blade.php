@extends('layouts.user')

@section('content')
<div class="row  d-flex">
    @include('layouts.sidebarInvestor')

    <section class="ftco-section col" style="margin-top: 100px;">
        <div class=" d-flex d-flex justify-content-center">
            <img src="../img/domba.png" alt="" style="width: 77px; height: 77px;">
            <div class="garis"
                style="width: 2px; height: 85px; background-color: black; margin-left: 10px; margin-right: 20px;">
                <p></p>
            </div>
            <h3 class="" style="text-center">CARIBI <br>Investasi</h3>
        </div>
        <div class="container bg-light" style="background-color: white; border-radius:20px;">
            <div class="d-flex flex-row   ml-3 mb-3 mt-3">
                <a class="mt-3" style="color: #000;">
                    <h5>Status Pembayaran</h5>
                </a>

            </div>
            <center>
                <div class="form-group col-6" style="border: 1px solid black; border-radius:15px;">

                    <span class="iconify" data-icon="carbon:certificate-check" data-width="80" data-height="80"></span>
                    <br>
                    <h6>Transaksi Anda sedang dalam proses verifikasi.
                        Harap tunggu 2x24 jam.
                        Pantau proses verifikasi melalui menu <b> Transaksi > Menunggu Pembayaran</b></h6>
                </div>
                <br>
                <h5>Upload Bukti Bayar</h5>
                <br>
                <div class="col-10" style="border: 1px solid black; border-radius:15px;">
                    <span class="iconify" data-icon="fluent:slide-search-20-regular" data-width="70"
                        data-height="70"></span>
                    <h6>Bukti pembayaran Anda sedang diverifikasi. Mohon tunggu, akan diverifikasi secepatnya.</h6>
                    <p>Bukti Transfer</p>
                    <img src="../img/transaksi.jpg" alt=""
                        style="width: 150px; height: 107px; margin-bottom:20px;border-radius:10px;">
                </div>
            </center>
            <br>
            <div class="d-flex justify-content-center">
                <div class="col-10" style="border-radius:10px; border: 1px solid #000; height: 380px; ">
                    <div class="row mt-3">
                        <p class="col-3 ml-4 " style="border-right:1px solid black ; "><b>Invoice :
                                INV/001/052022 </b> </p>

                        <p class="col-3"><b> Rabu, 25 Mei 2022 </b></p>
                    </div>
                    <div class=" mb-3" style="width: 100%; height:1px; background-color: #000000; "></div>
                    <div class="row ml-5">
                        <h6 class="col-3">Peternakan Udin</h6>
                    </div>
                    <div class="row gutters-sm mt-4 ml-1">
                        <div class=" col-md-2 mr-5">
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

                        <div class="col-3  ml-3" style="font-size:12px;">
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
                        <div class="row col-4">
                            <div class="col-12">
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
                                <h6><b> Harga</b></h6>
                                <h6><a href="#">Rp1.450.000,00</a>
                                </h6>
                            </center>
                        </div>

                    </div>
                </div>
            </div>
            <br>
            <div class="d-flex justify-content-center">
                <div class="col-10" style="border-radius:10px; border: 1px solid #000; height: 380px; ">
                    <div class="row mt-3">
                        <p class="col-3 ml-4 " style="border-right:1px solid black ; "><b>Invoice :
                                INV/001/052022 </b> </p>

                        <p class="col-3"><b> Rabu, 25 Mei 2022 </b></p>
                    </div>
                    <div class=" mb-3" style="width: 100%; height:1px; background-color: #000000; "></div>
                    <div class="row ml-5">
                        <h6 class="col-3">Peternakan Udin</h6>
                    </div>
                    <div class="row gutters-sm mt-4 ml-1">
                        <div class=" col-md-2 mr-5">
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

                        <div class="col-3 ml-3  " style="font-size:12px;">
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
                        <div class="row col-4">
                            <div class="col-12">
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
                                <h6><b> Harga</b></h6>
                                <h6><a href="#">Rp1.450.000,00</a>
                                </h6>
                            </center>
                        </div>

                    </div>
                </div>
            </div>
            <br>

            <div class="dotted  col-12"></div>
            <div class="d-flex justify-content-end ">
                <div class="row col-6  mt-4 mr-4" style="height: 50px;">
                    <h5 class="col-4">Subtotal</h5>
                    <h5 class="col-2">:</h5>
                    <a class="col-5" href="#">
                        <h5>Rp2.900.000,00</h5>
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>





@endsection