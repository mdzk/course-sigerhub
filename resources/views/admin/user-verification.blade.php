@extends('layouts.master')

@section('title', 'Dashboard')

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
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Verifikasi Akun Usaha</h4>
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
                                            <th>Aksi</th>
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
                                            <td>
                                                <button type="button" class="btn btn-info text-white">
                                                    <svg width="15" height="12" viewBox="0 0 15 12" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M13.8337 1L5.12533 10.1667L1.16699 6" stroke="white"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>

                                                    Verifikasi Usaha
                                                </button>
                                                <button type="button" class="btn btn-danger text-white">
                                                    <svg width="19" height="20" viewBox="0 0 19 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M3.95898 4.16663L15.0416 15.8325" stroke="white"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M3.95843 15.8325L15.041 4.16663" stroke="white"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>

                                                    Tolak Verifikasi
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
