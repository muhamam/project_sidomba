@extends('layouts.user')

@section('content')
<div class="row  d-flex">
    <div class="col " style="margin-left: 30px; margin-top:180px; width: 300px;">
        <div class=" bg-light ">
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

                            <a href="#" style="color:#000000 ;">ID Investor : X001</a>
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
                    <span class="iconify" data-icon="ic:baseline-account-box" data-width="25" data-height="25"
                        style="margin-right: 130px; margin-bottom: -60px;"></span>
                    <a href="dashboard_investor.html" class="dropdown-item ">Akun</a>
                    <span class="iconify" data-icon="bi:chat-text" data-width="25" data-height="25"
                        style="margin-right: 130px; margin-bottom: -60px;"></span>
                    <a href="pasar.html" class="dropdown-item ">Chat</a>
                    <span class="iconify" data-icon="carbon:star-review" data-width="25" data-height="25"
                        style="margin-right: 130px; margin-bottom: -60px;"></span>
                    <a href="investasi_saya_semua.html" class="dropdown-item">Ulasan</a>
                    <span class="iconify" data-icon="carbon:warning" data-width="25" data-height="25"
                        style="margin-right: 130px; margin-bottom: -60px;"></span>
                    <a href="investasi_riwayat.html" class="dropdown-item">Komplain</a>
                    <span class="iconify" data-icon="bi:list-stars" data-width="25" data-height="25"
                        style="margin-right: 130px; margin-bottom: -60px;"></span>
                    <a href="#" class="dropdown-item ml-3">Wishlist</a>
                    <span class="iconify" data-icon="carbon:money" data-width="25" data-height="25"
                        style="margin-right: 130px; margin-bottom: -60px;"></span>
                    <a href="#" class="dropdown-item ml-3 ">Transaksi</a>
                </div>

            </center>
        </div>

    </div>



    <section class="ftco-section col">
        <div class="tengah d-flex d-flex justify-content-center " style="margin-bottom: 20px; margin-top:-50px;">

            <img src="../img/domba.png" alt="" style="width: 77px; height: 77px;">

            <div class="garis"
                style="width: 4px; height: 85px; background-color: black; margin-left: 5px; margin-right: 5px;">
                <p></p>
            </div>


            <h3 class="" style="margin-top: 10px; margin-left: 10px; height: 10px;">SI-DOMBA</h3>
            <h4 class="" style="margin-top: 40px; margin-left: -120px;">Investasi</h4>



        </div>
        <div class="container " style="background-color: white; width: 994px;">


            <div class="d-flex flex-row   ml-3 mb-3 mt-3">
                <a class="mt-3" href="investasi_riwayat.html" style="color: #000;">
                    <h5>Biodata</h5>
                </a>
                <a class="ml-5 mt-3" href="investasi_negosiasi.html" style="color: #000;">
                    <h5> Ubah Password</h5>
                </a>
                <a class="ml-5 mt-3" href="investasi_negosiasi.html" style="color: #000;">
                    <h5> Alamat</h5>
                </a>
            </div>
            <div class="kabeh rounded-lg" style=" height: 380px; ">

                <div class=" mb-3" style="width: 100%; height:1px; background-color: #3A8BCD; "></div>

                <div class="row">
                    <div class=" col-md-2 ">
                        <a href="btn" data-bs-toggle="modal" data-bs-target="#exampleModalinti">
                            <img class="rounded" src="../img/1.jpg" width="200px" height="250px">
                        </a>
                        <div class="modal fade mt-5" id="exampleModalinti" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <img src="../img/1.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class=" mt-3 ml-4">
                            <a href="#" class="btn btn-primary ">Edit foto Profile</a>
                            <p style="font-size: 11px;">(Ukuran foto maksimum adalah 10 MB. Jenis file yang
                                diperbolehkan yaitu .JPG, .JPEG, dan
                                .PNG)</p>
                        </div>
                    </div>
                    <div class=" col gutters-sm mt-4 ">
                        <div class="  " style="margin-left: 65px;">
                            <div class="row">
                                <table>
                                    <thead>
                                        <tr>
                                            <td colspan="">
                                                <b>Profil</b> <a href="#">(Edit Profil)</a>
                                            </td>
                                            <th scope="col"></th>
                                            <th scope="col"></th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td scope="row">Nama</td>
                                            <td></td>
                                            <td>:</td>
                                            <td>Raihan Azhar Lapandu Tampan</td>
                                        </tr>
                                        <tr>
                                            <td scope="row">Tanggal Lahir</td>
                                            <td></td>
                                            <td>:</td>
                                            <td>25 Mei 2001</td>
                                        </tr>
                                        <tr>
                                            <td scope="row">Jenis Kelamin</td>
                                            <td></td>
                                            <td>:</td>
                                            <td>Pria</td>
                                        </tr>
                                        <tr>
                                            <td scope="row">Jenis Kelamin</td>
                                            <td></td>
                                            <td>:</td>
                                            <td>Jantan </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class=" mb-3 ml-5" style="width: 90%; height:1px; background-color: #3A8BCD; "></div>
                        <div class=" " style="margin-left: 55px;">
                            <table>
                                <thead>
                                    <tr>
                                        <tD scope="col"> <b>Kontak</b> <a href="#">(Edit Kontak)</a></tD>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row">Email</td>
                                        <td></td>
                                        <td>:</td>
                                        <td>raihanazhar05@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">No. Telepon</td>
                                        <td></td>
                                        <td>:</td>
                                        <td>081244181648</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

            </div>
            <br>

        </div>
</div>
</section>


</div>



</div>

@endsection