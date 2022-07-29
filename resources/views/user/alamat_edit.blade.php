@extends('layouts.user')

@section('content')
<div class="row  d-flex" style="margin-top: 100px;">
    @include('layouts.sidebarUser')

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
        <div class="container " style="background-color: white; width: 994px; height:1000px;">


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
                    <h4>Tambah Alamat</h4>
                    <div class="mb-3 col-6">
                        <label class="form-label" style="margin-right: 300px;"><b> Alamat Lengkap</b></label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="mb-3 col-6">
                        <div class="dropdown ">
                            <a class="btn  dropdown-toggle col-12" style="background-color:#B8B8B8;" href="#"
                                role="button" data-toggle="dropdown" aria-expanded="false">
                                Provinsi
                            </a>

                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Laki-Laki</a>
                                <a class="dropdown-item" href="#">Perempuan</a>
                            </div>
                        </div>

                    </div>
                    <div class="mb-3 col-6">
                        <div class="dropdown ">
                            <a class="btn  dropdown-toggle col-12" style="background-color:#B8B8B8;" href="#"
                                role="button" data-toggle="dropdown" aria-expanded="false">
                                Kota / Kabupaten
                            </a>

                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Laki-Laki</a>
                                <a class="dropdown-item" href="#">Perempuan</a>
                            </div>
                        </div>

                    </div>
                    <div class="mb-3 col-6">
                        <div class="dropdown ">
                            <a class="btn  dropdown-toggle col-12" style="background-color:#B8B8B8;" href="#"
                                role="button" data-toggle="dropdown" aria-expanded="false">
                                Kecamatan
                            </a>

                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Laki-Laki</a>
                                <a class="dropdown-item" href="#">Perempuan</a>
                            </div>
                        </div>

                    </div>
                    <div class="mb-3 col-6">
                        <div class="dropdown ">
                            <a class="btn  dropdown-toggle col-12" style="background-color:#B8B8B8;" href="#"
                                role="button" data-toggle="dropdown" aria-expanded="false">
                                Kelurahan
                            </a>

                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Laki-Laki</a>
                                <a class="dropdown-item" href="#">Perempuan</a>
                            </div>
                        </div>

                    </div>
                    <div class="mb-3 col-6">
                        <div class="dropdown ">
                            <a class="btn  dropdown-toggle col-12" style="background-color:#B8B8B8;" href="#"
                                role="button" data-toggle="dropdown" aria-expanded="false">
                                Kode Pos
                            </a>

                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Laki-Laki</a>
                                <a class="dropdown-item" href="#">Perempuan</a>
                            </div>
                        </div>

                    </div>
                    <h4>Cek Lokasi Mu</h4>
                    <!-- ini buat alamat nanti pake API -->
                    <div class="peta mt-4" style="width :600px; height:300px; border:1px solid black;">

                    </div>

                    <center>
                        <button type="submit" class="btn btn-primary mt-2">Update Profil</button>
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