<div class="card card-his" style="width: 175px;min-width:175px;margin:15px 6px">
    <div class="image-container">
        <img src="{{ asset($Img) }}" alt="" width="100%" height="140px" class="image-card">
    </div>
    <div class="card-body p-2" style="line-height: 22px">
        <span class="mb-0 fnt-20 text-gray1" style="line-height: 1px">{{$ProjectName}}</span><br>
        <span class="text-gray">เลขที่ห้อง : {{$UnitNo}}</span><br>
        <span class="text-gray">แบบห้อง : {{$UnitPlanName}}</span><br>
        <span class="text-gray">โซน/ชั้น : {{$UnitFloor}}</span>
    </div>
    {{-- <hr class="mt-0 mb-2 " style="border: 0.5px solid rgba(35, 31, 32, 0.25)"> --}}
    <div class="card-footer pt-2 p-2 text-center" style="background: #fff">
        <button class="btn btn-outline-main mb-1" onclick="viewPDF('{{$count}}')" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="width: 100%">ดูใบเสร็จ</button>
        <span class="text-gray">วันที่จอง : {{convertISOToDate($BookingDateTime)}}</span>
    </div>
</div>