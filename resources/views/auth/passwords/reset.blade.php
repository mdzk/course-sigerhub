@extends('layouts.auth')

@section('content')
    <div class="row h-100">
        <div class="col-lg-5 col-12">
            <div id="auth-left">
                <div class="auth-logo">
                    <a href="{{ url('') }}"><img src="{{ url('') }}/assets/static/images/logo/logo.png"
                            alt="Logo"></a>
                </div>
                <h1 class="auth-title">Reset Password</h1>
                <p class="mb-5">Silahkan ganti password anda dengan password baru</p>
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">

                    
                        <input hidden id="email" type="email"
                            class="form-control form-control-xl @error('email') is-invalid @enderror" name="email"
                            value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>


                    <h6>Password Baru :</h6>
                    <div class="form-group position-relative has-icon-right mb-5">
                        <input placeholder="**********" id="password" name="password" type="password"
                            class="form-control form-control-xl @error('password') is-invalid @enderror" name="password"
                            required autocomplete="new-password">

                        <div class="form-control-icon">
                            <i class="icon-eye-slash"></i>
                        </div>

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <h6>Konfirmasi Password :</h6>
                    <div class="form-group position-relative has-icon-right mb-5">
                        <input placeholder="**********" id="password-confirm" type="password" name="password_confirmation"
                            required class="form-control form-control-xl" autocomplete="new-password">

                        <div class="form-control-icon">
                            <i class="icon-eye-slash"></i>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg">Reset Password</button>
                </form>

            </div>
        </div>
        <div class="col-lg-7 d-none d-lg-block">
            <div id="auth-right">
                <img src="{{ url('') }}/assets/static/images/bg/auth-banner.png" alt="">
            </div>
        </div>
    </div>
@endsection
