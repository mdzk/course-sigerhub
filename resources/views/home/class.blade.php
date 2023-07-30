@extends('layouts.home')

@section('title', 'Kelas Inkubasi')

@push('styles')
    <link rel="stylesheet" href="{{ url('') }}/assets/compiled/css/custom.css" />
@endpush

@section('content')
    <section class="pt-5">
        <div class="container">
            <div class="page-content row d-flex align-items-center">
                <div class="col-md-6 col-sm-12 mt-5">
                    <h2>
                        Waktunya belajar <br />
                        bersama kami !
                    </h2>
                    <p class="mt-4">
                        Temukan berbagai macam kelas-kelas menarik, <br />
                        Segera bergabung & belajar bersama kami sekarang !
                    </p>
                    <div class="form-group position-relative has-icon-right mt-5">
                        <input type="text" class="form-control form-control-xl"
                            placeholder="Cari Kelas yang anda inginkan..." />
                        <div class="form-control-icon">
                            <i class="icon-search-normal"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 mt-5 d-flex justify-content-end align-items-center">
                    <img class="img-fluid" src="./assets/compiled/svg/kelas.svg" alt="" />
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="page-content row">
                <div class="col-md-12-col-sm-12 mt-5">
                    <div class="row mb-5">
                        <div class="col-md-12">
                            <h4>Kategori Kelas :</h4>
                        </div>
                        <div class="d-flex flex-wrap">
                            <a class="btn me-3 p-3 mb-3 btn-lg btn-primary">
                                Semua Kategori
                            </a>
                            <a class="btn me-3 p-3 mb-3 btn-lg btn-secondary">
                                Pengembangan Produk
                            </a>
                            <a class="btn me-3 p-3 mb-3 btn-lg btn-secondary">
                                Pengembangan Produk </a><a class="btn me-3 p-3 mb-3 btn-lg btn-secondary">
                                Pengembangan Produk </a><a class="btn me-3 p-3 mb-3 btn-lg btn-secondary">
                                Pengembangan Produk </a><a class="btn me-3 p-3 mb-3 btn-lg btn-secondary">
                                Pengembangan Produk </a><a class="btn me-3 p-3 mb-3 btn-lg btn-secondary">
                                Pengembangan Produk </a><a class="btn me-3 p-3 mb-3 btn-lg btn-secondary">
                                Pengembangan Produk </a><a class="btn me-3 p-3 mb-3 btn-lg btn-secondary">
                                Pengembangan Produk </a><a class="btn me-3 p-3 mb-3 btn-lg btn-secondary">
                                Pengembangan Produk </a><a class="btn me-3 p-3 mb-3 btn-lg btn-secondary">
                                Pengembangan Produk </a><a class="btn me-3 p-3 mb-3 btn-lg btn-secondary">
                                Pengembangan Produk </a><a class="btn me-3 p-3 mb-3 btn-lg btn-secondary">
                                Pengembangan Produk
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="">
        <div class="container">
            <div class="page-content row">
                <div class="col-md-12 col-sm-12">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h2 class="">Daftar Kelas :</h2>
                            <p class="mt-4 fs-5">
                                Cari kelas pilihan anda dengan cara mencari nama kelas atau
                                <br />
                                memilih salah satu kategori kelas diatas.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="">
        <div class="container">
            <div class="page-content row py-5">
                <div class="row d-flex flex-wrap justify-content-evenly">
                    <div class="col-md-4 p-2">
                        <div class="card border mb-5 p-4">
                            <div class="position-relative">
                                <img class="img-fluid rounded mb-4" src="./assets/compiled/jpg/building.jpg"
                                    alt="" />
                                <div class="badge p-2 fw-normal position-absolute class-category">
                                    Hello
                                </div>
                            </div>

                            <div class="col-auto">
                                <div class="d-flex align-items-center mb-4">
                                    <span class="mt-1 text-black fw-bold" href="">Kelas Inkubasi Bisnis</span>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <span>Kelas ini dibangun untuk para UMKM dan koperasi dalam
                                            mengembangkan bisnis...</span>
                                    </div>
                                </div>
                                <a href="" class="btn btn-lg btn-primary d-block">Segera Belajar!</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 p-2">
                        <div class="card border mb-5 p-4">
                            <div class="position-relative">
                                <img class="img-fluid rounded mb-4" src="./assets/compiled/jpg/building.jpg"
                                    alt="" />
                                <div class="badge p-2 fw-normal position-absolute class-category">
                                    Hello
                                </div>
                            </div>

                            <div class="col-auto">
                                <div class="d-flex align-items-center mb-4">
                                    <span class="mt-1 text-black fw-bold" href="">Kelas Inkubasi Bisnis</span>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <span>Kelas ini dibangun untuk para UMKM dan koperasi dalam
                                            mengembangkan bisnis...</span>
                                    </div>
                                </div>
                                <a href="" class="btn btn-lg btn-primary d-block">Segera Belajar!</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 p-2">
                        <div class="card border mb-5 p-4">
                            <div class="position-relative">
                                <img class="img-fluid rounded mb-4" src="./assets/compiled/jpg/building.jpg"
                                    alt="" />
                                <div class="badge p-2 fw-normal position-absolute class-category">
                                    Hello
                                </div>
                            </div>

                            <div class="col-auto">
                                <div class="d-flex align-items-center mb-4">
                                    <span class="mt-1 text-black fw-bold" href="">Kelas Inkubasi Bisnis</span>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <span>Kelas ini dibangun untuk para UMKM dan koperasi dalam
                                            mengembangkan bisnis...</span>
                                    </div>
                                </div>
                                <a href="" class="btn btn-lg btn-primary d-block">Segera Belajar!</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 p-2">
                        <div class="card border mb-5 p-4">
                            <div class="position-relative">
                                <img class="img-fluid rounded mb-4" src="./assets/compiled/jpg/building.jpg"
                                    alt="" />
                                <div class="badge p-2 fw-normal position-absolute class-category">
                                    Hello
                                </div>
                            </div>

                            <div class="col-auto">
                                <div class="d-flex align-items-center mb-4">
                                    <span class="mt-1 text-black fw-bold" href="">Kelas Inkubasi Bisnis</span>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <span>Kelas ini dibangun untuk para UMKM dan koperasi dalam
                                            mengembangkan bisnis...</span>
                                    </div>
                                </div>
                                <a href="" class="btn btn-lg btn-primary d-block">Segera Belajar!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
