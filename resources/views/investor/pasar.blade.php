@extends('layouts.user')

@section('content')

<div class="row ">
    <div class=" col-md-3" style="margin-left: 30px; margin-top:150px;">
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
                    <span class="iconify" data-icon="eva:home-outline" data-width="25" data-height="25"
                        style="margin-right: 130px; margin-bottom: -60px;"></span>

                    <a href="dashboard_investor.html" class="dropdown-item ">Beranda</a>
                    <span class="iconify" data-icon="healthicons:market-stall-outline" data-width="25" data-height="25"
                        style="margin-right: 130px; margin-bottom: -60px;"></span>
                    <a href="pasar.html" class="dropdown-item ">Pasar</a>
                    <span class="iconify" data-icon="mdi:sheep" data-width="25" data-height="25" style="margin-right: 130px;
                                    margin-bottom: -60px;"></span>
                    <a href="investasi_saya_semua.html" class="dropdown-item">Investasi Saya</a>
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



    <div class="col-8 " style="margin-top: 100px;">
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

            <div class="row justify-content-center " style="background-color: white; width: 950px;">
                <div class="col">
                    <br>
                    <center>
                        <h4 class="mt-3">Jenis Domba Polpuler saat ini</h4>
                        <div class="garis" style="width: 40%; height: 2px; background-color: #3A8BCD; margin-left: 5px; margin-right:
                    5px;">
                        </div>
                    </center>
                    <br>

                    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row " alt="First slide">
                                    <div class="item col">
                                        <div class="work1" style="border: 1px solid #000000; ">
                                            <div class="img d-flex align-items-center  rounded" style="background-image: url(../img/3.jpg); width: 100%;
                                height: 180px; ">
                                            </div>
                                            <div class="caption1 col-sm">
                                                <center>
                                                    <h5 class=""><b>Domba Merino</b> </h5>
                                                </center>

                                                <ul>
                                                    <li><a href="#">100</a> Investor telah berinvestasi</li>
                                                    <li><a href="#">Rp1.500.000,00</a>biaya investasi minimum</li>
                                                    <li><a href="#">25 - 45%</a> rata - rata bagi hasil untuk investor
                                                    </li>
                                                    <li><a href="#">Rp1.200.000 - 2.100.000</a> rata - rata nilai jual
                                                        kambing
                                                    </li>
                                                    <li><a href="#">1-2 tahun</a> perkiraan waktu penjualan kambing</li>

                                                </ul>
                                                <center>
                                                    <a class="btn btn-primary " href="pasar_detail_domba.html">Cek
                                                        Sekarang</a>
                                                </center>
                                                <br>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="item col">
                                        <div class="work1" style="border: 1px solid #000000; width: 300px;">
                                            <div class="img d-flex align-items-center  rounded" style="background-image: url(../img/1.jpg); width: 100%;
                                    height: 180px; ">
                                            </div>
                                            <div class="caption1 col-sm">
                                                <center>
                                                    <h5 class=""><b>Domba Garut</b> </h5>
                                                </center>

                                                <ul>
                                                    <li><a href="#">100</a> Investor telah berinvestasi</li>
                                                    <li><a href="#">Rp1.500.000,00</a>biaya investasi minimum</li>
                                                    <li><a href="#">25 - 45%</a> rata - rata bagi hasil untuk investor
                                                    </li>
                                                    <li><a href="#">Rp1.200.000 - 2.100.000</a> rata - rata nilai jual
                                                        kambing
                                                    </li>
                                                    <li><a href="#">1-2 tahun</a> perkiraan waktu penjualan kambing</li>

                                                </ul>
                                                <center>
                                                    <a class="btn btn-primary " href="pasar_detail_domba.html">Cek
                                                        Sekarang</a>
                                                </center>
                                                <br>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="item col">
                                        <div class="work1" style="border: 1px solid #000000; width: 300px;">
                                            <div class="img d-flex align-items-center  rounded" style="background-image: url(../img/2.jpg); width: 100%;
                                    height: 180px; ">
                                            </div>
                                            <div class="caption1 col-sm">
                                                <center>
                                                    <h5 class=""><b>Domba Texel</b> </h5>
                                                </center>

                                                <ul>
                                                    <li><a href="#">100</a> Investor telah berinvestasi</li>
                                                    <li><a href="#">Rp1.500.000,00</a>biaya investasi minimum</li>
                                                    <li><a href="#">25 - 45%</a> rata - rata bagi hasil untuk investor
                                                    </li>
                                                    <li><a href="#">Rp1.200.000 - 2.100.000</a> rata - rata nilai jual
                                                        kambing
                                                    </li>
                                                    <li><a href="#">1-2 tahun</a> perkiraan waktu penjualan kambing</li>

                                                </ul>
                                                <center>
                                                    <a class="btn btn-primary " href="pasar_detail_domba.html">Cek
                                                        Sekarang</a>
                                                </center>
                                                <br>
                                            </div>

                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row " alt="Second slide">


                                    <div class="item col">
                                        <div class="work1" style="border: 1px solid #000000; width: 300px;">
                                            <div class="img d-flex align-items-center  rounded" style="background-image: url(../img/1.jpg); width: 100%;
                                    height: 180px; ">
                                            </div>
                                            <div class="caption1 col-sm">
                                                <center>
                                                    <h5 class=""><b>Domba Garut</b> </h5>
                                                </center>

                                                <ul>
                                                    <li><a href="#">100</a> Investor telah berinvestasi</li>
                                                    <li><a href="#">Rp1.500.000,00</a>biaya investasi minimum</li>
                                                    <li><a href="#">25 - 45%</a> rata - rata bagi hasil untuk
                                                        investor
                                                    </li>
                                                    <li><a href="#">Rp1.200.000 - 2.100.000</a> rata - rata nilai
                                                        jual
                                                        kambing
                                                    </li>
                                                    <li><a href="#">1-2 tahun</a> perkiraan waktu penjualan kambing
                                                    </li>

                                                </ul>
                                                <center>
                                                    <a class="btn btn-primary " href="pasar_detail_domba.html">Cek
                                                        Sekarang</a>
                                                </center>
                                                <br>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="item col">
                                        <div class="work1" style="border: 1px solid #000000; ">
                                            <div class="img d-flex align-items-center  rounded" style="background-image: url(../img/3.jpg); width: 100%;
                                height: 180px; ">
                                            </div>
                                            <div class="caption1 col-sm">
                                                <center>
                                                    <h5 class=""><b>Domba Merino</b> </h5>
                                                </center>

                                                <ul>
                                                    <li><a href="#">100</a> Investor telah berinvestasi</li>
                                                    <li><a href="#">Rp1.500.000,00</a>biaya investasi minimum</li>
                                                    <li><a href="#">25 - 45%</a> rata - rata bagi hasil untuk
                                                        investor
                                                    </li>
                                                    <li><a href="#">Rp1.200.000 - 2.100.000</a> rata - rata nilai
                                                        jual
                                                        kambing
                                                    </li>
                                                    <li><a href="#">1-2 tahun</a> perkiraan waktu penjualan kambing
                                                    </li>

                                                </ul>
                                                <center>
                                                    <a class="btn btn-primary " href="pasar_detail_domba.html">Cek
                                                        Sekarang</a>
                                                </center>
                                                <br>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="item col">
                                        <div class="work1" style="border: 1px solid #000000; width: 300px;">
                                            <div class="img d-flex align-items-center  rounded" style="background-image: url(../img/2.jpg); width: 100%;
                                    height: 180px; ">
                                            </div>
                                            <div class="caption1 col-sm">
                                                <center>
                                                    <h5 class=""><b>Domba Texel</b> </h5>
                                                </center>

                                                <ul>
                                                    <li><a href="#">100</a> Investor telah berinvestasi</li>
                                                    <li><a href="#">Rp1.500.000,00</a>biaya investasi minimum</li>
                                                    <li><a href="#">25 - 45%</a> rata - rata bagi hasil untuk
                                                        investor
                                                    </li>
                                                    <li><a href="#">Rp1.200.000 - 2.100.000</a> rata - rata nilai
                                                        jual
                                                        kambing
                                                    </li>
                                                    <li><a href="#">1-2 tahun</a> perkiraan waktu penjualan kambing
                                                    </li>

                                                </ul>
                                                <center>
                                                    <a class="btn btn-primary " href="pasar_detail_domba.html">Cek
                                                        Sekarang</a>
                                                </center>
                                                <br>
                                            </div>

                                        </div>


                                    </div>

                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row " alt="Third slide">

                                    <div class="item col">
                                        <div class="work1" style="border: 1px solid #000000; width: 300px;">
                                            <div class="img d-flex align-items-center  rounded" style="background-image: url(../img/1.jpg); width: 100%;
                                    height: 180px; ">
                                            </div>
                                            <div class="caption1 col-sm">
                                                <center>
                                                    <h5 class=""><b>Domba Garut</b> </h5>
                                                </center>

                                                <ul>
                                                    <li><a href="#">100</a> Investor telah berinvestasi</li>
                                                    <li><a href="#">Rp1.500.000,00</a>biaya investasi minimum</li>
                                                    <li><a href="#">25 - 45%</a> rata - rata bagi hasil untuk
                                                        investor
                                                    </li>
                                                    <li><a href="#">Rp1.200.000 - 2.100.000</a> rata - rata nilai
                                                        jual
                                                        kambing
                                                    </li>
                                                    <li><a href="#">1-2 tahun</a> perkiraan waktu penjualan kambing
                                                    </li>

                                                </ul>
                                                <center>
                                                    <a class="btn btn-primary " href="pasar_detail_domba.html">Cek
                                                        Sekarang</a>
                                                </center>
                                                <br>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="work1" style="border: 1px solid #000000; width: 300px;">
                                        <div class="img d-flex align-items-center  rounded" style="background-image: url(../img/2.jpg); width: 100%;
                                    height: 180px; ">
                                        </div>
                                        <div class="caption1 col-sm">
                                            <center>
                                                <h5 class=""><b>Domba Texel</b> </h5>
                                            </center>

                                            <ul>
                                                <li><a href="#">100</a> Investor telah berinvestasi</li>
                                                <li><a href="#">Rp1.500.000,00</a>biaya investasi minimum</li>
                                                <li><a href="#">25 - 45%</a> rata - rata bagi hasil untuk
                                                    investor
                                                </li>
                                                <li><a href="#">Rp1.200.000 - 2.100.000</a> rata - rata nilai
                                                    jual
                                                    kambing
                                                </li>
                                                <li><a href="#">1-2 tahun</a> perkiraan waktu penjualan kambing
                                                </li>

                                            </ul>
                                            <center>
                                                <a class="btn btn-primary " href="pasar_detail_domba.html">Cek
                                                    Sekarang</a>
                                            </center>
                                            <br>
                                        </div>

                                    </div>
                                    <div class="item col">
                                        <div class="work1" style="border: 1px solid #000000; ">
                                            <div class="img d-flex align-items-center  rounded" style="background-image: url(../img/3.jpg); width: 100%;
                                height: 180px; ">
                                            </div>
                                            <div class="caption1 col-sm">
                                                <center>
                                                    <h5 class=""><b>Domba Merino</b> </h5>
                                                </center>

                                                <ul>
                                                    <li><a href="#">100</a> Investor telah berinvestasi</li>
                                                    <li><a href="#">Rp1.500.000,00</a>biaya investasi minimum</li>
                                                    <li><a href="#">25 - 45%</a> rata - rata bagi hasil untuk
                                                        investor
                                                    </li>
                                                    <li><a href="#">Rp1.200.000 - 2.100.000</a> rata - rata nilai
                                                        jual
                                                        kambing
                                                    </li>
                                                    <li><a href="#">1-2 tahun</a> perkiraan waktu penjualan kambing
                                                    </li>

                                                </ul>
                                                <center>
                                                    <a class="btn btn-primary " href="pasar_detail_domba.html">Cek
                                                        Sekarang</a>
                                                </center>
                                                <br>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev"
                        style="background-color: black; width: 40px; height: 50px; margin-top: 300px;">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next"
                        style="background-color: black;width: 40px; height: 50px; margin-top:
                            300px;">
                        <span class="carousel-control-next-icon" aria-hidden="true"
                            style="background-color: black;"></span>
                    </a>
                </div>
                <br>
                <center>
                    <h4 class="mt-4">Peternakan Populer Saat Ini</h4>
                </center>
                <div class="garis" style="width: 40%; height: 2px; background-color: #3A8BCD; "></div>
                <br>


                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators1" data-slide-to="3" class="active"></li>
                        <li data-target="#carouselExampleIndicators1" data-slide-to="4"></li>
                        <li data-target="#carouselExampleIndicators1" data-slide-to="5"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row " alt="First slide">
                                <div class="item col">
                                    <div class="work1" style="border: 1px solid #000000; ">
                                        <div class="img d-flex align-items-center  rounded" style="background-image: url(../img/4.jpg); width: 100%;
                                height: 180px; ">
                                        </div>
                                        <div class="caption1 col-sm">
                                            <center>
                                                <h5 class=""><b>Peternakan Udin</b> </h5>
                                            </center>
                                            <ul>
                                                <li><a href="#">300+</a> investor berinvestasi pada domba peternakan ini
                                                </li>
                                                <li><a href="#">Domba Garut</a> jenis paling diminati di peternakan ini
                                                </li>
                                                <li><a href="#">35%</a> rata - rata persentasi bagi hasil investor</li>
                                                <li><a href="#">100+</a> investasi domba yang berhasil</li>
                                            </ul>
                                            <center>
                                                <a class="btn btn-primary " href="pasar_detail_domba.html">Cek
                                                    Sekarang</a>
                                            </center>
                                            <br>
                                        </div>

                                    </div>
                                </div>
                                <div class="item col">
                                    <div class="work1" style="border: 1px solid #000000; ">
                                        <div class="img d-flex align-items-center  rounded" style="background-image: url(../img/5.jpg); width: 100%;
                                height: 180px; ">
                                        </div>
                                        <div class="caption1 col-sm">
                                            <center>
                                                <h5 class=""><b>Sultan Domba</b> </h5>
                                            </center>
                                            <ul>
                                                <li><a href="#">300+</a> investor berinvestasi pada domba peternakan ini
                                                </li>
                                                <li><a href="#">Domba Garut</a> jenis paling diminati di peternakan ini
                                                </li>
                                                <li><a href="#">35%</a> rata - rata persentasi bagi hasil investor</li>
                                                <li><a href="#">100+</a> investasi domba yang berhasil</li>
                                            </ul>
                                            <center>
                                                <a class="btn btn-primary " href="pasar_detail_domba.html">Cek
                                                    Sekarang</a>
                                            </center>
                                            <br>
                                        </div>

                                    </div>
                                </div>
                                <div class="item col">
                                    <div class="work1" style="border: 1px solid #000000; ">
                                        <div class="img d-flex align-items-center  rounded" style="background-image: url(../img/6.jpg); width: 100%;
                                height: 180px; ">
                                        </div>
                                        <div class="caption1 col-sm">
                                            <center>
                                                <h5 class=""><b>Best Farm</b> </h5>
                                            </center>
                                            <ul>
                                                <li><a href="#">300+</a> investor berinvestasi pada domba peternakan ini
                                                </li>
                                                <li><a href="#">Domba Garut</a> jenis paling diminati di peternakan ini
                                                </li>
                                                <li><a href="#">35%</a> rata - rata persentasi bagi hasil investor</li>
                                                <li><a href="#">100+</a> investasi domba yang berhasil</li>
                                            </ul>
                                            <center>
                                                <a class="btn btn-primary " href="pasar_detail_domba.html">Cek
                                                    Sekarang</a>
                                            </center>
                                            <br>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row " alt="Second slide">

                                <div class="item col">
                                    <div class="work1" style="border: 1px solid #000000; ">
                                        <div class="img d-flex align-items-center  rounded" style="background-image: url(../img/6.jpg); width: 100%;
                                height: 180px; ">
                                        </div>
                                        <div class="caption1 col-sm">
                                            <center>
                                                <h5 class=""><b>Best Farm</b> </h5>
                                            </center>
                                            <ul>
                                                <li><a href="#">300+</a> investor berinvestasi pada domba peternakan ini
                                                </li>
                                                <li><a href="#">Domba Garut</a> jenis paling diminati di peternakan ini
                                                </li>
                                                <li><a href="#">35%</a> rata - rata persentasi bagi hasil investor</li>
                                                <li><a href="#">100+</a> investasi domba yang berhasil</li>
                                            </ul>
                                            <center>
                                                <a class="btn btn-primary " href="pasar_detail_domba.html">Cek
                                                    Sekarang</a>
                                            </center>
                                            <br>
                                        </div>

                                    </div>
                                </div>

                                <div class="item col">
                                    <div class="work1" style="border: 1px solid #000000; ">
                                        <div class="img d-flex align-items-center  rounded" style="background-image: url(../img/5.jpg); width: 100%;
                                height: 180px; ">
                                        </div>
                                        <div class="caption1 col-sm">
                                            <center>
                                                <h5 class=""><b>Sultan Domba</b> </h5>
                                            </center>
                                            <ul>
                                                <li><a href="#">300+</a> investor berinvestasi pada domba peternakan ini
                                                </li>
                                                <li><a href="#">Domba Garut</a> jenis paling diminati di peternakan ini
                                                </li>
                                                <li><a href="#">35%</a> rata - rata persentasi bagi hasil investor</li>
                                                <li><a href="#">100+</a> investasi domba yang berhasil</li>
                                            </ul>
                                            <center>
                                                <a class="btn btn-primary " href="pasar_detail_domba.html">Cek
                                                    Sekarang</a>
                                            </center>
                                            <br>
                                        </div>

                                    </div>
                                </div>

                                <div class="item col">
                                    <div class="work1" style="border: 1px solid #000000; ">
                                        <div class="img d-flex align-items-center  rounded" style="background-image: url(../img/4.jpg); width: 100%;
                                height: 180px; ">
                                        </div>
                                        <div class="caption1 col-sm">
                                            <center>
                                                <h5 class=""><b>Peternakan Udin</b> </h5>
                                            </center>
                                            <ul>
                                                <li><a href="#">300+</a> investor berinvestasi pada domba peternakan ini
                                                </li>
                                                <li><a href="#">Domba Garut</a> jenis paling diminati di peternakan ini
                                                </li>
                                                <li><a href="#">35%</a> rata - rata persentasi bagi hasil investor</li>
                                                <li><a href="#">100+</a> investasi domba yang berhasil</li>
                                            </ul>
                                            <center>
                                                <a class="btn btn-primary " href="pasar_detail_domba.html">Cek
                                                    Sekarang</a>
                                            </center>
                                            <br>
                                        </div>

                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row " alt="Third slide">

                                <div class="item col">
                                    <div class="work1" style="border: 1px solid #000000; ">
                                        <div class="img d-flex align-items-center  rounded" style="background-image: url(../img/6.jpg); width: 100%;
                                height: 180px; ">
                                        </div>
                                        <div class="caption1 col-sm">
                                            <center>
                                                <h5 class=""><b>Best Farm</b> </h5>
                                            </center>
                                            <ul>
                                                <li><a href="#">300+</a> investor berinvestasi pada domba peternakan ini
                                                </li>
                                                <li><a href="#">Domba Garut</a> jenis paling diminati di peternakan ini
                                                </li>
                                                <li><a href="#">35%</a> rata - rata persentasi bagi hasil investor</li>
                                                <li><a href="#">100+</a> investasi domba yang berhasil</li>
                                            </ul>
                                            <center>
                                                <a class="btn btn-primary " href="pasar_detail_domba.html">Cek
                                                    Sekarang</a>
                                            </center>
                                            <br>
                                        </div>

                                    </div>
                                </div>

                                <div class="item col">
                                    <div class="work1" style="border: 1px solid #000000; ">
                                        <div class="img d-flex align-items-center  rounded" style="background-image: url(../img/4.jpg); width: 100%;
                                height: 180px; ">
                                        </div>
                                        <div class="caption1 col-sm">
                                            <center>
                                                <h5 class=""><b>Peternakan Udin</b> </h5>
                                            </center>
                                            <ul>
                                                <li><a href="#">300+</a> investor berinvestasi pada domba peternakan ini
                                                </li>
                                                <li><a href="#">Domba Garut</a> jenis paling diminati di peternakan ini
                                                </li>
                                                <li><a href="#">35%</a> rata - rata persentasi bagi hasil investor</li>
                                                <li><a href="#">100+</a> investasi domba yang berhasil</li>
                                            </ul>
                                            <center>
                                                <a class="btn btn-primary " href="pasar_detail_domba.html">Cek
                                                    Sekarang</a>
                                            </center>
                                            <br>
                                        </div>

                                    </div>
                                </div>

                                <div class="item col">
                                    <div class="work1" style="border: 1px solid #000000; ">
                                        <div class="img d-flex align-items-center  rounded" style="background-image: url(../img/5.jpg); width: 100%;
                                height: 180px; ">
                                        </div>
                                        <div class="caption1 col-sm">
                                            <center>
                                                <h5 class=""><b>Sultan Domba</b> </h5>
                                            </center>
                                            <ul>
                                                <li><a href="#">300+</a> investor berinvestasi pada domba peternakan ini
                                                </li>
                                                <li><a href="#">Domba Garut</a> jenis paling diminati di peternakan ini
                                                </li>
                                                <li><a href="#">35%</a> rata - rata persentasi bagi hasil investor</li>
                                                <li><a href="#">100+</a> investasi domba yang berhasil</li>
                                            </ul>
                                            <center>
                                                <a class="btn btn-primary " href="pasar_detail_domba.html">Cek
                                                    Sekarang</a>
                                            </center>
                                            <br>
                                        </div>

                                    </div>
                                </div>



                            </div>

                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                            data-slide="prev"
                            style="background-color: black; width: 40px; height: 50px; margin-top: 300px;">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                            data-slide="next" style="background-color: black;width: 40px; height: 50px; margin-top:
                            300px;">
                            <span class="carousel-control-next-icon" aria-hidden="true"
                                style="background-color: black;"></span>
                        </a>

                    </div>
                </div>


                <br>
                <center>
                    <h4 class="mt-4">Investasi Domba Sekarang</h4>
                    <p class="mt-2">Menampilkan 20 Domba per Halaman</p>
                </center>
                <div class="garis mb-4" style="width: 40%; height: 2px; background-color: #3A8BCD; margin-left: 5px; margin-right:
                    5px;">
                </div>


                <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row " alt="First slide">
                                <div class="item col">
                                    <div class="work1"
                                        style="border: 1px solid #000000; width: 390px; margin-left: 50px;">
                                        <div class="img d-flex align-items-center  rounded"
                                            style="background-image: url(../img/1.jpg); width: 100%;height: 198px; ">
                                        </div>
                                        <div class="caption1 col-sm">
                                            <center>
                                                <h5 class="" style="margin-top: -30px;"><b>Domba Texel</b> </h5>
                                            </center>
                                            <div class="row">
                                                <p class="col-6">
                                                    <span class="iconify  " data-icon="maki:farm" data-width="20"
                                                        data-height="20"></span>
                                                    Peternakan Udin
                                                </p>

                                                <p class="col-6">
                                                    <span class="iconify " data-icon="akar-icons:location"
                                                        data-width="25" data-height="25"></span>
                                                    Soreang, Bandung
                                                </p>
                                            </div>

                                            <div class="garis"
                                                style="width: 100%; height: 2px; background-color: #000000; margin-top: -10px;">
                                            </div>
                                            <br>


                                            <div class="row">
                                                <p class="col-4">
                                                    <span class="iconify" data-icon="mdi:weight-kilogram"
                                                        data-width="25" data-height="25"></span>

                                                    23 Kg
                                                </p>

                                                <p class="col-4">
                                                    <span class="iconify" data-icon="bi:hourglass-bottom"
                                                        data-width="25" data-height="25"></span>
                                                    6 Bulan
                                                </p>
                                                <p class="col-4">
                                                    <span class="iconify " data-icon="bi:gender-male" data-width="25"
                                                        data-height="25"></span>
                                                    Jantan
                                                </p>
                                            </div>

                                            <div class="garis mt-1"
                                                style="width: 100%; height: 2px; background-color: #000000; margin-top: -10px;">
                                            </div>
                                            <div class="row mt-2">
                                                <h6 class="" style="margin-left:25px ; font-size: 15px;">Bagi
                                                    Hasil : 45%
                                                </h6>
                                                <h6 class="" style="margin-left:25px ;font-size: 15px;">Margin
                                                    Harga :
                                                    Rp250.000/+1Kg
                                                </h6>
                                            </div>
                                            <div class="garis mt-1"
                                                style="width: 100%; height: 2px; background-color: #000000; margin-top: -10px;">
                                            </div>
                                            <center>
                                                <h5 class="mt-1">Biaya Investasi</h5>
                                                <h4><a href="#">Rp1.450.000,00</a></h4>
                                            </center>

                                            <center>
                                                <a class="btn btn-primary " href="">Lihat</a>
                                            </center>
                                            <br>
                                        </div>

                                    </div>
                                </div>
                                <div class="item col ">
                                    <div class="work1"
                                        style="border: 1px solid #000000; width: 390px; margin-left: 50px;">
                                        <div class="img d-flex align-items-center  rounded"
                                            style="background-image: url(../img/1.jpg); width: 100%;height: 198px; ">
                                        </div>
                                        <div class="caption1 col-sm">
                                            <center>
                                                <h5 class="" style="margin-top: -30px;"><b>Domba Texel</b> </h5>
                                            </center>
                                            <div class="row">
                                                <p class="col-6">
                                                    <span class="iconify  " data-icon="maki:farm" data-width="20"
                                                        data-height="20"></span>
                                                    Peternakan Udin
                                                </p>

                                                <p class="col-6">
                                                    <span class="iconify " data-icon="akar-icons:location"
                                                        data-width="25" data-height="25"></span>
                                                    Soreang, Bandung
                                                </p>
                                            </div>

                                            <div class="garis"
                                                style="width: 100%; height: 2px; background-color: #000000; margin-top: -10px;">
                                            </div>
                                            <br>


                                            <div class="row">
                                                <p class="col-4">
                                                    <span class="iconify" data-icon="mdi:weight-kilogram"
                                                        data-width="25" data-height="25"></span>

                                                    23 Kg
                                                </p>

                                                <p class="col-4">
                                                    <span class="iconify" data-icon="bi:hourglass-bottom"
                                                        data-width="25" data-height="25"></span>
                                                    6 Bulan
                                                </p>
                                                <p class="col-4">
                                                    <span class="iconify " data-icon="bi:gender-male" data-width="25"
                                                        data-height="25"></span>
                                                    Jantan
                                                </p>
                                            </div>

                                            <div class="garis mt-1"
                                                style="width: 100%; height: 2px; background-color: #000000; margin-top: -10px;">
                                            </div>
                                            <div class="row mt-2">
                                                <h6 class="" style="margin-left:25px ; font-size: 15px;">Bagi
                                                    Hasil : 45%
                                                </h6>
                                                <h6 class="" style="margin-left:25px ;font-size: 15px;">Margin
                                                    Harga :
                                                    Rp250.000/+1Kg
                                                </h6>
                                            </div>
                                            <div class="garis mt-1"
                                                style="width: 100%; height: 2px; background-color: #000000; margin-top: -10px;">
                                            </div>
                                            <center>
                                                <h5 class="mt-1">Biaya Investasi</h5>
                                                <h4><a href="#">Rp1.450.000,00</a></h4>
                                            </center>

                                            <center>
                                                <a class="btn btn-primary " href="">Lihat</a>
                                            </center>
                                            <br>
                                        </div>

                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row " alt="Second slide">
                                <div class="item col">
                                    <div class="work1"
                                        style="border: 1px solid #000000; width: 390px; margin-left: 50px;">
                                        <div class="img d-flex align-items-center  rounded"
                                            style="background-image: url(../img/1.jpg); width: 100%;height: 198px; ">
                                        </div>
                                        <div class="caption1 col-sm">
                                            <center>
                                                <h5 class="" style="margin-top: -30px;"><b>Domba Texel</b> </h5>
                                            </center>
                                            <div class="row">
                                                <p class="col-6">
                                                    <span class="iconify  " data-icon="maki:farm" data-width="20"
                                                        data-height="20"></span>
                                                    Peternakan Udin
                                                </p>

                                                <p class="col-6">
                                                    <span class="iconify " data-icon="akar-icons:location"
                                                        data-width="25" data-height="25"></span>
                                                    Soreang, Bandung
                                                </p>
                                            </div>

                                            <div class="garis"
                                                style="width: 100%; height: 2px; background-color: #000000; margin-top: -10px;">
                                            </div>
                                            <br>


                                            <div class="row">
                                                <p class="col-4">
                                                    <span class="iconify" data-icon="mdi:weight-kilogram"
                                                        data-width="25" data-height="25"></span>

                                                    23 Kg
                                                </p>

                                                <p class="col-4">
                                                    <span class="iconify" data-icon="bi:hourglass-bottom"
                                                        data-width="25" data-height="25"></span>
                                                    6 Bulan
                                                </p>
                                                <p class="col-4">
                                                    <span class="iconify " data-icon="bi:gender-male" data-width="25"
                                                        data-height="25"></span>
                                                    Jantan
                                                </p>
                                            </div>

                                            <div class="garis mt-1"
                                                style="width: 100%; height: 2px; background-color: #000000; margin-top: -10px;">
                                            </div>
                                            <div class="row mt-2">
                                                <h6 class="" style="margin-left:25px ; font-size: 15px;">Bagi
                                                    Hasil : 45%
                                                </h6>
                                                <h6 class="" style="margin-left:25px ;font-size: 15px;">Margin
                                                    Harga :
                                                    Rp250.000/+1Kg
                                                </h6>
                                            </div>
                                            <div class="garis mt-1"
                                                style="width: 100%; height: 2px; background-color: #000000; margin-top: -10px;">
                                            </div>
                                            <center>
                                                <h5 class="mt-1">Biaya Investasi</h5>
                                                <h4><a href="#">Rp1.450.000,00</a></h4>
                                            </center>

                                            <center>
                                                <a class="btn btn-primary " href="">Lihat</a>
                                            </center>
                                            <br>
                                        </div>

                                    </div>
                                </div>
                                <div class="item col">
                                    <div class="work1"
                                        style="border: 1px solid #000000; width: 390px; margin-left: 50px;">
                                        <div class="img d-flex align-items-center  rounded"
                                            style="background-image: url(../img/1.jpg); width: 100%;height: 198px; ">
                                        </div>
                                        <div class="caption1 col-sm">
                                            <center>
                                                <h5 class="" style="margin-top: -30px;"><b>Domba Texel</b> </h5>
                                            </center>
                                            <div class="row">
                                                <p class="col-6">
                                                    <span class="iconify  " data-icon="maki:farm" data-width="20"
                                                        data-height="20"></span>
                                                    Peternakan Udin
                                                </p>

                                                <p class="col-6">
                                                    <span class="iconify " data-icon="akar-icons:location"
                                                        data-width="25" data-height="25"></span>
                                                    Soreang, Bandung
                                                </p>
                                            </div>

                                            <div class="garis"
                                                style="width: 100%; height: 2px; background-color: #000000; margin-top: -10px;">
                                            </div>
                                            <br>


                                            <div class="row">
                                                <p class="col-4">
                                                    <span class="iconify" data-icon="mdi:weight-kilogram"
                                                        data-width="25" data-height="25"></span>

                                                    23 Kg
                                                </p>

                                                <p class="col-4">
                                                    <span class="iconify" data-icon="bi:hourglass-bottom"
                                                        data-width="25" data-height="25"></span>
                                                    6 Bulan
                                                </p>
                                                <p class="col-4">
                                                    <span class="iconify " data-icon="bi:gender-male" data-width="25"
                                                        data-height="25"></span>
                                                    Jantan
                                                </p>
                                            </div>

                                            <div class="garis mt-1"
                                                style="width: 100%; height: 2px; background-color: #000000; margin-top: -10px;">
                                            </div>
                                            <div class="row mt-2">
                                                <h6 class="" style="margin-left:25px ; font-size: 15px;">Bagi
                                                    Hasil : 45%
                                                </h6>
                                                <h6 class="" style="margin-left:25px ;font-size: 15px;">Margin
                                                    Harga :
                                                    Rp250.000/+1Kg
                                                </h6>
                                            </div>
                                            <div class="garis mt-1"
                                                style="width: 100%; height: 2px; background-color: #000000; margin-top: -10px;">
                                            </div>
                                            <center>
                                                <h5 class="mt-1">Biaya Investasi</h5>
                                                <h4><a href="#">Rp1.450.000,00</a></h4>
                                            </center>

                                            <center>
                                                <a class="btn btn-primary " href="">Lihat</a>
                                            </center>
                                            <br>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row " alt="Third slide">
                                <div class="item col">
                                    <div class="work1"
                                        style="border: 1px solid #000000; width: 390px; margin-left: 50px;">
                                        <div class="img d-flex align-items-center  rounded"
                                            style="background-image: url(../img/1.jpg); width: 100%;height: 198px; ">
                                        </div>
                                        <div class="caption1 col-sm">
                                            <center>
                                                <h5 class="" style="margin-top: -30px;"><b>Domba Texel</b> </h5>
                                            </center>
                                            <div class="row">
                                                <p class="col-6">
                                                    <span class="iconify  " data-icon="maki:farm" data-width="20"
                                                        data-height="20"></span>
                                                    Peternakan Udin
                                                </p>

                                                <p class="col-6">
                                                    <span class="iconify " data-icon="akar-icons:location"
                                                        data-width="25" data-height="25"></span>
                                                    Soreang, Bandung
                                                </p>
                                            </div>

                                            <div class="garis"
                                                style="width: 100%; height: 2px; background-color: #000000; margin-top: -10px;">
                                            </div>
                                            <br>


                                            <div class="row">
                                                <p class="col-4">
                                                    <span class="iconify" data-icon="mdi:weight-kilogram"
                                                        data-width="25" data-height="25"></span>

                                                    23 Kg
                                                </p>

                                                <p class="col-4">
                                                    <span class="iconify" data-icon="bi:hourglass-bottom"
                                                        data-width="25" data-height="25"></span>
                                                    6 Bulan
                                                </p>
                                                <p class="col-4">
                                                    <span class="iconify " data-icon="bi:gender-male" data-width="25"
                                                        data-height="25"></span>
                                                    Jantan
                                                </p>
                                            </div>

                                            <div class="garis mt-1"
                                                style="width: 100%; height: 2px; background-color: #000000; margin-top: -10px;">
                                            </div>
                                            <div class="row mt-2">
                                                <h6 class="" style="margin-left:25px ; font-size: 15px;">Bagi
                                                    Hasil : 45%
                                                </h6>
                                                <h6 class="" style="margin-left:25px ;font-size: 15px;">Margin
                                                    Harga :
                                                    Rp250.000/+1Kg
                                                </h6>
                                            </div>
                                            <div class="garis mt-1"
                                                style="width: 100%; height: 2px; background-color: #000000; margin-top: -10px;">
                                            </div>
                                            <center>
                                                <h5 class="mt-1">Biaya Investasi</h5>
                                                <h4><a href="#">Rp1.450.000,00</a></h4>
                                            </center>

                                            <center>
                                                <a class="btn btn-primary " href="">Lihat</a>
                                            </center>
                                            <br>
                                        </div>

                                    </div>
                                </div>
                                <div class="item col">
                                    <<div class="work1"
                                        style="border: 1px solid #000000; width: 390px; margin-left: 50px;">
                                        <div class="img d-flex align-items-center  rounded"
                                            style="background-image: url(../img/1.jpg); width: 100%;height: 198px; ">
                                        </div>
                                        <div class="caption1 col-sm">
                                            <center>
                                                <h5 class="" style="margin-top: -30px;"><b>Domba Texel</b> </h5>
                                            </center>
                                            <div class="row">
                                                <p class="col-6">
                                                    <span class="iconify  " data-icon="maki:farm" data-width="20"
                                                        data-height="20"></span>
                                                    Peternakan Udin
                                                </p>

                                                <p class="col-6">
                                                    <span class="iconify " data-icon="akar-icons:location"
                                                        data-width="25" data-height="25"></span>
                                                    Soreang, Bandung
                                                </p>
                                            </div>

                                            <div class="garis"
                                                style="width: 100%; height: 2px; background-color: #000000; margin-top: -10px;">
                                            </div>
                                            <br>


                                            <div class="row">
                                                <p class="col-4">
                                                    <span class="iconify" data-icon="mdi:weight-kilogram"
                                                        data-width="25" data-height="25"></span>

                                                    23 Kg
                                                </p>

                                                <p class="col-4">
                                                    <span class="iconify" data-icon="bi:hourglass-bottom"
                                                        data-width="25" data-height="25"></span>
                                                    6 Bulan
                                                </p>
                                                <p class="col-4">
                                                    <span class="iconify " data-icon="bi:gender-male" data-width="25"
                                                        data-height="25"></span>
                                                    Jantan
                                                </p>
                                            </div>

                                            <div class="garis mt-1"
                                                style="width: 100%; height: 2px; background-color: #000000; margin-top: -10px;">
                                            </div>
                                            <div class="row mt-2">
                                                <h6 class="" style="margin-left:25px ; font-size: 15px;">Bagi
                                                    Hasil : 45%
                                                </h6>
                                                <h6 class="" style="margin-left:25px ;font-size: 15px;">Margin
                                                    Harga :
                                                    Rp250.000/+1Kg
                                                </h6>
                                            </div>
                                            <div class="garis mt-1"
                                                style="width: 100%; height: 2px; background-color: #000000; margin-top: -10px;">
                                            </div>
                                            <center>
                                                <h5 class="mt-1">Biaya Investasi</h5>
                                                <h4><a href="#">Rp1.450.000,00</a></h4>
                                            </center>

                                            <center>
                                                <a class="btn btn-primary " href="">Lihat</a>
                                            </center>
                                            <br>
                                        </div>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators3" role="button" data-slide="prev"
                    style="background-color: black; width: 40px; height: 50px; margin-top: 300px;">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button" data-slide="next"
                    style="background-color: black;width: 40px; height: 50px; margin-top:
                            300px;">
                    <span class="carousel-control-next-icon" aria-hidden="true" style="background-color: black;"></span>
                </a>
                <br>

            </div>
        </div>
    </div>
