<div class="row mt-3 justify-content-center">
    <div class="col-10">
        <div class="row">
            <div class="col-sm-6 text-start-center">
                <h3>
                    <strong>
                        <span style="color: #EC161D">โครงการ</span> เปิดจอง
                    </strong>
                </h3>
            </div>
            <div class="col-sm-6 fnt-20 text-end-center" style="color: #EC161D">
                <i class="bi bi-arrow-left-circle"></i>
                <i class="bi bi-arrow-right-circle"></i>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="card">
                <div class="image-container">
                <div class="first">
                    <div class="d-flex justify-content-end"> <span class="wishlist"><i class="bi bi-arrow-down-up"></i></span><span class="wishlist"><i class="bi bi-suit-heart"></i></span> 
                    </div>
                </div>
                <img src="{{ asset('assets/images/image 20.jpg') }}" alt="" width="100%"
                         class="image-card">
                </div>
                <div class="card-body pb-0">
                  <h4 class="mb-0"><strong>คอนโดบางนา A Space Mega 2</strong></h4>
                  <h5><strong>เอ สเปซ เมกา บางนา</strong></h5>
                  <label class="card-text fnt-20">Live A Mega Life คอนโดใหม่...ล่าสุด ติดห้างเมกาบางนา EARLY BIRD EARLY BOOK</label>
                  <h4 class="text-red"><strong>เริ่มต้น : 1.89 ล้านบาท*</strong></h4>
                </div>
                <hr class="mt-1 mb-2 ms-4 me-4" style="border: 1px solid rgba(35, 31, 32, 0.25)">
                <div class="card-body pt-0">
                    <span>กำลังจะหมดเวลาในอีก</span>
                    <div class="row">
                        <div class="col-7"><div id="flipdown" class="flipdown"></div></div>
                        <div class="col-5 text-end">
                            <button class="btn btn-outline-main btn-w-100">ลงทะเบียน</button>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="card">
                <div class="image-container">
                <div class="first">
                    <div class="d-flex justify-content-end"> <span class="wishlist"><i class="bi bi-arrow-down-up"></i></span><span class="wishlist"><i class="bi bi-suit-heart"></i></span> 
                    </div>
                </div>
                <img src="{{ asset('assets/images/image 20.jpg') }}" alt="" width="100%"
                         class="image-card">
                </div>
                <div class="card-body pb-0">
                  <h4 class="mb-0"><strong>คอนโดบางนา A Space Mega 2</strong></h4>
                  <h5><strong>เอ สเปซ เมกา บางนา</strong></h5>
                  <label class="card-text fnt-20">Live A Mega Life คอนโดใหม่...ล่าสุด ติดห้างเมกาบางนา EARLY BIRD EARLY BOOK</label>
                  <h4 class="text-red"><strong>เริ่มต้น : 1.89 ล้านบาท*</strong></h4>
                </div>
                <hr class="mt-1 mb-2 ms-4 me-4" style="border: 1px solid rgba(35, 31, 32, 0.25)">
                <div class="card-body pt-0">
                    <span>กำลังจะหมดเวลาในอีก</span>
                    <div class="row">
                        <div class="col-7"><div id="flipdown1" class="flipdown"></div></div>
                        <div class="col-5 text-end">
                            <button class="btn btn-outline-main btn-w-100">ลงทะเบียน</button>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="card">
                <div class="image-container">
                <div class="first">
                    <div class="d-flex justify-content-end"> <span class="wishlist"><i class="bi bi-arrow-down-up"></i></span><span class="wishlist"><i class="bi bi-suit-heart"></i></span> 
                    </div>
                </div>
                <img src="{{ asset('assets/images/image 20.jpg') }}" alt="" width="100%"
                         class="image-card">
                </div>
                <div class="card-body pb-0">
                  <h4 class="mb-0"><strong>คอนโดบางนา A Space Mega 2</strong></h4>
                  <h5><strong>เอ สเปซ เมกา บางนา</strong></h5>
                  <label class="card-text fnt-20">Live A Mega Life คอนโดใหม่...ล่าสุด ติดห้างเมกาบางนา EARLY BIRD EARLY BOOK</label>
                  <h4 class="text-red"><strong>เริ่มต้น : 1.89 ล้านบาท*</strong></h4>
                </div>
                <hr class="mt-1 mb-2 ms-4 me-4" style="border: 1px solid rgba(35, 31, 32, 0.25)">
                <div class="card-body pt-0">
                    <span>กำลังจะหมดเวลาในอีก</span>
                    <div class="row">
                        <div class="col-7"><div id="flipdown2" class="flipdown"></div></div>
                        <div class="col-5 text-end">
                            <button class="btn btn-outline-main btn-w-100">ลงทะเบียน</button>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

    </div>

    <link rel="stylesheet" href="{{ asset('flipdown/flipdown.min.css') }}">
    <script src="{{ asset('flipdown/flipdown.min.js') }}"></script>

    <script>
        var time = 5400;
        var twoDaysFromNow = (new Date().getTime() / 1000) + (time) + 1;
        new FlipDown(twoDaysFromNow,"flipdown").start();
        new FlipDown(twoDaysFromNow,"flipdown1").start();
        new FlipDown(twoDaysFromNow,"flipdown2").start();
    </script>
</div>
