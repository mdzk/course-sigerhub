@extends('layouts.auth')

@section('title', 'Lupa Password')

@push('styles')
<link rel="stylesheet" href="{{ url('') }}/assets/extensions/sweetalert2/sweetalert2.min.css"/>    
@endpush

@push('scripts')
<script src="{{ url('') }}/assets/extensions/sweetalert2/sweetalert2.min.js"></script>
    @if (session('status'))
    <script>
        Swal.fire("Berhasil!", {{ session('status') }}, "success")
    </script>
    @endif
@endpush

@section('content')
<div class="row h-100">
    <div class="col-lg-5 col-12">
        <div id="auth-left">
            <div class="auth-logo">
                <a href="{{ url('') }}"><img src="{{ url('') }}/assets/static/images/logo/logo.png" alt="Logo"></a>
            </div>
            <h1 class="auth-title">Lupa Password</h1>
            <p class="mb-5">Masukkan alamat email terdaftar untuk dapat merubah password</p>
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <h6>Email :</h6>
                <div class="form-group position-relative has-icon-right mb-5">
                    <input id="email" type="email" placeholder="adelinepalmers@gmail.com" class="form-control form-control-xl @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    <div class="form-control-icon">
                        <i class="icon-airpod"></i>
                    </div>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
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
