@extends('layouts.user')

@section('content')
<!-- Banner Starts Here -->
<div class="bannerd col-md-10 rounded mt-5">
    <div class="container">
        <center>
            <div class="d-flex justify-content-center ">
                <div class="col-md-6">
                    <div class="caption rounded ">
                        <h3>PETERNAKAN MUNDUR JAYA</h3>

                        <p>Selamat datang di SI DOMBA, sebuah aplikasi jual-beli serta pusat informasi mengenai
                            domba-domba dari seluruh peternak domba di Indonesia.</p>
                    </div>

                </div>
            </div>
        </center>
    </div>
</div>
<!-- Banner Ends Here -->



<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class=" col-md-12 text-center mt-3">
                <h1 style="color:black">DASHBOARD</h1>
            </div>
            <div class="col-md-12 row justify-content-center">

                <div class="kotak_peternak card  col-md-5 row mr-5" style="border : 1px solid #000; ">

                    <div class="col" style="color:black">
                        <center>
                            <h5 style="color:black">Daftar Domba</h5>
                            <div class=" row">
                                <div class="col">

                                    <h6 style="color:black">Total Domba</h6>
                                    <h6 style="color:black"><b>100 Ekor</b></h6>

                                </div>

                                <div style="width: 1px; height:100%; background-color: #000;"></div>

                                <div class="col">

                                    <h6 style="color:black">Total Domba</h6>
                                    <h6 style="color:black"><b>100 Ekor</b></h6>


                                </div>
                                <div class="mt-5" style="width: 100%; height: 1px; background-color: #000; ">
                                </div>
                                <div class="row">
                                    <a class="mt-5 col-9" href="#" style="">klik untuk info lebih
                                        lanjut</a>
                                    <img class="col-3" src="img/domba.png" alt="">
                                </div>

                            </div>

                        </center>
                    </div>
                </div>

                <div class="kotak_peternak card rounded col-md-5 car" style="border: 1px solid #000;">

                    <div class="col">
                        <center>
                            <h5 style="color:black">Penjualan dan Investasi</h5>
                            <div class=" row">
                                <div class="col-5 border">

                                    <h6 style="color:black">Domba yang Dijual</h6>

                                    <h6 style="color:black"><b>1 Ekor </b></h6>

                                </div>
                                <div class="col-7">

                                    <h6 style="color:black">Domba yang Di investasikan</h6>
                                    <h6 style="color:black"><b> 1 Ekor </b></h6>

                                </div>
                                <div class="mt-4"
                                    style="width: 90%; height: 1px; background-color: #000; margin-left: 20px;">
                                </div>


                            </div>
                            <div class="row">
                                <a class="mt-5 col-9" href="#" style="">klik untuk info lebih
                                    lanjut</a>
                                <img class="col-3 mt-3" src="img/rp.png" alt="">
                            </div>

                        </center>
                    </div>
                </div>


            </div>


            <table class="table mt-5">
                <thead style="background: #BADBFE;">
                    <tr>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th>
                            <h1 style="color:black">Profil Peternakan</h1>
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