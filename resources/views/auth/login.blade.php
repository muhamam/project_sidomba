@extends('layouts.auth')

@section('content')



<div class="body-login2 col-6 rounded  ">
    <br>
    <a href="#" class="ml-3">
        Belum Punya Akun?
    </a>
    <a href="{{ route('register') }}">
        <button class="btn btn-outline-dark">{{ __('Register') }}</button>
    </a>
    <center>

        <div class="">
            <img src="../img/domba.png" alt="" style="width: 77px; height: 77px;">

            <h3 class="" style="color:black">CARIBI </h3>
        </div>

        <h6 style="color:black"><b>Beli, Jual, dan Investasi Domba Online se-Indonesia</b></h6>
        <div class="box-1">
            <h2>
                <a style="color: Black;">Login</a>
            </h2>
        </div>
    </center>
    <div class=" box-2 d-flex flex-column ">
        <div class="mt-3">
            <div class="semua-login d-flex flex-column p-5">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    @if (session()->has('error'))
                    <div class="alert alert-danger text-center">
                        {{ session()->get('error') }}
                    </div>
                    @endif

                    <div class="mb-2">
                        <h6 style="color:black">Email</h6>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                            aria-describedby="emailHelp" name="email" placeholder="Email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="mb-2">
                        <h6 style="color:black">Password</h6>
                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                            id="password" name="password" placeholder="Password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>


                    <div class="mb-2">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                        @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Lupa Password? Klik di Sini') }}
                        </a>
                        @endif
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-link" data-toggle="modal" data-target="#exampleModal">
                            Lupa Password? Klik di Sini
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <br>
                    <div>
                        <div class="col-md-12 offset-md-4 ">
                            <button type="submit" class="btn btn-primary tombol-login ">
                                {{ __('Login') }}
                            </button>
                        </div>
                    </div>
                    <center>
                        <div class="d-flex col-12 ml-5 mt-5">
                            <div class="garis-login mt-3"></div>
                            <h4 class="ml-5">Atau</h4>
                            <div class="garis-login mt-3 ml-5"></div>
                        </div>
                    </center>
            </div>
            <center>
                <a href="{{ url('login/google') }}" class="mr-5">
                    <table class="border col-md-5">
                        <tr>
                            <td>
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100"
                                    viewBox="0 0 48 48" style=" fill:#000000;">
                                    <path fill="#FFC107"
                                        d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z">
                                    </path>
                                    <path fill="#FF3D00"
                                        d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z">
                                    </path>
                                    <path fill="#4CAF50"
                                        d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z">
                                    </path>
                                    <path fill="#1976D2"
                                        d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z">
                                    </path>
                                </svg>
                            </td>
                            <td>
                                <h5 class="mt-2" style="color:black">Masuk dengan Google</h5>
                            </td>
                        </tr>
                    </table>
                </a>
            </center>
        </div>

    </div>
</div>


@endsection