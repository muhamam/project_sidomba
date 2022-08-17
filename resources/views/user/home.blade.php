@extends('layouts.user')

@section('content')


<div class='mainContent'>

    <!--[ Content section ]-->
    <div class='mainInner sectionInner'>
        <!--[ Large ads ]-->
        <div class='largeSection'>
            <div class='section' id='large-content'>
                <div class='widget HTML' data-version='2' id='HTML03'>
                    <div class='widget-content'>
                        <div class="d-flex d-flex justify-content-center">
                            <img src="{{ asset('img/logodomba.png')}}" alt="" width="70">

                            <h3 class="mt-3"><b>SI-DOMBA</b></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--[ Blog content ]-->
        <div class='blogContent'>
            <!--[ Main content ]-->
            <main class='mainbar'>
                <div class='section' id='top-widget'>
                    <div class='widget FeaturedPost' data-version='2' id='FeaturedPost00'>
                        <div class='itemFeatured' role='feed'>
                            <article class='item'
                                style="background-image: url({{asset('img/banner-bg.jpg')}});background-size: 100%;background-repeat:no-repeat;">
                                <div class="text-white text-center">
                                    <h3 style="color: white;">CARI DOMBA IMPIANMU DISINI !</h3>
                                    <p style="color: white;">Selamat datang di SI DOMBA, sebuah aplikasi jual-beli serta
                                        pusat informasi mengenai
                                        domba-domba dari seluruh peternak domba di Indonesia.</p>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
                <center>
                    <h2 class="mt-5">Beli Domba</h2>
                    <div class="line-dec"></div>
                </center>

                <!-- slide stars -->
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">

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
                                <br>
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
                                <br>
                                <div class="work">
                                    <div class="img d-flex align-items-center  rounded" style="background-image: url({{asset('img/slide-3.jpg')}}); width: 353px;
                                    height: 176px;">
                                        <div class="caption_pasar col-sm">
                                            <center>
                                                <p style="color: white;">Belum Ketemu? Langsung liat Pasar yuk!</p>
                                                <span class="iconify col-12"
                                                    data-icon="healthicons:market-stall-outline" data-width="50"
                                                    data-height="50"></span>
                                                <a class="btn btn-primary mt-2" href="">kunjungi Pasar</a>
                                            </center>
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
                <hr>
                <br><br>
                <!-- Banner Starts Here -->
                <article class='item'
                    style="background-image: url(img/banner1.jpg);background-size: 100%;background-repeat:no-repeat;">
                    <div class="text-white text-center">
                        <h3 style="color: white;">AYO BERINVESTASI DENGAN DOMBA!</h3>
                        <p style="color: white;">Tidak hanya jual-beli, SI DOMBA juga menyediakan pasar investasi. Anda
                            bisa
                            menginvestasikan domba dari seluruh peternakan yang ada di Indonesia. Tentunya dengan
                            profit dan bagi hasil yang telah ditentukan oleh pihak Investor dan Peternak.</p>
                    </div>
                </article>
                <div class='section' id='main-widget'>
                    <div class='widget Blog' data-version='2' id='Blog1'>
                        <div class='blogTitle'>


                        </div>
                        <div class='blogPosts'>
                            <div class="col-md-12 text-center" style="margin-top: 1rem;">
                                <h3>INVESTASI</h3>
                                <center>
                                    <div class="line-dec"></div>
                                </center>
                            </div>
                            <article class='hentry'>
                                <div class="kotakbesar row justify-content-md-center mt-3">
                                    <div class="kotak mr-3  ">
                                        <center>
                                            <span class="iconify mt-4" data-icon="fluent:handshake-16-regular"
                                                data-width="40" data-height="40"></span>
                                            <p class="">Ayo mulai investasi domba Anda sekarang!</p>
                                            <a class="btn btn-primary" href="#" style="font-size:10px ;">Daftar
                                                Sekarang</a>
                                        </center>
                                    </div>
                            </article>
                            <article class='hentry'>
                                <div class="kotakbesar row justify-content-md-center mt-3">
                                    <div class="kotak mr-3  ">
                                        <center>
                                            <span class="iconify mt-4" data-icon="ant-design:file-protect-outlined"
                                                data-width="40" data-height="40"></span>
                                            <p class="">Bagi kalian yang masih ragu, boleh cek regulasi dan aturan
                                                investasi disini!</p>
                                            <a class="btn btn-primary" href="#" style="font-size:10px ;">Daftar
                                                Sekarang</a>
                                        </center>
                                    </div>
                            </article>

                            <article class='hentry'>
                                <div class="kotakbesar row justify-content-md-center mt-3">
                                    <div class="kotak mr-3  ">
                                        <center>
                                            <span class="iconify mt-4" data-icon="mdi:sheep" data-width="40"
                                                data-height="40"></span>
                                            <p class="">List domba-domba yang dibuka untuk investasi, liat yuk!</p>
                                            <a class="btn btn-primary" href="#" style="font-size:10px ;">Daftar
                                                Sekarang</a>
                                        </center>
                                    </div>
                            </article>


                        </div>

                    </div>
                </div>
                <!-- Banner Starts Here -->
                <article class='item'
                    style="background-image: url(img/banner1.jpg);background-size: 100%;background-repeat:no-repeat;">
                    <div class="text-white text-center">
                        <h3 style="color: white;">MULAI KARIRMU SEBAGAI PETERNAK DOMBA ONLINE!</h3>
                        <p style="color: white;">Sebagai platform marketplace, SI DOMBA tentunya juga memiliki fitur
                            penjualan, dimana
                            penjual domba adalah peternak domba itu langsung. Peternak bebas mengatur harga,
                            investasi, dan kendali penuh atas domba yang dimiliki.</p>
                    </div>
                </article>
                <div class='section' id='main-widget'>
                    <div class='widget Blog' data-version='2' id='Blog1'>
                        <div class='blogTitle'>


                        </div>
                        <div class='blogPosts'>
                            <div class="col-md-12 text-center" style="margin-top: 1rem;">
                                <h3>PETERNAKAN</h3>
                                <center>
                                    <div class="line-dec"></div>
                                </center>
                            </div>
                            <article class='hentry'>
                                <div class="kotakbesar row justify-content-md-center mt-3">
                                    <div class="kotak mr-3  ">
                                        <center>
                                            <span class="iconify mt-4" data-icon="iconoir:farm" data-width="50"
                                                data-height="50"></span>
                                            <p class="">Ayo mulai beternak domba Anda sekarang!</p>
                                            <a class="btn btn-primary" href="#" style="font-size:10px ;">Daftar
                                                Sekarang</a>
                                        </center>
                                    </div>
                            </article>
                            <article class='hentry'>
                                <div class="kotakbesar row justify-content-md-center mt-3">
                                    <div class="kotak mr-3  ">
                                        <center>
                                            <span class="iconify mt-4" data-icon="ant-design:file-protect-outlined"
                                                data-width="40" data-height="40"></span>
                                            <p class="">Bagi kalian yang masih ragu, boleh cek regulasi dan aturan
                                                investasi disini!</p>
                                            <a class="btn btn-primary" href="#" style="font-size:10px ;">Daftar
                                                Sekarang</a>
                                        </center>
                                    </div>
                            </article>

                            <article class='hentry'>
                                <div class="kotakbesar row justify-content-md-center mt-3">
                                    <div class="kotak mr-3  ">
                                        <center>
                                            <span class="iconify mt-4" data-icon="mdi:sheep" data-width="40"
                                                data-height="40"></span>
                                            <p class="">List domba-domba yang dibuka untuk investasi, liat yuk!</p>
                                            <a class="btn btn-primary" href="#" style="font-size:10px ;">Daftar
                                                Sekarang</a>
                                        </center>
                                    </div>
                            </article>


                        </div>

                    </div>
                </div>
            </main>
            <!--[ Sidebar content ]-->
            <aside class='sidebar'>
                <div class='section' id='side-widget'>
                    <div class='widget PopularPosts' data-version='2' id='PopularPosts00'>
                        <h2 class='title' style='font-weight:bold'>Domba Populer</h2>
                        <div class='widget-content'>
                            <div class='itemPopulars' role='feed'>
                                <article class='itemPopular noImage'>
                                    <div class='itemContent'>
                                        <div class='postHeader'>

                                        </div>
                                        <div class='itemInner'>
                                            <div class='itemFlex'>
                                                <h3 class='itemTitle'><a href='#'>Domba Puso</a>
                                                    <img src="{{ asset('img/logodomba.png')}}" alt="" width="70">
                                                </h3>
                                                <p class='itemEntry'>
                                                    Kasih keterangan&#8230;
                                                </p>
                                                <div class='itemInfo postInfo'>

                                                    <a aria-label='Comments' class='postComment' data-text='99' href='#'
                                                        title='Jumlah Pembeli'>
                                                        <span class="iconify" data-icon="cil:cart" data-width="22"
                                                            data-height="25"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class='itemPopular noImage'>
                                    <div class='itemContent'>
                                        <div class='postHeader'>

                                        </div>
                                        <div class='itemInner'>
                                            <div class='itemFlex'>
                                                <h3 class='itemTitle'><a href='#'>Domba Garut</a>
                                                    <img src="{{ asset('img/logodomba.png')}}" alt="" width="70">
                                                </h3>
                                                <p class='itemEntry'>
                                                    Kasih keterangan&#8230;
                                                </p>
                                                <div class='itemInfo postInfo'>

                                                    <a aria-label='Comments' class='postComment' data-text='99' href='#'
                                                        title='Jumlah Pembeli'>
                                                        <span class="iconify" data-icon="cil:cart" data-width="22"
                                                            data-height="25"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>

                            </div>
                        </div>
                    </div>

                </div>

            </aside>
        </div>
    </div>
</div>


@endsection