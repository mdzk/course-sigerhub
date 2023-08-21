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
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Kelas Inkubasi Terdaftar
                                    <a href="{{ route('search') }}" class="ms-3 btn btn-sm btn-info fw-normal fs-5">
                                        <i class="icon-search-normal"></i>
                                        <span>Telusuri
                                            Kelas Baru</span></a>
                                </h4>
                                <ul class="nav nav-pills">
                                    <li class="nav-item">
                                        <a class="nav-link active text-white shadow-none" aria-current="page"
                                            href="#">Kelas Aktif</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-muted" href="#">Kelas Terselesaikan</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="row d-flex flex-wrap justify-content-evenly">
                                    @foreach ($courses as $course)
                                        <div class="col-md-4 p-2">
                                            <div class="card border mb-5 p-4">
                                                <div class="position-relative">
                                                    <img style="object-fit: cover;height: 350px; width: 100%"
                                                        class="img-fluid rounded mb-4"
                                                        src="{{ asset('storage/thumbnail/' . $course->thumbnail) }}"
                                                        alt="" />
                                                    <div class="badge p-2 fw-normal position-absolute class-category">
                                                        {{ $course->name_category }}
                                                    </div>
                                                </div>

                                                <div class="col-auto">
                                                    <div class="d-flex align-items-center mb-4">
                                                        <a class="mt-1 text-black fw-bold"
                                                            href="{{ url('class/' . $course->slug) }}">{{ $course->title_course }}</a>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-md-12">
                                                            <span>{!! Str::limit($course->description, 75) !!}</span>
                                                        </div>
                                                    </div>
                                                    <a href="{{ url('class/' . $course->slug) }}"
                                                        class="btn btn-lg btn-primary d-block">Segera Belajar!</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
