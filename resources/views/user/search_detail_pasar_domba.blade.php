@extends('layouts.user')

@section('content')

<div class="row ">
    <div class=" col-md-3" style="margin-left: 30px; margin-top:120px;">
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
                <div class="input-group flex-nowrap rounded mr-3 mt-2"
                    style="width:  255px; border: 1px solid #000000;">
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
                <div class="input-group flex-nowrap rounded mr-3 mt-2"
                    style="width:  255px; border: 1px solid #000000;">

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
                <div class="input-group flex-nowrap rounded mr-3 mt-2"
                    style="width:  255px; border: 1px solid #000000;">

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
                <div class="input-group flex-nowrap rounded mr-3 mt-2 "
                    style="width:  255px; border: 1px solid #000000;">

                    <input type="text" class="form-control" placeholder="Umur Maksimum" aria-label="Username"
                        aria-describedby="addon-wrapping">
                    <span class="input-group-text" id="addon-wrapping">Thn</span>
                </div>
            </center>
            <br>






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


            <h3 class="" style="margin-top: 10px; margin-left: 10px; height: 10px;">CARIBI</h3>
            <h4 class="" style="margin-top: 40px; margin-left: -120px;">Investasi</h4>



        </div>
        <div class="container">

            <div class="row justify-content-center " style="background-color: white; width: 950px;">
                <br>
                <br>
                <center>
                    <div class="row mt-4 ">
                        <a href="#" class="col-2">
                            <h4>Domba</h4>
                        </a>
                        <a href="#" class="col-2">
                            <h4>Peternakan</h4>
                        </a>
                    </div>
                    <div class="garis mb-4" style="width: 100%; height: 2px; background-color: #3A8BCD; margin-left: 5px; margin-right:
                    5px;">
                    </div>
                    <p class="mt-2">Menampilkan 20 Domba per Halaman</p>
                </center>



                <div class="row " style="margin-bottom: 40px;">
                    <div class="item col-3">
                        <div class="work1" style="border: 1px solid #000000; width: 390px; ">
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
                                <center>
                                    <h5 class="mt-1">Harga</h5>
                                    <h4><a href="#">Rp1.450.000,00</a></h4>
                                </center>

                                <center>
                                    <a class="btn btn-primary " href="">Beli</a>
                                </center>
                                <br>
                            </div>

                        </div>
                    </div>
                    <div class="item col-3 " style="margin-left: 200px;">
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
                                <center>
                                    <h5 class="mt-1">Harga</h5>
                                    <h4><a href="#">Rp1.450.000,00</a></h4>
                                </center>

                                <center>
                                    <a class="btn btn-primary " href="">Beli</a>
                                </center>
                                <br>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row " style="margin-bottom: 40px;">
                    <div class="item col-3">
                        <div class="work1" style="border: 1px solid #000000; width: 390px; ">
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
                                <center>
                                    <h5 class="mt-1">Harga</h5>
                                    <h4><a href="#">Rp1.450.000,00</a></h4>
                                </center>

                                <center>
                                    <a class="btn btn-primary " href="">Beli</a>
                                </center>
                                <br>
                            </div>

                        </div>
                    </div>
                    <div class="item col-3 " style="margin-left: 200px;">
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
                                <center>
                                    <h5 class="mt-1">Harga</h5>
                                    <h4><a href="#">Rp1.450.000,00</a></h4>
                                </center>

                                <center>
                                    <a class="btn btn-primary " href="">Beli</a>
                                </center>
                                <br>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row " style="margin-bottom: 40px;">
                    <div class="item col-3">
                        <div class="work1" style="border: 1px solid #000000; width: 390px; ">
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
                                <center>
                                    <h5 class="mt-1">Harga</h5>
                                    <h4><a href="#">Rp1.450.000,00</a></h4>
                                </center>

                                <center>
                                    <a class="btn btn-primary " href="">Beli</a>
                                </center>
                                <br>
                            </div>

                        </div>
                    </div>
                    <div class="item col-3 " style="margin-left: 200px;">
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
                                <center>
                                    <h5 class="mt-1">Harga</h5>
                                    <h4><a href="#">Rp1.450.000,00</a></h4>
                                </center>

                                <center>
                                    <a class="btn btn-primary " href="">Beli</a>
                                </center>
                                <br>
                            </div>

                        </div>
                    </div>
                </div>

                <br>

            </div>
        </div>
    </div>
</div>
<div class=" col-md-3 " style="margin-left: 30px;">


</div>
</div>



@endsection