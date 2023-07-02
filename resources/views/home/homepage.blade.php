@extends('layouts.home')

@section('title', 'Home')

@section('content')
<section class="my-5 py-5">
    <div class="container">
        <div class="page-content row">
            <div class="col-md-6 col-sm-12 mt-5">
                <div class="row">
                    <div class="col-12">
                        <h2>Kembangkan bisnis anda bersama kami</h2>
                        <p class="mt-4">Pelajari Teknik Terbaru dalam Industri bisnis, dan Tingkatkan Keberhasilan
                            Bisnis Anda
                            melalui
                            E-Course Inkubasi yang Memadukan Inovasi dan Pengalaman Praktis.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mt-5">
                        <h6>Dimana saja, Kapan Saja</h6>
                        <hr>
                        <p>Dapat diakses dimana saja dan kapan saja, tanpa takut tertinggal</p>
                        <div class="col-auto">
                            <span class="text-muted">
                                <a class="mt-1 fw-bold" href="">Selengkapnya </a><svg class="ms-1" width="34"
                                    height="35" viewBox="0 0 34 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22.981 14.9261L22.981 23.5104L14.3967 23.5104" stroke="#891B5B"
                                        stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M10.9602 11.4896L22.8608 23.3902" stroke="#891B5B" stroke-width="1.5"
                                        stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6 mt-5">
                        <h6>Bersertifikat</h6>
                        <hr>
                        <p>Setelah menyelesaikan kelas, anda akan mendapat setifikat</p>
                        <div class="col-auto">
                            <span class="text-muted">
                                <a class="mt-1 fw-bold" href="">Selengkapnya </a><svg class="ms-1" width="34"
                                    height="35" viewBox="0 0 34 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22.981 14.9261L22.981 23.5104L14.3967 23.5104" stroke="#891B5B"
                                        stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M10.9602 11.4896L22.8608 23.3902" stroke="#891B5B" stroke-width="1.5"
                                        stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 mt-5 d-flex justify-content-end align-items-center">
                <img class="img-fluid" src="assets/static/images/bg/home-banner.png" alt="">
            </div>
        </div>
    </div>
