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
                                <h4>Tambah Kelas</h4>
                            </div>
                            <div class="card-body">
                                <form action="">
                                    <h6>Nama Kelas:</h6>
                                    <div class="form-group mb-5">
                                        <input type="text" class="form-control form-control-xl"
                                            placeholder="Kelas Pengembangan ..." name="title_course">
                                    </div>
                                    <h6>Ketegori Kelas:</h6>
                                    <div class="form-group mb-5">
                                        <select name="id_categories" id=""
                                            class="form-control form-select form-control-xl">
                                            <option value="" selected disabled>Pilih Kategori</option>
                                            <option value="">Keuangan</option>
                                            <option value="">Penulisan</option>
                                        </select>
                                    </div>
                                    <h6>Deskripsi Kelas:</h6>
                                    <div class="form-group mb-5">
                                        <textarea type="text" rows="5" class="form-control form-control-xl" placeholder="Kelas Pengembangan ..."
                                            name="title_course"></textarea>
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
