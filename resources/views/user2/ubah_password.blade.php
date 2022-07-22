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
            <div class=" mb-3" style="width: 100%; height:1px; background-color: #3A8BCD; "></div>
            <div class="kabeh rounded-lg" style=" height: 380px; ">
                <center>
                    <div class="col-4 rounded" style="background-color:#ED818C ;">

                        <h6> <b>PERHATIAN</b> : Anda hanya bisa mengubah password sebanyak 2 kali lagi </h6>
                    </div>


                    <div class="mb-3 col-6">
                        <label class="form-label" style="margin-right: 300px;"><b> Password Lama</b></label>
                        <input type="password" id="berat" class="form-control"
                            placeholder="Ketikkan password lama anda disini">

                    </div>

                    <div class="mb-3 col-6">
                        <label class="form-label" style="margin-right: 300px;"><b>Password Baru </b> </label>
                        <input type="password" id="berat" class="form-control"
                            placeholder="Ketikkan Password Baru anda disini">

                    </div>
                    <div class="mb-3 col-6">
                        <label for="harga" class="form-label" style="margin-right: 250px;"><b> Konfirmasi Password
                                Baru </b></label>
                        <input name="harga" type="password" id="harga" class="form-control"
                            placeholder="Ketikkan password baru anda disini">
                        <!-- @error('harga')
            <div class="text-danger">{{ $message }}</div>
            @enderror -->
                    </div>

                    <center>
                        <button type="submit" class="btn btn-primary mt-2">Ganti Password</button>
                    </center>
                </center>
            </div>
            <br>

        </div>
</div>
</section>


</div>



</div>

@endsection