@extends('layouts.user')

@section('content')

<div class="row">
    @include('layouts.sidebarUser')
    <section class="ftco-section col " style="margin-top: 95px;">
        <div class="tengah d-flex d-flex justify-content-center " style="margin-bottom: 20px; margin-top:-50px;">

            <img src="../img/domba.png" alt="" style="width: 77px; height: 77px;">

            <div class="garis"
                style="width: 4px; height: 85px; background-color: black; margin-left: 5px; margin-right: 5px;">
                <p></p>
            </div>


            <h3 class="" style="margin-top: 10px; margin-left: 10px; height: 10px;">CARIBI</h3>
            <h4 class="" style="margin-top: 40px; margin-left: -120px;">Investasi</h4>



        </div>
        <div class="container " style="background-color: white; width: 994px;">


            <div class="d-flex flex-row " style=" margin-left:20px;">
                <a class="" href="investasi_riwayat.html" style="color: #000;">
                    <h5>Belum Diulas</h5>
                </a>
                <a class="ml-4" href="investasi_negosiasi.html" style="color: #000;">
                    <h5>Ulasan Saya</h5>
                </a>
            </div>
            <div class="pb-5 " style="border:1px solid black ; padding:20px;  border-radius:20px;">
                <div class="row mb-3">
                    <a href="#" class="col-2 btn btn-outline-primary mr-3 ml-5">Pembelian</a>
                    <a href="#" class="col-2 btn btn-outline-primary">Investasi</a>
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
                    <div class="row mb-5" style="border: 1px solid #000; margin-top: 10px;  background-color: white;">
                        <div class="col-2 " style="margin-left: 15px; padding:0; margin-top: 10px;">
                            <img class="rounded" src="../img/slide-4.jpg" alt="" style="width:160px ;height :180px; ">
                            <h6>Domba Suffolk</h6>
                            <h6>ID : DS111</h6>
                        </div>

                        <div class="col" style="width:990px;height: 247px;">
                            <h5 style="margin-bottom: -25px; margin-left: 65px;">Peternakan Maju Jaya</h5>
                            <table>
                                <tr>
                                    <img class="rounded-circle" src="../img/5.jpg" alt=""
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

                                    <p>Investasi domba Suffolk saya cukup menguntungkan dan menjanjikan. Saya bisa dapat
                                        untung sekitar 35% dari nominal investasi awal saya. Rekomen banget buat
                                        investor-investor lain yang mau investasi domba Suffolk di peternakan ini.
                                        Mantap lah pokoknya.</p>




                            </table>




                        </div>
                    </div>

                    <div class="row mb-5" style="border: 1px solid #000; margin-top: 10px;  background-color: white;">
                        <div class="col-2 " style="margin-left: 15px; padding:0; margin-top: 10px;">
                            <img class="rounded" src="../img/slide-4.jpg" alt="" style="width:160px ;height :180px; ">
                            <h6>Domba Suffolk</h6>
                            <h6>ID : DS111</h6>
                        </div>

                        <div class="col" style="width:990px;height: 247px;">
                            <h5 style="margin-bottom: -25px; margin-left: 65px;">Best Farm Indonesia</h5>
                            <table>
                                <tr>
                                    <img class="rounded-circle" src="../img/4.jpg" alt=""
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

                                    <p>Keseluruhan oke, hanya saja keuntungan yang didapatkan tidak terlalu sesuai
                                        ekspektasi saya. Tetap untung sih, cuma tidak terlalu tinggi dari nominal
                                        investasi awal saya. Tapi layanan oke dan respon peternak cepat.</p>




                            </table>




                        </div>
                    </div>

                    <div class="row mb-5" style="border: 1px solid #000; margin-top: 10px;  background-color: white;">
                        <div class="col-2 " style="margin-left: 15px; padding:0; margin-top: 10px;">
                            <img class="rounded" src="../img/slide-4.jpg" alt="" style="width:160px ;height :180px; ">
                            <h6>Domba Suffolk</h6>
                            <h6>ID : DS111</h6>
                        </div>

                        <div class="col" style="width:990px;height: 247px;">
                            <h5 style="margin-bottom: -25px; margin-left: 65px;">Aiman Farm</h5>
                            <table>
                                <tr>
                                    <img class="rounded-circle" src="../img/6.jpg" alt=""
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

                                    <p>Keseluruhan oke, hanya saja keuntungan yang didapatkan tidak terlalu sesuai
                                        ekspektasi saya. Tetap untung sih, cuma tidak terlalu tinggi dari nominal
                                        investasi awal saya. Tapi layanan oke dan respon peternak cepat.</p>




                            </table>




                        </div>
                    </div>

                </div>
                <br>


            </div>
            <br>
        </div>

    </section>
</div>

@endsection