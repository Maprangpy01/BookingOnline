@extends('main')
@section('style')
.bg-regis{
    background-color: rgba(35, 31, 32, 0.9);
    background-image: url({{ asset('assets/images/bg_regis.png') }}) !important;
    background-repeat: no-repeat !important;
    background-position-y: -12pc !important;
    background-size: cover;
}
@media (max-width: 842.5px) {
    .bg-regis{
        background-position-y: 0pc !important;
    }
  }
@media (max-width: 767.5px) {
    .bg-regis{
        background-position-x: -4pc !important;
        background-position-y: 0pc !important;
    }
  }
@endsection
@section('content')
    @php
        $RegisStatus = $response['ResultData']['UserInfo']['RegisStatus'] ?? 'N';
        $SubScriptionStatus = $response['ResultData']['UserInfo']['SubScriptionStatus'] ?? 'N';
    @endphp
    <div class="container-fluid p-0">
        <div id="billboard">
            @include('components.AccountSetting.Layouts.carousel')
        </div>
    </div>
    <div class="container">
        <div id="reserve">
            @include('components.AccountSetting.template.reserve')
        </div>
        <div id="brand">
            @include('components.AccountSetting.template.brand')
        </div>
    </div>
    {{-- <div id="advertise">
    @include("components.AccountSetting.template.advertise")
</div>
<div class="container">
    <div id="interesting">
        @include("components.AccountSetting.template.interesting")
    </div>
</div> --}}
    <div id="register">
        @include('components.AccountSetting.template.register')
    </div>
    {{-- <div id="alliance">
    @include("components.AccountSetting.template.alliance")
</div> --}}
@endsection

