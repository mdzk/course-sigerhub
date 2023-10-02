@extends('layouts.user')

@section('title', 'Dashboard')

@push('styles')
@endpush

@push('scripts')
    <script>
        function validateInput(input) {
            // Hapus semua karakter selain angka dari input
            input.value = input.value.replace(/[^0-9]/g, '');

            // Batasi panjang input menjadi maksimal 13 karakter
            if (input.value.length > 13) {
                input.value = input.value.slice(0, 13);
            }
        }
    </script>
@endpush

@section('content')
    <div class="page-content">
        <section class="row">
            <div class="col-12 col-lg-12">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Edit Data Pengguna</h4>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('dashboard-setting-update') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <h6>Nama Pengguna:</h6>
                                    <div class="form-group mb-5">
                                        <input type="text" value="{{ old('name', $user->name) }}"
                                            class="form-control form-control-xl @error('name') is-invalid @enderror"
                                            placeholder="Jonathan Patterson" name="name">
                                        @error('name')
                                            <div class="invalid-feedback">
                                                <i class="bx bx-radio-circle"></i>
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <h6>Alamat Email:</h6>
                                    <div class="form-group mb-5">
                                        <input type="email" value="{{ old('email', $user->email) }}"
                                            class="form-control form-control-xl @error('email') is-invalid @enderror"
                                            placeholder="jonathanpatters@gmail.com" name="email">
                                        @error('email')
                                            <div class="invalid-feedback">
                                                <i class="bx bx-radio-circle"></i>
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <h6>Nomor Whatsapp:</h6>
                                    <div class="form-group mb-5">
                                        <input type="number"
                                            class="form-control form-control-xl
                                            @error('nohp') is-invalid @enderror"
                                            placeholder="08562394061293" name="nohp" oninput="validateInput(this)"
                                            maxlength="13" value="{{ old('nohp', $user->nohp) }}">
                                        @error('nohp')
                                            <div class="invalid-feedback">
                                                <i class="bx bx-radio-circle"></i>
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>


                                    <h6>Foto Profil:</h6>
                                    <div class="form-group mb-5">
                                        <input type="file"
                                            class="form-control form-control-xl @error('image') is-invalid @enderror"
                                            name="image" accept=".png, .jpg, .jpeg">
                                        @error('image')
                                            <div class="invalid-feedback">
                                                <i class="bx bx-radio-circle"></i>
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <span>* Kosongkan jika tidak ingin mengganti foto</span>
                                    </div>

                                    <h6>Profil Usaha</h6>
                                    <div class="mb-5 border border-1 rounded p-4">
                                        <h6>Nama Usaha :</h6>
                                        <div class="form-group mb-4">
                                            <input type="text" placeholder="Koperasi Maju..."
                                                class="form-control form-control-xl @error('nama_usaha') is-invalid @enderror"
                                                name="nama_usaha" value="{{ old('nama_usaha', $user->nama_usaha) }}">
                                        </div>
                                        @error('nama_usaha')
                                            <div class="invalid-feedback">
                                                <i class="bx bx-radio-circle"></i>
                                                {{ $message }}
                                            </div>
                                        @enderror

                                        <h6>Bidang Usaha :</h6>
                                        <div class="form-group mb-4">
                                            <input type="text" placeholder="Pengelolaan Produk Ternak"
                                                class="form-control form-control-xl @error('bidang_usaha') is-invalid @enderror"
                                                name="bidang_usaha" value="{{ old('bidang_usaha', $user->bidang_usaha) }}">
                                        </div>
                                        @error('bidang_usaha')
                                            <div class="invalid-feedback">
                                                <i class="bx bx-radio-circle"></i>
                                                {{ $message }}
                                            </div>
                                        @enderror

                                        <h6>Deskripsi Usaha :</h6>
                                        <div class="form-group mb-4">
                                            <input type="text" placeholder="Koperasi Kami Berfokus pada Pengelolaan..."
                                                class="form-control form-control-xl @error('description') is-invalid @enderror"
                                                name="description" value="{{ old('description', $user->description) }}">
                                        </div>
                                        @error('description')
                                            <div class="invalid-feedback">
                                                <i class="bx bx-radio-circle"></i>
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <h6>Pengaturan Password</h6>
                                    <div class="mb-5 border border-1 rounded p-4">
                                        <h6>Password Baru :</h6>
                                        <div class="form-group">
                                            <input type="password"
                                                class="form-control form-control-xl @error('password') is-invalid @enderror"
                                                name="password">
                                        </div>
                                        @error('password')
                                            <div class="invalid-feedback">
                                                <i class="bx bx-radio-circle"></i>
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <span>* Kosongkan jika tidak ingin mengganti passowrd</span>
                                    </div>

                                    <div class="col-sm-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-lg btn-primary me-1 mb-1">
                                            + Edit Data
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
