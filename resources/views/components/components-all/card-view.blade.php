@php
if(@$color && $color == ""){
    $color ="#43A047";
}else if(@$color){
    echo("");
}else{
    $color ="#43A047";
}
if(session('MemberID') == ''){
    $colorunit = "#C70E14";
}else{
    $colorunit = $color;
}
@endphp
<style>
    .tag-red{
        background: {{$colorunit}};
    }
</style>
<div class="card">
    <div class="image-container">
        <div class="first d-grid align-content-between" style="height: 100%">
            <div class="d-flex justify-content-end">
                <img src="{{ asset('assets/images/logo01.png') }}" alt="" width="60px" height="60px"
                    class="" style="border-radius: 6px">
                {{-- <span class="wishlist"><i
                                    class="bi bi-arrow-down-up"></i></span><span class="wishlist"><i
                                        class="bi bi-suit-heart"></i></span> --}}
            </div>
            <div class="fnt-20 d-grid">
                <div class="tag-red" >
                    โครงการใหม่
                </div>
                <div class="tag-yellow">
                    #PROTIDSPEEDX3
                </div>
            </div>
        </div>
        <img src="{{ asset('assets/images/image 20.jpg') }}" alt="" width="100%" class="image-card">
    </div>
    <div class="card-body pb-0 pt-2 text-start">
        <span class="text-red fnt-34">เริ่มต้น : {{$Price}}</span><br>
        <span class="mb-0 fnt-28 text-gray1">{{$ProjectName}}</span><br>
        <span class="fnt-24 text-gray1" style="position: relative;top: -10px;">{{$PlaceName}}</span>
    </div>
    <hr class="mt-0 mb-2 ms-3 me-3" style="border: 0.5px solid rgba(35, 31, 32, 0.25)">
    <div class="card-body pt-0 pb-2 text-start">
        <span>เปิดลงทะเบียนได้แล้ววันนี้!</span>
        <div class="row">
            <div class="col-7 ps-0">
                @include("layouts.flipdown", ['id' => "flipdown-$count"])
            </div>
            <div class="col-5 mt-1 text-end pe-0">
                {{-- <button class="btn btn-success btn-w-100 btn-unit-view"
                    style="height:44px;background:#43A047;border:none">ดูยูนิตเปิดจอง</button> --}}
                <button class="btn btn-unit-view " style="color:#fff;background: {{$color}}"  @if ((Route::currentRouteName() === 'EventNewIndex'||Route::currentRouteName() === 'ProjectEventIndex') && $SubScriptionStatus == 'N') disabled @endif>
                    ดูยูนิตเปิดจอง
                </button>
            </div>
        </div>
    </div>
</div>
