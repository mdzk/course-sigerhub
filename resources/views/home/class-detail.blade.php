@extends('layouts.home')

@section('title', $class->title_course)

@push('styles')
    <link rel="stylesheet" href="{{ url('') }}/assets/compiled/css/custom.css" />
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
    <section class="pt-5">
        <div class="container">
            <div class="page-content row py-5">
                <div class="col-md-12 col-sm-12 mt-5 text-center">
                    <h2 class="">{{ $class->title_course }}</h2>
                    <p class="mt-4 fs-5">
                        Bangun bisnis dari awal dengan materi terbaru dan <br />
                        mentor terbaik di bidangnya !
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 text-center px-5">
                    <span class="fs-5 fw-bold text-black">Total Enrolled</span>
                    <hr />
                    <div class="fs-6">
                        <span class="text-primary fw-bold">{{ $total_enroll }}</span> enrolled
                    </div>
                </div>
                <div class="col-md-3 text-center px-5">
                    <span class="fs-5 fw-bold text-black">Mentor</span>
                    <hr />
                    <div class="fs-6">Siger Innovation Hub & LPDB</div>
                </div>
                <div class="col-md-3 text-center px-5">
                    <span class="fs-5 fw-bold text-black">Bersertifikat</span>
                    <hr />
                    <svg width="44" height="44" viewBox="0 0 44 44" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect width="44" height="44" rx="22" fill="#FBEAF4" />
                        <path d="M30 16L19 27L14 22" stroke="#891B5B" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </div>
                <div class="col-md-3 text-center px-5">
                    <span class="fs-5 fw-bold text-black">Forum Diskusi</span>
                    <hr />
                    <svg width="44" height="44" viewBox="0 0 44 44" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect width="44" height="44" rx="22" fill="#FBEAF4" />
                        <path d="M30 16L19 27L14 22" stroke="#891B5B" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <section class="my-5 py-5">
        <div class="container">
            <div class="page-content row">
                <div class="col-md-8 col-sm-12">
                    <img class="w-100 img-fluid rounded mb-5" src="{{ asset('storage/thumbnail/' . $class->thumbnail) }}"
                        alt="" />
                    <h4>Deskripsi Kelas :</h4>
                    <p class="mt-4 fs-5">
                        {!! $class->description !!}
                    </p>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="card shadow-lg">
                        <div class="p-5 card-content">
                            <h4>Konten Kelas :</h4>
                            <div class="accordion mt-4" id="accordionExample">
                                <div class="accordion-item shadow-lg border">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button fs-6 p-3" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Materi
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body px-3 py-1">
                                            <ul class="list-unstyled">
                                                @foreach ($videos as $video)
                                                    <li class="fs-6 d-flex align-items-center mb-3">
                                                        <i class="icon-video-circle text-primary d-flex me-2 fs-4"></i>
                                                        {{ $video->title_videos }}
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="accordion-item shadow-lg border">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed fs-6 p-3" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            Manajemen Tim
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body px-3 py-1">
                                            <ul class="list-unstyled">
                                                <li class="fs-6 d-flex align-items-center mb-3">
                                                    <i class="icon-video-circle text-primary d-flex me-2 fs-4"></i>
                                                    Pengantar Keuangan
                                                </li>
                                                <li class="fs-6 d-flex align-items-center">
                                                    <i class="icon-video-circle text-primary d-flex me-2 fs-4"></i>
                                                    Manajemen Keuangan Dalam Tim
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                        @if (!empty($enroll))
                            <div class="card-footer bg-info text-center">
                                <a href="{{ url('class/' . $class->slug . '/access') }}"
                                    class="d-block fs-6 fw-bold text-white">Lanjutkan Belajar!</a>
                            </div>
                        @endif
                        @if (empty($enroll) || empty(Auth::user()))
                            <div class="card-footer bg-primary text-center">
                                <a href="{{ url('class/' . $class->slug . '/access') }}"
                                    class="d-block fs-6 fw-bold text-white">Segera Belajar!</a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
