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
                                <h4>Edit Kelas</h4>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('course-update', $course->id) }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <h6>Nama Kelas:</h6>
                                    <div class="form-group mb-5">
                                        <input type="text" value="{{ old('title_course', $course->title_course) }}"
                                            class="form-control form-control-xl @error('title_course') is-invalid @enderror"
                                            placeholder="Kelas Pengembangan ..." name="title_course">
                                        @error('title_course')
                                            <div class="invalid-feedback">
                                                <i class="bx bx-radio-circle"></i>
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <h6>Ketegori Kelas:</h6>
                                    <div class="form-group mb-5">
                                        <select name="id_categories" id=""
                                            class="form-control form-select form-control-xl @error('title_course') is-invalid @enderror">
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}"
                                                    @if ($category->id == $course->id_categories) selected @endif>
                                                    {{ $category->name_category }}</option>
                                            @endforeach
                                        </select>
                                        @error('id_categories')
                                            <div class="invalid-feedback">
                                                <i class="bx bx-radio-circle"></i>
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <h6>Deskripsi Kelas:</h6>
                                    <div class="form-group mb-5">
                                        <textarea type="text" rows="5" class="form-control form-control-xl @error('description') is-invalid @enderror"
                                            placeholder="Kelas Pengembangan ..." name="description">{{ old('description', $course->description) }}</textarea>
                                        @error('description')
                                            <div class="invalid-feedback">
                                                <i class="bx bx-radio-circle"></i>
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <h6>Thumbnail:</h6>
                                    <div class="form-group mb-5">
                                        <input type="file"
                                            class="form-control form-control-xl @error('thumbnail') is-invalid @enderror"
                                            name="thumbnail" accept=".png, .jpg, .jpeg">
                                        @error('thumbnail')
                                            <div class="invalid-feedback">
                                                <i class="bx bx-radio-circle"></i>
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <span>* Kosongkan jika tidak ingin mengganti thumbnail</span>
                                    </div>

                                    <div class="col-sm-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-lg btn-primary me-1 mb-1">
                                            + Tambah Kelas
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
