@extends('layouts.no-header')

@section('content')
<main class="section-forgot-password">
    <section class="section-forgot-password--logo">
        <a href="{{url('/index')}}">
            <img src="{{url('images/logo.png')}}" alt="logo" class="img-fluid" />
        </a>
    </section>

    <section class="section-forgot-password--form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-title">Forgot Password</div>
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf
                                <div class="mt-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input id="email" type="email" class="form-control u-box-shadow-1 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="my-5">
                                    <button type="submit" class="btn btn-green">Request Password</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
