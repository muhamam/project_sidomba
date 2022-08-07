@extends('layouts.user')

@section('content')
<div class="row  d-flex">
    @include('layouts.sidebarUser')
    <section class="ftco-section col" style="margin-top: 100px; ">
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
            <div class="kabeh rounded-lg" style="height: 380px; ">
                <center>
                    <h6>Nomor Handphone</h6>
                    <div class="input-group mb-3 col-6">

                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">+62</span>
                        </div>
                        <input type="text" class="form-control" placeholder="" aria-label="Username">
                    </div>
                    <h6>Email</h6>
                    <div class="input-group mb-3 col-6">

                        <input type="email" class="form-control" placeholder="Email" value="{{Auth::user()->email}}"
                            disabled>
                    </div>

                    <center>
                        <button type="submit" class="btn btn-primary mt-2">Update Kontak</button>
                    </center>
                </center>
            </div>
            <br>
        </div>
    </section>
</div>





@endsection