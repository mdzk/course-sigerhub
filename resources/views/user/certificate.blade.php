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
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Sertifikat Penyelesaian Kelas</h4>
                    </div>
                    <div class="card-body">
                        @foreach ($courses as $course)
                            <div class="border border-1 rounded mb-3">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="">
                                            <h4>{{ $course->title_course }}</h4>
                                            <div class="d-flex align-items-center my-3">
                                                <i class="d-flex fs-4 icon-card text-warning me-2"></i>
                                                <span>Diselesaikan pada
                                                    {{ date('d M Y', strtotime($course->updated_at)) }}</span>
                                            </div>
                                            <div class="col-auto">
                                                <a href="{{ route('setting-edit') }}"
                                                    class="btn btn-info btn-lg text-white">
                                                    <i class="mt-1 icon-document-download"></i>
                                                    <span>Unduh Sertifikat</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
