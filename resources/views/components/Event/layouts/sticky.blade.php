<div class="container-fluid p-0" style="position: fixed;bottom: 0%;z-index: 1020;">
    <div class="col-lg-11 col-12 d-flex justify-content-end" style="padding-right: 25px">
        <div class="circle-button-heart" data-bs-toggle="modal" @if(session('MemberID') != '') data-bs-target="#favorite" @endif style="margin-bottom:20px;">
            <i class="bi bi-heart"></i>
            <i class="bi bi-heart-fill"></i>
        </div>
    </div>
    <div class="col-12">
        <div class="container-fluid ps-4 pe-4" style="box-shadow:0 0px 10px 2px rgba(0, 0, 0, 0.2); background:#fff;">
            <div class="col-lg-10 col-12 m-auto">
                <div class="row pt-2 pb-2">
                    <div class="col-7 p-0">
                        <span class="cost-text">จอง </span><span class="highlights-cost-text" style="color: {{$color}}">฿ 2,900</span>
                        <br><span class="sale-text" style="color: {{$color}}">฿1,700,000 </span><del class="price-text">฿1,790,000</del>
                    </div>
                    <div class="col-5 p-0 d-flex justify-content-end align-items-center">
                        <button type="button" class="btn btn-custom-primary btn-join" style="font-size: 20px;border:{{$color}};background:{{$color}}"
                            data-bs-toggle="modal" data-bs-target="#exampleModal">
                            จองได้เลย !
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>