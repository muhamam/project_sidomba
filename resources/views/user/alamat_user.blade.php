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
                            <a href="#" class="  " style="color:#000000 ;">{{$user->fullname}}
                            </a>
                            <a href="#" style="font-size:9px;color:#000000 ;">{{$user->email}}</a><br>

                            <a href="#" style="color:#000000 ;">ID Investor :</a>
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
                    <a href="{{route('account.index')}}" class="dropdown-item ">Akun</a>
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



    <section class="ftco-section col" style="margin-top: 100px;">
        <div class="tengah d-flex d-flex justify-content-center " style="margin-bottom: 20px; margin-top:-50px;">

            <img src="../img/domba.png" alt="" style="width: 77px; height: 77px;">

            <div class="garis"
                style="width: 4px; height: 85px; background-color: black; margin-left: 5px; margin-right: 5px;">
                <p></p>
            </div>


            <h3 class="" style="margin-top: 10px; margin-left: 10px; height: 10px;">SI-DOMBA</h3>
            <h4 class="" style="margin-top: 40px; margin-left: -120px;">Investasi</h4>



        </div>
        <div class="container " style="background-color: white;height:770px; width: 994px;">


            <div class="d-flex flex-row   ml-3 mb-3 mt-3">
                <a class="mt-3" href="{{route('account.index')}}" style="color: #000;">
                    <h5>Biodata</h5>
                </a>
                <a class="ml-5 mt-3" href="{{route('password.index')}}" style="color: #000;">
                    <h5> Ubah Password</h5>
                </a>
                <a class="ml-5 mt-3" href="{{route('address.index')}}" style="color: #000;">
                    <h5> Alamat</h5>
                </a>
            </div>
            <div class=" mb-3" style="width: 100%; height:1px; background-color: #3A8BCD; "></div>
            <div class=" rounded-lg" style=" height: 380px; ">
                <center>
                    <br>
                    <!-- sesudah menambahkan Profil-->
                    <div class="col-4 rounded p-2 mb-3" style="background-color:#44F060 ;">
                        <span class="iconify" data-icon="akar-icons:check" data-width="30" data-height="30"></span>
                        <h6>Alamat berhasil ditambahkan! </h6>
                    </div>
                    <div class="col-7 rounded-lg" style="border:1px solid black;">
                        <h6>Alamat Utama <a href="#">(Edit Alamat)</a></h6>
                        <p>Jl. Siliwangi no. 29, Cihideung, Tugujaya, Kota Tasikmalaya, Jawa Barat, Indonesia </p>
                        <p>
                            <a href="#">
                                <span class="iconify" data-icon="akar-icons:location" data-width="20"
                                    data-height="20"></span>
                                Lihat di peta</a>
                        </p>
                    </div>
                    <br>
                    <div class="col-7 rounded-lg" style="border:1px solid black; height:125px;">
                        <h6>Alamat Lain</h6>
                        <p>(Belum ada alamat lain yang ditambahkan)</p>
                    </div>
                    <br>
                    <div class="col-7 rounded-lg" style="border:1px solid black; height:125px;">
                        <h6>Alamat Peternakan</h6>
                        <p>(Belum ada peternakan yang ditambahkan)</p>
                    </div>
                </center>

            </div>
            <br>

        </div>
</div>
</section>


</div>



</div>

@endsection