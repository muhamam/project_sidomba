@extends('layouts.user')

@section('content')
<!-- Banner Starts Here -->
<div class="banner col-12 rounded"
    style="background-image: url({{asset('img/banner-bg.jpg')}});background-repeat:no-repeat;">
    <div class=" container">
        <div class="row">
            <div class="col-md-6">
                <center>
                    <div class="caption rounded ml-4">
                        <h3>PETERNAKAN MUNDUR JAYA</h3>

                        <p>Selamat datang di SI DOMBA, sebuah aplikasi jual-beli serta pusat informasi mengenai
                            domba-domba dari seluruh peternak domba di Indonesia.</p>


                    </div>
                </center>
            </div>
        </div>
    </div>
</div>
<!-- Banner Ends Here -->



<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h3>DASHBOARD</h3>

            </div>
            <div class="col-md-12 row justify-content-center">

                <div class=" col-md-5 row mr-5" style="border: 1px solid #000; margin-top: 10px; height: 230px; background:
                    linear-gradient(180deg, #BADBFE 0%, #E3EFFC 100%); ">

                    <div class="col">
                        <center>
                            <h5>Daftar Domba</h5>
                            <div class=" row">
                                <div class="col">

                                    <h6>Total Domba</h6>
                                    <h6><b>100 Ekor</b></h6>

                                </div>

                                <div style="width: 1px; height:100%; background-color: #000;"></div>

                                <div class="col">

                                    <h6>Total Domba</h6>
                                    <h6><b>100 Ekor</b></h6>


                                </div>
                                <div class="mt-5" style="width: 100%; height: 1px; background-color: #000; ">
                                </div>

                                <a class="mt-5" href="#" style="">klik untuk info lebih
                                    lanjut</a>
                                <img src="img/domba.png" alt=""
                                    style="width:80px; height:60px; margin-left:350px; margin-top:-50px;">
                            </div>

                        </center>
                    </div>
                </div>

                <div class=" col-md-5"
                    style="border: 1px solid #000; margin-top: 10px; height: 230px; background: linear-gradient(180deg, #E3EFFC 0%, #BADBFE 100%);">

                    <div class="col">
                        <center>
                            <h5>Penjualan dan Investasi</h5>
                            <div class="t row">
                                <div class="col border">

                                    <h6>Domba yang Dijual</h6>

                                    <h6 class="mt-4"><b>1 Ekor </b></h6>

                                </div>



                                <div class="col">

                                    <h6>Domba yang Di investasikan</h6>
                                    <h6><b> 1 Ekor </b></h6>

                                </div>
                                <div class="mt-4"
                                    style="width: 90%; height: 1px; background-color: #000; margin-left: 20px;">
                                </div>


                            </div>
                            <br>
                            <br>
                            <a href="#" style=""> klik untuk info lebih
                                lanjut</a>
                            <img src="img/rp.png" alt=""
                                style="width:60px; height:60px; margin-left:350px; margin-top:-50px;">
                        </center>
                    </div>
                </div>


            </div>


            <table class="table " style="margin-top: 40px;">
                <thead style="background: #BADBFE;">
                    <tr>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th>
                            <h1>Profil Peternakan</h1>
                        </th>
                        <th scope="col">

                        </th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody style="background-color: #E3EFFC;">
                    <tr>
                        <th scope="row">ID Peternakan</th>
                        <td>:</td>
                        <td>P00001</td>
                        <td></td>
                        <td>

                        </td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">Nama Peternakan</th>
                        <td>:</td>
                        <td>Peternakan Mundur Jaya</td>
                        <td></td>
                        <td>

                        </td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">Pemilik Peternakan</th>
                        <td>:</td>

                        <td>Raihan indra Aiman</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">Alamat Peternakan</th>
                        <td>:</td>
                        <td>Jl. Asia Afrika no. 999, Kota Bandung</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">Kontak</th>
                        <td>:</td>
                        <td>

                            <li>Telepon | 0812-4418-1648 </li>
                            <li>Email | raihanazhar05@gmail.com</li>

                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr style="background-color:#BADBFE ; height:60px;">
                        <th><a class="btn btn-light col-md-3" href="#">Edit</a></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection