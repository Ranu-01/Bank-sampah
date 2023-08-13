@extends('layouts.app')

@section('title')
    Edit Kategori Sampah
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
                        <form action="{{ route('kategori-sampah.update', ['id' => $data->id]) }}" method="POST">
                            @csrf
                            <div class="mb-3 row">
                                @error('nama_kategori')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <label class="col-sm-3 col-form-label">Nama Kategori Sampah</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="nama_kategori"
                                        placeholder="Contoh : Sampah Kaca" value="{{ $data->nama_kategori }}">
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
