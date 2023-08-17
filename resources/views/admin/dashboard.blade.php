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
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="card shadow-lg">
                            <div class="card-body py-4 px-4">
                                <div class="d-flex align-items-center">
                                    <div class="stats-icon bg-primary mb-2">
                                        <i class="d-flex icon-user-tick"></i>
                                    </div>
                                    <div class="ms-3 name">
                                        <h5 class="font-bold">Pengguna Aktif</h5>
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
                                        <i class="d-flex icon-video-circle"></i>
                                    </div>
                                    <div class="ms-3 name">
                                        <h5 class="font-bold">Jumlah Kelas</h5>
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
                                    <div class="avatar avatar-xl border border-4 border-primary">
                                        <img style="object-fit: cover"
                                            src="@if (Auth::user()->image == 'default.png') {{ url('assets/static/images/faces/1.jpg') }} @else {{ asset('storage/profile/' . Auth::user()->image) }} @endif"
                                            alt="Face 1">
                                    </div>
                                    <div class="ms-3 name">
                                        <h5 class="font-bold">{{ Auth::user()->name }}</h5>
                                        <h6 class="text-muted mb-0">{{ Auth::user()->email }}</h6>
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
                                            </tr>
                                        @empty
                                            <tr>
                                                <td class="text-center" colspan="6">Data tidak tersedia</td>
                                            </tr>
                                        @endforelse
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
                                                <td>{{ Str::limit($course->description, 20) }}</td>
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
                                                <td class="text-center" colspan="6">Data tidak tersedia</td>
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
