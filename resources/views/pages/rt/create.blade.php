@extends('layouts.app')

@section('title')
    Tambah RT
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
                            <form action="{{ route('rt.store') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <p class="mg-b-10">RT</p>
                                    <input type="text" class="form-control text-black @error('rt') is-invalid @enderror"
                                        name="rt" placeholder="Contoh: 1" value="{{ old('rt') }}">
                                    @error('rt')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <p class="mg-b-10">RW</p>
                                    <select name="rw_id" id="rw_id"
                                        class="form-control text-black @error('rw_id') is-invalid @enderror">
                                        <option value="">-- Pilih RW --</option>
                                        @foreach ($rw as $r)
                                            <option value="{{ $r->id }}">{{ $r->rw }}</option>
                                        @endforeach
                                    </select>
                                    @error('rw_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div>
                                    <a href="{{ route('rt.index') }}" class="btn btn-light my-2 btn-icon-text"><i
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
