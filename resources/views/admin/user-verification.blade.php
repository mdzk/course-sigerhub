@extends('layouts.admin')

@section('title', 'Dashboard')

@push('styles')
    <link rel="stylesheet" href="{{ url('') }}/assets/extensions/datatables.net-bs5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="{{ url('') }}/assets/scss/pages/datatables.scss">
    @livewireStyles()
@endpush

@push('scripts')
    <script src="{{ url('') }}/assets/extensions/jquery/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
    <script src="{{ url('') }}/assets/static/js/pages/datatables.js"></script>
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
                                        @php
                                            $i = 1;
                                        @endphp
                                        @forelse ($users as $user)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->nama_usaha }}</td>
                                                <td>{{ $user->bidang_usaha }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->nohp }}</td>
                                                <td>
                                                    <button type="button" class="btn btn-info text-white"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#hapussurat{{ $user->id }}">
                                                        <svg width="15" height="12" viewBox="0 0 15 12"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M13.8337 1L5.12533 10.1667L1.16699 6" stroke="white"
                                                                stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                        </svg>

                                                        Verifikasi Usaha
                                                    </button>

                                                    <!--Verifikasi User Modal Content -->
                                                    <div class="modal fade text-left modal-borderless"
                                                        id="hapussurat{{ $user->id }}" tabindex="-1" role="dialog"
                                                        aria-labelledby="myModalLabel1" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Peringatan</h5>
                                                                    <button type="button" class="close rounded-pill"
                                                                        data-bs-dismiss="modal" aria-label="Close">
                                                                        <i data-feather="x"></i>
                                                                    </button>
                                                                </div>


                                                                <div class="modal-body">
                                                                    <p>
                                                                        Apakah anda yakin ingin verifikasi Akun usaha
                                                                        ini?
                                                                    </p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button"
                                                                        class="btn btn-light-primary ml-1"
                                                                        data-bs-dismiss="modal">

                                                                        <span class="d-sm-block">Tidak</span>
                                                                    </button>
                                                                    <form method="POST"
                                                                        action="{{ route('verify', $user->id) }}">
                                                                        @csrf
                                                                        <button name="submit" type="submit"
                                                                            class="btn btn-primary" data-bs-dismiss="modal">
                                                                            <span class="d-sm-block">Ya</span>
                                                                        </button>
                                                                    </form>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--Verifikasi User Modal Content End-->


                                                    <button type="button" class="btn btn-danger text-white">
                                                        <svg width="19" height="20" viewBox="0 0 19 20"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                        @empty
                                            <tr>
                                                <td class="text-center" colspan="7">Data tidak tersedia</td>
                                            </tr>
                                        @endforelse
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
