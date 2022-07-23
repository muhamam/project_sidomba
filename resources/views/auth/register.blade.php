@extends('layouts.auth')

@section('content')

<div class="container">
    <div class="row justify-content-center">
            <div class="card">

                <div class="card-body">
                    <div class="row justify-content-center mt-4 mb-4">
                        <div class="col-md-4">
                                <center><img src="{{asset('/img/logodomba.png')}}" alt="" ></center>
                                <h4 class="text-center fw-bold">Si Domba</h4>
                        </div>
                        <div class="col-md-5" style="border-left:3px solid black ; ">
                            <div class="d-flex align-items-center justify-content-center mb-3">
                                <h3 class="fw-bold">Register</h3>
                            </div>

                            <form method="POST" action="{{ route('register') }}">
                                @csrf
        
                                <div class="mb-3">
                                    <label for="fullname" class="form-label">{{ __('Nama Lengkap') }}</label>
                                    <input id="fullname" type="text" class="form-control @error('fullname') is-invalid @enderror" name="fullname" value="{{ old('fullname') }}" required autocomplete="fullname" autofocus>
                                    @error('fullname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
        
                                <div class="mb-3">
                                    <label for="email" class="form-label">{{ __('Email') }}</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
        
                                <div class="mb-3">
                                    <label for="password" class="form-label">{{ __('Password') }}</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
        
                                <div class="mb-3">
                                    <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
        
                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                </div>
                                <a class="btn btn-danger btn-lg" href="{{ url('login/google') }}" role="button">Register Via Google</a>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>  

@endsection
