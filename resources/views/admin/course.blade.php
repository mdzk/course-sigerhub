@extends('layouts.admin')

@section('title', 'Dashboard')

@push('styles')
    <link rel="stylesheet" href="{{ url('') }}/assets/extensions/datatables.net-bs5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="{{ url('') }}/assets/scss/pages/datatables.scss">
    <link rel="stylesheet" href="{{ url('') }}/assets/extensions/sweetalert2/sweetalert2.min.css" />
@endpush

@push('scripts')
    <script src="{{ url('') }}/assets/extensions/jquery/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
    <script src="{{ url('') }}/assets/static/js/pages/datatables.js"></script>
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
                                <h4>Daftar Kelas</h4>
                                <a href="{{ route('course-create') }}" class="btn btn-primary btn-lg text-white">
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
                                                <td>{!! Str::limit($course->description, 75) !!}</td>
                                                <td>
                                                    <a type="button" href="{{ url('admin/course/edit/' . $course->id) }}"
                                                        class="btn btn-info text-white">
                                                        <i class="icon-edit"></i> Edit
                                                    </a>
                                                    <button type="button" class="btn btn-danger text-white"
                                                        data-bs-toggle="modal" data-bs-target="#hapus{{ $course->id }}">
                                                        <i class="icon-trash"></i> Hapus
                                                    </button>

                                                    <!--Delete Modal Content -->
                                                    <div class="modal fade text-left modal-borderless"
                                                        id="hapus{{ $course->id }}" tabindex="-1" role="dialog"
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
                                                                        Apakah anda yakin ingin hapus kelas ini?
                                                                    </p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button"
                                                                        class="btn btn-light-primary ml-1"
                                                                        data-bs-dismiss="modal">

                                                                        <span class="d-sm-block">Tidak</span>
                                                                    </button>
                                                                    <form method="POST"
                                                                        action="{{ route('course-destroy', $course->id) }}">
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
                                                    <!--Delete Modal Content End-->
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
