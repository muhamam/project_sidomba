@extends('layouts.user')

@section('content')

    <div class="row ml-4 mt-5">

        <div class="col-sm-3  ml-4 bg-light mr-2 rounded border " >
                <center>
                    <table>
                        <tr>
                            <td> <span><img src="../img/about-us.jpg" alt="" style="width: 85px; height:85px; border-radius:100%;"
                                        class="  ">
                                </span>
                            </td>
                            <td>
                                <ul>
                                    <a href="#" class="" style="color:#000000 ;">Muhammad
                                        anas
                                    </a>
                                </ul>
                                
                                <ul>
                                    <a href="#" class="" style="font-size:9px;color:#000000 ;">muhammadanasaiman0@gmail.com</a>
                                </ul>
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
                    <div class="mt-4    ">
                        <table>
                            <tr>
                                <td> <iconify-icon icon="bx:home-alt" width="25" height="25"></iconify-icon></td>
                                <td><a href="dashboard_investor.html" class="dropdown-item ">Beranda</a></td>
                            </tr>
                            <tr>
                                <td><span class="iconify mt-3" data-icon="bi:chat-text" data-width="25" data-height="25"></span></td>
                                <td> <a href="pasar.html" class="dropdown-item mt-3">Chat</a></td>
                            </tr>
                            <tr>
                                <td><span class="iconify mt-3" data-icon="carbon:star-review" data-width="25" data-height="25"></span></td>
                                <td><a href="investasi_saya_semua.html" class="dropdown-item mt-3">Ternak</a></td>
                            </tr>
                            <tr>
                                <td><span class="iconify mt-3" data-icon="carbon:warning" data-width="25" data-height="25"></span></td>
                                <td><a href="investasi_riwayat.html" class="dropdown-item mt-3">Pesanan</a></td>
                            </tr>
                        </table>
                    </div>

                </center>
        </div>
        <div class="col-7 bg-light  ml-4 rounded ">
            <!-- Banner Starts Here -->
            <center>
            <div class=" banner .container-sm col-11 rounded " style="margin-top:30px ; ">
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
            <div class="col-11 row ">

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