@extends('layouts.home')

@section('title', 'Kelas Inkubasi')

@push('styles')
    <link rel="stylesheet" href="{{ url('') }}/assets/compiled/css/custom.css" />
@endpush

@section('content')
    <section class="py-5 bg-primary">
        <div class="container">
            <div class="page-content row about-title">
                <div class="col-md-12 col-sm-12 py-5">
                    <div class="row">
                        <div class="col-12 text-center text-white">
                            <h2 class="text-white">Kelas Inkubasi bisnis</h2>
                            <p class="mt-4 fs-5">Segera bergabung dengan kami, dapatkan materi <br> berkualitas dan
                                interaktif !</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-relative container">
            <div class="img-hero shadow-lg card mb-5 p-4">
                <img class="img-fluid rounded" src="{{ url('assets/static/images/bg/about.png') }}" alt="">
                <div class="row pt-4">
                    <div class="col-md-3">
                        <h4>Judul Kelas :</h4>
                        <span>Kelas Inkubasi Bisnis</span>
                    </div>
                    <div class="col-md-3">
                        <h4>Mentor :</h4>
                        <span>Siger Innovation Hub & LPDB</span>
                    </div>
                    <div class="col-md-3">
                        <h4>Total Enrolled :</h4>
                        <span>450 Enrolled</span>
                    </div>
                    <div class="col-md-3">
                        <a href=""
                            class="btn btn-lg btn-primary d-block d-flex align-items-center justify-content-between">
                            <span>Daftar Sekarang, Gratis!</span>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                    stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M8.5 12H14.5" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M12.5 15L15.5 12L12.5 9" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="my-5 py-5 about-section">
        <div class="container">
            <div class="page-content row">
                <div class="col-md-12 col-sm-12">
                    <h2>Deskripsi Kelas :</h2>
                    <p class="mt-4 fs-5">
                        Kelas "Inkubasi Bisnis & UMKM" adalah sebuah program online yang
                        dirancang khusus untuk membantu pemilik usaha kecil dan menengah
                        (UMKM) dalam mengembangkan dan mengoptimalkan bisnis mereka.
                        Kelas ini bertujuan untuk memberikan pengetahuan, keterampilan,
                        dan alat praktis yang diperlukan untuk merancang strategi bisnis
                        yang sukses, meningkatkan kinerja keuangan, dan mengatasi
                        tantangan yang sering dihadapi oleh UMKM. <br /><br />
                        Dalam kelas ini, peserta akan dipandu oleh para ahli bisnis yang
                        berpengalaman dalam berbagai industri. Mereka akan memberikan
                        wawasan dan panduan praktis melalui kuliah interaktif, diskusi
                        kelompok, dan studi kasus nyata. Selain itu, kelas ini juga
                        menyediakan platform online yang memungkinkan peserta untuk
                        berinteraksi dengan sesama peserta dan fasilitator, bertukar
                        ide, dan berkolaborasi dalam meningkatkan bisnis mereka.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="my-5 py-5">
        <div class="container">
            <div class="page-content row">
                <div class="col-md-12 col-sm-12">
                    <h2>Konten Kelas :</h2>
                    <div class="accordion mt-4" id="accordionExample">
                        <div class="accordion-item shadow-lg">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Manajemen Keuangan
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse show" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
