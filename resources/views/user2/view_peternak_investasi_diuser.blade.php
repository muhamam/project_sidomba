@extends('layouts.user')

@section('content')




<section class="ftco-section">
    <div class="container" style="background-color: white; ">
        <!-- Banner Starts Here -->
        <div class="bannerd23 col-md-12 rounded  mt-3">
            <div class=" container12">
                <div class="row rounded-lg" style="background-image:url(img/bg-1.jpeg) ;height: 300px;  ">
                    <div class="col-md-12">
                        <center>
                            <div class="caption rounded ml-4">
                                <h3>PETERNAKAN MUNDUR JAYA</h3>

                                <p style="color: white;">Peternakan dengan kualitas domba yang tidak diragukan lagi.
                                    Sudah berdiri sejak tahun 1985, domba peternakan kami telah dipercaya oleh banyak
                                    orang. Soal pengalaman sudah tidak diragukan lagi, top pokoknya.</p>
                                <div class="garis mb-4"
                                    style="width: 100%; height: 2px; background-color: #3A8BCD; margin-left: 5px; margin-right:5px;">
                                </div>
                                <p style="color: white;">0812-4418-1648</p>
                                <p style="color: white;">Jl. Asia Afrika no. 999, Kota Bandung</p>
                                <div class="row " style="margin-left: 35%; ;">
                                    <a href="#" class="col-3 btn btn-primary rounded-lg "
                                        style="border:1px solid white">Chat
                                        Peternak</a>
                                    <a href="#" class="col-3 btn-outline-primary rounded-lg ml-3"
                                        style="border:1px solid white; color:white;">Info
                                        Lengkap</a>
                                </div>
                                <br>
                            </div>
                        </center>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Ends Here -->

        <div class="row justify-content-center ">
            <br>
            <br>
            <center>
                <div class="row mt-4 ">
                    <a href="#" class="col-2">
                        <h4>Domba</h4>
                    </a>
                    <a href="#" class="col-2">
                        <h4>Investasi</h4>
                    </a>
                    <a href="#" class="col-2">
                        <h4>Ulasan</h4>
                    </a>
                </div>
                <div class="garis mb-4" style="width: 100%; height: 2px; background-color: #3A8BCD; margin-left: 5px; margin-right:
                    5px;">
                </div>

            </center>
        </div>


        <!-- Button trigger modal -->
        <div class="row">
            <a href="#" class="col-3 row ml-5 rounded-lg" data-toggle="modal" data-target="#exampleModal"
                style="width: 200px; border:1px solid black">
                <span class="iconify col-5" data-icon="ant-design:filter-outlined" data-width="40"
                    data-height="40"></span>
                <h3 class=" col-1 ">Filter</h3>
            </a>

            <div class="col-3 row ml-3">
                <p class="col" style="border-right: 1px solid black;">Domba Texel</p>
                <p class="col"> Min. 23Kg</p>
            </div>
        </div>
        <!-- button modal end -->

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-body">
                        <div class=" col-10" style="margin-left: 30px; margin-top:120px;">

                            <div class="row">
                                <span class="iconify col-2" data-icon="ant-design:filter-outlined" data-width="35"
                                    data-height="35"></span>
                                <h4 class="col">Filter</h4>
                            </div>
                            <div class=" bg-light  ">

                                <h6 class="ml-4"><b> Jenis Domba</b></h6>
                                <div class="dropdown ml-4">
                                    <a class="btn  dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                        data-bs-toggle="dropdown" aria-expanded="false"
                                        style="width: 250px; border: 1px solid #000000;">
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
                                    <div class="input-group flex-nowrap rounded mr-3"
                                        style="width:  255px; border: 1px solid #000000;">

                                        <input type="text" class="form-control" placeholder="Semua Lokasi"
                                            aria-label="Username" aria-describedby="addon-wrapping">

                                    </div>
                                </center>
                                <center>
                                    <div class="dotted mb-3 mt-2 col-md-11"></div>
                                </center>
                                <h6 class="ml-4"><b>Harga Investasi</b></h6>
                                <center>
                                    <div class="input-group flex-nowrap rounded mr-3"
                                        style="width:  255px; border: 1px solid #000000;">
                                        <span class="input-group-text" id="addon-wrapping">Rp.</span>
                                        <input type="text" class="form-control" placeholder="Harga Minimun"
                                            aria-label="Username" aria-describedby="addon-wrapping">

                                    </div>
                                    <div class="input-group flex-nowrap rounded mr-3 mt-2"
                                        style="width:  255px; border: 1px solid #000000;">
                                        <span class="input-group-text" id="addon-wrapping">Rp.</span>
                                        <input type="text" class="form-control" placeholder="Harga Maximum"
                                            aria-label="Username" aria-describedby="addon-wrapping">

                                    </div>
                                </center>
                                <center>
                                    <div class="dotted mb-3 mt-2 col-md-11"></div>
                                </center>
                                <h6 class="ml-4"><b>Bagi Hasil</b></h6>
                                <center>
                                    <div class="input-group flex-nowrap rounded mr-3"
                                        style="width:  255px; border: 1px solid #000000;">

                                        <input type="text" class="form-control" placeholder="Persentase Peternakan"
                                            aria-label="Username" aria-describedby="addon-wrapping">
                                        <span class="input-group-text" id="addon-wrapping">%</span>

                                    </div>
                                    <div class="input-group flex-nowrap rounded mr-3 mt-2"
                                        style="width:  255px; border: 1px solid #000000;">

                                        <input type="text" class="form-control" placeholder="Persentase Investo"
                                            aria-label="Username" aria-describedby="addon-wrapping">
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
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                            checked>
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
                                    <div class="input-group flex-nowrap rounded mr-3"
                                        style="width:  255px; border: 1px solid #000000;">

                                        <input type="text" class="form-control" placeholder="Berat Minimum"
                                            aria-label="Username" aria-describedby="addon-wrapping">
                                        <span class="input-group-text" id="addon-wrapping">Kg</span>

                                    </div>
                                    <div class="input-group flex-nowrap rounded mr-3 mt-2"
                                        style="width:  255px; border: 1px solid #000000;">

                                        <input type="text" class="form-control" placeholder="Berat Maksimum"
                                            aria-label="Username" aria-describedby="addon-wrapping">
                                        <span class="input-group-text" id="addon-wrapping">Kg</span>
                                    </div>
                                </center>
                                <center>
                                    <div class="dotted mb-3 mt-2 col-md-11"></div>
                                </center>
                                <h6 class="ml-4"><b>Umur</b></h6>
                                <center>
                                    <div class="input-group flex-nowrap rounded mr-3 "
                                        style="width:  255px; border: 1px solid #000000;">

                                        <input type="text" class="form-control" placeholder="Umur Minimum"
                                            aria-label="Username" aria-describedby="addon-wrapping">
                                        <span class="input-group-text" id="addon-wrapping">Thn</span>

                                    </div>
                                    <div class="input-group flex-nowrap rounded mr-3 mt-2 "
                                        style="width:  255px; border: 1px solid #000000;">

                                        <input type="text" class="form-control" placeholder="Umur Maksimum"
                                            aria-label="Username" aria-describedby="addon-wrapping">
                                        <span class="input-group-text" id="addon-wrapping">Thn</span>
                                    </div>
                                </center>
                                <br>






                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Search</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal end -->

        <!-- sebelum di search  harus di hilangkan dan di tampilkan lagi setelah di search -->
        <p class="mt-2">Menampilkan 20 Domba per Halaman</p>

        <br>
        <div class="row " style="margin-bottom: 40px;">

            <div class="row " style="margin-bottom: 40px;">
                <div class="item col-3">
                    <div class="work1" style="border: 1px solid #000000; width: 390px; margin-left: 50px;">
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
                                    <span class="iconify " data-icon="akar-icons:location" data-width="25"
                                        data-height="25"></span>
                                    Soreang, Bandung
                                </p>
                            </div>

                            <div class="garis"
                                style="width: 100%; height: 2px; background-color: #000000; margin-top: -10px;">
                            </div>
                            <br>


                            <div class="row">
                                <p class="col-4">
                                    <span class="iconify" data-icon="mdi:weight-kilogram" data-width="25"
                                        data-height="25"></span>

                                    23 Kg
                                </p>

                                <p class="col-4">
                                    <span class="iconify" data-icon="bi:hourglass-bottom" data-width="25"
                                        data-height="25"></span>
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
                <div class="item col-3" style="margin-left: 300px;">
                    <div class="work1" style="border: 1px solid #000000; width: 390px; margin-left: 50px;">
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
                                    <span class="iconify " data-icon="akar-icons:location" data-width="25"
                                        data-height="25"></span>
                                    Soreang, Bandung
                                </p>
                            </div>

                            <div class="garis"
                                style="width: 100%; height: 2px; background-color: #000000; margin-top: -10px;">
                            </div>
                            <br>


                            <div class="row">
                                <p class="col-4">
                                    <span class="iconify" data-icon="mdi:weight-kilogram" data-width="25"
                                        data-height="25"></span>

                                    23 Kg
                                </p>

                                <p class="col-4">
                                    <span class="iconify" data-icon="bi:hourglass-bottom" data-width="25"
                                        data-height="25"></span>
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
            <div class="row " style="margin-bottom: 40px;">
                <div class="item col-3">
                    <div class="work1" style="border: 1px solid #000000; width: 390px; margin-left: 50px;">
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
                                    <span class="iconify " data-icon="akar-icons:location" data-width="25"
                                        data-height="25"></span>
                                    Soreang, Bandung
                                </p>
                            </div>

                            <div class="garis"
                                style="width: 100%; height: 2px; background-color: #000000; margin-top: -10px;">
                            </div>
                            <br>


                            <div class="row">
                                <p class="col-4">
                                    <span class="iconify" data-icon="mdi:weight-kilogram" data-width="25"
                                        data-height="25"></span>

                                    23 Kg
                                </p>

                                <p class="col-4">
                                    <span class="iconify" data-icon="bi:hourglass-bottom" data-width="25"
                                        data-height="25"></span>
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
                <div class="item col-3" style="margin-left: 300px;">
                    <div class="work1" style="border: 1px solid #000000; width: 390px; margin-left: 50px;">
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
                                    <span class="iconify " data-icon="akar-icons:location" data-width="25"
                                        data-height="25"></span>
                                    Soreang, Bandung
                                </p>
                            </div>

                            <div class="garis"
                                style="width: 100%; height: 2px; background-color: #000000; margin-top: -10px;">
                            </div>
                            <br>


                            <div class="row">
                                <p class="col-4">
                                    <span class="iconify" data-icon="mdi:weight-kilogram" data-width="25"
                                        data-height="25"></span>

                                    23 Kg
                                </p>

                                <p class="col-4">
                                    <span class="iconify" data-icon="bi:hourglass-bottom" data-width="25"
                                        data-height="25"></span>
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


        <br>

    </div>





    </div>
    </div>
</section>

@endsection