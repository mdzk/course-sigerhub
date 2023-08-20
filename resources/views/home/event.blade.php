@extends('layouts.home')

@section('title', 'Event')

@section('content')
    <section class="pt-5">
        <div class="container">
            <div class="page-content row py-5">
                <div class="col-md-12 col-sm-12 mt-5 text-center">
                    <h2 class="">Daftar Event</h2>
                    <p class="mt-4 fs-5">
                        Temukan event menarik dan inspiratif yang akan membahas <br />
                        seputar dunia bisnis & entrepreneur
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="">
        <div class="container">
            <div class="page-content row">
                <div class="col-md-12-col-sm-12">
                    <div class="row mb-5">
                        @php
                            function setBtn($url, $class = 'btn-primary')
                            {
                                return url()->current() == url($url) ? $class : 'btn-secondary';
                            }
                        @endphp

                        <div class="d-flex flex-wrap justify-content-center">
                            <a href="{{ url('event') }}" class="btn me-3 p-3 mb-3 btn-lg {{ setBtn('event') }}">
                                Semua Kategori
                            </a>
                            <a href="{{ url('event/category/online') }}"
                                class="btn me-3 p-3 mb-3 btn-lg {{ setBtn('event/category/online') }}">
                                Online Event
                            </a>

                            <a href="{{ url('event/category/offline') }}"
                                class="btn me-3 p-3 mb-3 btn-lg {{ setBtn('event/category/offline') }}">
                                Offline Event </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="page-content row">
                <div class="col-md-12 mt-5">
                    <div class="row d-flex flex-wrap justify-content-evenly">
                        @foreach ($events as $event)
                            <div class="col-md-4 p-2">
                                <div class="shadow-lg card mb-0 p-4">
                                    <img style="object-fit: cover;height: 350px;width: 100%" class="img-fluid rounded mb-4"
                                        src="{{ asset('storage/event/' . $event->picture) }}" alt="">
                                    <div class="col-auto">
                                        <div class="d-flex align-items-center mb-4">
                                            <i class="icon-lamp-on text-primary d-flex fs-4"></i>
                                            <a class="ms-3 mt-1 text-black fw-bold"
                                                href="{{ url('event/detail/' . $event->slug) }}">{{ $event->title_event }}</a>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6 d-flex align-items-center">
                                                <i class="icon-calendar-2 fs-4 text-warning d-flex"></i>
                                                <span class="ms-3">{{ date('d M y', strtotime($event->date)) }}</span>
                                            </div>
                                            <div class="col-md-6 d-flex align-items-center">
                                                <i class="icon-clock fs-4 text-warning d-flex"></i>
                                                <span class="ms-3">{{ $event->time }}</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 d-flex align-items-center">
                                                <i class="icon-location fs-4 text-warning d-flex"></i>
                                                <span class="ms-3">{{ $event->location }}</span>
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
    </section>
@endsection
