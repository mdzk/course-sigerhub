@extends('layouts.master')

@push('styles')
<link rel="stylesheet" href="assets/extensions/datatables.net-bs5/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="assets/scss/pages/datatables.scss">
@livewireStyles()
@endpush

@push('scripts')
<script src="assets/extensions/jquery/jquery.min.js"></script>
<script src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
<script src="assets/static/js/pages/datatables.js"></script>
@livewireScripts()
@endpush

@section('content')
<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-12">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="card shadow-lg">
                        <div class="card-body py-4 px-4">
                            <div class="d-flex align-items-center">
                                <div class="stats-icon bg-primary mb-2">
                                    <i class="d-flex icon-user-tick"></i>
                                </div>
                                <div class="ms-3 name">
                                    <h5 class="font-bold">Pengguna Aktif</h5>
                                    <h6 class="text-muted font-extrabold mb-0">20</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="card shadow-lg">
                        <div class="card-body py-4 px-4">
                            <div class="d-flex align-items-center">
                                <div class="stats-icon bg-primary mb-2">
                                    <i class="d-flex icon-video-circle"></i>
                                </div>
                                <div class="ms-3 name">
                                    <h5 class="font-bold">Jumlah Kelas</h5>
                                    <h6 class="text-muted font-extrabold mb-0">12</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="card shadow-lg">
                        <div class="card-body py-4 px-4">
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-xl border border-4 border-primary">
                                    <img src="assets/static/images/faces/1.jpg" alt="Face 1">
                                </div>
                                <div class="ms-3 name">
                                    <h5 class="font-bold">Jonathan Patter</h5>
                                    <h6 class="text-muted mb-0">@admin</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Daftar akun usaha aktif</h4>
                        </div>
                        <div class="card-body">
                            <table class="table" name="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Nama Usaha</th>
                                        <th>Bidang Usaha</th>
                                        <th>Email</th>
                                        <th>Nomor Whatsapp</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Sugeng Riyadi</td>
                                        <td>Koperasi Maju</td>
                                        <td>Pengelolaan Ternak</td>
                                        <td>koperasimaju@gmail.com</td>
                                        <td>0894567823898</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Jumlah kelas aktif</h4>
                            <a href="#" class="btn btn-primary btn-lg text-white">
                                + Tambah kelas
                            </a>
                        </div>
                        <div class="card-body">
                            <table class="table" name="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Kelas</th>
                                        <th>Ketegori</th>
                                        <th>Deskripsi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Kelas Inkubasi</td>
                                        <td>Pengembangan bisnis</td>
                                        <td>Kelas ini dikembangkan untuk UMKM...</td>
                                        <td>
                                            <button type="button" class="btn btn-info text-white">
                                                <i class="icon-edit"></i> Edit
                                            </button>
                                            <button type="button" class="btn btn-danger text-white">
                                                <i class="icon-trash"></i> Hapus
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection