@extends('layouts.user')

@section('content')
<div class="container">
    <div class=" d-flex d-flex justify-content-center mt-5" style="margin-bottom: 20px;">
        <img src="../img/domba.png" alt="" style="width: 77px; height: 77px;">
        <div class="garis"
            style="width: 4px; height: 85px; background-color: black; margin-left: 5px; margin-right: 5px;">
            <p></p>
        </div>
        <h3 class="" style="margin-top: 10px; margin-left: 10px; height: 10px;">CARIBI</h3>
    </div>
    <div class="d-flex justify-content-center">
        <div class="bg-light col-10" style="border-radius: 15px;">
            <br>
            <h4>SETATUS PEMBAYARAN</h4>
            <br>
            <center>
                <div class="col-7" style="border-radius: 15px; border:1px solid black;">
                    <span class="iconify" data-icon="ant-design:clock-circle-outlined" data-width="30"
                        data-height="30"></span>
                    <h6>Silahkan selesaikan pembayaran anda dalam</h6>
                    <h6>23 : 59 : 59</h6>
                </div>
                <br>
                <h6>Transfer ke rekening SIDOMBA OFFICIAL</h6>
                <br>
            </center>
            <div class="d-flex justify-content-center">
                <div class=" col-10" style="border-radius: 15px; border:1px solid black;">
                    <label for="basic-url" class="col-10">No Rekening :</label>
                    <div class="input-group mb-3 col-10">
                        <select class="form-control col-3" id="exampleFormControlSelect1">
                            <option>Mandiri</option>
                            <option>BSI</option>
                            <option>BRI</option>
                            <option>BTN</option>
                            <option>BCA</option>
                        </select>
                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                    </div>
                    <label for="basic-url" class="col-10">Jumlah Yang di bayarkan :</label>
                    <div class="input-group mb-3 col-10">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Rp</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
            </div>
            <br>
            <div class="d-flex justify-content-center ">
                <div class="col-10" style="border: 1px solid black; border-radius: 15px; ">
                    <center>
                        <ol style="">
                            <br>
                            <li style="border-bottom:solid 1px black;">Cari ATM Mandiri terdekat</li>
                            <br>
                            <li style="border-bottom:solid 1px black;">Masukkan kartu debit Mandiri Anda ke dalam ATM
                            </li>
                            <br>
                            <li style="border-bottom:solid 1px black;">Masukkan nomor PIN Anda</li>
                            <br>
                            <li style="border-bottom:solid 1px black;">Pilih menu Transfer, kemudian Transfer Sesama
                                Mandiri
                            </li>
                            <br>
                            <li style="border-bottom:solid 1px black;">Masukkan Nomor Rekening <b>
                                    1400-241255-2152421</b>
                            </li>
                            <br>
                            <li style="border-bottom:solid 1px black;">Masukkan Nomor Rekening <b> Rp1.450.000,00</b>
                            </li>
                            <br>
                            <li style="border-bottom:solid 1px black;">Pastikan nomor rekening dan nominal sudah sesuai
                            </li>
                            <br>
                            <li style="border-bottom:solid 1px black;">Konfirmasi dan selesaikan transfer</li>
                            <br>
                            <li style="border-bottom:solid 1px black;">Upload foto resi bukti transfer telah dilakukan
                            </li>
                            <br>
                        </ol>
                        <div class="form-group " style="border: 1px solid black; border-radius:15px;">
                            <label for="file-input"> <span class="iconify" data-icon="ant-design:cloud-upload-outlined"
                                    data-width="100" data-height="100"></span></label>
                            <input id="file-input" type="file" style="display:none;">
                            <h6>Bukti resi berupa file gambar dengan ekstensi .jpg, .jpeg, atau .png</h6>
                            <a href="#" class="btn btn-primary mb-4">Upload Gambar</a>
                        </div>
                    </center>
                </div>
            </div>
            <br>
            <div class="d-flex justify-content-center">
                <div class="col-10" style="border-radius:10px; border: 1px solid #000; height: 380px; ">
                    <div class="row mt-3">
                        <p class="col-3 ml-4 " style="border-right:1px solid black ; "><b>Invoice :
                                INV/001/052022 </b> </p>

                        <p class="col-3"><b> Rabu, 25 Mei 2022 </b></p>
                    </div>
                    <div class=" mb-3" style="width: 100%; height:1px; background-color: #000000; "></div>
                    <div class="row ml-5">
                        <h6 class="col-3">Peternakan Udin</h6>
                    </div>
                    <div class="row gutters-sm mt-4 ml-1">
                        <div class=" col-md-2 mr-5">
                            <a href="btn" data-bs-toggle="modal" data-bs-target="#exampleModalinti">
                                <img class="rounded" src="../img/1.jpg" width="160px" height="180px">
                            </a>
                            <div class="modal fade mt-5" id="exampleModalinti" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <img src="../img/1.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-3  ml-3" style="font-size:12px;">
                            <div class="row">
                                <table>
                                    <thead>
                                        <tr>
                                            <th colspan="4">
                                                <h6> Domba Suffolk </h6>
                                            </th>
                                            <th scope="col"></th>
                                            <th scope="col"></th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">ID</th>
                                            <td></td>
                                            <td>:</td>
                                            <td>DS123</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Berat</th>
                                            <td></td>
                                            <td>:</td>
                                            <td>23Kg</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Umur</th>
                                            <td></td>
                                            <td>:</td>
                                            <td>3 Bulan (21/02/2022)</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Jenis Kelamin</th>
                                            <td></td>
                                            <td>:</td>
                                            <td>Jantan </td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>

                        </div>
                        <div class="row col-4">
                            <div class="col-12">
                                <h5>Data
                                    Peternakan</h5>
                                <a href="#">Peternakan
                                    Udin</a>
                                <p class="">
                                    Soreang, Bandung
                                </p>
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
                                <br>
                                <a href="#(link menju peternak)">Lihat
                                    Peternakan</a>
                            </div>
                        </div>
                        <div class="col-2 " style="padding:0;">
                            <center>
                                <h6><b> Harga</b></h6>
                                <h6><a href="#">Rp1.450.000,00</a>
                                </h6>
                            </center>
                        </div>

                    </div>
                </div>
            </div>
            <br>
            <div class="d-flex justify-content-center">
                <div class="col-10" style="border-radius:10px; border: 1px solid #000; height: 380px; ">
                    <div class="row mt-3">
                        <p class="col-3 ml-4 " style="border-right:1px solid black ; "><b>Invoice :
                                INV/001/052022 </b> </p>

                        <p class="col-3"><b> Rabu, 25 Mei 2022 </b></p>
                    </div>
                    <div class=" mb-3" style="width: 100%; height:1px; background-color: #000000; "></div>
                    <div class="row ml-5">
                        <h6 class="col-3">Peternakan Udin</h6>
                    </div>
                    <div class="row gutters-sm mt-4 ml-1">
                        <div class=" col-md-2 mr-5">
                            <a href="btn" data-bs-toggle="modal" data-bs-target="#exampleModalinti">
                                <img class="rounded" src="../img/1.jpg" width="160px" height="180px">
                            </a>
                            <div class="modal fade mt-5" id="exampleModalinti" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <img src="../img/1.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-3 ml-3  " style="font-size:12px;">
                            <div class="row">
                                <table>
                                    <thead>
                                        <tr>
                                            <th colspan="4">
                                                <h6> Domba Suffolk </h6>
                                            </th>
                                            <th scope="col"></th>
                                            <th scope="col"></th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">ID</th>
                                            <td></td>
                                            <td>:</td>
                                            <td>DS123</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Berat</th>
                                            <td></td>
                                            <td>:</td>
                                            <td>23Kg</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Umur</th>
                                            <td></td>
                                            <td>:</td>
                                            <td>3 Bulan (21/02/2022)</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Jenis Kelamin</th>
                                            <td></td>
                                            <td>:</td>
                                            <td>Jantan </td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>

                        </div>
                        <div class="row col-4">
                            <div class="col-12">
                                <h5>Data
                                    Peternakan</h5>
                                <a href="#">Peternakan
                                    Udin</a>
                                <p class="">
                                    Soreang, Bandung
                                </p>
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
                                <br>
                                <a href="#(link menju peternak)">Lihat
                                    Peternakan</a>
                            </div>
                        </div>
                        <div class="col-2 " style="padding:0;">
                            <center>
                                <h6><b> Harga</b></h6>
                                <h6><a href="#">Rp1.450.000,00</a>
                                </h6>
                            </center>
                        </div>

                    </div>
                </div>
            </div>
            <br>

            <div class="dotted  col-12"></div>
            <div class="d-flex justify-content-end ">
                <div class="row col-6  mt-4 mr-4" style="height: 50px;">
                    <h5 class="col-4">Subtotal</h5>
                    <h5 class="col-2">:</h5>
                    <a class="col-5" href="#">
                        <h5>Rp2.900.000,00</h5>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection