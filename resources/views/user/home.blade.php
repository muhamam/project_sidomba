@extends('layouts.user')

@section('content')

<div class="d-flex d-flex justify-content-center my-5">
    <img src="{{ asset('img/logodomba.png')}}" alt="" width="70">
    <div class="garis" style="width: 4px; height: 70px; background-color: black; margin-left: 5px;">
    </div>
    <h3 class="" style="margin-top: 10px; margin-left: 10px;">SI-DOMBA</h3>
</div>

<!-- Banner Starts Here -->
<div class="col-md-10 rounded mx-auto p-5"
    style="background-image: url({{asset('img/banner-bg.jpg')}});background-size: cover;background-repeat:no-repeat;">
    <div class="text-white text-center" style="background:rgba(0,0,0, 0.7);">
        <h3>CARI DOMBA IMPIANMU DISINI!</h3>
        <p style="color: white;">Selamat datang di SI DOMBA, sebuah aplikasi jual-beli serta pusat informasi mengenai
            domba-domba dari seluruh peternak domba di Indonesia.</p>
    </div>
</div>
<!-- Banner Ends Here -->
<center class="mt-3">
    <h2>Beli Domba</h2>
    <div class="line-dec"></div>
</center>

<!-- slide stars -->
<div id="carouselExampleIndicators" class="carousel slide mt-5" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" style="margin-left: 60px;">

        <div class="carousel-item active ">

            <br>
            <div class="item d-flex justify-content-around" alt="First slide">

                <div class="work">
                    <div class="img d-flex align-items-center  rounded" style="background-image: url({{asset('img/slide-1.jpg')}}); width: 353px;
                                    height: 176px;">
                        <div class="caption col-sm">
                            <h6 class="">Domba Garut</h6>
                            <p style="color: white;">
                                700 Ekor Siap Di beli
                                <br>700 Ekor Siap Di Investasikan
                            </p>
                            <a class="btn btn-primary " href="">Cek Sekarang</a>
                        </div>
                    </div>
                </div>

                <div class="work">
                    <div class="img d-flex align-items-center  rounded" style="background-image: url({{asset('img/slide-6.jpg')}}); width: 353px;
                                    height: 176px;">
                        <div class="caption col-sm">
                            <h6 class="">Domba Garut</h6>
                            <p style="color: white;">
                                700 Ekor Siap Di beli
                                <br>700 Ekor Siap Di Investasikan
                            </p>
                            <a class="btn btn-primary " href="">Cek Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="work">
                    <div class="img d-flex align-items-center  rounded" style="background-image: url({{asset('img/slide-3.jpg')}}); width: 353px;
                                    height: 176px;">
                        <div class="caption_pasar col-sm">
                            <center>
                                <p style="color: white;">Belum Ketemu? Langsung liat Pasar yuk!</p>
                                <span class="iconify col-12" data-icon="healthicons:market-stall-outline"
                                    data-width="50" data-height="50"></span>
                                <a class="btn btn-primary mt-2" href="">kunjungi Pasar</a>
                            </center>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="carousel-item">

            <div class="item d-flex justify-content-around" alt="Second slide">
                <div class="work">
                    <div class="img d-flex align-items-center  rounded" style="background-image: url({{asset('img/slide-2.jpg')}}); width: 353px;
                                    height: 176px;">
                        <div class="caption col-sm">
                            <h6 class="">Domba Garut</h6>
                            <p style="color: white;">
                                700 Ekor Siap Di beli
                                <br>700 Ekor Siap Di Investasikan
                            </p>
                            <a class="btn btn-primary " href="">Cek Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="work">
                    <div class="img d-flex align-items-center  rounded" style="background-image: url({{asset('img/slide-5.jpg')}}); width: 353px;
                                    height: 176px;">
                        <div class="caption col-sm">
                            <h6 class="">Domba Garut</h6>
                            <p style="color: white;">
                                700 Ekor Siap Di beli
                                <br>700 Ekor Siap Di Investasikan
                            </p>
                            <a class="btn btn-primary " href="">Cek Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="work">
                    <div class="img d-flex align-items-center  rounded" style="background-image: url({{asset('img/slide-4.jpg')}}); width: 353px;
                                    height: 176px;">
                        <div class="img d-flex align-items-center  rounded" style="background-image: url({{asset('img/slide-3.jpg')}}); width: 353px;
                                    height: 176px;">
                            <div class="caption_pasar col-sm">
                                <center>
                                    <p style="color: white;">Belum Ketemu? Langsung liat Pasar yuk!</p>
                                    <span class="iconify col-12" data-icon="healthicons:market-stall-outline"
                                        data-width="50" data-height="50"></span>
                                    <a class="btn btn-primary mt-2" href="">kunjungi Pasar</a>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">

            <div class="item d-flex justify-content-around" alt="Third slide">
                <div class="work">
                    <div class="img d-flex align-items-center  rounded" style="background-image: url({{asset('img/slide-2.jpg')}}); width: 353px;
                                    height: 176px;">
                        <div class="caption col-sm">
                            <h6 class="">Domba Garut</h6>
                            <p style="color: white;">
                                700 Ekor Siap Di beli
                                <br>700 Ekor Siap Di Investasikan
                            </p>
                            <a class="btn btn-primary " href="">Cek Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="work">
                    <div class="img d-flex align-items-center  rounded" style="background-image: url({{asset('img/slide-4.jpg')}}); width: 353px;
                                    height: 176px;">
                        <div class="caption col-sm">
                            <h6 class="">Domba Garut</h6>
                            <p style="color: white;">
                                700 Ekor Siap Di beli
                                <br>700 Ekor Siap Di Investasikan
                            </p>
                            <a class="btn btn-primary " href="">Cek Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="work">
                    <div class="img d-flex align-items-center  rounded" style="background-image: url({{asset('img/slide-5.jpg')}}); width: 353px;
                                    height:176px;">
                        <div class="img d-flex align-items-center  rounded" style="background-image: url({{asset('img/slide-3.jpg')}}); width: 353px;
                                    height: 176px;">
                            <div class="caption_pasar col-sm">
                                <center>
                                    <p style="color: white;">Belum Ketemu? Langsung liat Pasar yuk!</p>
                                    <span class="iconify col-12" data-icon="healthicons:market-stall-outline"
                                        data-width="50" data-height="50"></span>
                                    <a class="btn btn-primary mt-2" href="">kunjungi Pasar</a>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- slide end -->


