@extends('layouts.user')

@section('content')

<div class="container">
    @include('layouts.sidebarUser')

    <div class="col">
        <div class="row">
            <div class="col mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-row">
                            <a class="mt-3" href="{{route('account.index')}}" style="color: #000;">
                                <p class="marker">Biodata</p>
                            </a>
                            <a class="ml-5 mt-3" href="{{route('password.index')}}" style="color: #000;">
                                <p class="marker"> Ubah Password</p>
                            </a>
                            <a class="ml-5 mt-3" href="{{route('address.index')}}" style="color: #000;">
                                <p class="marker"> Alamat</p>
                            </a>
                        </div>
                        <center>
                            <div class="e-profile mt-1">

                                <!-- sesudah menambahkan Profil-->
                                <div class="col-4 rounded p-2 mb-3" style="background-color:#44F060 ;">
                                    <span class="iconify" data-icon="akar-icons:check" data-width="30"
                                        data-height="30"></span>

                                    <h6>Alamat berhasil ditambahkan! </h6>
                                </div>
                                <div class="col-7 rounded-lg" style="border:1px solid black;">
                                    <h6 style="color:black">Alamat Utama <a href="{{route('editaddress.index')}}">(Edit Alamat)</a></h6>
                                    <p>Jl. Siliwangi no. 29, Cihideung, Tugujaya, Kota Tasikmalaya, Jawa Barat, Indonesia
                                    </p>
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


                            </div>
                        </center>
                    </div>
                </div>

            </div>
        </div>
        </ul>

    </div>
</div>
</div>
</div>
</div>

</div>
</div>
</div>
</div>
</div>
@endsection