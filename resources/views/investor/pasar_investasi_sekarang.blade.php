@extends('layouts.user')

@section('content')
<div class="row  d-flex">
    @include('layouts.sidebarInvestor')
    <section class="ftco-section col" style="margin-top: 100px;">
        <div class=" d-flex d-flex justify-content-center">
            <img src="../img/domba.png" alt="" style="width: 77px; height: 77px;">
            <div class="garis"
                style="width: 2px; height: 85px; background-color: black; margin-left: 10px; margin-right: 20px;">
                <p></p>
            </div>
            <h3 class="" style="text-center">SI-DOMBA <br>Investasi</h3>
        </div>
        <br>
        <div class="container bg-light" style="background-color: white; border-radius:20px;">
            <div class="container">
                <div class="row" style="background-color: white; ">
                    <div class="row  mt-5">
                        <div class="col-5">
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
                                <div class="col d-flex justify-content-between " style="margin-left: -30px;">
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
                        <div class="col-7">
                            <h4>Domba Suffolk</h4>
                            <div class="row">
                                <div class="col-4">
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

                                <div class="col-4">
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

                                <div class=" "
                                    style="width: 90%; height: 2px; background-color: #3A8BCD;margin-top: 30px;">
                                </div>
                                <table class="col-12">
                                    <h5 class="mt-2"><b> Pengajuan Investasi</b></h5>
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
                                            <td scope="row">Bagi Hasil </td>
                                            <td></td>
                                            <td>:</td>
                                            <td></td>
                                            <td>45%</td>
                                        </tr>
                                        <tr>
                                            <td scope="row">Perkiraan Berat Untuk Penjualan</td>
                                            <td></td>
                                            <td>:</td>
                                            <td></td>
                                            <td>23Kg</td>
                                        </tr>
                                        <tr>
                                            <td scope="row">Perkiraan Waktu Siap Dijual</td>
                                            <td></td>
                                            <td>:</td>
                                            <td></td>
                                            <td>1-2 Tahun</td>
                                        </tr>
                                        <tr>
                                            <td scope="row">Perkiraan Profit Penjualan</td>
                                            <td></td>
                                            <td>:</td>
                                            <td></td>
                                            <td>Rp2.500.000,00 - 3.100.000,00</td>
                                        </tr>
                                        <tr>
                                            <td scope="row">Margin Harga</td>
                                            <td></td>
                                            <td>:</td>
                                            <td></td>
                                            <td>Rp250.000,00 / +1Kg</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <br>
                                <br>
                                <div class="" style="margin-top:30px;">
                                    <h5 class="ml-5"><b> Nominasi Investasi</b></h5>
                                    <h3 class="ml-5"><a href="#">Rp1.450.000,00</a></h3>


                                </div>
                            </div>
                        </div>


                    </div>
                    <div class=" " style="width: 90%; height: 2px; background-color: #3A8BCD;margin-top: 30px;">
                    </div>
                    <div class="container bg-light" style="background-color: white; border-radius:20px;">
                        <div class="d-flex flex-row   ml-3 mb-3 mt-3">
                            <a class="mt-3" style="color: #000;">

                            </a>

                        </div>
                        <center>
                            <div class="col-7">

                                <h5>Pembayaran</h5>
                                <h6>Metode Pembayaran</h6>
                            </div>

                            <select class="form-control col-3" id="exampleFormControlSelect1">
                                <option>ATM Transfer</option>
                                <option>Gopay</option>
                                <option>Shoppepay</option>
                                <option>QRIS</option>
                                <option>BCA</option>
                            </select>
                            <br>
                            <div class="col-7">

                                <h6>Nominal Bayar</h6>
                                <h3 class="ml-5"><a href="#">Rp1.450.000,00</a></h3>
                            </div>
                        </center>


                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script>
$(function() {

    $('.slide1').mouseenter(function() {
        $('.slide1').css('width', '100px');
    });
    $('.slide1').mouseleave(function() {
        $('.slide1').css('width', '80');
    });
    $('.slide2').mouseenter(function() {
        $('.slide2').css('width', '100px');
    });
    $('.slide2').mouseleave(function() {
        $('.slide2').css('width', '80');
    });
    $('.slide3').mouseenter(function() {
        $('.slide3').css('width', '100px');
    });
    $('.slide3').mouseleave(function() {
        $('.slide3').css('width', '80');
    });
    $('.slide4').mouseenter(function() {
        $('.slide4').css('width', '100px');
    });
    $('.slide4').mouseleave(function() {
        $('.slide4').css('width', '80');
    });
});
</script>
@endsection