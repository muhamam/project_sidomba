@extends('layouts.auth')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="card bg-light" style="border-radius: 25px;">

            <div class="card-body">
                <div class="row justify-content-center mt-4 mb-4">
                    <div class="col-6">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{asset('/img/1.jpg')}}" class="d-block w-100"
                                        style="border-radius: 25px;">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('/img/2.jpg')}}" class="d-block w-100"
                                        style="border-radius: 25px;">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('/img/3.jpg')}}" class="d-block w-100"
                                        style="border-radius: 25px;">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-target="#carouselExampleControls"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-6" style="border-left:3px solid black ; ">
                        <div class="d-flex align-items-center justify-content-center mb-3">
                            <h3 class="fw-bold">Login</h3>
                        </div>

                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            @if (session()->has('error'))
                            <div class="alert alert-danger mb-3 text-center">
                                {{ session()->get('error') }}
                            </div>
                            @endif
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                    aria-describedby="emailHelp" name="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    id="password" name="password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-12">
                                    <center>
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Login') }}
                                        </button>
                                    </center>
                                    <br>
                                    <center>
                                        @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Lupa Password? Klik di Sini!!!') }}
                                        </a>
                                        @endif
                                    </center>
                                </div>
                            </div>
                            <br>
                            <center>
                                <h4>- Login Menggunakan -</h4>
                            </center>
                            <br>
                            <div class="row d-flex justify-content-around">
                                <a class="btn btn-dark bg-light col-4" style="color: black;"
                                    href="{{ url('login/google') }}" role="button">
                                    Google</a>
                                <a class="btn btn-dark bg-light col-4" style="color: black;"
                                    href="{{ url('login/google') }}" role="button">
                                    Facebook</a>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>
@endsection