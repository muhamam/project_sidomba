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
            <br>
            <center>
                <div class="col-md-8 rounded" style="border: 1px solid #000;">

                    <img class="mt-3 mb-3" src="../img/ceklis.png" alt="" style="width: 60px; height: 60px;">

                    <center>
                        <h6> Pengajuan Negosiasi Anda Berhasil! Harap Tunggu Persetujuan Dari Peternak. Pantau
                            Negosiasi
                            Anda
                            Pada Laman Investasi Saya</h6>
                    </center>
                </div>
            </center>
            <div class="row gutters-sm mt-4 ml-1">
                <div class=" col-md-2 ">
                    <a href="btn" data-bs-toggle="modal" data-bs-target="#exampleModalinti">
                        <img class="rounded" src="../img/1.jpg" width="190px" height="220px">
                    </a>
                    <div class="modal fade mt-5" id="exampleModalinti" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
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

            </div>
            <center>
                <h5 class="mt-2"><b> Pengajuan Investasi</b></h5>
                <div class="rounded" style="margin-left:50px; width: 500px; height: 100px; border: 1px solid #000;">
                    <table>

                        <thead>
                            <tr>
                                <th scope="col">

                                </th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody class="rounded">
                            <tr>

                                <td scope="row">Bagi Hasil </td>
                                <td>
                                    :
                                </td>
                                <td></td>
                                <td></td>
                                <td> 45%<span class="iconify ml-4 mr-4" data-icon="akar-icons:arrow-right"
                                        data-width="15" data-height="15"></span><a href="#">47%</a></td>


                            </tr>
                            <tr>
                                <td scope="row"></td>
                                <td style="color: white;">:</td>
                                <td></td>
                                <td></td>
                                <td>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">Nominal Investasi</td>
                                <td>:</td>
                                <td></td>
                                <td></td>
                                <td>Rp1.450.000,00 <span class="iconify ml-4 mr-4" data-icon="akar-icons:arrow-right"
                                        data-width="15" data-height="15"></span>
                                    <a href="#">Rp1.350.000,00</a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </center>
            <br>
            <br>
        </div>
    </section>

</div>

@endsection