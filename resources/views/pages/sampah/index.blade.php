@extends('layouts.app')

@section('title')
    Data Sampah
@endsection

@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header flex-wrap">
                    <div>
                        <h4 class="card-title">Data Sampah</h4>
                    </div>
                    <a href="{{ route('sampah.create') }}" class="btn btn-primary">Tambah</a>
                </div>
                <div class="card-body pt-5">
                    <div class="table-responsive">
                        <table id="example" class="display table" style="min-width: 845px">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Sampah</th>
                                    <th>Kategori</th>
                                    <th>Satuan</th>
                                    <th>Harga/Satuan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($sampah as $data)
                                    <tr>
                                        <td>
                                            {{ $no++ }}
                                        </td>
                                        <td>
                                            {{ $data->nama_sampah }}
                                        </td>
                                        <td>
                                            {{ $data->kategorisampah->nama_kategori }}
                                        </td>
                                        <td>
                                            {{ $data->satuan }}
                                        </td>
                                        <td>
                                            {{ 'Rp ' . number_format($data->harga_per_satuan, 0, '', '.') . '/' . $data->satuan }}
                                        </td>
                                        <td>
                                            <a href="{{ route('sampah.edit', ['id' => $data->id]) }}"
                                                class="btn btn-success">Edit</a>
                                            <a href="{{ route('sampah.destroy', ['id' => $data->id]) }}"
                                                class="btn btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Sampah</th>
                                    <th>Kategori</th>
                                    <th>Satuan</th>
                                    <th>Harga/Satuan</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
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
    <!-- Datatable -->
    <link href="{{ asset('yash/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('yash/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
@endpush

@push('after-script')
    <script src="{{ asset('yash/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('yash/js/plugins-init/datatables.init.js') }}"></script>
@endpush
