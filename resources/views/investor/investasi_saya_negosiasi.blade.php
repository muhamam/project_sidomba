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
            <h3 class="" style="text-center">SI-DOMBA <br>Investasi</h3>
        </div>
        <br>
        <div class="container " style="background-color: white; width: 994px;">


            <div class="d-flex flex-row mt-5  ml-3">
                <a class="" href="investasi_riwayat.html" style="color: #000;">
                    <h5>Berjalan</h5>
                </a>
                <a class="ml-4" href="investasi_negosiasi.html" style="color: #000;">
                    <h5> Selesai</h5>
                </a>
                <a class="ml-4" href="investasi_negosiasi.html" style="color: #000;">
                    <h5> Dalam Negosiasi</h5>
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
                    <div class=" col ">
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

                    <div class="col   " style="font-size:11px ;">
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

                    <div class="col row">
                        <h6>Pengajuan Negosiasi</h6>
                        <h6>Bagi Hasil :</h6>
                        <table>
                            <thead>
                                <tr>
                                    <th colspan="4">
                                    </th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th colspan="4">
                                    </th>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <p>45%</p>
                                    </td>
                                    <td><span class="iconify mb-3" data-icon="ant-design:arrow-right-outlined"
                                            data-width="20" data-height="20"></span>
                                    </td>
                                    <td>
                                        <p><a href="#">47%</a> </p>
                                    </td>
                                </tr>


                            </tbody>
                        </table>
                        <table>
                            <h6>Nominal Investasi :</h6>
                            <tr>
                                <th colspan="4">

                                </th>
                                <td></td>
                                <td></td>
                                <td>
                                    <p class=""> Rp1.450.000,00</p>
                                </td>
                                <td><span class="iconify mb-3" data-icon="ant-design:arrow-right-outlined"
                                        data-width="20" data-height="20"></span>
                                </td>
                                <td>
                                    <p class=""> <a href="#">Rp1.350.000,00</a></p>
                                </td>
                            </tr>
                        </table>

                    </div>

                    <div class="col ml-2" style="">
                        <h5 class="ml-4">Status Negosiasi</h5>
                        <button class="btn ml-4 rounded-pill" style="  background-color: #ff0000; color: #ffffff;">Tidak
                            Disetujui</button>
                        <center>
                            <div class="p mt-3 rounded-lg"
                                style="width:155px; height:135px ; border: 1px solid #000; font-size:13px;">
                                <p>Maaf, negosiasi anda tidak disetujui oleh pihak peternak. Silahkan
                                    mencari investasi lainnya di laman pasar. Terimakasih atas
                                    perhatiannya</p>
                            </div>
                        </center>
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
                    <h6 class="col-2">Peternakan Udin</h6>
                    <a href="#" class="btn btn-outline-primary rounded col-2" style="font-size: 10px;"> Sedang
                        Berlangsung</a>
                </div>
                <div class="row gutters-sm mt-4 ml-1">
                    <div class=" col ">
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

                    <div class="col   " style="font-size:11px ;">
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

                    <div class="col row">
                        <h6>Pengajuan Negosiasi</h6>
                        <h6>Bagi Hasil :</h6>
                        <table>
                            <thead>
                                <tr>
                                    <th colspan="4">
                                    </th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th colspan="4">
                                    </th>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <p>45%</p>
                                    </td>
                                    <td><span class="iconify mb-3" data-icon="ant-design:arrow-right-outlined"
                                            data-width="20" data-height="20"></span>
                                    </td>
                                    <td>
                                        <p><a href="#">47%</a> </p>
                                    </td>
                                </tr>


                            </tbody>
                        </table>
                        <table>
                            <h6>Nominal Investasi :</h6>
                            <tr>
                                <th colspan="4">

                                </th>
                                <td></td>
                                <td></td>
                                <td>
                                    <p class=""> Rp1.450.000,00</p>
                                </td>
                                <td><span class="iconify mb-3" data-icon="ant-design:arrow-right-outlined"
                                        data-width="20" data-height="20"></span>
                                </td>
                                <td>
                                    <p class=""> <a href="#">Rp1.350.000,00</a></p>
                                </td>
                            </tr>
                        </table>

                    </div>

                    <div class="col ml-2" style="">
                        <h5 class="ml-4">Status Negosiasi</h5>
                        <button class="btn ml-4 rounded-pill" style="  background-color: #F77E21; color: #ffffff;">Belum
                            Disetujui</button>
                        <center>
                            <div class="p mt-3 rounded-lg" style="width:135px; border: 1px solid #000;">
                                <p>Mohon tunggu sampai peternak menyetujui negosiasi Anda</p>
                            </div>
                        </center>
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
                    <h6 class="col-2">Peternakan Udin</h6>
                    <a href="#" class="btn btn-outline-primary rounded col-2" style="font-size: 10px;"> Sedang
                        Berlangsung</a>
                </div>
                <div class="row gutters-sm mt-4 ml-1">
                    <div class=" col ">
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

                    <div class="col   " style="font-size:11px ;">
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

                    <div class="col row">
                        <h6>Pengajuan Negosiasi</h6>
                        <h6>Bagi Hasil :</h6>
                        <table>
                            <thead>
                                <tr>
                                    <th colspan="4">
                                    </th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th colspan="4">
                                    </th>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <p>45%</p>
                                    </td>
                                    <td><span class="iconify mb-3" data-icon="ant-design:arrow-right-outlined"
                                            data-width="20" data-height="20"></span>
                                    </td>
                                    <td>
                                        <p><a href="#">47%</a> </p>
                                    </td>
                                </tr>


                            </tbody>
                        </table>
                        <table>
                            <h6>Nominal Investasi :</h6>
                            <tr>
                                <th colspan="4">

                                </th>
                                <td></td>
                                <td></td>
                                <td>
                                    <p class=""> Rp1.450.000,00</p>
                                </td>
                                <td><span class="iconify mb-3" data-icon="ant-design:arrow-right-outlined"
                                        data-width="20" data-height="20"></span>
                                </td>
                                <td>
                                    <p class=""> <a href="#">Rp1.350.000,00</a></p>
                                </td>
                            </tr>
                        </table>

                    </div>

                    <div class="col ml-2" style="">
                        <h5 class="ml-4">Status Negosiasi</h5>
                        <button class="btn ml-5 rounded-pill"
                            style="  background-color: #3ACD52; color: #ffffff;">Disetujui</button>
                        <center>
                            <div class="p mt-3 rounded-lg"
                                style="width:155px; height:135px ; border: 1px solid #000; font-size:13px;">
                                <p>Selamat! Negosiasi Anda telah disetujui oleh pihak peternak. Silakan cek di laman
                                    investasi saya pada bagian berjalan. Terimakasih atas perhatiannya!</p>
                            </div>
                        </center>
                    </div>
                </div>
            </div>
            <br>
        </div>
</div>
</section>


</div>



</div>

@endsection