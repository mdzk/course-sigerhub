@extends('layouts.user')

@section('title', 'Dashboard')

@push('styles')
    <link rel="stylesheet" href="{{ url('') }}/assets/extensions/datatables.net-bs5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="{{ url('') }}/assets/scss/pages/datatables.scss">
@endpush

@push('scripts')
    <script src="{{ url('') }}/assets/extensions/jquery/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
    <script src="{{ url('') }}/assets/static/js/pages/datatables.js"></script>
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
                                        <i class="d-flex icon-note-text"></i>
                                    </div>
                                    <div class="ms-3 name">
                                        <h5 class="font-bold">Kelas Inkubasi Terdaftar</h5>
                                        <h6 class="text-muted font-extrabold mb-0">{{ $data['users_count'] }}</h6>
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
                                        <i class="d-flex icon-activity"></i>
                                    </div>
                                    <div class="ms-3 name">
                                        <h5 class="font-bold">Jumlah Kelas Aktif</h5>
                                        <h6 class="text-muted font-extrabold mb-0">{{ $data['course_count'] }}</h6>
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
                                        <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 6.5L9 17.5L4 12.5" stroke="white" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>

                                    </div>
                                    <div class="ms-3 name">
                                        <h5 class="font-bold">Kelas yang telah diselesaikan</h5>
                                        <h6 class="text-muted font-extrabold mb-0">{{ $data['course_count'] }}</h6>
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
                                <h4>Kelas yang sedang berjalan</h4>
                            </div>
                            <div class="card-body">
                                <div class="border border-1 rounded">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center row">
                                            <div class="col-md-4 py-2">
                                                <img style="object-fit: cover;height: 250px; width: 100%"
                                                    class="rounded img-fluid"
                                                    src="{{ url('assets/static/images/samples/architecture1.jpg') }}"
                                                    alt="Face 1">
                                            </div>
                                            <div class="col-md-8 px-2 py-2">
                                                <h4>Kelas Inkubasi Bisnis & UMKM</h4>
                                                <div class="d-flex align-items-center my-3">
                                                    <i class="d-flex fs-4 icon-video-circle text-warning me-2"></i><span>30
                                                        Video</span>
                                                </div>
                                                <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores
                                                    illum
                                                    ratione voluptatem! Ipsam ut provident totam, sed libero similique
                                                    assumenda dolores earum placeat ipsum ab harum ullam dicta corporis
                                                    natus!</div>
                                                <div class="col-auto my-3">
                                                    <a href="{{ route('setting-edit') }}"
                                                        class="btn btn-info btn-lg text-white">
                                                        <svg style="width: 30px; height: 30px;" viewBox="0 0 26 26"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                stroke="white" stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                            <path d="M8.5 12H14.5" stroke="white" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M12.5 15L15.5 12L12.5 9" stroke="white"
                                                                stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                        </svg>
                                                        <span>Lanjutkan Belajar</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
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
