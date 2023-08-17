@extends('layouts.admin')

@section('title', 'Dashboard')

@push('styles')
    <link rel="stylesheet" href="{{ url('') }}/assets/extensions/sweetalert2/sweetalert2.min.css" />
@endpush

@push('scripts')
    <script src="{{ url('') }}/assets/extensions/sweetalert2/sweetalert2.min.js"></script>
    @if (session('message'))
        <script>
            Swal.fire(
                'Berhasil!',
                '{{ session('message') }}',
                'success'
            )
        </script>
    @endif
@endpush

@section('content')
    <div class="page-content">
        <section class="row">
            <div class="col-12 col-lg-12">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Pengaturan Admin</h4>
                            </div>
                            <div class="card-body">
                                <div class="border border-1 rounded">
                                    <div class="card p-4">
                                        <div class="card-header">
                                            <h4>Informasi General</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="d-flex align-items-center flex-wrap">
                                                <div class="rounded-circle border border-5 border-primary">
                                                    <img style="object-fit: cover;height: 250px; width: 250px"
                                                        class="rounded-circle img-fluid"
                                                        src="@if ($user->image == 'default.png') {{ url('assets/static/images/faces/1.jpg') }} @else {{ asset('storage/profile/' . $user->image) }} @endif"
                                                        alt="Face 1">
                                                </div>
                                                <div class="ms-3 name flex-fill p-5">
                                                    <div class="row mb-5">
                                                        <div class="col-md-6">
                                                            <h5 class="font-bold">Nama Pengguna :</h5>
                                                            <p class="text-muted mb-0">{{ $user->name }}</p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <h5 class="font-bold">Password :</h5>
                                                            <p class="text-muted mb-0">****************</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <h5 class="font-bold">Alamat Email :</h5>
                                                            <p class="text-muted mb-0">{{ $user->email }}</p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <h5 class="font-bold">Nomor Whatsapp :</h5>
                                                            <p class="text-muted mb-0">{{ $user->nohp }}</p>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-end mt-3">
                                    <div class="col-auto">
                                        <a href="{{ route('setting-edit') }}" class="btn btn-primary btn-lg text-white">
                                            <i class="icon-edit"></i> Edit Data
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
