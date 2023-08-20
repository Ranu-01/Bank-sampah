@extends('layouts.app')

@section('title')
    RW
@endsection

@push('after-script')
    <script src="{{ asset('spruha/assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('spruha/assets/plugins/datatable/js/dataTables.bootstrap5.js') }}"></script>
    <script src="{{ asset('spruha/assets/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('spruha/assets/plugins/datatable/js/buttons.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('spruha/assets/plugins/datatable/js/jszip.min.js') }}"></script>
    <script src="{{ asset('spruha/assets/plugins/datatable/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('spruha/assets/plugins/datatable/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('spruha/assets/plugins/datatable/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('spruha/assets/plugins/datatable/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('spruha/assets/plugins/datatable/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('spruha/assets/plugins/datatable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('spruha/assets/plugins/datatable/responsive.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('spruha/assets/js/table-data.js') }}"></script>
    <script src="{{ asset('spruha/assets/js/select2.js') }}"></script>
    <script src="{{ asset('spruha/assets/js/sticky.js') }}"></script>

    <script src="{{ asset('spruha/assets/js/themeColors.js') }}"></script>
    <script src="{{ asset('spruha/assets/js/custom.js') }}"></script>

    <script src="{{ asset('spruha/assets/switcher/js/switcher.js') }}"></script>
@endpush

@section('content')
    <!-- Page Header -->
    <div class="page-header">
        <div>
            <h2 class="main-content-title tx-24 mg-b-5">RW</h2>
        </div>
        <div class="d-flex">
            <div class="justify-content-center">
                {{-- <button type="button" class="btn btn-white btn-icon-text my-2 me-2">
                    <i class="fe fe-download me-2"></i> Import
                </button>
                <button type="button" class="btn btn-white btn-icon-text my-2 me-2">
                    <i class="fe fe-filter me-2"></i> Filter
                </button> --}}
                <a href="{{ route('rw.create') }}" class="btn btn-primary my-2 btn-icon-text">
                    <i class="fe fe-plus me-2"></i> Tambah Data
                </a>
            </div>
        </div>
    </div>
    <!-- End Page Header -->

    @if (session('message'))
        <div class="alert alert-success" role="alert">
            <button aria-label="Close" class="btn-close" data-bs-dismiss="alert" type="button">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>{{ session('message') }}</strong>
        </div>
    @endif

    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card custom-card overflow-hidden">
                <div class="card-body">
                    <div class="mb-3">
                        <h6 class="main-content-label mb-1">Data RW</h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered border-bottom" id="example1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>RW</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($rw as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->rw }}</td>
                                        <td><a href="{{ route('rw.edit', ['id' => $data->id]) }}"
                                                class="btn btn-info btn-icon-text my-2 mx-1"><i
                                                    class="fe fe-edit me-2"></i>Edit</a><a
                                                href="{{ route('rw.destroy', ['id' => $data->id]) }}"class="btn btn-danger btn-icon-text my-2 mx-1"><i
                                                    class="fe fe-trash me-2"></i>Hapus</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->
@endsection
