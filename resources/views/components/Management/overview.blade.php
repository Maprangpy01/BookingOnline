@extends('main')
@section('content')
    <script>
        document.body.style.backgroundColor = "#f3f8fe";
    </script>
    <form action="" method="post">
        <div class="container-fluid mr-content container-card-manage">
            <div class="row">
                <div class="col-md-9">
                    <p class="h-title-4">
                        <strong>
                        </strong>
                    </p>
                </div>
                <div class="col-md-3 text-end">
                    <div class="row">
                        <div class="col-md-6">
                            {{-- <button class="btn btn-primary btn-w-max btn-w-mb">
                                ยืนยัน
                            </button>
                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-outline-primary btn-w-max btn-w-mb">
                                ยกเลิก
                            </button> --}}
                        </div>
                    </div>
                </div>
            </div>
            @csrf
            <div class="row mt-4">
                <div class="col-md-9 mb-3">
                    <div class="row">
                        {{-- @include('components.ManageMembershipPackages.Layouts.title-nav') --}}
                    </div>
                    <div class="row">
                        @yield('content-temp')
                    </div>
                </div>
                <div class="col-md-3">
                    {{-- @include('components.ManageMembershipPackages.Layouts.display-report') --}}
                </div>
            </div>
        </div>
    </form>
@endsection
@section('content-temp')
@endsection
