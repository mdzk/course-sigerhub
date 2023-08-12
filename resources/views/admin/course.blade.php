@extends('layouts.admin')

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
                                <h4>Daftar Kelas</h4>
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
                                        @php
                                            $i = 1;
                                        @endphp
                                        @forelse ($courses as $course)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $course->title_course }}</td>
                                                <td>{{ $course->name_category }}</td>
                                                <td>{{ $course->description }}</td>
                                                <td>
                                                    <button type="button" class="btn btn-info text-white">
                                                        <i class="icon-edit"></i> Edit
                                                    </button>
                                                    <button type="button" class="btn btn-danger text-white">
                                                        <i class="icon-trash"></i> Hapus
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
