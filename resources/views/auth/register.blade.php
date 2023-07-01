@extends('layouts.auth')

@section('content')
<div class="row h-100">
    <div class="col-lg-5 col-12">
        <div id="auth-left">
            <div class="auth-logo">
                <a href="index.html"><img src="{{ url('') }}/assets/static/images/logo/logo.png" alt="Logo"></a>
            </div>
            <h1 class="auth-title">Register</h1>
            <p class="mb-5">Dapatkan pengetahuan dan wawasan bisnis terkini.</p>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <h6>Nama :</h6>
                <div class="form-group position-relative has-icon-right mb-5">
                    <input id="name" placeholder="adeline palmerston" type="text" class="form-control form-control-xl @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    <div class="form-control-icon">
                        <i class="icon-user"></i>
                    </div>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <h6>Nama Usaha :</h6>
                <div class="form-group position-relative has-icon-right mb-5">
                    <input id="nama_usaha" type="text" placeholder="Startup Perikanan" class="form-control form-control-xl @error('nama_usaha') is-invalid @enderror" name="nama_usaha" value="{{ old('nama_usaha') }}" required autocomplete="nama_usaha" autofocus>
                    <div class="form-control-icon">
                        <i class="icon-archive"></i>
                    </div>
                    @error('nama_usaha')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <h6>Bidang Usaha :</h6>
                <div class="form-group position-relative has-icon-right mb-5">
                    <input id="bidang_usaha" type="text" placeholder="Peternakan" class="form-control form-control-xl @error('bidang_usaha') is-invalid @enderror" name="bidang_usaha" value="{{ old('bidang_usaha') }}" required autocomplete="bidang_usaha" autofocus>
                    <div class="form-control-icon">
                        <i class="icon-archive-2"></i>
                    </div>

                    @error('bidang_usaha')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <h6>Email :</h6>
                <div class="form-group position-relative has-icon-right mb-5">
                    <input id="email" type="email" placeholder="adelinepalmers@gmail.com" class="form-control form-control-xl @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    <div class="form-control-icon">
                        <i class="icon-airpod"></i>
                    </div>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <h6>Nomor WhatsApp :</h6>
                <div class="form-group position-relative has-icon-right mb-5">
                    <input id="nohp" placeholder="085623541234" type="number" class="form-control form-control-xl @error('nohp') is-invalid @enderror" name="nohp" value="{{ old('nohp') }}" required autocomplete="nohp" autofocus>
                    <div class="form-control-icon">
                        <i class="icon-call-outgoing"></i>
                    </div>
                    @error('nohp')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg">Register</button>
            </form>
            <div class="mt-5 text-lg">
                <p class='text-gray-600'>Apakah anda sudah memiliki akun? <a href="{{ route('login') }}"
                        class="font-bold text-warning text-decoration-underline">Login Sekarang</a></p>
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
