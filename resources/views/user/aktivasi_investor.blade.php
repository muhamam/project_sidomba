@extends('layouts.user')

@section('content')

<div class="form-pendaftaran rounded pb-5" style="background-color: #E5E5E5;">

    <div class="head-peternak d-flex d-flex justify-content-center my-5 pt-5">
        <img src="../../img/domba.png" alt="" style="width: 97px; height: 97px;">
        <h3 class="text-dark">CARIBI</h3>
        <h4 class="">Investasi</h4>
    </div>
    <!-- Banner Starts Here -->
    <div class="col-md-10 rounded mx-auto p-5"
        style="background-image: url({{asset('img/banner-bg.jpg')}});background-size:cover; background-repeat:no-repeat;">
        <div class="text-white text-center" style="background:rgba(0,0,0, 0.7);">
            <h2 class="text-white">SELANGKAH LAGI MENJADI SEORANG INVESTOR DOMBA HANDAL!</h2>
            <p style="color: white;">Dengan SI-Domba, kami membuka peluang investasi dalam bentuk ternak domba. Hanya
                dengan
                mengisi beberapa form dibawah ini, akun investor Anda bisa langsung diverifikasi, dan bisa diaktifkan
                serta
                digunakan langsung untuk berinvestasi. Jadi tunggu apalagi, ayo aktifkan akun investormu sekarang!.</p>
        </div>
    </div>
    <!-- Banner Ends Here -->
    <div class="form-inti-peternakan col-10 mt-5 rounded mb-5">
        <center>
            <h2>Aktivasi Akun Investor</h2>
        </center>
        <div class="form-group col-11">
            <label for="formGroupExampleInput">
                <h5 class="text-dark ">NIK (Nomor Induk Kependudukan)</h5>
            </label>
            <input type="text" class="form-control" id="formGroupExampleInput"
                placeholder="NIK sesuai yang tertera pada KTP Anda">
        </div>
        <form>
            <div class="form-group col-11">
                <label for="exampleFormControlFile1">
                    <h5 class="text-dark ">Upload Foto KTP</h5>
                </label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>
        </form>
        <br>
        <form>
            <div class="form-group col-11">
                <label for="exampleFormControlFile1">
                    <h4> Upload Foto Anda memegang KTP</h4>
                    <h5 class="text-dark ">Pastikan Wajah dan KTP Anda Terlihat dengan Jelas</h5>
                </label>
                <br>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                <br>
                <p>Contoh foto yang benar :</p>
                <center>
                    <img src="../../img/ktp2.jpeg" alt="" width="220px" height="250px">
                </center>

            </div>
        </form>
    </div>
</div>


@endsection