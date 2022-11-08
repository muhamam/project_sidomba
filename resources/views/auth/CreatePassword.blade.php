@extends('layouts.auth')

@section('content')



<div class="body-login2 col-12  ">

    <div class="body-login3 mt-5 rounded ">
        <center>

            <div class="">
                <img src="../img/logodomba.png" alt="" style="width: 77px; height: 77px;">

                <h3 class="" style="color:black">CARIBI </h3>
            </div>
            <div class="box-1   mt-5">
                <iconify-icon icon="ic:outline-password" width="25" height="25" style="color:green"></iconify-icon>
                <h2>
                    <a style="color: Black;">Masukkan Password</a>
                </h2>
            </div>
        </center>
        <div class=" box-2 d-flex flex-column ">
            <div class="mt-1">
                <div class="semua-login d-flex flex-column p-5">

                    @csrf
                    @if (session()->has('error'))
                    <div class="alert alert-danger text-center">
                        {{ session()->get('error') }}
                    </div>
                    @endif

                    <div class="mb-2">
                        <h6 style="color:black">Password</h6>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="email"
                            aria-describedby="emailHelp" name="password" placeholder="Masukan Password Baru">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="mb-2">
                        <h6 style="color:black">Konfirmasi Password</h6>
                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                            id="password" name="password" placeholder="Konfirmasi Password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>


                </div>
                <div class="daftar ">
                    <a type="submit" class="btn btn-primary tombol-login " href="#" style="width:200px;">
                        {{ __('Masukan Password') }}
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>

</div>


@endsection