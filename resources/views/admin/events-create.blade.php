@extends('layouts.admin')

@section('title', 'Dashboard')

@push('styles')
@endpush

@push('scripts')
@endpush

@section('content')
    <div class="page-content">
        <section class="row">
            <div class="col-12 col-lg-12">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Tambah Event</h4>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('event-store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <h6>Nama Event:</h6>
                                    <div class="form-group mb-5">
                                        <input type="text" value="{{ old('title_event') }}"
                                            class="form-control form-control-xl @error('title_event') is-invalid @enderror"
                                            placeholder="Membangun Bisnis ..." name="title_event">
                                        @error('title_event')
                                            <div class="invalid-feedback">
                                                <i class="bx bx-radio-circle"></i>
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <h6>Tanggal:</h6>
                                    <div class="form-group mb-5">
                                        <input type="date" value="{{ old('date') }}"
                                            class="form-control form-control-xl @error('date') is-invalid @enderror"
                                            name="date">
                                        @error('date')
                                            <div class="invalid-feedback">
                                                <i class="bx bx-radio-circle"></i>
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <h6>Waktu:</h6>
                                    <div class="form-group mb-5">
                                        <input type="time" value="{{ old('time') }}"
                                            class="form-control form-control-xl @error('time') is-invalid @enderror"
                                            name="time">
                                        @error('time')
                                            <div class="invalid-feedback">
                                                <i class="bx bx-radio-circle"></i>
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <h6>Tempat:</h6>
                                    <div class="form-group mb-5">
                                        <input type="text" value="{{ old('location') }}"
                                            class="form-control form-control-xl @error('location') is-invalid @enderror"
                                            placeholder="Aula Koma Space" name="location">
                                        @error('location')
                                            <div class="invalid-feedback">
                                                <i class="bx bx-radio-circle"></i>
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <h6>Link Pendaftaran:</h6>
                                    <div class="form-group mb-5">
                                        <input type="text" value="{{ old('link') }}"
                                            class="form-control form-control-xl @error('link') is-invalid @enderror"
                                            placeholder="bit.ly/seminarbisnis_1" name="link">
                                        @error('link')
                                            <div class="invalid-feedback">
                                                <i class="bx bx-radio-circle"></i>
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <h6>Tipe Event</h6>
                                    <div class="form-group mb-5">
                                        <div class="form-check">
                                            <input checked class="form-check-input" type="radio" name="tipe"
                                                id="flexRadioDefault1" value="online">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Online
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="tipe"
                                                id="flexRadioDefault1" value="offline">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Offline
                                            </label>
                                        </div>

                                        @error('tipe')
                                            <div class="invalid-feedback">
                                                <i class="bx bx-radio-circle"></i>
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <h6>Poster Event:</h6>
                                    <div class="form-group mb-5">
                                        <input type="file"
                                            class="form-control form-control-xl @error('picture') is-invalid @enderror"
                                            name="picture" accept=".png, .jpg, .jpeg">
                                        @error('picture')
                                            <div class="invalid-feedback">
                                                <i class="bx bx-radio-circle"></i>
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="col-sm-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-lg btn-primary me-1 mb-1">
                                            + Tambah Event
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