</div>
<div class=" col-md-3 " style="margin-left: 30px; margin-top:-1550px; ">
    <div class="row">
        <span class="iconify col-2" data-icon="ant-design:filter-outlined" data-width="35" data-height="35"></span>
        <h4 class="col">Filter</h4>
    </div>
    <div class=" bg-light  ">

        <h6 class="ml-4"><b> Jenis Domba</b></h6>
        <div class="dropdown ml-4">
            <a class="btn  dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown"
                aria-expanded="false" style="width: 250px; border: 1px solid #000000;">
                Semua Domba
            </a>

            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
        </div>
        <center>
            <div class="dotted mb-3 mt-2 col-md-11"></div>
        </center>
        <h6 class="ml-4"><b> Semua Lokasi</b></h6>
        <center>
            <div class="input-group flex-nowrap rounded mr-3" style="width:  255px; border: 1px solid #000000;">

                <input type="text" class="form-control" placeholder="Semua Lokasi" aria-label="Username"
                    aria-describedby="addon-wrapping">

            </div>
        </center>
        <center>
            <div class="dotted mb-3 mt-2 col-md-11"></div>
        </center>
        <h6 class="ml-4"><b>Harga Investasi</b></h6>
        <center>
            <div class="input-group flex-nowrap rounded mr-3" style="width:  255px; border: 1px solid #000000;">
                <span class="input-group-text" id="addon-wrapping">Rp.</span>
                <input type="text" class="form-control" placeholder="Harga Minimun" aria-label="Username"
                    aria-describedby="addon-wrapping">

            </div>
            <div class="input-group flex-nowrap rounded mr-3 mt-2" style="width:  255px; border: 1px solid #000000;">
                <span class="input-group-text" id="addon-wrapping">Rp.</span>
                <input type="text" class="form-control" placeholder="Harga Maximum" aria-label="Username"
                    aria-describedby="addon-wrapping">

            </div>
        </center>
        <center>
            <div class="dotted mb-3 mt-2 col-md-11"></div>
        </center>
        <h6 class="ml-4"><b>Bagi Hasil</b></h6>
        <center>
            <div class="input-group flex-nowrap rounded mr-3" style="width:  255px; border: 1px solid #000000;">

                <input type="text" class="form-control" placeholder="Persentase Peternakan" aria-label="Username"
                    aria-describedby="addon-wrapping">
                <span class="input-group-text" id="addon-wrapping">%</span>

            </div>
            <div class="input-group flex-nowrap rounded mr-3 mt-2" style="width:  255px; border: 1px solid #000000;">

                <input type="text" class="form-control" placeholder="Persentase Investo" aria-label="Username"
                    aria-describedby="addon-wrapping">
                <span class="input-group-text" id="addon-wrapping">%</span>
            </div>
        </center>
        <center>
            <div class="dotted mb-3 mt-2 col-md-11"></div>
        </center>
        <h6 class="ml-4"><b> Jenis Kelamin</b></h6>
        <center>
            <div class="form-check ">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Jantan
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                <label class="form-check-label" for="flexCheckChecked">
                    Betina
                </label>
            </div>
        </center>
        <center>
            <div class="dotted mb-3 mt-2 col-md-11"></div>
        </center>
        <h6 class="ml-4"><b>Berat</b></h6>
        <center>
            <div class="input-group flex-nowrap rounded mr-3" style="width:  255px; border: 1px solid #000000;">

                <input type="text" class="form-control" placeholder="Berat Minimum" aria-label="Username"
                    aria-describedby="addon-wrapping">
                <span class="input-group-text" id="addon-wrapping">Kg</span>

            </div>
            <div class="input-group flex-nowrap rounded mr-3 mt-2" style="width:  255px; border: 1px solid #000000;">

                <input type="text" class="form-control" placeholder="Berat Maksimum" aria-label="Username"
                    aria-describedby="addon-wrapping">
                <span class="input-group-text" id="addon-wrapping">Kg</span>
            </div>
        </center>
        <center>
            <div class="dotted mb-3 mt-2 col-md-11"></div>
        </center>
        <h6 class="ml-4"><b>Umur</b></h6>
        <center>
            <div class="input-group flex-nowrap rounded mr-3 " style="width:  255px; border: 1px solid #000000;">

                <input type="text" class="form-control" placeholder="Umur Minimum" aria-label="Username"
                    aria-describedby="addon-wrapping">
                <span class="input-group-text" id="addon-wrapping">Thn</span>

            </div>
            <div class="input-group flex-nowrap rounded mr-3 mt-2 " style="width:  255px; border: 1px solid #000000;">

                <input type="text" class="form-control" placeholder="Umur Maksimum" aria-label="Username"
                    aria-describedby="addon-wrapping">
                <span class="input-group-text" id="addon-wrapping">Thn</span>
            </div>
        </center>
        <br>






    </div>

</div>
</div>



@endsection