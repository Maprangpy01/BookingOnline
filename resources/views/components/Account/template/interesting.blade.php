<div class="row">
    <div class="col-md-12 text-center">
        <h3>
            <strong>
                <span style="color: #EC161D">โครงการ</span> น่าสนใจ
            </strong>
        </h3>
    </div>
</div>

<div class="row row-cols-1 row-cols-md-3 g-4">
    @foreach(range(1, 6) as $index)
    <div class="col">
        <div class="card">
            <div class="image-container">
                <div class="first">
                    <div class="d-flex justify-content-end">
                        <span class="wishlist"><i class="bi bi-arrow-down-up"></i></span>
                        <span class="wishlist"><i class="bi bi-suit-heart"></i></span>
                    </div>
                </div>
                <img src="{{ asset('assets/images/image 20.jpg') }}" alt="" class="image-card">
            </div>
            <div class="card-body pb-0">
                <h4 class="mb-0"><strong>คอนโดบางนา A Space Mega 2</strong></h4>
                <h5><strong>เอ สเปซ เมกา บางนา</strong></h5>
                <label class="card-text fnt-20">Live A Mega Life คอนโดใหม่...ล่าสุด ติดห้างเมกาบางนา EARLY BIRD
                    EARLY BOOK</label>
                <h4 class="text-red"><strong>เริ่มต้น : 1.89 ล้านบาท*</strong></h4>
            </div>
            <hr class="mt-1 mb-2 ms-4 me-4" style="border: 1px solid rgba(35, 31, 32, 0.25)">
            <div class="card-body pt-0">
                <span>กำลังจะมาถึงในอีก</span>
                <div class="row">
                    <div class="col-7">
                        @include("components.Account.template.flipdown", ['countdownId' => "inter-flipdown$index"])
                    </div>
                    <div class="col-5 text-end">
                        <button class="btn btn-outline-main btn-w-100">ลงทะเบียน</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

<div class="row mt-3 justify-content-center">
    <div class="col-lg-1 col-sm-2 col-3 p-0">
        <a href="#" style="color: #000">
            <div class="row">
                <div class="col-7 text-end p-0"><strong>ดูทั้งหมด</strong></div>
                <div class="col-4 text-start p-0" style="margin-top: 3px;margin-left:3px"><i class="bi bi-arrow-right "></i></div>
            </div>
        </a>
    </div>
</div>
