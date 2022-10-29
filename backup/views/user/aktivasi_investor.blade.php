@extends('layouts.user')

@section('content')

<div class="container mt-4" style="background-color: white;">

    <div class="d-flex d-flex justify-content-center my-5">
        <img src="../img/domba.png" alt="" style="width: 77px; height: 77px;">

        <div class="garis"
            style="width: 4px; height: 85px; background-color: black; margin-left: 5px; margin-right: 5px;">
            <p></p>
        </div>


        <h3 class="" style="margin-top: 10px; margin-left: 10px; height: 10px;">CARIBI</h3>
        <h4 class="" style="margin-top: 40px; margin-left: -120px;">Investasi</h4>
    </div>

    <!-- Banner Starts Here -->
    <div class="col-md-10 rounded mx-auto p-5"
        style="background-image: url({{asset('img/banner-bg.jpg')}});background-size:cover; background-repeat:no-repeat;">
        <div class="text-white text-center" style="background:rgba(0,0,0, 0.7);">
            <h2>SELANGKAH LAGI MENJADI SEORANG INVESTOR DOMBA HANDAL!</h2>
            <p style="color: white;">Dengan SI-Domba, kami membuka peluang investasi dalam bentuk ternak domba. Hanya
                dengan
                mengisi beberapa form dibawah ini, akun investor Anda bisa langsung diverifikasi, dan bisa diaktifkan
                serta
                digunakan langsung untuk berinvestasi. Jadi tunggu apalagi, ayo aktifkan akun investormu sekarang!.</p>
        </div>
    </div>
    <!-- Banner Ends Here -->
    <center>
        <div class="col-10">
            <center>
                <h2>Aktivasi Akun Investor</h2>
            </center>
            <div class="form-group col-8">
                <label for="formGroupExampleInput">
                    <h6>NIK (Nomor Induk Kependudukan)</h6>
                </label>
                <input type="text" class="form-control" id="formGroupExampleInput"
                    placeholder="NIK sesuai yang tertera pada KTP Anda">
            </div>
            <form>
                <div class="form-group col-8">
                    <label for="exampleFormControlFile1">Upload Foto KTP</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>
            </form>
            <br>
            <form>
                <div class="form-group col-8">
                    <label for="exampleFormControlFile1">
                        <h4> Upload Foto Anda memegang KTP</h4>
                    </label>
                    <h5>Pastikan Wajah dan KTP Anda Terlihat dengan Jelas</h5>
                    <br>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    <br>
                    <p>Contoh foto yang benar :</p>
                    <img src="../img/ktp2.jpeg" alt="" width="220px" height="150px">

                    <center>
                        <div class="dotted mt-5 col-md-10"></div>
                    </center>

                </div>
            </form>
        </div>
    </center>
</div>


@endsection