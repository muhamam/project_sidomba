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
        <div class="container" style="background-color: white; width: 1000px;">
            <center>
                <h3 style="border-bottom: 1px solid rgb(36, 156, 255) ; width:400px;">Pengajuan Negosiasi</h3>
            </center>
            <div class="row justify-content-center ml-3">
                <div class="row gutters-sm mt-4 ml-1">
                    <div class=" col-md-2 mr-4">
                        <a href="btn" data-bs-toggle="modal" data-bs-target="#exampleModalinti">
                            <img class="rounded" src="../img/1.jpg" width="190px" height="220px">
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

                    <div class="col-md-5 ml-5  " style="font-size:15px ; border-right:1px solid black;">
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
                    <div class="col ml-4 row" style="padding:0;">
                        <div class="col">
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
                                        <th colspan="3">
                                            <h6>Data Peternakan</h6>
                                        </th>

                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th colspan="4"> <a href="#">Peternakan Udin</a></th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th colspan="4">
                                            <p class=""> Soreang, Bandung
                                            </p>
                                        </th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th colspan="4">
                                            <a href="#"> 500+ </a>Investasi
                                            berhasil
                                        </th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th colspan="4">
                                            <a href="#">1k</a> Domba Telah
                                            Terjual
                                        </th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div class=" " style="width: 95%; height: 2px; background-color: #3A8BCD;margin-top: 30px;">
                    </div>
                    <table class="" style="margin-left:50px;">

                        <thead>
                            <tr>
                                <th scope="col">
                                    <h5 class="mt-2"><b> Pengajuan Investasi</b></h5>
                                </th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>

                                <td scope="row">Bagi Hasil </td>
                                <td></td>
                                <td>:</td>
                                <td></td>
                                <td>45%</td>
                            </tr>
                            <tr>
                                <td scope="row">Perkiraan Berat Untuk Penjualan</td>
                                <td></td>
                                <td>:</td>
                                <td></td>
                                <td>23Kg</td>
                            </tr>
                            <tr>
                                <td scope="row">Perkiraan Waktu Siap Dijual</td>
                                <td></td>
                                <td>:</td>
                                <td></td>
                                <td>1-2 Tahun</td>
                            </tr>
                            <tr>
                                <td scope="row">Perkiraan Profit Penjualan</td>
                                <td></td>
                                <td>:</td>
                                <td></td>
                                <td>Rp2.500.000,00 - 3.100.000,00</td>
                            </tr>
                            <tr>
                                <td scope="row">Margin Harga</td>
                                <td></td>
                                <td>:</td>
                                <td></td>
                                <td>Rp250.000,00 / +1Kg</td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="mt-4">
                        <h5 class="ml-5"><b> Nominasi Investasi</b></h5>
                        <h3 class="ml-5"><a href="#">Rp1.450.000,00</a></h3>
                    </div>

                    <div class=" " style="width: 95%; height: 2px; background-color: #3A8BCD;">
                    </div>
                    <br>

                </div>
                <br>



            </div>
            <h6><b> Ajukan Negosiasi</b></h6>
            <h6><b>Bagi Hasil</b></h6>
            <div class="input-group mb-3 ">

                <input type="text" class="" placeholder="0" aria-label="Example text with button addon"
                    aria-describedby="button-addon1" style="margin-right:10px; width: 70px;">
                <button class="btn btn-outline-secondary" type="button" id="button-addon1"
                    style="margin-left:-10px ;">%</button>
            </div>
            <p style="color: rgb(109, 109, 109);">(Batas persentase bagi hasil maksimal adalah 50%)</p>
            <h6>Nominal Investasi</h6>

            <div class="input-group  " style="margin-left: 20px">

                <button class="btn btn-outline-secondary" type="button" id="button-addon1">Rp</button>
                <input type="text" class="" placeholder="Ketik Jumlah Nominal Investasi yang Anda Ajukan Disni"
                    aria-label="Example text with button addon" aria-describedby="button-addon1"
                    style="margin-right:10px ; width: 400px;">

                <div class="uy" style=" background-color: #000; width: 30px; height: 2px; margin-top: 15px; ">

                </div>

                <button class="btn btn-outline-secondary" type="button" id="button-addon1"
                    style="margin-left: 10px;">Rp</button>
                <input type="text" class="" placeholder="Ketik Jumlah Nominal Investasi yang Anda Ajukan Disni"
                    aria-label="Example text with button addon" aria-describedby="button-addon1" style="width:
                    400px;">
            </div>
            <center>
                <a class="btn btn-primary mt-4" href="#">Ajukan Negosiasi</a>
            </center>
            <br>
            <br>
        </div>

</div>
</section>

</div>

@endsection