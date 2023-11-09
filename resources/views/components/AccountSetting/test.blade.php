@extends('components.AccountSetting.template.temp-card')
@section('content-temp')
<div>
    <h2>Test0000</h2>
    <form action="{{ route('testpost')}}" method="POST">
        @csrf
    <button class="btn btn-primary" type="submit" onclick="load()">click</button>
</form>
</div>
@endsection