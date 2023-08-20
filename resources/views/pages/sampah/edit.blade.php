@extends('layouts.app')

@section('title')
    Edit Sampah
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
                            <form action="{{ route('sampah.update', ['id' => $sampah->id]) }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <p class="mg-b-10">Nama Sampah</p>
                                    <input type="text"
                                        class="form-control text-black @error('nama_sampah') is-invalid @enderror"
                                        name="nama_sampah" placeholder="Contoh: Kertas" value="{{ $sampah->nama_sampah }}">
                                    @error('nama_sampah')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <p class="mg-b-10">Kategori Sampah</p>
                                    <select name="kategori_sampah_id" id="kategori_sampah_id"
                                        class="form-control text-black @error('kategori_sampah_id') is-invalid @enderror">
                                        <option value="">-- Pilih Kategori --</option>
                                        @foreach ($kategori_sampah as $kategori)
                                            <option value="{{ $kategori->id }}"
                                                {{ $kategori->id == $sampah->kategori_sampah_id ? 'selected' : '' }}>
                                                {{ $kategori->nama_kategori }}</option>
                                        @endforeach
                                    </select>
                                    @error('kategori_sampah_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <p class="mg-b-10">Satuan</p>
                                    <input type="text"
                                        class="form-control text-black @error('satuan') is-invalid @enderror" name="satuan"
                                        placeholder="Contoh: Kg" value="{{ $sampah->satuan }}">
                                    @error('satuan')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <p class="mg-b-10">Harga Per Satuan</p>
                                    <input type="number"
                                        class="form-control text-black @error('harga_satuan') is-invalid @enderror"
                                        name="harga_satuan" placeholder="Contoh: Kertas"
                                        value="{{ $sampah->harga_per_satuan }}">
                                    @error('harga_satuan')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div>
                                    <a href="{{ route('sampah.index') }}" class="btn btn-light my-2 btn-icon-text"><i
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
