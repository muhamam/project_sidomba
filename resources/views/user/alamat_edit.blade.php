@extends('layouts.user')

@section('content')
<div class="row  d-flex">
    @include('layouts.sidebarUser')

    <section class="ftco-section col" style="margin-top: 100px;">
        <div class="container " style="background-color: white; border-radius:15px; height:950px;">


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
                    <div class="mb-3 col-9">
                        <label class="form-label" style="margin-right: 300px;"><b> Alamat Lengkap</b></label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <form class="form-horizontal" action="#" method="post">            
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Provinsi</label>
                            <div class="col-sm-6">
                                <select id="provinsi" class="form-control" name="provinsi">
                                    <option class="provinsi_option" value="-">-</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3">Kota / Kabupaten</label>
                            <div class="col-sm-6">
                                <select id="kota-or-kabupaten" class="form-control" name="kabupaten">
                                    <option class="kota_option" value="-">-</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3">Kecamatan</label>
                            <div class="col-sm-6">
                                <select id="kecamatan" class="form-control" name="kecamatan">
                                    <option class="kecamatan_option" value="-">-</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3">Kelurahan</label>
                            <div class="col-sm-6">
                                <select id="kelurahan" class="form-control" name="kelurahan">
                                    <option class="kelurahan_option" value="-">-</option>
                                </select>
                            </div>
                        </div>
                    </form>
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

    </section>
</div>

{{-- api maps --}}
<script src="{{asset('js/api_alamat_user.js')}}"></script>

@endsection