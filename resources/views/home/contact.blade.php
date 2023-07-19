@extends('layouts.home')

@section('title', 'Kontak')

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
                            <h2 class="text-white">Segera Bergabung <br> Bersama Kami</h2>
                            <p class="mt-4 fs-5">Hubungi kami mengenai pembicaraan <br> lebih lanjut</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-relative">
            <div
                class="circle-arrow-down bg-white shadow-lg d-flex align-items-center justify-content-center">
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
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Nama :</h4>
                            <div class="form-group position-relative has-icon-right mb-5">
                                <input placeholder="Adeline Palmerston.." id="name" name="name" type="text"
                                    class="shadow-lg form-control form-control-xl @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                <div class="form-control-icon">
                                    <i class="icon-user-octagon"></i>
                                </div>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h4>Alamat Email :</h4>
                            <div class="form-group position-relative has-icon-right mb-5">
                                <input placeholder="adelinepalmers@gmail.com" id="email" name="email" type="email"
                                    class="shadow-lg form-control form-control-xl @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                <div class="form-control-icon">
                                    <i class="icon-main-component"></i>
                                </div>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-12">
                            <h4>Pesan :</h4>
                            <div class="form-group position-relative has-icon-right mb-5">
                                <textarea
                                    placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam non justo nec felis varius laoreet quis nec ipsum. Fusce consectetur placerat congue. Mauris nec aliquam urna, quis mollis orci. Phasellus consectetur tincidunt est, ut venenatis urna interdum in. Sed purus magna, pellentesque at faucibus ut, luctus id magna. Duis ornare, nibh"
                                    id="message" name="message" type="message"
                                    class="shadow-lg form-control form-control-xl p-5 @error('message') is-invalid @enderror" name="message"
                                    value="{{ old('message') }}" rows='3' required autofocus></textarea>
                                <div class="form-control-icon">
                                    <i class="icon-message-text"></i>
                                </div>

                                @error('message')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <button class="btn btn-lg btn-primary btn-block">Kirim</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
