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
                        <button class="nav-link" data-series="year" id="pills-year-tab" data-bs-toggle="pill" data-bs-target="#pills-year" type="button" role="tab" aria-selected="false">Tahun</button>
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
<div class="col-xl-3 col-sm-6">
    <div class="card">
        <div class="card-body">
            <div class="d-flex align-items-center justify-content-between">
                <div class="icon-box icon-box-lg bg-danger-light rounded-circle">
                    <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M34.0396 20.974C36.6552 20.6065 38.6689 18.364 38.6746 15.6471C38.6746 12.9696 36.7227 10.7496 34.1633 10.3296" stroke="#FF5E5E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        </path>
                        <path d="M37.4912 27.262C40.0243 27.6407 41.7925 28.5276 41.7925 30.3557C41.7925 31.6139 40.96 32.4314 39.6137 32.9451" stroke="#FF5E5E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        </path>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M22.7879 28.0373C16.7616 28.0373 11.6147 28.9504 11.6147 32.5973C11.6147 36.2423 16.7297 37.1817 22.7879 37.1817C28.8141 37.1817 33.9591 36.2779 33.9591 32.6292C33.9591 28.9804 28.846 28.0373 22.7879 28.0373Z" stroke="#FF5E5E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        </path>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M22.7876 22.8325C26.742 22.8325 29.9483 19.6281 29.9483 15.6719C29.9483 11.7175 26.742 8.51123 22.7876 8.51123C18.8333 8.51123 15.627 11.7175 15.627 15.6719C15.612 19.6131 18.7939 22.8194 22.7351 22.8325H22.7876Z" stroke="#FF5E5E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        </path>
                        <path d="M11.5344 20.974C8.91691 20.6065 6.90504 18.364 6.89941 15.6471C6.89941 12.9696 8.85129 10.7496 11.4107 10.3296" stroke="#FF5E5E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        </path>
                        <path d="M8.0825 27.262C5.54937 27.6407 3.78125 28.5276 3.78125 30.3557C3.78125 31.6139 4.61375 32.4314 5.96 32.9451" stroke="#FF5E5E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        </path>
                    </svg>
                </div>
                <div class="total-projects ms-3">

                    <span>Total Daur Ulang</span>
                    <h3 class="text-danger count">5,855k</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-3 col-sm-6">
    <div class="card">
        <div class="card-body">
            <div class="d-flex align-items-center justify-content-between">
                <a href="{{ url('/sampah') }}" aria-expanded="false">
                    <div class="icon-box icon-box-lg bg-primary-light rounded-circle">
                        <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M32.8961 26.5849C34.1612 26.5849 35.223 27.629 35.0296 28.8783C33.8947 36.2283 27.6026 41.6855 20.0138 41.6855C11.6178 41.6855 4.8125 34.8803 4.8125 26.4862C4.8125 19.5704 10.0664 13.1283 15.9816 11.6717C17.2526 11.3579 18.5553 12.252 18.5553 13.5605C18.5553 22.4263 18.8533 24.7197 20.5368 25.9671C22.2204 27.2145 24.2 26.5849 32.8961 26.5849Z" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M41.1733 19.2019C41.2739 13.5059 34.2772 4.32428 25.7509 4.48217C25.0877 4.49402 24.5568 5.04665 24.5272 5.70783C24.3121 10.3914 24.6022 16.4605 24.764 19.2118C24.8134 20.0684 25.4864 20.7414 26.341 20.7907C29.1693 20.9526 35.4594 21.1736 40.0759 20.4749C40.7035 20.3802 41.1634 19.8355 41.1733 19.2019Z" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                        </svg>
                </a>
            </div>
            <div class="total-projects ms-3">
                <span>Rata-Rata Sampah</span>
                <h3 class="text-primary count">90 Kg/2 day</h3>
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