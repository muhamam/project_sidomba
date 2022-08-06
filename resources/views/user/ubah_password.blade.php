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
        <div class="container " style="background-color: white; border-radius:15px; height:600px;">


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
                    <!-- sebelum di ubah pasword -->
                    <div class="col-4 rounded" style="background-color:#ED818C ;">

                        <h6> <b>PERHATIAN</b> : Anda hanya bisa mengubah password sebanyak 2 kali lagi </h6>
                    </div>
                    <!-- sesudah di ubah pasword -->
                    <div class="col-4 rounded" style="background-color:#44F060 ;">
                        <span class="iconify" data-icon="akar-icons:check" data-width="30" data-height="30"></span>
                        <h6>Password berhasil diganti. Anda bisa mengganti password sebanyak 1 kali lagi. </h6>
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


    </section>
</div>


@endsection