@extends('layouts.user')

@section('content')
<div class="row  d-flex" style="margin-top: 100px;">
    @include('layouts.sidebarUser')

    <section class="ftco-section col mt-5">
        <div class="tengah d-flex d-flex justify-content-center " style="margin-bottom: 20px; margin-top:-50px;">
            <img src="../img/domba.png" alt="" style="width: 77px; height: 77px;">
            <div class="garis"
                style="width: 4px; height: 85px; background-color: black; margin-left: 5px; margin-right: 5px;">
                <p></p>
            </div>
            <h3 class="" style="margin-top: 10px; margin-left: 10px; height: 10px;">SI-DOMBA</h3>
            <h4 class="" style="margin-top: 40px; margin-left: -120px;">Investasi</h4>



        </div>
        <div class="container " style="background-color: white; border-radius:15px;">


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
            <div class="kabeh rounded-lg" style=" height: 380px; ">
                <center>
                    <!-- sesudah di ubah profil-->
                    <div class="col-4 rounded p-2" style="background-color:#44F060 ;">
                        <span class="iconify" data-icon="akar-icons:check" data-width="30" data-height="30"></span>
                        <h6>Anda Berhasil Mengubah Profil. </h6>
                    </div>

                    <h4>Edit Profil</h4>

                    <div class="mb-3 col-6">
                        <label class="form-label" style="margin-right: 300px;"><b> Nama Lengkap</b></label>
                        <input type="text" id="berat" class="form-control" placeholder="Ketikkan nama anda di sini">

                    </div>

                    <div class="mb-3 col-6">
                        <label class="form-label" style="margin-right: 300px;"><b>Tanggal Lahir </b> </label>
                        <input type="text" name="tanggal" class="form-control datepicker"
                            placeholder="Ketikkan Tanggal Lahir anda disini">

                    </div>
                    <h6 style="margin-right: 300px;">Jenis Kelamin</h6>
                    <form class="col-12">
                        <select name="cars" id="cars" class="col-6">
                            <option value="volvo">laki-laki</option>
                            <option value="saab">Perempuan</option>
                        </select>
                    </form>

                    <center>
                        <button type="submit" class="btn btn-primary mt-2">Update Profil</button>
                    </center>
                </center>
            </div>
            <br>

        </div>
    </section>
</div>




@endsection