@extends('layouts.app')

@section('title')
    Data Nasabah
@endsection

@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header flex-wrap">
                    <div>
                        <h4 class="card-title">Data Nasabah</h4>
                    </div>
                    <a href="{{ url('/tambah-nasabah') }}" class="btn btn-primary">Tambah</a>
                </div>
                <div class="card-body pt-5">
                    <div class="table-responsive">
                        <table id="example" class="display table" style="min-width: 845px">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>No Kartu Keluarga</th>
                                    <th>Email</th>
                                    {{-- <th></th> --}}
                                    <th>Penghasilan</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>3098637928387</td>
                                    <td>Contoh@gmail.com </td>
                                    {{-- <td>61</td> --}}
                                    <td>27000 / bulan</td>
                                    <td>
                                        <a href="" class="btn btn-success">Edit</a>
                                        <a href="" class="btn btn-danger">Hapus</a>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Nama</th>
                                    <th>No Kartu Keluarga</th>
                                    <th>Email</th>
                                    {{-- <th>Age</th> --}}
                                    <th>Penghasilan</th>
                                    <th>Edit</th>
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
