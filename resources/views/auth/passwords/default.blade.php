@extends('layouts.auth')

@section('title', 'Ganti Password Default')

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
            <h1 class="auth-title">Ganti Password Default</h1>
            <p class="mb-5">Silahkan ganti password default anda dengan password baru</p>
            <form method="POST" action="{{ route('password-update') }}">
                @csrf
                <h6>Password Baru :</h6>
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
                <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg">Ganti Password</button>
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
