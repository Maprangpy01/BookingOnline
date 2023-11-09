@extends('main')
@section('content')
    @include('layouts/alert')
    <div class="container-fluid mt-5">
            <div class="row justify-content:space-evenly">
                <div class="col-lg-6 text-center img-hidden mt-5 mb-5">
                    <img src="{{ asset('assets/images/no-picture-available.png') }}" alt="" width="70%"
                         class="img-logo-profile border-radius-10">
                </div>
                @yield('content-temp')
            </div>
    </div>
    <style>
        @media (max-width: 991.5px) {
        .img-hidden{
            display:none;
        }
    }
    </style>
@endsection
