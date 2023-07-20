@extends('layouts.home')

@section('title', 'Kelas Inkubasi')

@push('styles')
    <link rel="stylesheet" href="{{ url('') }}/assets/compiled/css/custom.css" />
@endpush

@section('content')
    <section class="py-5 bg-primary">
        <div class="container">
            <div class="page-content row py-5">
                <div class="col-md-12 col-sm-12 py-5">
                    <div class="row">
                        <div class="col-12 text-center text-white">
                            <h2 class="text-white">Yuk, Belajar Bersama Kami !</h2>
                            <p class="mt-4 fs-5">Temukan berbagai macam kelas-kelas inkubasi bisnis menarik disini !</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-relative">
            <div class="circle-arrow-down bg-white shadow-lg d-flex align-items-center justify-content-center">
                <svg width="85" height="85" viewBox="0 0 85 85" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M42.445 77.8157C61.9797 77.8157 77.8157 61.9797 77.8157 42.4449C77.8157 22.9102 61.9797 7.07416 42.445 7.07416C22.9102 7.07416 7.07422 22.9102 7.07422 42.4449C7.07422 61.9797 22.9102 77.8157 42.445 77.8157Z"
                        stroke="#16181D" stroke-width="5.30561" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M42.4453 30.0651V51.2876" stroke="#16181D" stroke-width="5.30561" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M31.834 44.2134L42.4452 54.8247L53.0564 44.2134" stroke="#16181D" stroke-width="5.30561"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>
        </div>
    </section>

    <section class="my-5 py-5">
        <div class="container">
            <div class="page-content row py-5">
                <div class="col-md-12 col-sm-12 mt-5">
                    <div class="row mb-5">
                        <div class="col-md-12">
                            <h4>Kategori Kelas :</h4>
                        </div>
                        <div class="d-flex">
                            <a class="btn me-3 p-3 btn-lg btn-primary">
                                Semua Kategori
                            </a>
                            <a class="btn me-3 p-3 btn-lg btn-secondary">
                                Pengembangan Produk
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h4>Daftar Kelas :</h4>
                        </div>
                        <div class="col-md-12 mt-5">
                            <div class="row d-flex flex-wrap justify-content-evenly">
                                <div class="col-md-4 p-2">
                                    <div class="shadow-lg card mb-5 p-4">
                                        <div class="position-relative">
                                            <img class="img-fluid rounded mb-4"
                                                src="assets/static/images/samples/building.jpg" alt="">
                                            <div class="badge p-2 fw-normal bg-secondary position-absolute class-category">Hello</div>
                                        </div>

                                        <div class="col-auto">
                                            <div class="d-flex align-items-center mb-4">
                                                <span class="mt-1 text-black fw-bold" href="">Kelas Inkubasi
                                                    Bisnis</span>
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
                                    <div class="shadow-lg card mb-5 p-4">
                                        <div class="position-relative">
                                            <img class="img-fluid rounded mb-4"
                                                src="assets/static/images/samples/building.jpg" alt="">
                                            <div class="badge p-2 fw-normal bg-secondary position-absolute class-category">Hello</div>
                                        </div>

                                        <div class="col-auto">
                                            <div class="d-flex align-items-center mb-4">
                                                <span class="mt-1 text-black fw-bold" href="">Kelas Inkubasi
                                                    Bisnis</span>
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
                                    <div class="shadow-lg card mb-5 p-4">
                                        <div class="position-relative">
                                            <img class="img-fluid rounded mb-4"
                                                src="assets/static/images/samples/building.jpg" alt="">
                                            <div class="badge p-2 fw-normal bg-secondary position-absolute class-category">Hello</div>
                                        </div>

                                        <div class="col-auto">
                                            <div class="d-flex align-items-center mb-4">
                                                <span class="mt-1 text-black fw-bold" href="">Kelas Inkubasi
                                                    Bisnis</span>
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
                                    <div class="shadow-lg card mb-5 p-4">
                                        <div class="position-relative">
                                            <img class="img-fluid rounded mb-4"
                                                src="assets/static/images/samples/building.jpg" alt="">
                                            <div class="badge p-2 fw-normal bg-secondary position-absolute class-category">Hello</div>
                                        </div>

                                        <div class="col-auto">
                                            <div class="d-flex align-items-center mb-4">
                                                <span class="mt-1 text-black fw-bold" href="">Kelas Inkubasi
                                                    Bisnis</span>
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
                </div>
            </div>
        </div>
    </section>
@endsection
