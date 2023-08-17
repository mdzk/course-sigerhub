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
                                <h4>Tambah Video</h4>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('video-store') }}">
                                    @csrf
                                    <h6>Nama Video:</h6>
                                    <div class="form-group mb-5">
                                        <input type="text" value="{{ old('title_videos') }}"
                                            class="form-control form-control-xl @error('title_videos') is-invalid @enderror"
                                            placeholder="Pengantar" name="title_videos">
                                        @error('title_videos')
                                            <div class="invalid-feedback">
                                                <i class="bx bx-radio-circle"></i>
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <h6>Nama Kelas:</h6>
                                    <div class="form-group mb-5">
                                        <select name="id_course" id=""
                                            class="form-control form-select form-control-xl @error('id_course') is-invalid @enderror">
                                            <option value="" selected disabled>Pilih Kelas</option>
                                            @foreach ($courses as $course)
                                                <option value="{{ $course->id }}">{{ $course->title_course }}</option>
                                            @endforeach
                                        </select>
                                        @error('id_course')
                                            <div class="invalid-feedback">
                                                <i class="bx bx-radio-circle"></i>
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <h6>Tautan Video:</h6>
                                    <div class="form-group mb-5">
                                        <textarea type="text" rows="5" class="form-control form-control-xl @error('iframe') is-invalid @enderror"
                                            placeholder="https://youtube.com/..." name="iframe">{{ old('iframe') }}</textarea>
                                        @error('iframe')
                                            <div class="invalid-feedback">
                                                <i class="bx bx-radio-circle"></i>
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="col-sm-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-lg btn-primary me-1 mb-1">
                                            + Tambah Video
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
