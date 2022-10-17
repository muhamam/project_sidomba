@extends('layouts.user')

@section('content')

    <div class="row">

        <div class="col ml-3 mt-4" >
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
                                <ul class="d-flex" style="list-style-type: disc; color:red; font-size:12px;">
                                    <li>
                                        <span style="color: black;">Peternakan</span>
                                    </li>
                                    <li class="ml-4">
                                        <span style="color: black;">Investasi</span>
                                    </li>
                                </ul>
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
        <div class="col-9">
            <!-- Banner Starts Here -->
            <center>
            <div class=" banner .container-sm col-10 rounded " style="margin-top:30px ; ">
                        <div class="col-md-10 p-3">
                            <center>
                                <div class="caption-peternakan rounded ">
                                    <h1 class="col-9">DAFTAR TERNAK</h1>

                                        <table class="text-center col-8 mt-3" >
                                            <tr>
                                                <td>Total Ternak</td>
                                                <td>:</td>
                                                <td>200 Ekor</td>
                                                <td class="coba">Jenis Domba</td>
                                                <td>: </td>
                                                <td>5 Jenis</td>
                                            </tr>
                                        </table>
                                        <table class="mb-4">
                                            
                                                <tr class="text-center col-9">
                                                    <td>Domba Siap Jual</td>
                                                    <td></td>
                                                    <td>:</td>
                                                    <td>121 Ekor</td>
                                                </tr>
                                        </table>
                                </div>
                            </center>
                        </div>
            </div>
            </center>
            <!-- Banner Ends Here -->
            <center>
            <div class="col-9 row ">

                        <div class="col-md-12 text-center">
                            <h3>DAFTAR DOMBA</h3>
                            <center>
                                <div class="line-dec"></div>
                            </center>
                        </div>

                        <table class="table" style=" border: 1px solid #000000;">
                            <thead style="background: #3A8BCD;">
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Jenis Domba</th>
                                    <th scope="col">Jumlah</th>
                                    <th scope="col">Terakhir di-Update</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Domba Ekor Gemuk (DEG)</td>
                                    <td>50 ekor</td>
                                    <td>22/03/2022, 10:45</td>
                                    <td>
                                        <a class="btn btn-primary" href="#">Periksa</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Domba Ekor Tipis</td>
                                    <td>30 ekor</td>
                                    <td>22/03/2022, 10:45</td>
                                    <td>
                                        <a class="btn btn-primary" href="#">Periksa</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Domba Garut</td>
                                    <td>20 ekor</td>
                                    <td>22/03/2022, 10:45</td>
                                    <td>
                                        <a class="btn btn-primary" href="#">Periksa</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"></th>
                                    <td>Total </td>
                                    <td>100 ekor</td>
                                </tr>
                            </tbody>
                        </table>
            </div>
            </center>
        </div>
                
    </div>
    @endsection