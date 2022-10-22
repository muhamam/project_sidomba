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
        <br>
        <div class="container " style="background-color: white; width: 994px;">


            <div class="d-flex flex-row   mt-5  ml-3">
                <a class="" href="investasi_riwayat.html" style="color: #000;">
                    <h5>Investasi</h5>
                </a>
                <a class="ml-3" href="investasi_negosiasi.html" style="color: #000;">
                    <h5> Negosiasi</h5>
                </a>




            </div>
            <div class="kabeh rounded-lg" style="border: 1px solid #000; height: 380px; ">
                <div class="row mt-3">
                    <p class="col-3 ml-4 " style="border-right:1px solid black ; "><b>Invoice :
                            INV/001/052022 </b> </p>

                    <p class="col-3"><b> Rabu, 25 Mei 2022 </b></p>
                </div>
                <div class=" mb-3" style="width: 100%; height:1px; background-color: #000000; "></div>
                <div class="row ml-5">
                    <h6 class="col-2">Peternakan Udin</h6>
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

                    <div class="col-md-5 " style="margin-left: 100px;">
                        <table style="font-size: 12px;">
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Bagi Hasil </th>
                                    <td></td>
                                    <td>:</td>
                                    <td>45%</td>
                                </tr>
                                <tr>
                                    <th scope="row">Perkiraan Berat Untuk Penjualan</th>
                                    <td></td>
                                    <td>:</td>
                                    <td>27Kg</td>
                                </tr>
                                <tr>
                                    <th scope="row">Perkiraan Waktu Siap Dijual</th>
                                    <td></td>
                                    <td>:</td>
                                    <td>1-2 Tahun</td>
                                </tr>
                                <tr>
                                    <th scope="row">Perkiraan Profit Penjualan</th>
                                    <td></td>
                                    <td>:</td>
                                    <td>Rp2.500.000,00 - 3.100.000,00</td>
                                </tr>
                                <tr>
                                    <th scope="row">Margin Harga</th>
                                    <td></td>
                                    <td>:</td>
                                    <td>Rp250.000,00 / +1Kg</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <center>
                        <div class="col " style="font-size:10px; margin-top:-90px;">
                            <div class="c mt-4 " style="">
                                <h6 style="margin-left: 18px;"><b> Nominasi Investasi</b></h6>
                                <h3><a class="ml-4" href="#" style="font-size: 20px;">Rp1.450.000,00</a></h3>
                                <!-- Button trigger modal -->
                                <a type="button" href="#" class="btn btn-primary ml-4" data-toggle="modal"
                                    data-target="#exampleModal-1" style="margin-left: 10px;">Pertinjau
                                    Investasi</a>


                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal-1" aria-labelledby="exampleModalLabel">
                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                            <div class="modal-body">
                                                <div class="row justify-content-center ml-3 modal-title"
                                                    id="exampleModalLabel">
                                                    <div class="row gutters-sm mt-5">
                                                        <div class="" style="width:100px; height:300px;">
                                                            <div class="">
                                                                <div class="">
                                                                    <div class="">
                                                                        <a href="btn" data-bs-toggle="modal"
                                                                            data-bs-target="#exampleModalinti">
                                                                            <img class="rounded" src="../img/1.jpg"
                                                                                width="200px" height="200px">
                                                                        </a>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="">

                                                            <div class=" "
                                                                style="margin-left: 250px; margin-top:-320px;">
                                                                <h4>Domba Suffolk</h4>
                                                                <h5>Data Domba</h5>
                                                                <div class="row">
                                                                    <table>
                                                                        <thead>
                                                                            <tr>
                                                                                <th scope="col"></th>
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
                                                                    <div class=""
                                                                        style="width: 100%; height:1px; background-color: #3A8BCD;">
                                                                    </div>
                                                                    <div class="D">
                                                                        <h5 style="">Data
                                                                            Peternakan</h5>
                                                                        <a href="#">Peternakan
                                                                            Udin</a>
                                                                        <p class="">
                                                                            Soreang, Bandung
                                                                        </p>
                                                                        <span class="iconify"
                                                                            data-icon="flat-color-icons:rating"
                                                                            data-width="25" data-height="25"></span>
                                                                        <span class="iconify"
                                                                            data-icon="flat-color-icons:rating"
                                                                            data-width="25" data-height="25"></span>
                                                                        <span class="iconify"
                                                                            data-icon="flat-color-icons:rating"
                                                                            data-width="25" data-height="25"></span>
                                                                        <span class="iconify"
                                                                            data-icon="flat-color-icons:rating"
                                                                            data-width="25" data-height="25"></span>
                                                                        <span class="iconify"
                                                                            data-icon="flat-color-icons:rating"
                                                                            data-width="25" data-height="25"></span>
                                                                        <br>
                                                                        <a href="#(link menju peternak)">Lihat
                                                                            Peternakan</a>
                                                                    </div>


                                                                </div>


                                                            </div>


                                                        </div>

                                                        <div class="d-flex justify-content-between">
                                                            <div class="q rounded-lg"
                                                                style="width:180px ; border: 1px solid #000;">
                                                                <center>
                                                                    <p>Harga Jual</p>
                                                                    <h6>Rp3.700.000,00</h6>
                                                                </center>
                                                            </div>
                                                            <div class="q rounded-lg "
                                                                style="width:180px ; border: 1px solid #000; margin-left: 100px;">
                                                                <center>
                                                                    <p>Bagi Hasil</p>
                                                                    <h6>50%</h6>
                                                                </center>
                                                            </div>

                                                        </div>
                                                        <div class="d-flex justify-content-between mt-5">
                                                            <div class="q rounded-lg"
                                                                style="width:180px ; border: 1px solid #000;">
                                                                <center>
                                                                    <p>Keuntungan</p>
                                                                    <h6>Rp1.850.000,00</h6>
                                                                </center>
                                                            </div>
                                                            <div class="q rounded-lg "
                                                                style="width:180px ; border: 1px solid #000; margin-left: 100px;">
                                                                <center>
                                                                    <p>Laba Bersih</p>
                                                                    <a href="#">
                                                                        <h6 style="color: rgb(0, 255, 0);">
                                                                            Rp400.000,00</h6>
                                                                    </a>
                                                                </center>
                                                            </div>

                                                        </div>
                                                        <br>

                                                        <div class=" "
                                                            style="width: 95%; height: 2px; background-color: #3A8BCD;margin-top: -190px;">
                                                        </div>
                                                        <center>
                                                            <div class="mt-4">
                                                                <h5 style="margin-left:120px;"><b> Nominasi
                                                                        Investasi</b></h5>
                                                                <h3 style="margin-left:120px;"><a
                                                                        href="#">Rp1.450.000,00</a></h3>
                                                            </div>
                                                        </center>

                                                        <div class=" "
                                                            style="width: 95%; height: 2px; background-color: #3A8BCD;">
                                                        </div>
                                                        <br>

                                                    </div>

                                                </div>
                                            </div>
                                            <center>
                                                <button type="button" class="btn btn-secondary mb-3"
                                                    data-dismiss="modal">Close</button>
                                            </center>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </center>
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
                    <h6 class="col-2">Peternakan Udin</h6>
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

                    <div class="col-md-5 " style="margin-left: 100px;">
                        <table style="font-size: 12px;">
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Bagi Hasil </th>
                                    <td></td>
                                    <td>:</td>
                                    <td>45%</td>
                                </tr>
                                <tr>
                                    <th scope="row">Perkiraan Berat Untuk Penjualan</th>
                                    <td></td>
                                    <td>:</td>
                                    <td>27Kg</td>
                                </tr>
                                <tr>
                                    <th scope="row">Perkiraan Waktu Siap Dijual</th>
                                    <td></td>
                                    <td>:</td>
                                    <td>1-2 Tahun</td>
                                </tr>
                                <tr>
                                    <th scope="row">Perkiraan Profit Penjualan</th>
                                    <td></td>
                                    <td>:</td>
                                    <td>Rp2.500.000,00 - 3.100.000,00</td>
                                </tr>
                                <tr>
                                    <th scope="row">Margin Harga</th>
                                    <td></td>
                                    <td>:</td>
                                    <td>Rp250.000,00 / +1Kg</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <center>
                        <div class="col " style="font-size:10px; margin-top:-90px;">
                            <div class="c mt-4 " style="">
                                <h6 style="margin-left: 18px;"><b> Nominasi Investasi</b></h6>
                                <h3><a class="ml-4" href="#" style="font-size: 20px;">Rp1.450.000,00</a></h3>
                                <!-- Button trigger modal -->
                                <a type="button" href="#" class="btn btn-primary ml-4" data-toggle="modal"
                                    data-target="#exampleModal-1" style="margin-left: 10px;">Pertinjau
                                    Investasi</a>


                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal-1" aria-labelledby="exampleModalLabel">
                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                            <div class="modal-body">
                                                <div class="row justify-content-center ml-3 modal-title"
                                                    id="exampleModalLabel">
                                                    <div class="row gutters-sm mt-5">
                                                        <div class="" style="width:100px; height:300px;">
                                                            <div class="">
                                                                <div class="">
                                                                    <div class="">
                                                                        <a href="btn" data-bs-toggle="modal"
                                                                            data-bs-target="#exampleModalinti">
                                                                            <img class="rounded" src="../img/1.jpg"
                                                                                width="200px" height="200px">
                                                                        </a>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="">

                                                            <div class=" "
                                                                style="margin-left: 250px; margin-top:-320px;">
                                                                <h4>Domba Suffolk</h4>
                                                                <h5>Data Domba</h5>
                                                                <div class="row">
                                                                    <table>
                                                                        <thead>
                                                                            <tr>
                                                                                <th scope="col"></th>
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
                                                                    <div class=""
                                                                        style="width: 100%; height:1px; background-color: #3A8BCD;">
                                                                    </div>
                                                                    <div class="D">
                                                                        <h5 style="">Data
                                                                            Peternakan</h5>
                                                                        <a href="#">Peternakan
                                                                            Udin</a>
                                                                        <p class="">
                                                                            Soreang, Bandung
                                                                        </p>
                                                                        <span class="iconify"
                                                                            data-icon="flat-color-icons:rating"
                                                                            data-width="25" data-height="25"></span>
                                                                        <span class="iconify"
                                                                            data-icon="flat-color-icons:rating"
                                                                            data-width="25" data-height="25"></span>
                                                                        <span class="iconify"
                                                                            data-icon="flat-color-icons:rating"
                                                                            data-width="25" data-height="25"></span>
                                                                        <span class="iconify"
                                                                            data-icon="flat-color-icons:rating"
                                                                            data-width="25" data-height="25"></span>
                                                                        <span class="iconify"
                                                                            data-icon="flat-color-icons:rating"
                                                                            data-width="25" data-height="25"></span>
                                                                        <br>
                                                                        <a href="#(link menju peternak)">Lihat
                                                                            Peternakan</a>
                                                                    </div>


                                                                </div>


                                                            </div>


                                                        </div>

                                                        <div class="d-flex justify-content-between">
                                                            <div class="q rounded-lg"
                                                                style="width:180px ; border: 1px solid #000;">
                                                                <center>
                                                                    <p>Harga Jual</p>
                                                                    <h6>Rp3.700.000,00</h6>
                                                                </center>
                                                            </div>
                                                            <div class="q rounded-lg "
                                                                style="width:180px ; border: 1px solid #000; margin-left: 100px;">
                                                                <center>
                                                                    <p>Bagi Hasil</p>
                                                                    <h6>50%</h6>
                                                                </center>
                                                            </div>

                                                        </div>
                                                        <div class="d-flex justify-content-between mt-5">
                                                            <div class="q rounded-lg"
                                                                style="width:180px ; border: 1px solid #000;">
                                                                <center>
                                                                    <p>Keuntungan</p>
                                                                    <h6>Rp1.850.000,00</h6>
                                                                </center>
                                                            </div>
                                                            <div class="q rounded-lg "
                                                                style="width:180px ; border: 1px solid #000; margin-left: 100px;">
                                                                <center>
                                                                    <p>Laba Bersih</p>
                                                                    <a href="#">
                                                                        <h6 style="color: rgb(0, 255, 0);">
                                                                            Rp400.000,00</h6>
                                                                    </a>
                                                                </center>
                                                            </div>

                                                        </div>
                                                        <br>

                                                        <div class=" "
                                                            style="width: 95%; height: 2px; background-color: #3A8BCD;margin-top: -190px;">
                                                        </div>
                                                        <center>
                                                            <div class="mt-4">
                                                                <h5 style="margin-left:120px;"><b> Nominasi
                                                                        Investasi</b></h5>
                                                                <h3 style="margin-left:120px;"><a
                                                                        href="#">Rp1.450.000,00</a></h3>
                                                            </div>
                                                        </center>

                                                        <div class=" "
                                                            style="width: 95%; height: 2px; background-color: #3A8BCD;">
                                                        </div>
                                                        <br>

                                                    </div>

                                                </div>
                                            </div>
                                            <center>
                                                <button type="button" class="btn btn-secondary mb-3"
                                                    data-dismiss="modal">Close</button>
                                            </center>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </center>
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
                    <h6 class="col-2">Peternakan Udin</h6>
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

                    <div class="col-md-5 " style="margin-left: 100px;">
                        <table style="font-size: 12px;">
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Bagi Hasil </th>
                                    <td></td>
                                    <td>:</td>
                                    <td>45%</td>
                                </tr>
                                <tr>
                                    <th scope="row">Perkiraan Berat Untuk Penjualan</th>
                                    <td></td>
                                    <td>:</td>
                                    <td>27Kg</td>
                                </tr>
                                <tr>
                                    <th scope="row">Perkiraan Waktu Siap Dijual</th>
                                    <td></td>
                                    <td>:</td>
                                    <td>1-2 Tahun</td>
                                </tr>
                                <tr>
                                    <th scope="row">Perkiraan Profit Penjualan</th>
                                    <td></td>
                                    <td>:</td>
                                    <td>Rp2.500.000,00 - 3.100.000,00</td>
                                </tr>
                                <tr>
                                    <th scope="row">Margin Harga</th>
                                    <td></td>
                                    <td>:</td>
                                    <td>Rp250.000,00 / +1Kg</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <center>
                        <div class="col " style="font-size:10px; margin-top:-90px;">
                            <div class="c mt-4 " style="">
                                <h6 style="margin-left: 18px;"><b> Nominasi Investasi</b></h6>
                                <h3><a class="ml-4" href="#" style="font-size: 20px;">Rp1.450.000,00</a></h3>
                                <!-- Button trigger modal -->
                                <a type="button" href="#" class="btn btn-primary ml-4" data-toggle="modal"
                                    data-target="#exampleModal-1" style="margin-left: 10px;">Pertinjau
                                    Investasi</a>


                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal-1" aria-labelledby="exampleModalLabel">
                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                            <div class="modal-body">
                                                <div class="row justify-content-center ml-3 modal-title"
                                                    id="exampleModalLabel">
                                                    <div class="row gutters-sm mt-5">
                                                        <div class="" style="width:100px; height:300px;">
                                                            <div class="">
                                                                <div class="">
                                                                    <div class="">
                                                                        <a href="btn" data-bs-toggle="modal"
                                                                            data-bs-target="#exampleModalinti">
                                                                            <img class="rounded" src="../img/1.jpg"
                                                                                width="200px" height="200px">
                                                                        </a>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="">

                                                            <div class=" "
                                                                style="margin-left: 250px; margin-top:-320px;">
                                                                <h4>Domba Suffolk</h4>
                                                                <h5>Data Domba</h5>
                                                                <div class="row">
                                                                    <table>
                                                                        <thead>
                                                                            <tr>
                                                                                <th scope="col"></th>
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
                                                                    <div class=""
                                                                        style="width: 100%; height:1px; background-color: #3A8BCD;">
                                                                    </div>
                                                                    <div class="D">
                                                                        <h5 style="">Data
                                                                            Peternakan</h5>
                                                                        <a href="#">Peternakan
                                                                            Udin</a>
                                                                        <p class="">
                                                                            Soreang, Bandung
                                                                        </p>
                                                                        <span class="iconify"
                                                                            data-icon="flat-color-icons:rating"
                                                                            data-width="25" data-height="25"></span>
                                                                        <span class="iconify"
                                                                            data-icon="flat-color-icons:rating"
                                                                            data-width="25" data-height="25"></span>
                                                                        <span class="iconify"
                                                                            data-icon="flat-color-icons:rating"
                                                                            data-width="25" data-height="25"></span>
                                                                        <span class="iconify"
                                                                            data-icon="flat-color-icons:rating"
                                                                            data-width="25" data-height="25"></span>
                                                                        <span class="iconify"
                                                                            data-icon="flat-color-icons:rating"
                                                                            data-width="25" data-height="25"></span>
                                                                        <br>
                                                                        <a href="#(link menju peternak)">Lihat
                                                                            Peternakan</a>
                                                                    </div>


                                                                </div>


                                                            </div>


                                                        </div>

                                                        <div class="d-flex justify-content-between">
                                                            <div class="q rounded-lg"
                                                                style="width:180px ; border: 1px solid #000;">
                                                                <center>
                                                                    <p>Harga Jual</p>
                                                                    <h6>Rp3.700.000,00</h6>
                                                                </center>
                                                            </div>
                                                            <div class="q rounded-lg "
                                                                style="width:180px ; border: 1px solid #000; margin-left: 100px;">
                                                                <center>
                                                                    <p>Bagi Hasil</p>
                                                                    <h6>50%</h6>
                                                                </center>
                                                            </div>

                                                        </div>
                                                        <div class="d-flex justify-content-between mt-5">
                                                            <div class="q rounded-lg"
                                                                style="width:180px ; border: 1px solid #000;">
                                                                <center>
                                                                    <p>Keuntungan</p>
                                                                    <h6>Rp1.850.000,00</h6>
                                                                </center>
                                                            </div>
                                                            <div class="q rounded-lg "
                                                                style="width:180px ; border: 1px solid #000; margin-left: 100px;">
                                                                <center>
                                                                    <p>Laba Bersih</p>
                                                                    <a href="#">
                                                                        <h6 style="color: rgb(0, 255, 0);">
                                                                            Rp400.000,00</h6>
                                                                    </a>
                                                                </center>
                                                            </div>

                                                        </div>
                                                        <br>

                                                        <div class=" "
                                                            style="width: 95%; height: 2px; background-color: #3A8BCD;margin-top: -190px;">
                                                        </div>
                                                        <center>
                                                            <div class="mt-4">
                                                                <h5 style="margin-left:120px;"><b> Nominasi
                                                                        Investasi</b></h5>
                                                                <h3 style="margin-left:120px;"><a
                                                                        href="#">Rp1.450.000,00</a></h3>
                                                            </div>
                                                        </center>

                                                        <div class=" "
                                                            style="width: 95%; height: 2px; background-color: #3A8BCD;">
                                                        </div>
                                                        <br>

                                                    </div>

                                                </div>
                                            </div>
                                            <center>
                                                <button type="button" class="btn btn-secondary mb-3"
                                                    data-dismiss="modal">Close</button>
                                            </center>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </center>
                </div>
            </div>
            <br>
        </div>
</div>
</section>


</div>



</div>

@endsection