@extends('main')
@section('content')
<div class="container">
    <div id="search" class="row d-flex justify-content-center" data-bs-spy="scroll" data-bs-target="#myScrollspy" data-bs-offset="50" >
        @include("components.AccountSetting.template.search")
    </div>
</div>
@endsection
