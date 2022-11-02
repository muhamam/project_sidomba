@extends('layouts.user')
@section('content')
<div class="col-md-11 form-pendaftaran rounded" style="background-color: #E5E5E5;">
    <div class="head-peternak d-flex d-flex justify-content-center my-5 pt-5">
        <img src="../../img/domba.png" alt="" style="width: 77px; height: 77px;">

        <h3 class="text-dark ">CARIBI</h3>
        <h4 class="">Peternakan</h4>
    </div>



    <!-- Banner Starts Here -->
    <div class="col-md-11 rounded mx-auto p-5"
        style="background-image: url({{asset('img/banner-bg.jpg')}});background-size: cover;background-repeat:no-repeat;">
        <div class="text-white text-center" style="background:rgba(0,0,0, 0.7);">
            <h2 class="text-white">SIAP MERAIH KEUNTUNGAN DENGAN BETERNAK DOMBA?</h2>
            <p style="color: white;">Ayo buka peternakanmu sendiri dan raih keuntungan dengan menjual dan
                menginvestasikan dombamu di SI-Domba! Cukup dengan registrasi KTP dan memasukkan data peternakanmu,
                lalu
                kami akan memverifikasi data yang Anda masukkan, dan akun peternakanmu siap digunakan!.</p>
        </div>
    </div>

    <!-- Banner Ends Here -->
    <div class="form-inti-peternakan col-10 mt-5 rounded">
        <br>
        <center>
            <h2>Aktivasi Akun Peternak</h2>
        </center>
        <br>
        <div class=" form-group col-12">
            <label for="formGroupExampleInput ">
                <h5 class="text-dark ">NIK (Nomor Induk Kependudukan)</h5>
            </label>
            <center>
                <input type="text" class="form-control" id="formGroupExampleInput"
                    placeholder="NIK sesuai yang tertera pada KTP Anda">
            </center>
        </div>
        <form>
            <div class="form-group col-12">
                <label for="exampleFormControlFile1">
                    <h5 class="text-dark pendek">Upload Foto KTP</h5>
                </label>
                <div class="upload border">
                    <input type="file" class="form-control-file " id="exampleFormControlFile1">
                </div>
                <br>
                <h5 class="text-dark pendek">Contoh foto yang benar :</h5>
                <center>
                    <img src="../../img/ktp1.jpeg" alt="" width="220px" height="150px">
                </center>
            </div>
        </form>
        <br>
        <form>
            <div class="form-group col-12">
                <label for="exampleFormControlFile1">
                    <h5 class="text-dark    "> Upload Foto Anda memegang KTP</h5>
                </label>
                <br>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                <br>
                <h5 class="text-dark pendek">Contoh foto yang benar :</h5>
                <center>
                    <img src="../../img/ktp2.jpeg" alt="" width="220px" height="150px">
                </center>
                <center>
                    <div class="dotted mt-5 col-md-10"></div>
                </center>
            </div>
        </form>
        <div class="form-group col-12">
            <label for="formGroupExampleInput">
                <h5 class="text-dark pendek">Nama Peternakan</h5>
            </label>
            <input type="text" class="form-control" id="formGroupExampleInput"
                placeholder="Ketikkan nama peternakan Anda disini">
        </div>
        <div class="form-group  col-12">
            <label for="exampleFormControlTextarea1">
                <h5 class="text-dark pendek">Deskripsi Peternakan</h5>
            </label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                placeholder=" Dekripsikan peternakan Anda secara singkat"></textarea>
        </div>
        <label for="inputGroup-sizing-default ">
            <h5 class="text-dark ml-3">Nomor Telepon Peternakan</h5>
        </label>
        <div class="input-group mb-3   col-12">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">+62</span>
            </div>
            <input type="text" class="form-control" aria-label="Sizing example input"
                aria-describedby="inputGroup-sizing-default" placeholder=" Samakan dengan nomor telepon saya">
        </div>
        <form>
            <div class="form-group  col-12">
                <label for="exampleFormControlFile1">
                    <h5 class="text-dark"> Upload Foto Profil Peternakan</h5>
                </label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                <br>
                <h5 class="text-dark pendek">Contoh foto yang benar :</h5>
                <center>
                    <img src="../../img/photo_profil.jpeg" alt="" width="220px" height="250px">
                </center>
            </div>
        </form>
        <br>
        <form>
            <div class="form-group  col-12">
                <label for="exampleFormControlFile1">
                    <h4> Foto Laman Peternakan</h4>
                </label>
                <br>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                <br>
                <h5 class="text-dark pendek">Contoh foto yang benar :</h5>
                <center>
                    <img src="../../img/photo_laman.jpeg" alt="" width="220px" height="250px">
                </center>
            </div>
        </form>
        <div class="form-group  col-12">
            <label for="exampleFormControlTextarea1">
                <h5 class="text-dark">Alamat Peternakan</h5>
            </label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                placeholder=" Tulis Alamat Peternakan mu"></textarea>
        </div>
        <div class="form-group col-12">
            <label for="exampleFormControlSelect1">Provinsi</label>
            <select class="form-control" id="exampleFormControlSelect1">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>
        <div class="form-group col-12">
            <label for="exampleFormControlSelect1">Kota / Kabupaten</label>
            <select class="form-control" id="exampleFormControlSelect1">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>
        <div class="form-group col-12">
            <label for="exampleFormControlSelect1">Kecamatan</label>
            <select class="form-control" id="exampleFormControlSelect1">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>
        <div class="form-group col-12">
            <label for="exampleFormControlSelect1">Kelurahan</label>
            <select class="form-control" id="exampleFormControlSelect1">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>
        <div class="form-group col-12">
            <label for="exampleFormControlSelect1">Kode Pos</label>
            <select class="form-control" id="exampleFormControlSelect1">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>
        <center>
            <a href="#" class="btn btn-primary mb-5">Verifikasi</a>
        </center>
    </div>

</div>


@endsection