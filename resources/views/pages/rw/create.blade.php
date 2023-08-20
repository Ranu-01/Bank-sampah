@extends('layouts.app')

@section('title')
    Tambah RW
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
                            <form action="{{ route('rw.store') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <p class="mg-b-10">RW</p>
                                    <input type="text" class="form-control text-black @error('rw') is-invalid @enderror"
                                        name="rw" placeholder="Contoh: 10" value="{{ old('rw') }}">
                                    @error('rw')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div>
                                    <a href="{{ route('rw.index') }}" class="btn btn-light my-2 btn-icon-text"><i
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