</section>
<section class="my-5 py-5">
    <div class="container">
        <div class="page-content row">
            <div class="col-md-6 col-sm-12 mt-5 d-flex justify-content-start align-items-center">
                <img class="img-fluid" src="assets/static/images/bg/home-banner-2.png" alt="">
            </div>
            <div class="col-md-6 col-sm-12 mt-5 d-flex justify-content-start align-items-center">
                <div class="row">
                    <div class="col-12 pe-5">
                        <h2 class="pe-5">Dapatkan materi yang berkualitas</h2>
                        <p class="mt-4 mb-4 pe-5">Dengan materi yang berbasis video serta forum diskusi yang interaktif,
                            anda
                            akan
                            dapat dengan mudah memahami dan mempelajari materi yang disediakan. Daftar sekarang, untuk
                            mendapatkan akses kelas</p>
                        <a href="{{ url('register') }}" class="btn btn-lg btn-warning text-white p-3">Daftar Sekarang, Gratis !</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="my-5 py-5 bg-secondary bg-opacity-10">
    <div class="container">
        <div class="page-content row my-5">
            <div class="col-md-12">
                <h2 class="text-center">Mengapa harus bergabung <br> bersama kami ?</h2>
                <p class="text-center mt-4">Segera bergabung bersama kami, dan dapatkan materi tentang <br> inkubasi
                    bisnis
                    yang
                </p>
            </div>
            <div class="col-md-12 mt-5">
                <div class="row d-flex flex-wrap justify-content-between">
                    <div class="col-md-4 p-2">
                        <div class="card mb-0 p-4">
                            <div class="col-auto">
                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9 22.9116H15C20 22.9116 22 20.9116 22 15.9116V9.91162C22 4.91162 20 2.91162 15 2.91162H9C4 2.91162 2 4.91162 2 9.91162V15.9116C2 20.9116 4 22.9116 9 22.9116Z"
                                        stroke="#891B5B" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M6.70001 10.1716L12 13.2416L17.26 10.1916" stroke="#891B5B"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M12 18.6817V13.2317" stroke="#891B5B" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M10.76 7.2016L7.56 8.9816C6.84 9.3816 6.23999 10.3916 6.23999 11.2216V14.6116C6.23999 15.4416 6.83 16.4516 7.56 16.8516L10.76 18.6316C11.44 19.0116 12.56 19.0116 13.25 18.6316L16.45 16.8516C17.17 16.4516 17.77 15.4416 17.77 14.6116V11.2116C17.77 10.3816 17.18 9.3716 16.45 8.9716L13.25 7.1916C12.56 6.8116 11.44 6.8116 10.76 7.2016Z"
                                        stroke="#891B5B" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg><span class="ms-3 mt-1 text-black fw-bold" href="">Pembelajaran yang
                                    Terstruktur</span>
                            </div>
                            <p class="mt-3">Kelas inkubasi bisnis kami menyediakan pembelajaran yang terstruktur
                                sehingga
                                anda akan
                                mendapatkan materi yang lengkap dan terstruktur</p>
                        </div>
                    </div>
                    <div class="col-md-4 p-2">
                        <div class="card mb-0 p-4">
                            <div class="col-auto">
                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M21.08 9.49166V16.3316C21.08 17.4516 20.48 18.4917 19.51 19.0617L13.57 22.4917C12.6 23.0517 11.4 23.0517 10.42 22.4917L4.48 19.0617C3.51 18.5017 2.91 17.4616 2.91 16.3316V9.49166C2.91 8.37166 3.51 7.33161 4.48 6.76161L10.42 3.33162C11.39 2.77162 12.59 2.77162 13.57 3.33162L19.51 6.76161C20.48 7.33161 21.08 8.36166 21.08 9.49166Z"
                                        stroke="#891B5B" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M12 11.9117C13.2868 11.9117 14.33 10.8685 14.33 9.58167C14.33 8.29484 13.2868 7.25171 12 7.25171C10.7132 7.25171 9.67001 8.29484 9.67001 9.58167C9.67001 10.8685 10.7132 11.9117 12 11.9117Z"
                                        stroke="#891B5B" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M16 17.5717C16 15.7717 14.21 14.3118 12 14.3118C9.79 14.3118 8 15.7717 8 17.5717"
                                        stroke="#891B5B" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                <span class="ms-3 mt-1 text-black fw-bold" href="">Akses ke Ahli Bisnis</span>
                            </div>
                            <p class="mt-3">Dapat berkomunikasi langsung dengan para ahli bisnis yang sudah sukses. Anda
                                akan mendapat saran dan wawasan berharga melalui forum diskusi pada kelas inkubasi.</p>
                        </div>
                    </div>
                    <div class="col-md-4 p-2">
                        <div class="card mb-0 p-4">
                            <div class="col-auto">
                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9 22.9116H15C20 22.9116 22 20.9116 22 15.9116V9.91162C22 4.91162 20 2.91162 15 2.91162H9C4 2.91162 2 4.91162 2 9.91162V15.9116C2 20.9116 4 22.9116 9 22.9116Z"
                                        stroke="#891B5B" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M6.70001 10.1716L12 13.2416L17.26 10.1916" stroke="#891B5B"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M12 18.6817V13.2317" stroke="#891B5B" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M10.76 7.2016L7.56 8.9816C6.84 9.3816 6.23999 10.3916 6.23999 11.2216V14.6116C6.23999 15.4416 6.83 16.4516 7.56 16.8516L10.76 18.6316C11.44 19.0116 12.56 19.0116 13.25 18.6316L16.45 16.8516C17.17 16.4516 17.77 15.4416 17.77 14.6116V11.2116C17.77 10.3816 17.18 9.3716 16.45 8.9716L13.25 7.1916C12.56 6.8116 11.44 6.8116 10.76 7.2016Z"
                                        stroke="#891B5B" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg><span class="ms-3 mt-1 text-black fw-bold" href="">Jaringan yang Luas</span>
                            </div>
                            <p class="mt-3">Dalam kelas inkubasi anda akan ditemukan dengan para peserta yang memiliki
                                minat
                                yang sama dan dapat menjadi media memperluas jaringan bisnis anda.</p>
                        </div>
                    </div>
                    <div class="col-md-4 p-2">
                        <div class="card mb-0 p-4">
                            <div class="col-auto">
                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M22 17.6516V5.58157C22 4.38157 21.02 3.49157 19.83 3.59157H19.77C17.67 3.77157 14.48 4.84157 12.7 5.96157L12.53 6.07157C12.24 6.25157 11.76 6.25157 11.47 6.07157L11.22 5.92157C9.44 4.81157 6.26 3.75157 4.16 3.58157C2.97 3.48157 2 4.38157 2 5.57157V17.6516C2 18.6116 2.78 19.5116 3.74 19.6316L4.03 19.6716C6.2 19.9616 9.55 21.0616 11.47 22.1116L11.51 22.1316C11.78 22.2816 12.21 22.2816 12.47 22.1316C14.39 21.0716 17.75 19.9616 19.93 19.6716L20.26 19.6316C21.22 19.5116 22 18.6116 22 17.6516Z"
                                        stroke="#891B5B" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M12 6.40161V21.4016" stroke="#891B5B" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M7.75 9.40161H5.5" stroke="#891B5B" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M8.5 12.4016H5.5" stroke="#891B5B" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <span class="ms-3 mt-1 text-black fw-bold" href="">Materi Terkini dan Relevan</span>
                            </div>
                            <p class="mt-3">Materi pada kelas inkbasi dibuat dengan menggunakan materi yang terkini dan
                                relevan yang sesuai dengan trend dan perubahan dalam dunia bisnis saat ini.</p>
                        </div>
                    </div>
                    <div class="col-md-4 p-2">
                        <div class="card mb-0 p-4">
                            <div class="col-auto">

                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.16999 5.62162L3.06999 17.2116C1.61999 19.9616 4.54999 22.9516 7.32999 21.5616L10.57 19.9416C11.47 19.4916 12.53 19.4916 13.43 19.9416L16.67 21.5616C19.45 22.9516 22.37 19.9616 20.93 17.2116L14.83 5.62162C13.63 3.34162 10.37 3.34162 9.16999 5.62162Z"
                                        stroke="#891B5B" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>

                                <span class="ms-3 mt-1 text-black fw-bold" href="">Fleksibilitas & Akses online</span>
                            </div>
                            <p class="mt-3">Memberikan anda keleluasaan dalam mengakses materi kelas inkubasi dan
                                lainnya sesuai dengan jadwal dan ritme belajar yang anda telah tentukan sendiri.</p>
                        </div>
                    </div>
                    <div class="col-md-4 p-2">
                        <div class="card mb-0 p-4">
                            <div class="col-auto">

                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.15002 2.91162V22.9116" stroke="#891B5B" stroke-width="1.5"
                                        stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M5.15002 4.91162H16.35C19.05 4.91162 19.65 6.41162 17.75 8.31162L16.55 9.51162C15.75 10.3116 15.75 11.6116 16.55 12.3116L17.75 13.5116C19.65 15.4116 18.95 16.9116 16.35 16.9116H5.15002"
                                        stroke="#891B5B" stroke-width="1.5" stroke-miterlimit="10"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                                <span class="ms-3 mt-1 text-black fw-bold" href="">Dukungan & Umpan Balik</span>
                            </div>
                            <p class="mt-3">Tidak hanya mempelajari materi pembelajaran secara fleksibel, anda juga
                                dapat berdiskusi melalui forum yang disediakan didalam platform kelas inkubasi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="my-5 py-5">
    <div class="container">
        <div class="page-content row my-5">
            <div class="col-md-12">
                <h2 class="text-center">Daftar Event</h2>
                <p class="text-center mt-4">Temukan event menarik dan inspiratif yang akan membahas <br> seputar dunia
                    bisnis
                    & entrepreneur</p>
            </div>
            <div class="col-md-12 mt-5">
                <div class="row d-flex flex-wrap justify-content-between">
                    <div class="col-md-4 p-2">
                        <div class="shadow-lg card mb-0 p-4">
                            <img class="img-fluid rounded mb-4" src="assets/static/images/samples/building.jpg" alt="">
                            <div class="col-auto">
                                <div class="d-flex align-items-center mb-4">
                                    <i class="icon-lamp-on text-primary d-flex fs-4"></i>
                                    <span class="ms-3 mt-1 text-black fw-bold" href="">Membangun bisnis mulai dari 0
                                        bersama
                                        Jonathan Patterson</span>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6 d-flex align-items-center">
                                        <i class="icon-calendar-2 fs-4 text-warning d-flex"></i>
                                        <span class="ms-3">04 Juli 2023</span>
                                    </div>
                                    <div class="col-md-6 d-flex align-items-center">
                                        <i class="icon-clock fs-4 text-warning d-flex"></i>
                                        <span class="ms-3">09.00 WIB</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 d-flex align-items-center">
                                        <i class="icon-location fs-4 text-warning d-flex"></i>
                                        <span class="ms-3">Aula Koma Space Lantai 2</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 p-2">
                        <div class="shadow-lg card mb-0 p-4">
                            <img class="img-fluid rounded mb-4" src="assets/static/images/samples/architecture1.jpg"
                                alt="">
                            <div class="col-auto">
                                <div class="d-flex align-items-center mb-4">
                                    <i class="icon-lamp-on text-primary d-flex fs-4"></i>
                                    <span class="ms-3 mt-1 text-black fw-bold" href="">#Bincang antara Kebutuhan bisnis
                                        & Revolusi Industri</span>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6 d-flex align-items-center">
                                        <i class="icon-calendar-2 fs-4 text-warning d-flex"></i>
                                        <span class="ms-3">04 Juli 2023</span>
                                    </div>
                                    <div class="col-md-6 d-flex align-items-center">
                                        <i class="icon-clock fs-4 text-warning d-flex"></i>
                                        <span class="ms-3">09.00 WIB</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 d-flex align-items-center">
                                        <i class="icon-location fs-4 text-warning d-flex"></i>
                                        <span class="ms-3">Aula Koma Space Lantai 2</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 p-2">
                        <div class="shadow-lg card mb-0 p-4">
                            <img class="img-fluid rounded mb-4" src="assets/static/images/samples/building.jpg" alt="">
                            <div class="col-auto">
                                <div class="d-flex align-items-center mb-4">
                                    <i class="icon-lamp-on text-primary d-flex fs-4"></i>
                                    <span class="ms-3 mt-1 text-black fw-bold" href="">Membangun bisnis mulai dari 0
                                        bersama
                                        Jonathan Patterson</span>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6 d-flex align-items-center">
                                        <i class="icon-calendar-2 fs-4 text-warning d-flex"></i>
                                        <span class="ms-3">04 Juli 2023</span>
                                    </div>
                                    <div class="col-md-6 d-flex align-items-center">
                                        <i class="icon-clock fs-4 text-warning d-flex"></i>
                                        <span class="ms-3">09.00 WIB</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 d-flex align-items-center">
                                        <i class="icon-location fs-4 text-warning d-flex"></i>
                                        <span class="ms-3">Aula Koma Space Lantai 2</span>
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

