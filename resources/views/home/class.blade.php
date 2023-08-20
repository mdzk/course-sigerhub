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
                        <form action="{{ route('search') }}">
                            <input name="search" type="text" class="form-control form-control-xl"
                                placeholder="Cari Kelas yang anda inginkan..." />
                            <div class="form-control-icon">
                                <button type="submit" class="bg-white border-0"><i class="icon-search-normal"></i></button>
                            </div>
                        </form>
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
                            @php
                                function setBtn($url, $class = 'btn-primary')
                                {
                                    return request()->is($url) ? $class : 'btn-secondary';
                                }
                            @endphp

                            <a href="{{ url('class') }}" class="btn me-3 p-3 mb-3 btn-lg {{ setBtn('class') }}">
                                Semua Kategori
                            </a>
                            @foreach ($categories as $category)
                                <a href="{{ url('category/' . $category->slug) }}"
                                    class="btn me-3 p-3 mb-3 btn-lg {{ setBtn('category/' . $category->slug) }}">
                                    {{ $category->name_category }}
                                </a>
                            @endforeach
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
                                @isset($_GET['search'])
                                    Menampilkan hasil pencarian <span
                                        class="fw-bold text-primary">"{{ $_GET['search'] }}"</span>
                                @endisset
                                @empty($_GET)
                                    Cari kelas pilihan anda dengan cara mencari nama kelas atau
                                    <br>
                                    memilih salah satu kategori kelas diatas.
                                @endempty
                                <br />
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
                    @foreach ($courses as $course)
                        <div class="col-md-4 p-2">
                            <div class="card border mb-5 p-4">
                                <div class="position-relative">
                                    <img style="object-fit: cover;height: 350px; width: 100%" class="img-fluid rounded mb-4"
                                        src="{{ asset('storage/thumbnail/' . $course->thumbnail) }}" alt="" />
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
    </section>
@endsection
