@extends('layouts.app')

@section('title')
    Edit Sampah
@endsection

@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header flex-wrap">
                    <div>
                        <h4 class="card-title">@yield('title')</h4>
                    </div>
                </div>
                <div class="card-body pt-5">
                    <div class="basic-form">
                        <form action="{{ route('sampah.update', ['id' => $sampah->id]) }}" method="POST">
                            @csrf
                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label">Nama Sampah</label>
                                <div class="col-sm-9">
                                    @error('nama_sampah')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <input type="text" class="form-control" name="nama_sampah"
                                        placeholder="Contoh : Sampah Kaca" value="{{ $sampah->nama_sampah }}">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label">Kategori Sampah</label>
                                <div class="col-sm-9">
                                    @error('kategori_sampah_id')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <select name="kategori_sampah_id" id="kategori_sampah_id" class="form-control">
                                        <option value="">-- Pilih Kategori Sampah --</option>
                                        @foreach ($kategori_sampah as $kategori)
                                            <option value="{{ $kategori->id }}"
                                                {{ $sampah->kategori_sampah_id == $kategori->id ? ' selected ' : '' }}>
                                                {{ $kategori->nama_kategori }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label">Satuan</label>
                                <div class="col-sm-9">
                                    @error('satuan')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <select name="satuan" id="satuan" class="form-control">
                                        <option value="">-- Pilih Satuan --</option>
                                        <option value="kg" {{ $sampah->satuan == 'kg' ? ' selected ' : '' }}>Kg</option>
                                        <option value="buah" {{ $sampah->satuan == 'buah' ? ' selected ' : '' }}>Buah
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label">Harga/Satuan</label>
                                <div class="col-sm-9">
                                    @error('harga_satuan')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <input type="number" class="form-control" name="harga_satuan" id="harga_satuan"
                                        value="{{ $sampah->harga_per_satuan }}">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-sm-10">
                                    <a href="{{ route('kategori-sampah.index') }}" class="btn btn-light">Kembali</a>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('before-style')
    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('yash/images/favicon.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <link href="{{ asset('yash/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
@endpush

@push('after-script')
    <script src="{{ asset('yash/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
@endpush
