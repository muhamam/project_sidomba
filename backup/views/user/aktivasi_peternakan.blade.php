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
        <h4 class="" style="margin-top: 40px; margin-left: -125px;">Peternakan</h4>
    </div>

    <!-- Banner Starts Here -->
    <div class="col-md-10 rounded mx-auto p-5"
        style="background-image: url({{asset('img/banner-bg.jpg')}});background-size: cover;background-repeat:no-repeat;">
        <div class="text-white text-center" style="background:rgba(0,0,0, 0.7);">
            <h2>SIAP MERAIH KEUNTUNGAN DENGAN BETERNAK DOMBA?</h2>
            <p style="color: white;">Ayo buka peternakanmu sendiri dan raih keuntungan dengan menjual dan
                menginvestasikan dombamu di SI-Domba! Cukup dengan registrasi KTP dan memasukkan data peternakanmu, lalu
                kami akan memverifikasi data yang Anda masukkan, dan akun peternakanmu siap digunakan!.</p>
        </div>
    </div>
    <!-- Banner Ends Here -->
    <div class="col-12 d-flex justify-content-center"></div>
    <div class="col-10" style="margin-left: 250px;">
        <br>
        <h2 style="margin-left: 100px;">Aktivasi Akun Peternak</h2>
        <br>
        <div class="form-group col-8">
            <label for="formGroupExampleInput">
                <h6>NIK (Nomor Induk Kependudukan)</h6>
            </label>
            <input type="text" class="form-control" id="formGroupExampleInput"
                placeholder="NIK sesuai yang tertera pada KTP Anda">
        </div>
        <form>
            <div class="form-group col-8">
                <label for="exampleFormControlFile1">
                    <h5>Upload Foto KTP</h5>
                </label>
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
        <div class="form-group col-8">
            <label for="formGroupExampleInput">
                <h5>Nama Peternakan</h5>
            </label>
            <input type="text" class="form-control" id="formGroupExampleInput"
                placeholder="Ketikkan nama peternakan Anda disini">
        </div>
        <div class="form-group  col-8">
            <label for="exampleFormControlTextarea1">
                <h5>Deskripsi Peternakan</h5>
            </label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                placeholder=" Dekripsikan peternakan Anda secara singkat"></textarea>
        </div>
        <h5>Nomor Telepon Peternakan</h5>
        <div class="input-group mb-3  col-8">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">+62</span>
            </div>
            <input type="text" class="form-control" aria-label="Sizing example input"
                aria-describedby="inputGroup-sizing-default" placeholder=" Samakan dengan nomor telepon saya">
        </div>
        <form>
            <div class="form-group  col-8">
                <label for="exampleFormControlFile1">
                    <h5> Upload Foto Profil Peternakan</h5>
                </label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>
        </form>
        <br>
        <form>
            <div class="form-group  col-8">
                <label for="exampleFormControlFile1">
                    <h4> Foto Laman Peternakan</h4>
                </label>
                <br>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>
        </form>
        <div class="form-group  col-8">
            <label for="exampleFormControlTextarea1">
                <h5>Alamat Peternakan</h5>
            </label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                placeholder=" Tulis Alamat Peternakan mu"></textarea>
        </div>
        <div class="form-group col-8">
            <label for="exampleFormControlSelect1">Provinsi</label>
            <select class="form-control" id="exampleFormControlSelect1">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>
        <div class="form-group col-8">
            <label for="exampleFormControlSelect1">Kota / Kabupaten</label>
            <select class="form-control" id="exampleFormControlSelect1">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>
        <div class="form-group col-8">
            <label for="exampleFormControlSelect1">Kecamatan</label>
            <select class="form-control" id="exampleFormControlSelect1">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>
        <div class="form-group col-8">
            <label for="exampleFormControlSelect1">Kelurahan</label>
            <select class="form-control" id="exampleFormControlSelect1">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>
        <div class="form-group col-8">
            <label for="exampleFormControlSelect1">Kode Pos</label>
            <select class="form-control" id="exampleFormControlSelect1">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>

        <a href="#" class="btn btn-primary">Verifikasi</a>
    </div>

</div>


@endsection