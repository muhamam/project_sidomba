@extends('layouts.user')

@section('content')
<div class="row  d-flex">
    @include('layouts.sidebarUser')

    <section class="ftco-section col" style="margin-top: 100px;">

        <div class="container " style="background-color: white;height:700px; border-radius:15px;">
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
                        <h6>Alamat Utama <a href="{{route('editaddress.index')}}">(Edit Alamat)</a></h6>
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
    </section>
</div>



@endsection