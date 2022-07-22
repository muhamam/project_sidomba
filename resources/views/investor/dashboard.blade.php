@extends('layouts.user')

@section('content')

<div class="row ">
    <div class=" col-md-3" style="margin-left: 50px; margin-top:150px;">
        <div class=" bg-light  ">
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
                            <a href="#" style="font-size:11px;color:#000000 ;">muhammadanasaiman0@gmail.com</a><br>

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
                    <span class="iconify" data-icon="eva:home-outline" data-width="25" data-height="25"
                        style="margin-right: 130px; margin-bottom: -60px;"></span>

                    <a href="dashboard_investor.html" class="dropdown-item ">Beranda</a>
                    <span class="iconify" data-icon="healthicons:market-stall-outline" data-width="25" data-height="25"
                        style="margin-right: 130px; margin-bottom: -60px;"></span>
                    <a href="pasar.html" class="dropdown-item ">Pasar</a>
                    <span class="iconify" data-icon="mdi:sheep" data-width="25" data-height="25" style="margin-right: 130px;
                                    margin-bottom: -60px;"></span>
                    <a href="#" class="dropdown-item">Pasar</a>
                    <span class="iconify" data-icon="ant-design:history-outlined" data-width="25" data-height="25"
                        style="margin-right: 130px; margin-bottom: -60px;"></span>

                    <a href="investasi_riwayat.html" class="dropdown-item">Riwayat</a>
                    <span class="iconify" data-icon="mdi:account-cash" data-width="25" data-height="25"
                        style="margin-right: 130px; margin-bottom: -60px;"></span>
                    <a href="#" class="dropdown-item ml-3">Pencairan Dana</a>
                </div>

            </center>
        </div>

    </div>


    <section class="ftco-section col " style="margin-left: 100px;">
        <div class="tengah d-flex d-flex justify-content-center "
            style="margin-bottom: 20px; margin-top:-50px; margin-left: -300px;">

            <img src="../img/domba.png" alt="" style="width: 77px; height: 77px;">

            <div class="garis"
                style="width: 4px; height: 85px; background-color: black; margin-left: 5px; margin-right: 5px;">
                <p></p>
            </div>


            <h3 class="" style="margin-top: 10px; margin-left: 10px; height: 10px;">SI-DOMBA</h3>
            <h4 class="" style="margin-top: 40px; margin-left: -120px;">Investasi</h4>



        </div>
        <div class="container">
            <div class="row justify-content-center " style="background-color: white; width: 800px;
            height: 565px;">


                <table class="table  "
                    style=" margin-top: 40px; border: 1px solid #000000;height: 150px; width: 300px;">
                    <thead style="background: #3A8BCD; ">
                        <tr>
                            <th></th>
                            <th>Total Jumlah Investasi</th>
                            <th></th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th></th>
                            <td>Rp9.000.00,00 <br>
                                3 Investasi
                            </td>
                            <td>
                                <span class="iconify" data-icon="fxemoji:sheep" data-width="55" data-height="55"></span>
                            </td>


                        </tr>


                    </tbody>
                </table>
                <table class="table" style="margin-top: 40px; border: 1px solid #000000; margin-left: 30px;height: 150px; width:
                    300px;">
                    <thead style="background: #3A8BCD;">
                        <tr>
                            <th></th>
                            <th colspan="2">Total Untung Bagi Hasil</th>
                            <th></th>
                            <th></th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th></th>
                            <td>Rp9.000.00,00 <br>
                                3 Investasi
                            </td>
                            <td>
                                <span class="iconify" data-icon="flat-color-icons:money-transfer" data-width="55"
                                    data-height="55"></span>
                            </td>5

                        </tr>


                    </tbody>
                </table>
                <div class="dotted1 mt-5 col-md-10"></div>

                <table class=" mt-5 ml-4" style="color: #000000;">
                    <thead>
                        <tr>
                            <th>

                            </th>
                            <th>

                                <h1>Profil Investasi </h1>
                                <h6>Jumlah Domba yang Diinvestasikan : 3 Ekor</h6>
                                <h6>Peternakan yang Diinvestasikan : 2 Peternakan</h6>

                            </th>
                            <th> </th>


                        </tr>
                    </thead>
                    <tbody>



                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>

@endsection