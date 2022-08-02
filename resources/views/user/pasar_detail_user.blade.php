@extends('layouts.user')

@section('content')

<div class="row d-flex">
    <div class="col-3" style=" margin-top:150px;">
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


            <div class="row justify-content-center ml-3" style="background-color: white; width: 1000px">
                <div class="row gutters-sm mt-5" style="padding: 0;">
                    <div class="col-md-5">
                        <div class="ml-3">
                            <div class="d-flex flex-column  text-center ">
                                <a href="btn" data-bs-toggle="modal" data-bs-target="#exampleModalinti">
                                    <img class="rounded" src="../img/1.jpg" width="90%" height="250px">
                                </a>
                                <div class="modal fade mt-5" id="exampleModalinti" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <img src="../img/1.jpg" alt="">
                                        </div>
                                    </div>
                                </div>

                                <br>

                                <div class="col d-flex justify-content-between">
                                    <a href="btn" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                                        <img class="slide1 rounded ml-3" src="../img/2.jpg" alt="" width="80"
                                            height="70">
                                    </a>
                                    <div class="modal fade mt-5" id="exampleModal1" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <img src="../img/2.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <a href="btn" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                        <img class="slide2 rounded " src="../img/3.jpg" alt="" width="80" height="70">
                                    </a>
                                    <div class="modal fade mt-5" id="exampleModal2" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <img src="../img/3.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <a href="btn" data-bs-toggle="modal" data-bs-target="#exampleModal3">
                                        <img class="slide3 rounded mr-1" src="../img/4.jpg" alt="" width="80"
                                            height="70">
                                    </a>
                                    <div class="modal fade mt-5" id="exampleModal3" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <img src="../img/4.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <a href="btn" data-bs-toggle="modal" data-bs-target="#exampleModal4">
                                        <img class="slide4 rounded mr-4 " src="../img/5.jpg" alt="" width="80"
                                            height="70">
                                    </a>
                                    <div class="modal fade mt-5" id="exampleModal4" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <img src="../img/5.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col row " style="padding: 0;">
                        <div class="col row">
                            <h4>Domba Suffolk</h4>

                            <div class="col row" style="padding:0;">
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
                                <div class="col" style="  padding:0;">
                                    <table>
                                        <thead>
                                            <tr>

                                                <th colspan="4">DATA DOMBA</th>
                                                <th scope="col"></th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">ID</th>
                                                <td>:</td>
                                                <td></td>
                                                <td>DS123</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Berat</th>
                                                <td>:</td>
                                                <td></td>
                                                <td>23Kg</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Umur</th>
                                                <td>:</td>
                                                <td></td>
                                                <td>3 Bulan (21/02/2022)</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Jenis Kelamin</th>
                                                <td>:</td>
                                                <td></td>
                                                <td>Jantan </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class=" " style="width: 90%; height: 2px; background-color: #3A8BCD;margin-top: 30px;">
                            </div>
                            <table class="col-md-12">
                                <h5 class="mt-2"><b> Deskripsi</b></h5>
                                <p>Domba jenis Suffolk kami adalah salah satu Suffolk terbaik di Indonesia. Dipelihara
                                    dan dibesarkan dengan perawatan terbaik, kami selalu bertujuan untuk memberikan
                                    domba terbaik kepada pelanggan kami. Entah itu untuk langsung dibeli ataupun terbuka
                                    untuk investasi, kami selalu memberikan yang terbaik untuk pelanggan. Jadi, tunggu
                                    apa lagi? Mari transaksi domba di Peternakan Udin!</p>
                                </tbody>
                            </table>
                            <br>
                            <br>
                            <div class="" style="margin-top:30px;">
                                <h3 class="ml-5"><a href="#">Rp1.450.000,00</a></h3>
                                <div class="row mt-3">
                                    <a href="#" class="col-4 btn btn-primary mr-2">Beli sekarang</a>
                                    <a href="#" class="col-4 btn btn-outline-primary ml-2">Masukan Keranjang</a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

                <div class=" " style="width: 90%; height: 2px; background-color: #3A8BCD;margin-top: 30px;">
                </div>
                <div class="dekripsi ml-4 mr-3 mt-2">
                    <h3>Ulasan</h3>
                    <div class="d-flex flex-row">
                        <div class="p-2" style="background-color:#3A8BCD; width: 71px;height: 71px;">
                            <p class="mt-3">4.6 / 5</p>
                        </div>
                        <div class="mt-3 p-2">
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
                            <p>137 Ulasan</p>
                        </div>

                    </div>
                    <h6 style="margin-left:67%; margin-bottom: -28px;">Tampilkan :</h6>
                    <select class="form-control col-md-2">
                        <option>SEMUA</option>
                        <option>PEMBELI</option>
                        <option>INVESTOR</option>
                    </select>
                    <div class="  row" style="border: 1px solid #000; margin-top: 10px;  background-color: white;">
                        <div class="col-2 " style="margin-left: 15px; padding:0; margin-top: 10px;">
                            <img class="rounded" src="../img/slide-4.jpg" alt="" style="width:160px ;height :180px; ">
                            <h6>Domba Suffolk</h6>
                            <h6>ID : DS111</h6>
                        </div>

                        <div class="col" style="width:990px;height: 247px;">
                            <h5 style="margin-bottom: -25px; margin-left: 65px;">Raihan B.</h5>
                            <table>
                                <tr>
                                    <img class="rounded-circle" src="../img/user.jpeg" alt=""
                                        style="width:60px ;height :60px; ">
                                    <th></th>

                                    <span class="iconify ml-2" data-icon="flat-color-icons:rating" data-width="15"
                                        data-height="15"></span>
                                    <span class="iconify" data-icon="flat-color-icons:rating" data-width="15"
                                        data-height="15"></span>
                                    <span class="iconify" data-icon="flat-color-icons:rating" data-width="15"
                                        data-height="15"></span>
                                    <span class="iconify" data-icon="flat-color-icons:rating" data-width="15"
                                        data-height="15"></span>
                                    <span class="iconify" data-icon="flat-color-icons:rating" data-width="15"
                                        data-height="15"></span>
                                    <span class="iconify p-2" data-icon="flat-color-icons:rating" data-width="15"
                                        data-height="15" style="border-right: 1px solid #3A8BCD;"></span>
                                    <P style="margin-left: 23%; margin-top:-40px;">INVSETASI</P>

                                    <p>Investasi domba Suffolk saya cukup menguntungkan dan menjanjikan. Saya
                                        bisa dapat untung sekitar 35% dari nominal investasi awal saya. Rekomen
                                        banget buat investor-investor lain yang mau investasi domba Suffolk di
                                        peternakan ini. Mantap lah pokoknya.</p>




                            </table>




                        </div>
                    </div>
                    <div class="  row" style="border: 1px solid #000; margin-top: 10px;  background-color: white;">
                        <div class="col-2 " style="margin-left: 15px; padding:0; margin-top: 10px;">
                            <img class="rounded" src="../img/slide-4.jpg" alt="" style="width:160px ;height :180px; ">
                            <h6>Domba Suffolk</h6>
                            <h6>ID : DS111</h6>
                        </div>

                        <div class="col" style="width:990px;height: 247px;">
                            <h5 style="margin-bottom: -25px; margin-left: 65px;">Raihan B.</h5>
                            <table>
                                <tr>
                                    <img class="rounded-circle" src="../img/user.jpeg" alt=""
                                        style="width:60px ;height :60px; ">
                                    <th></th>

                                    <span class="iconify ml-2" data-icon="flat-color-icons:rating" data-width="15"
                                        data-height="15"></span>
                                    <span class="iconify" data-icon="flat-color-icons:rating" data-width="15"
                                        data-height="15"></span>
                                    <span class="iconify" data-icon="flat-color-icons:rating" data-width="15"
                                        data-height="15"></span>
                                    <span class="iconify" data-icon="flat-color-icons:rating" data-width="15"
                                        data-height="15"></span>
                                    <span class="iconify" data-icon="flat-color-icons:rating" data-width="15"
                                        data-height="15"></span>
                                    <span class="iconify p-2" data-icon="flat-color-icons:rating" data-width="15"
                                        data-height="15" style="border-right: 1px solid #3A8BCD;"></span>
                                    <P style="margin-left: 23%; margin-top:-40px;">INVSETASI</P>

                                    <p>Investasi domba Suffolk saya cukup menguntungkan dan menjanjikan. Saya
                                        bisa dapat untung sekitar 35% dari nominal investasi awal saya. Rekomen
                                        banget buat investor-investor lain yang mau investasi domba Suffolk di
                                        peternakan ini. Mantap lah pokoknya.</p>




                            </table>




                        </div>
                    </div>
                    <div class="  row" style="border: 1px solid #000; margin-top: 10px;  background-color: white;">
                        <div class="col-2 " style="margin-left: 15px; padding:0; margin-top: 10px;">
                            <img class="rounded" src="../img/slide-4.jpg" alt="" style="width:160px ;height :180px; ">
                            <h6>Domba Suffolk</h6>
                            <h6>ID : DS111</h6>
                        </div>

                        <div class="col" style="width:990px;height: 247px;">
                            <h5 style="margin-bottom: -25px; margin-left: 65px;">Raihan B.</h5>
                            <table>
                                <tr>
                                    <img class="rounded-circle" src="../img/user.jpeg" alt=""
                                        style="width:60px ;height :60px; ">
                                    <th></th>

                                    <span class="iconify ml-2" data-icon="flat-color-icons:rating" data-width="15"
                                        data-height="15"></span>
                                    <span class="iconify" data-icon="flat-color-icons:rating" data-width="15"
                                        data-height="15"></span>
                                    <span class="iconify" data-icon="flat-color-icons:rating" data-width="15"
                                        data-height="15"></span>
                                    <span class="iconify" data-icon="flat-color-icons:rating" data-width="15"
                                        data-height="15"></span>
                                    <span class="iconify" data-icon="flat-color-icons:rating" data-width="15"
                                        data-height="15"></span>
                                    <span class="iconify p-2" data-icon="flat-color-icons:rating" data-width="15"
                                        data-height="15" style="border-right: 1px solid #3A8BCD;"></span>
                                    <P style="margin-left: 23%; margin-top:-40px;">INVSETASI</P>

                                    <p>Investasi domba Suffolk saya cukup menguntungkan dan menjanjikan. Saya
                                        bisa dapat untung sekitar 35% dari nominal investasi awal saya. Rekomen
                                        banget buat investor-investor lain yang mau investasi domba Suffolk di
                                        peternakan ini. Mantap lah pokoknya.</p>




                            </table>




                        </div>
                    </div>
                    <div class="  row" style="border: 1px solid #000; margin-top: 10px;  background-color: white;">
                        <div class="col-2 " style="margin-left: 15px; padding:0; margin-top: 10px;">
                            <img class="rounded" src="../img/slide-4.jpg" alt="" style="width:160px ;height :180px; ">
                            <h6>Domba Suffolk</h6>
                            <h6>ID : DS111</h6>
                        </div>

                        <div class="col" style="width:990px;height: 247px;">
                            <h5 style="margin-bottom: -25px; margin-left: 65px;">Raihan B.</h5>
                            <table>
                                <tr>
                                    <img class="rounded-circle" src="../img/user.jpeg" alt=""
                                        style="width:60px ;height :60px; ">
                                    <th></th>

                                    <span class="iconify ml-2" data-icon="flat-color-icons:rating" data-width="15"
                                        data-height="15"></span>
                                    <span class="iconify" data-icon="flat-color-icons:rating" data-width="15"
                                        data-height="15"></span>
                                    <span class="iconify" data-icon="flat-color-icons:rating" data-width="15"
                                        data-height="15"></span>
                                    <span class="iconify" data-icon="flat-color-icons:rating" data-width="15"
                                        data-height="15"></span>
                                    <span class="iconify" data-icon="flat-color-icons:rating" data-width="15"
                                        data-height="15"></span>
                                    <span class="iconify p-2" data-icon="flat-color-icons:rating" data-width="15"
                                        data-height="15" style="border-right: 1px solid #3A8BCD;"></span>
                                    <P style="margin-left: 23%; margin-top:-40px;">INVSETASI</P>

                                    <p>Investasi domba Suffolk saya cukup menguntungkan dan menjanjikan. Saya
                                        bisa dapat untung sekitar 35% dari nominal investasi awal saya. Rekomen
                                        banget buat investor-investor lain yang mau investasi domba Suffolk di
                                        peternakan ini. Mantap lah pokoknya.</p>




                            </table>




                        </div>
                    </div>
                    <div class="  row" style="border: 1px solid #000; margin-top: 10px;  background-color: white;">
                        <div class="col-2 " style="margin-left: 15px; padding:0; margin-top: 10px;">
                            <img class="rounded" src="../img/slide-4.jpg" alt="" style="width:160px ;height :180px; ">
                            <h6>Domba Suffolk</h6>
                            <h6>ID : DS111</h6>
                        </div>

                        <div class="col" style="width:990px;height: 247px;">
                            <h5 style="margin-bottom: -25px; margin-left: 65px;">Raihan B.</h5>
                            <table>
                                <tr>
                                    <img class="rounded-circle" src="../img/user.jpeg" alt=""
                                        style="width:60px ;height :60px; ">
                                    <th></th>

                                    <span class="iconify ml-2" data-icon="flat-color-icons:rating" data-width="15"
                                        data-height="15"></span>
                                    <span class="iconify" data-icon="flat-color-icons:rating" data-width="15"
                                        data-height="15"></span>
                                    <span class="iconify" data-icon="flat-color-icons:rating" data-width="15"
                                        data-height="15"></span>
                                    <span class="iconify" data-icon="flat-color-icons:rating" data-width="15"
                                        data-height="15"></span>
                                    <span class="iconify" data-icon="flat-color-icons:rating" data-width="15"
                                        data-height="15"></span>
                                    <span class="iconify p-2" data-icon="flat-color-icons:rating" data-width="15"
                                        data-height="15" style="border-right: 1px solid #3A8BCD;"></span>
                                    <P style="margin-left: 23%; margin-top:-40px;">INVSETASI</P>

                                    <p>Investasi domba Suffolk saya cukup menguntungkan dan menjanjikan. Saya
                                        bisa dapat untung sekitar 35% dari nominal investasi awal saya. Rekomen
                                        banget buat investor-investor lain yang mau investasi domba Suffolk di
                                        peternakan ini. Mantap lah pokoknya.</p>




                            </table>




                        </div>
                    </div>

                </div>


                <div class="col-md-12">
                    <br>
                    <h4 class="mt-3">Domba Lainnya di Peternakan Ini</h4>
                    <div class="garis" style="width: 40%; height: 2px; background-color: #3A8BCD; margin-left: 5px; margin-right:
                    5px;">
                    </div>
                    <p class="mt-2">Menampilkan 20 Domba per Halaman</p>
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
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
                                                        <span class="iconify " data-icon="bi:gender-male"
                                                            data-width="25" data-height="25"></span>
                                                        Jantan
                                                    </p>
                                                </div>


                                                <div class="garis mt-1"
                                                    style="width: 100%; height: 2px; background-color: #000000; margin-top: -10px;">
                                                </div>
                                                <center>

                                                    <h4><a href="#">Rp1.450.000,00</a></h4>
                                                </center>

                                                <center>
                                                    <a class="btn btn-primary " href="">Lihat</a>
                                                </center>
                                                <br>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="item col ml-5">
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
                                                        <span class="iconify " data-icon="bi:gender-male"
                                                            data-width="25" data-height="25"></span>
                                                        Jantan
                                                    </p>
                                                </div>


                                                <div class="garis mt-1"
                                                    style="width: 100%; height: 2px; background-color: #000000; margin-top: -10px;">
                                                </div>
                                                <center>

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
                                                        <span class="iconify " data-icon="bi:gender-male"
                                                            data-width="25" data-height="25"></span>
                                                        Jantan
                                                    </p>
                                                </div>


                                                <div class="garis mt-1"
                                                    style="width: 100%; height: 2px; background-color: #000000; margin-top: -10px;">
                                                </div>
                                                <center>

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
                                                        <span class="iconify " data-icon="bi:gender-male"
                                                            data-width="25" data-height="25"></span>
                                                        Jantan
                                                    </p>
                                                </div>


                                                <div class="garis mt-1"
                                                    style="width: 100%; height: 2px; background-color: #000000; margin-top: -10px;">
                                                </div>
                                                <center>

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
                                                        <span class="iconify " data-icon="bi:gender-male"
                                                            data-width="25" data-height="25"></span>
                                                        Jantan
                                                    </p>
                                                </div>


                                                <div class="garis mt-1"
                                                    style="width: 100%; height: 2px; background-color: #000000; margin-top: -10px;">
                                                </div>
                                                <center>

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
                                                        <span class="iconify " data-icon="bi:gender-male"
                                                            data-width="25" data-height="25"></span>
                                                        Jantan
                                                    </p>
                                                </div>


                                                <div class="garis mt-1"
                                                    style="width: 100%; height: 2px; background-color: #000000; margin-top: -10px;">
                                                </div>
                                                <center>

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
                    <br>

                </div>
                <div class="col-md-12">
                    <br>
                    <h4 class="mt-3">Investasi Domba di Peternakan Ini</h4>
                    <div class="garis" style="width: 40%; height: 2px; background-color: #3A8BCD; margin-left: 5px; margin-right:
                    5px;">
                    </div>
                    <p class="mt-2">Menampilkan 20 Domba per Halaman</p>
                    <div id="carouselExampleIndicators9" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators9" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators9" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators9" data-slide-to="2"></li>
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
                                                        <span class="iconify " data-icon="bi:gender-male"
                                                            data-width="25" data-height="25"></span>
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
                                    <div class="item col ml-5">
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
                                                        <span class="iconify " data-icon="bi:gender-male"
                                                            data-width="25" data-height="25"></span>
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
                                                        <span class="iconify " data-icon="bi:gender-male"
                                                            data-width="25" data-height="25"></span>
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
                                                        <span class="iconify " data-icon="bi:gender-male"
                                                            data-width="25" data-height="25"></span>
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
                                                        <span class="iconify " data-icon="bi:gender-male"
                                                            data-width="25" data-height="25"></span>
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
                                                        <span class="iconify " data-icon="bi:gender-male"
                                                            data-width="25" data-height="25"></span>
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
                    <a class="carousel-control-prev" href="#carouselExampleIndicators9" role="button" data-slide="prev"
                        style="background-color: black; width: 40px; height: 50px; margin-top: 300px;">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators9" role="button" data-slide="next"
                        style="background-color: black;width: 40px; height: 50px; margin-top:
                            300px;">
                        <span class="carousel-control-next-icon" aria-hidden="true"
                            style="background-color: black;"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection