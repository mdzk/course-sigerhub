@extends('layouts.home')

@section('title', 'Kontak')

@push('styles')
    <link rel="stylesheet" href="{{ url('') }}/assets/compiled/css/custom.css" />
@endpush

@section('content')
    <section class="pt-5">
        <div class="container">
            <div class="page-content row py-5">
                <div class="col-md-6 col-sm-12 mt-5">
                    <h2 class="">Segera terhubung dengan kami</h2>
                </div>
                <div class="col-md-6 col-sm-12 mt-5">
                    <div class="mt-4 fs-5">
                        <span>Segera terhubung dengan kami, mari diskusikan tentang kelas
                            inkubasi ini, bekerjasama dan hasilkan sesuatu yang lebih dan
                            bermanfaat !</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="my-5 py-5">
        <div class="container">
            <div class="page-content row py-5">
                <div class="col-md-12 col-sm-12">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Nama :</h4>
                            <div class="form-group position-relative mb-5">
                                <input placeholder="Adeline Palmerston.." id="name" name="name" type="text"
                                    class="shadow-lg form-control form-control-xl" name="name" required
                                    autocomplete="name" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h4>Alamat Email :</h4>
                            <div class="form-group position-relative mb-5">
                                <input placeholder="adelinepalmers@gmail.com" id="email" name="email" type="email"
                                    class="shadow-lg form-control form-control-xl" name="email" required
                                    autocomplete="email" />
                            </div>
                        </div>

                        <div class="col-md-12">
                            <h4>Pesan :</h4>
                            <div class="form-group position-relative mb-5">
                                <textarea placeholder="Tulis Pesanmu Disini...." id="message" name="message" type="message"
                                    class="shadow-lg form-control form-control-xl p-5" name="message" rows="3" required></textarea>
                            </div>

                            <button class="btn btn-lg btn-primary btn-block p-3">
                                Kirim
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
