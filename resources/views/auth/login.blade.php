@extends('layouts.auth')

@section('content')

<div class="container">
    <div class="row justify-content-center">
            <div class="card">

                <div class="card-body">
                    <div class="row justify-content-center mt-4 mb-4">
                        <div class="col-md-5">
                                <center><img src="{{asset('/img/logodomba.png')}}" alt="" ></center>
                                <h4 class="text-center fw-bold">Si Domba</h4>
                        </div>
                        <div class="col-md-5" style="border-left:3px solid black ; ">
                            <div class="d-flex align-items-center justify-content-center mb-3">
                                <h3 class="fw-bold">Sign In</h3>
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
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
        
                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="row mb-0">
                                    <div class="col-md-8">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Sign In') }}
                                        </button>
        
                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                                <a class="btn btn-danger btn-lg" href="{{ url('login/google') }}" role="button">Login Via Google</a>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>    
@endsection
