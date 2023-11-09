<div class="container-fluid ps-2 pe-2" id="unitProject"
    style="position: fixed;right:0;bottom: 0;z-index: 1020;box-shadow:0 0px 10px 2px rgba(0, 0, 0, 0.2); background:#fff;">
    <div class="col-lg-10 col-12 m-auto">
        <div class="row pt-2 pb-2">
            <div class="col-md-7 col-8 p-0">
                <span class="cost-text">ราคาจองเริ่มต้นที่ </span><span class="highlights-cost-text">฿ 2,900</span>
                <br><span class="sale-text">จองวันนี้ ดิวพิเศษ ฟรี 12 เดือน</span>
            </div>
            <div class="col-md-5 col-4 p-0 d-flex justify-content-end align-items-center">
                <a class="btn btn-unit-view1 "  href="#unitPJ"
                    style="font-size: 20px;color:#fff;background:{{ $color }};min-width:111px"
                    @if ($SubScriptionStatus !== 'Y') disabled @endif>
                    ดูยูนิตที่เปิดจอง
                </a>
            </div>
        </div>
    </div>
</div>
