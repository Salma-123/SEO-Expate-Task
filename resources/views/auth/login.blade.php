@extends('layouts.no-header')

@section('content')
<main class="section-login">
    <section class="section-login--logo">
        <a href="{{url('/index')}}">
            <img src="{{url('images/logo.png')}}" alt="logo" class="img-fluid" />
        </a>
    </section>

    <section class="section-login--form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-title">Sign In</div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="mt-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror u-box-shadow-1" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mt-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input id="password" type="password" class="form-control  @error('password') is-invalid @enderror u-box-shadow-1" name="password" required autocomplete="current-password" />

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mt-5">
                                    <button type="submit" class="btn btn-green">Sign In</button>
                                </div>
                            </form>
                            <div class="links">
                                <p>
                                    <a href="{{url('/signup')}}">Need an account?</a>
                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}">Forgot Password?</a>
                                    @endif
                                </p>
                            </div>
                            <div class="back-button">
                                <a href="{{url('/index')}}">
                                    <i class="bi bi-arrow-left-circle"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
