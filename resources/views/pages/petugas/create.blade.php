@extends('layouts.app')

@section('title')
    Tambah Petugas
@endsection

@push('after-script')
    <script src="{{ asset('spruha/assets/js/sticky.js') }}"></script>

    <script src="{{ asset('spruha/assets/js/themeColors.js') }}"></script>
    <script src="{{ asset('spruha/assets/js/custom.js') }}"></script>

    <script src="{{ asset('spruha/assets/switcher/js/switcher.js') }}"></script>
@endpush

@section('content')
    <!-- Page Header -->
    <div class="page-header">
        <div>
            <h2 class="main-content-title tx-24 mg-b-5">@yield('title')</h2>
        </div>
    </div>
    <!-- End Page Header -->

    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-8 col-md-12">
            <div class="card custom-card">
                <div class="card-body">
                    <div class="mb-3">
                        <h6 class="main-content-label mb-1">Form @yield('title')</h6>
                    </div>
                    <div class="row row-sm">
                        <div class="col-md-12">
                            <form action="{{ route('petugas.store') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <p class="mg-b-10">Nama Petugas</p>
                                    <input type="text"
                                        class="form-control text-black @error('nama_petugas') is-invalid @enderror"
                                        name="nama_petugas" placeholder="Contoh: Supri" value="{{ old('nama_petugas') }}">
                                    @error('nama_petugas')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <p class="mg-b-10">No Handphone</p>
                                    <input type="number"
                                        class="form-control text-black @error('handphone') is-invalid @enderror"
                                        name="handphone" placeholder="Contoh: 08123456789" value="{{ old('handphone') }}">
                                    @error('handphone')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <p class="mg-b-10">Alamat</p>
                                    <input type="text"
                                        class="form-control text-black @error('alamat') is-invalid @enderror" name="alamat"
                                        placeholder="Contoh: Jl. Doang Ga Jadian" value="{{ old('alamat') }}">
                                    @error('alamat')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <p class="mg-b-10">Email</p>
                                    <input type="email"
                                        class="form-control text-black @error('email') is-invalid @enderror" name="email"
                                        placeholder="Contoh: rans@mail.com" value="{{ old('email') }}">
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <p class="mg-b-10">Password</p>
                                    <input type="password"
                                        class="form-control text-black @error('password') is-invalid @enderror"
                                        name="password" placeholder="Contoh: ******" value="{{ old('password') }}">
                                    @error('password')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div>
                                    <a href="{{ route('petugas.index') }}" class="btn btn-light my-2 btn-icon-text"><i
                                            class="fe fe-arrow-left me-2"></i>Kembali</a>
                                    <button class="btn btn-primary my-2 btn-icon-text" type="submit"><i
                                            class="fe fe-save me-2"></i>Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->
@endsection
