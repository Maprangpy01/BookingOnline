@extends('main')
@section('content')
    <div class="container mr-content container-card-manage">
        @include('layouts.alert')
        @include('components.AccountSetting.Layouts.carousel')

        <div class="row">
            @yield('content-temp')
        </div>
    </div>
@endsection
