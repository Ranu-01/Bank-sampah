@extends('layouts.app')

@section('title')
    Dashboard
@endsection

@section('content')
    <div class="row">

        <div class="col-xl-12 col-lg-12">
            <div class="card overflow-hidden">
                <div class="card-header border-0 pb-0 flex-wrap">
                    <h4 class="heading mb-0">Data Pemasukan</h4>
                    <ul class="nav nav-pills mix-chart-tab" id="pills-tab" role="tablist">
                        {{-- <li class="nav-item" role="presentation">
                            <button class="nav-link active" data-series="week" id="pills-week-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-week" type="button" role="tab"
                                aria-selected="true">Week</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" data-series="month" id="pills-month-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-month" type="button" role="tab"
                                aria-selected="false">Month</button>
                        </li> --}}
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" data-series="year" id="pills-year-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-year" type="button" role="tab"
                                aria-selected="false">Tahun</button>
                        </li>
                        {{-- <li class="nav-item" role="presentation">
                            <button class="nav-link" data-series="all" id="pills-all-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-all" type="button" role="tab" aria-selected="false">All</button>
                        </li> --}}
                    </ul>
                </div>
                <div class="card-body custome-tooltip p-0">
                    <div id="overiewChart"></div>
                    <div class="ttl-project ds-chart">
                        <div class="pr-data">
                            <h5>12,721</h5>
                            <span>Number of Projects</span>
                        </div>
                        <div class="pr-data">
                            <h5 class="text-primary">721</h5>
                            <span>Active Projects</span>
                        </div>
                        <div class="pr-data">
                            <h5>$2,50,523</h5>
                            <span>Revenue</span>
                        </div>
                        <div class="pr-data">
                            <h5 class="text-success">12,275h</h5>
                            <span>Working Hours</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

@push('before-style')
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">

    <link href="{{ asset('yash/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('yash/vendor/swiper/css/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('yash/vendor/swiper/css/swiper-bundle.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('yash/cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.4/nouislider.min.css') }}">
    <link href="{{ asset('yash/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('yash/cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('yash/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
@endpush

@push('after-script')
    <script src="{{ asset('yash/vendor/chart.js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('yash/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('yash/vendor/apexchart/apexchart.js') }}"></script>
    <script src="{{ asset('yash/js/dashboard/dashboard-1.js') }}"></script>
    <script src="{{ asset('yash/vendor/draggable/draggable.js') }}"></script>
    <script src="{{ asset('yash/vendor/swiper/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('yash/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('yash/vendor/datatables/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('yash/vendor/datatables/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('yash/vendor/datatables/js/jszip.min.js') }}"></script>
    <script src="{{ asset('yash/js/plugins-init/datatables.init.js') }}"></script>
    <script src="{{ asset('yash/vendor/bootstrap-datetimepicker/js/moment.js') }}"></script>
    <script src="{{ asset('yash/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{ asset('yash/vendor/jqvmap/js/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('yash/vendor/jqvmap/js/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('yash/vendor/jqvmap/js/jquery.vmap.usa.js') }}"></script>
@endpush

{{-- ================================= bagian chart yang berisi data pemasukan dan data pengeluaran /data petugas  /data user (menggunakan diagram chart pie ) --}}
