@extends('layouts.auth')

@push('styles')
<link rel="stylesheet" href="{{ url('') }}/assets/extensions/sweetalert2/sweetalert2.min.css"/>    
@endpush

@push('scripts')
<script src="{{ url('') }}/assets/extensions/sweetalert2/sweetalert2.min.js"></script>
    @if (session('berhasil'))
    <script>
        Swal.fire("Berhasil!", "Berhasil melakukan pendaftaran, anda akan mendapat konfirmasi jika lulus seleksi data usaha melalui via email, Terimakasih !", "success")
    </script>
    @endif
@endpush

@section('content')
<div class="row h-100">
    <div class="col-lg-5 col-12">
        <div id="auth-left">
            <div class="auth-logo">
                <a href="index.html"><img src="{{ url('') }}/assets/static/images/logo/logo.png" alt="Logo"></a>
            </div>
            <h1 class="auth-title">Login</h1>
            <p class="mb-5">Segera bergabung bersama kami dan dapatkan kelas inkubasi bisnis secara gratis !</p>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <h6>Email :</h6>
                <div class="form-group position-relative has-icon-right mb-5">
                    <input placeholder="adelinepalmers@gmail.com" id="email" name="email" type="email" class="form-control form-control-xl @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    <div class="form-control-icon">
                        <i class="icon-airpod"></i>
                    </div>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <h6>Password :</h6>
                <div class="form-group position-relative has-icon-right mb-5">
                    <input placeholder="**********" id="password" name="password" type="password" class="form-control form-control-xl @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    <div class="form-control-icon">
                        <i class="icon-eye-slash"></i>
                    </div>

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg">Log in</button>
            </form>
            <div class="mt-5 text-lg">
                <p><a class="font-bold text-warning text-decoration-underline" href="{{ route('password.request') }}">Lupa
                        password anda ?</a></p>
                <hr>
                <p class="text-gray-600">Anda belum memiliki akun? <a href="{{ route('register') }}" padding-left: 3rem;
                        class="font-bold text-warning text-decoration-underline">Daftar Sekarang</a>.</p>
            </div>
        </div>
    </div>
    <div class="col-lg-7 d-none d-lg-block">
        <div id="auth-right">
            <img src="{{ url('') }}/assets/static/images/bg/auth-banner.png" alt="">
        </div>
    </div>
</div>
@endsection
