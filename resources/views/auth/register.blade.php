@extends('layouts.auth')

@section('content')

<div class="container">
    <center>
        <h6><b>SILAHKAN LOGIN JIKA SUDAH MEMPUNYAI AKUN</b></h6>
    </center>
    <div class="body d-md-flex align-items-center justify-content-between">

        <div class="box-1">

            <div class="text-center" style="margin-top: 8rem;">
                <br><br>
                <a style="color: white; font-size:25px;"><b> Whatss app, Bro...</b></a>
                <br>
                <b><small style=" color: white;">Udah punya akun ? yuk ahh langsung aja masuk</small></b>
                <br>
                <br>
                <a href="{{ route('login') }}"><button class="btn btn-outline-light">
                        {{ __('Sign in') }}
                    </button></a>
                <br><br>
            </div>
        </div>
        <div class=" box-2 d-flex flex-column h-100">
            <div class="mt-3">
                <p class="text-center h-1">Create Account</p>
                <div class="d-flex flex-column ">
                    <div class="d-flex align-items-center">
                        <a href="#" class="box me-2 selectio">
                            <svg width="32px" height="32px" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M32 16c0-8.839-7.167-16-16-16-8.839 0-16 7.161-16 16 0 7.984 5.849 14.604 13.5 15.803v-11.177h-4.063v-4.625h4.063v-3.527c0-4.009 2.385-6.223 6.041-6.223 1.751 0 3.584 0.312 3.584 0.312v3.937h-2.021c-1.984 0-2.604 1.235-2.604 2.5v3h4.437l-0.713 4.625h-3.724v11.177c7.645-1.199 13.5-7.819 13.5-15.803z" />
                            </svg>
                            <title>Facebook Icon</title>
                        </a>
                        <a href="{{ url('login/google') }}" class="box me-2">
                            <svg width="32px" height="32px" viewBox="0 0 24 24" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>Google Icon</title>
                                <g id="brand" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="google" fill="#000000" fill-rule="nonzero">
                                        <path
                                            d="M11.99,13.9 L11.99,10.18 L21.35,10.18 C21.49,10.81 21.6,11.4 21.6,12.23 C21.6,17.94 17.77,22 12,22 C6.48,22 2,17.52 2,12 C2,6.48 6.48,2 12,2 C14.7,2 16.96,2.99 18.69,4.61 L15.85,7.37 C15.13,6.69 13.87,5.89 12,5.89 C8.69,5.89 5.99,8.64 5.99,12.01 C5.99,15.38 8.69,18.13 12,18.13 C15.83,18.13 17.24,15.48 17.5,13.91 L11.99,13.91 L11.99,13.9 Z"
                                            id="Shape"></path>
                                    </g>
                                </g>
                            </svg>

                        </a>
                        <a href="#" class="box">
                            <svg width="32px" height="32px" viewBox="0 0 24 24" role="img"
                                xmlns="http://www.w3.org/2000/svg">
                                <title>LinkedIn icon</title>
                                <path
                                    d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                            </svg>

                        </a>
                    </div>
                    <div class="text-center">
                        <b><small> or use your account</small></b>
                    </div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="mb-2">
                            <input id="fullname" type="text"
                                class="form-control @error('fullname') is-invalid @enderror" name="fullname"
                                value="{{ old('fullname') }}" required autocomplete="fullname" placeholder="Name"
                                autofocus>
                            @error('fullname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="mb-2">

                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email"
                                placeholder="Email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>


                        <div class="mb-2">
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="new-password" placeholder="Password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                </div>
            </div>

            <div class="mb-2">

                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                    autocomplete="new-password" placeholder="Confirm Password">
            </div><br>
            <div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Daftar') }}
                    </button>
                </div>
            </div>

        </div>
    </div>
</div>
<span class="fas fa-times"></span>
</div>
</div>

@endsection