<!-- Banner Starts Here -->
<div class="banner1 col-md-11 rounded mt-5" style="background-image: url(img/banner1.jpg);
	background-size: cover;
	background-repeat: no-repeat;
	margin-left: 5%;
	background-position: center center;">
    <div class=" container">
        <div class="row">
            <div class="col-md-6 ">
                <center>
                    <div class="caption rounded ">
                        <h3>AYO BERINVESTASI DENGAN DOMBA!</h3>
                        <p style="color: white;">Tidak hanya jual-beli, SI DOMBA juga menyediakan pasar investasi. Anda
                            bisa
                            menginvestasikan domba dari seluruh peternakan yang ada di Indonesia. Tentunya dengan
                            profit dan bagi hasil yang telah ditentukan oleh pihak Investor dan Peternak.</p>
                    </div>
                </center>
            </div>
        </div>
    </div>
</div>
<!-- Banner Ends Here -->
<br>
<div class="col-md-12 text-center">
    <h3>INVESTASI</h3>
    <center>
        <div class="line-dec"></div>
    </center>
</div>

<div class="kotakbesar row justify-content-md-center mt-3">
    <div class="kotak mr-3  ">
        <center>
            <span class="iconify mt-4" data-icon="fluent:handshake-16-regular" data-width="40" data-height="40"></span>
            <p class="">Ayo mulai investasi domba Anda sekarang!</p>
            <a class="btn btn-primary" href="#" style="font-size:10px ;">Daftar Sekarang</a>
        </center>
    </div>

    <div class="kotak  mr-3 ">
        <center>
            <span class="iconify mt-4" data-icon="ant-design:file-protect-outlined" data-width="40"
                data-height="40"></span>
            <p class="">Bagi kalian yang masih ragu, boleh cek regulasi dan aturan investasi disini!</p>
            <a class="btn btn-primary" href="#" style="font-size:10px ;">Daftar Sekarang</a>
        </center>
    </div>

    <div class="kotak">
        <center>
            <span class="iconify mt-4" data-icon="mdi:sheep" data-width="40" data-height="40"></span>
            <p class="">List domba-domba yang dibuka untuk investasi, liat yuk!</p>
            <a class="btn btn-primary" href="#" style="font-size:10px ;">Daftar Sekarang</a>
        </center>
    </div>
</div>

<!-- Banner Starts Here -->
<div class="banner1 col-md-11 mt-5 rounded" style="background-image: url(img/banner1.jpg);
	background-size: cover;
	background-repeat: no-repeat;
	margin-left: 5%;
	background-position: center center;">
    <div class=" container">
        <div class="row">
            <div class="col-md-6">
                <center>
                    <div class="caption rounded">
                        <h3>MULAI KARIRMU SEBAGAI PETERNAK DOMBA ONLINE!</h3>
                        <p style="color:  white;">Sebagai platform marketplace, SI DOMBA tentunya juga memiliki fitur
                            penjualan, dimana
                            penjual domba adalah peternak domba itu langsung. Peternak bebas mengatur harga,
                            investasi, dan kendali penuh atas domba yang dimiliki.</p>
                    </div>
                </center>
            </div>
        </div>
    </div>
</div>
<!-- Banner Ends Here -->

<div class="col-md-12 text-center mt-4">
    <h3>PETERNAKAN</h3>
    <center>
        <div class="line-dec"></div>
    </center>
</div>

<div class="kotakbesar row justify-content-md-center mt-3">
    <div class="kotak mr-3  ">
        <center>
            <span class="iconify mt-4" data-icon="iconoir:farm" data-width="50" data-height="50"></span>
            <p class="">Ayo mulai beternak domba Anda sekarang!</p>
            <a class="btn btn-primary" href="#" style="font-size:10px ;">Daftar Sekarang</a>
        </center>
    </div>

    <div class="kotak  mr-3 ">
        <center>
            <span class="iconify mt-4" data-icon="ant-design:file-protect-outlined" data-width="40"
                data-height="40"></span>
            <p class="">Bagi kalian yang masih ragu, boleh cek regulasi dan aturan investasi disini!</p>
            <a class="btn btn-primary" href="#" style="font-size:10px ;">Daftar Sekarang</a>
        </center>
    </div>

    <div class="kotak   ">
        <center>
            <span class="iconify mt-4" data-icon="mdi:sheep" data-width="40" data-height="40"></span>
            <p class="">List domba-domba yang dibuka untuk investasi, liat yuk!</p>
            <a class="btn btn-primary" href="#" style="font-size:10px ;">Daftar Sekarang</a>
        </center>
    </div>
</div>

@endsection