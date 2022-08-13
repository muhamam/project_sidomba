@extends('layouts.user')

@section('content')
<div class="container">
    <div class=" d-flex d-flex justify-content-center mt-5" style="margin-bottom: 20px;">
        <img src="../img/logodomba.png" alt="" style="width: 77px; height: 77px;">
        <div class="garis"
            style="width: 4px; height: 85px; background-color: black; margin-left: 5px; margin-right: 5px;">
            <p></p>
        </div>
        <h3 class="" style="margin-top: 10px; margin-left: 10px; height: 10px;">SI-DOMBA</h3>
    </div>
    <div class="d-flex justify-content-center">
        <div class="bg-light col-10" style="border-radius: 15px;">
            <br>
            <h5>Status Pembayaran</h5>
            <center>
                <div class="form-group col-6" style="border: 1px solid black; border-radius:15px;">
                    <span class="iconify" data-icon="carbon:certificate-check" data-width="80" data-height="80"></span>
                    <br>
                    <h6>Selamat! Pembayaran Anda telah divalidasi. Terimakasih telah bertransaksi domba pada SI Domba!
                    </h6>
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
    </div>
</div>

@endsection