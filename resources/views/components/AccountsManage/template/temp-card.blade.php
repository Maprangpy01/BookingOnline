@extends('main-authen')
@section('content')
    <script>
        document.body.style.backgroundColor = "#f3f8fe";
    </script>
    <style>
        .card {
            min-height: 25rem;
        }
    </style>
    <div class="container-fluid mr-content container-card-manage">
        @include('layouts.alert')
        <div id="head-title" class="row">
            <div class="col-md-12">
                <p class="h-title-4">
                    <strong>
                        {{ $title }}
                    </strong>
                </p>
            </div>
        </div>
        <div id="information" class="row mt-3">
            <div class="col-md-12">
                @include('components.AccountsManage.Layouts.information')
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card border-radius-15">
                    <div class="card-header bg-white border-radius-15 ct-am-pl">
                        @include('components.AccountsManage.Layouts.title-nav')
                    </div>
                    <div class="{{ Route::currentRouteName() == 'AccountsManage.LogIndex' ? '' : 'card-body ct-am-pl' }}">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="content-wrapper bg-white border-radius-15  {{ Route::currentRouteName() == 'AccountsManage.LogIndex' ? '' : 'p-4' }}" id="content-wrapper">
                                    @yield('content-temp')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