<section class="my-5 py-5 bg-secondary bg-opacity-10">
    <div class="container">
        <div class="page-content row my-5">
            <div class="col-md-12">
                <h2 class="text-center">FaQ</h2>
                <p class="text-center mt-4">Beberapa hal yang seringkali ditanyakan mengenai <br> e-course kelas
                    inkubasi
                    bisnis</p>
            </div>
            <div class="col-md-12 mt-5">
                <div class="row d-flex flex-wrap justify-content-between">
                    <div class="col-md-12 p-2">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item shadow-lg">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Apakah e-course kelas inkubasi bisnis berbayar ?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the first item's accordion body.</strong> It is shown by
                                        default, until the collapse plugin adds the appropriate classes that we use to
                                        style each element. These classes control the overall appearance, as well as the
                                        showing and hiding via CSS transitions. You can modify any of this with custom
                                        CSS or overriding our default variables. It's also worth noting that just about
                                        any HTML can go within the <code>.accordion-body</code>, though the transition
                                        does limit overflow.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item shadow-lg">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Apakah e-course kelas inkubasi bisnis berbayar ?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the second item's accordion body.</strong> It is hidden by
                                        default, until the collapse plugin adds the appropriate classes that we use to
                                        style each element. These classes control the overall appearance, as well as the
                                        showing and hiding via CSS transitions. You can modify any of this with custom
                                        CSS or overriding our default variables. It's also worth noting that just about
                                        any HTML can go within the <code>.accordion-body</code>, though the transition
                                        does limit overflow.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item shadow-lg">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Apakah e-course kelas inkubasi bisnis berbayar ?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the third item's accordion body.</strong> It is hidden by
                                        default, until the collapse plugin adds the appropriate classes that we use to
                                        style each element. These classes control the overall appearance, as well as the
                                        showing and hiding via CSS transitions. You can modify any of this with custom
                                        CSS or overriding our default variables. It's also worth noting that just about
                                        any HTML can go within the <code>.accordion-body</code>, though the transition
                                        does limit overflow.
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