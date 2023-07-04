@extends('layouts.app')

@section('title')
    Tambah Nasabah
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
                        <form>
                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label">Password</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" placeholder="Password">
                                </div>
                            </div>
                            <fieldset class="mb-3">
                                <div class="row">
                                    <label class="col-form-label col-sm-3 pt-0">Radios</label>
                                    <div class="col-sm-9">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gridRadios" value="option1"
                                                checked>
                                            <label class="form-check-label">
                                                First radio
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gridRadios"
                                                value="option2">
                                            <label class="form-check-label">
                                                Second radio
                                            </label>
                                        </div>
                                        <div class="form-check disabled">
                                            <input class="form-check-input" type="radio" name="gridRadios" value="option3"
                                                disabled>
                                            <label class="form-check-label">
                                                Third disabled radio
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="mb-3 row">
                                <div class="col-sm-3">Checkbox</div>
                                <div class="col-sm-9">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox">
                                        <label class="form-check-label">
                                            Example checkbox
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-sm-10">
                                    <a href="{{ url('/nas') }}" class="btn btn-light">Kembali</a>
                                    <button type="submit" class="btn btn-primary">Sign in</button>
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
