<div class="row mt-4">
    <div class="col-md-12 text-center">
        <strong class="fnt-34">PAYMENT</strong>
    </div>

    <div class="col-md-6 fnt-20">
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                        style="margin-top: 6px">
                    <label class="form-check-label fnt-22" for="flexRadioDefault1">
                        Credit/Debit Card
                    </label>
                </div>
            </div>
            <div class="col-11 ms-3 mt-3">
                <input type="radio" class="btn-check" name="radiobtn" id="check1" autocomplete="off">
                <label class="btn btn-outline-radio me-3" for="check1" style="width: 70px;padding:3px;height:45px">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50"
                        viewBox="0 6 50 50">
                        <path fill="#ff9800" d="M32 10A14 14 0 1 0 32 38A14 14 0 1 0 32 10Z"></path>
                        <path fill="#d50000" d="M16 10A14 14 0 1 0 16 38A14 14 0 1 0 16 10Z"></path>
                        <path fill="#ff3d00"
                            d="M18,24c0,4.755,2.376,8.95,6,11.48c3.624-2.53,6-6.725,6-11.48s-2.376-8.95-6-11.48 C20.376,15.05,18,19.245,18,24z">
                        </path>
                    </svg>
                </label>
                <input type="radio" class="btn-check" name="radiobtn" id="check2" autocomplete="off">
                <label class="btn btn-outline-radio" for="check2" style="width: 70px;padding-top:6px;height:45px">
                    <img src="{{ asset('assets/images/Visa_2021.png') }}" alt="" height="20px">
                </label>
            </div>

            <div class="col-md-12 mt-3">
                <label for="">Card Number</label>
                <input class="form-control" type="text" placeholder="Card Number">
            </div>
            <div class="col-6 mt-3">
                <label for="">Expiration Date</label>
                <input class="form-control" type="text" placeholder="MM/YY">
            </div>
            <div class="col-6 mt-3">
                <label for="">CVV</label>
                <input class="form-control" type="text" placeholder="CVV">
            </div>
            <div class="col-md-12 mt-3">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                        style="margin-top: 6px">
                    <label class="form-check-label fnt-22" for="flexRadioDefault1">
                        Bank Transfer
                    </label>
                </div>
            </div>
            <div class="col-md-12 mt-3">
                <label for="">ธนาคาร</label>
                <select class="form-select" name="" id="">
                    <option value="">ธนาคาร</option>
                </select>
            </div>
            <div class="col-md-12 mt-3">
                <label for="">จำนวนเงิน</label>
                <input class="form-control" type="text" placeholder="จำนวนเงิน">
            </div>
            <div class="col-md-12 mt-3">
                <label for="">วันที่</label>
                <input class="form-control" type="text" placeholder="วันที่">
            </div>
            <div class="col-md-12 mt-3">
                <label for="">เวลา</label>
                <input class="form-control" type="text" placeholder="เวลา">
            </div>
            <div class="col-md-12 mt-3">
                <label for="">เอกสารการโอน</label>
                <div class="input-group mb-3">
                    <input type="file" class="form-control" id="inputGroupFile02" placeholder="เอกสารการโอน">
                    <label class="input-group-text" for="inputGroupFile02">Browse</label>
                </div>
            </div>

        </div>
    </div>
    <form class="col-md-6 fnt-20" id="payform" action="{{ route('Payment') }}" method="post">
        @csrf
        <div class="row mt-5 d-flex justify-content-center">
            <div class="col-md-10 text-center">
                <img src="{{ asset('assets/images/image 20.jpg') }}" alt="" width="100%"
                    class="border-radius-10">
            </div>
            <div class="col-md-10 mt-3">
                <span class="fnt-28"><strong>คอนโดบางนา A Space Mega 2</strong></span>
                <input type="hidden" name="description" class="form-control" value="คอนโดบางนา A Space Mega 2" readonly>
            </div>
            <div class="col-md-10" style="margin-top: -5px">
                <label class="fnt-24"><strong>เอ สเปซ เมกา บางนา</strong></label>
            </div>
            <div class="col-md-10 mt-1 text-gray">
                <label for="">เลขที่ห้อง : 999</label>
            </div>
            <div class="col-md-10 text-gray">
                <label for="">แบบห้อง : 2 Bedroom 97 SQ.M.</label>
            </div>
            <div class="col-md-10 text-gray">
                <label for="">โซน/ห้อง : 9th Floor</label>
            </div>
            <div class="col-md-10">
                <hr>
                <div class="row">
                    <div class="col-6 text-gray p-0">
                        <span>ยอดเงินจอง</span>
                    </div>
                    <div class="col-6 text-end p-0">
                        1000,000 THB
                    </div>
                    <div class="col-6 text-gray p-0">
                        <span>ส่วนลด</span>
                    </div>
                    <div class="col-6 text-end p-0">
                        - 25,000 THB
                    </div>
                    <div class="col-6 fnt-28 p-0">
                        <strong>ยอดรวม</strong>
                    </div>
                    <div class="col-6 fnt-34 text-end p-0">
                        <strong class="text-red">75,000 THB</strong>
                        <input type="hidden" name="amount" class="form-control" value="75000" readonly>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </form>

</div>
<style>
    .btn-check:checked+.btn,
    .btn.active,
    .btn.show,
    .btn:first-child:active,
    :not(.btn-check)+.btn:active {
        color: var(--bs-btn-active-color);
        background-color: var(--bs-btn-active-bg);
        border-color: #EC161D;
    }

    .btn-check:checked+.btn:focus-visible,
    .btn.active:focus-visible,
    .btn.show:focus-visible,
    .btn:first-child:active:focus-visible,
    :not(.btn-check)+.btn:active:focus-visible {
        box-shadow: var(--bs-btn-focus-box-shadow);
    }
</style>
