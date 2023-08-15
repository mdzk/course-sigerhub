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
                                <h4>Tambah Kategori</h4>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('categories-store') }}">
                                    @csrf
                                    <h6>Nama Kategori:</h6>
                                    <div class="form-group mb-5">
                                        <input type="text"
                                            class="form-control form-control-xl @error('name_category') is-invalid @enderror"
                                            placeholder="Ekonomi ..." name="name_category">
                                        @error('name_category')
                                            <div class="invalid-feedback">
                                                <i class="bx bx-radio-circle"></i>
                                                {{ $errors->first() }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-sm-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-lg btn-primary me-1 mb-1">
                                            + Tambah Kategori
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
