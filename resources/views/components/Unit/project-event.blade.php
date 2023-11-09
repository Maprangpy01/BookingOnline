@extends('main')
@php
    $color = '#C70E14';
    // $color = "#43A047";
@endphp
@section('style')
    .btn-custom-primary {
    --bs-btn-color: #fff;
    --bs-btn-bg: #C70E14; /* Updated background color */
    --bs-btn-border-color: #C70E14; /* Updated border color */
    --bs-btn-hover-color: #fff;
    --bs-btn-hover-bg: #BB0B11; /* Adjusted hover background color */
    --bs-btn-hover-border-color: #BB0B11; /* Adjusted hover border color */
    --bs-btn-focus-shadow-rgb: 199, 14, 20; /* Adjusted focus shadow color */
    --bs-btn-active-color: #fff;
    --bs-btn-active-bg: #93080C; /* Adjusted active background color */
    --bs-btn-active-border-color: #93080C; /* Adjusted active border color */
    --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
    --bs-btn-disabled-color: #fff;
    --bs-btn-disabled-bg: #C70E14; /* Updated disabled background color */
    --bs-btn-disabled-border-color: #C70E14; /* Updated disabled border color */
    }

    .btn-custom-warning {
    --bs-btn-color: #fff;
    --bs-btn-bg: #FAA613; /* Updated background color */
    --bs-btn-border-color: #FAA613; /* Updated border color */
    --bs-btn-hover-color: #fff;
    --bs-btn-hover-bg: #E1930B; /* Adjusted hover background color */
    --bs-btn-hover-border-color: #E1930B; /* Adjusted hover border color */
    --bs-btn-focus-shadow-rgb: 250, 166, 19; /* Adjusted focus shadow color */
    --bs-btn-active-color: #fff;
    --bs-btn-active-bg: #B87108; /* Adjusted active background color */
    --bs-btn-active-border-color: #B87108; /* Adjusted active border color */
    --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
    --bs-btn-disabled-color: #fff;
    --bs-btn-disabled-bg: #FAA613; /* Updated disabled background color */
    --bs-btn-disabled-border-color: #FAA613; /* Updated disabled border color */
    }

    .img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    }

    .btn-circle {
    color: #FFF;
    border-radius: 50%;
    background-color: rgba(35, 31, 32, 0.50);
    border: 1px solid rgba(255, 255, 255, 0.25);
    width: 40px;
    height: 40px;
    }

    .card-title {
    color: #B11116;
    text-align: center;
    /* H2 */
    font-size: 40px;
    font-style: normal;
    font-weight: 700;
    line-height: 100%; /* 40px */
    }

    .btn-custom-primary {
    font-size: 18px;
    font-style: normal;
    font-weight: 700;
    line-height: 120%; /* 21.6px */
    letter-spacing: 0.5px
    }

    .btn-custom-warning {
    font-size: 18px;
    font-style: normal;
    font-weight: 700;
    line-height: 120%; /* 21.6px */
    letter-spacing: 0.5px;
    }

    .event-detail {
    top: -40px;
    width: 100%;
    border-radius: 30px 30px 0px 0px;
    }

    .over-detail {
    color: #CBC4C7;
    font-size: 20px;
    font-style: normal;
    font-weight: 500;
    line-height: 120%; /* 24px */
    letter-spacing: 0.5px;
    }

    .highlights {
    color: #B11116;
    font-size: 20px;
    font-style: normal;
    font-weight: 500;
    line-height: 120%; /* 24px */
    letter-spacing: 0.2px;
    }

    .description {
    color: var(--text-text-promary, #3A3536);
    font-size: 20px;
    font-style: normal;
    font-weight: 500;
    line-height: 120%; /* 24px */
    letter-spacing: 0.2px;
    }

    .commingsoon-text {
    color: var(--text-text-promary, #3A3536);
    font-size: 16px;
    font-style: normal;
    font-weight: 400;
    line-height: 120%; /* 19.2px */
    letter-spacing: 0.5px;
    }

    .cost-text {
    color: var(--link-link, #554C4F);
    font-size: 28px;
    font-style: normal;
    font-weight: 500;
    line-height: 120%; /* 33.6px */
    }

    .highlights-cost-text {
    color: var(--neutral-neutral-006, #C70E14);

    /* H3 */
    font-size: 34px;
    font-style: normal;
    font-weight: 500;
    line-height: 120%;
    }

    .sale-text {
    color: var(--neutral-neutral-006, #C70E14);

    /* H5 */
    font-size: 24px;
    font-style: normal;
    font-weight: 500;
    line-height: 120%;
    letter-spacing: 0.5px;
    }

    .price-text {
    color: var(--text-text-secondary, #CBC4C7);
    font-size: 20px;
    font-style: normal;
    font-weight: 500;
    line-height: 120%;
    letter-spacing: 0.3px;
    text-decoration-line: strikethrough;
    text-transform: uppercase;
    }

    .btn-join {
    width: 120px;
    height: 52px;
    padding: 10px 12px;
    justify-content: center;
    align-items: center;
    gap: 10px;
    flex-shrink: 0;
    }

    .promo-text {
    color: var(--primary, #B11116);

    /* H4 */
    font-size: 28px;
    font-style: normal;
    font-weight: 500;
    line-height: 120%; /* 33.6px */
    }

    .promo-description {
    color: var(--text-text-promary, #3A3536);

    /* Body 01 */
    font-size: 20px;
    font-style: normal;
    font-weight: 500;
    line-height: 120%; /* 24px */
    letter-spacing: 0.2px;
    }

    .map-text {
    color: var(--neutral-neutral-006, #C70E14);

    /* H4 */
    font-size: 28px;
    font-style: normal;
    font-weight: 500;
    line-height: 120%; /* 33.6px */
    }

    .map-description {
    color: var(--text-text-promary, #3A3536);

    /* H4 */
    font-size: 28px;
    font-style: normal;
    font-weight: 500;
    line-height: 120%; /* 33.6px */
    }

    .map-img, .room-img {
    width: inherit;
    }

    .album-text {
    color: var(--link-link-active, #C70E14);
    text-align: center;

    /* H4 */
    font-size: 28px;
    font-style: normal;
    font-weight: 500;
    line-height: 120%; /* 33.6px */
    }

    .form-select {
    color: var(--text-text-secondary, #CBC4C7);

    /* Body 01 */
    font-size: 20px;
    font-style: normal;
    font-weight: 500;
    line-height: 120%; /* 24px */
    letter-spacing: 0.2px;
    }

    .qa {
    background: var(--neutral-neutral-005, rgba(35, 31, 32, 0.05));
    }

    .qa-text {
    color: var(--text-text-promary, #3A3536);
    text-align: center;

    /* H4 */
    font-size: 28px;
    font-style: normal;
    font-weight: 500;
    line-height: 120%; /* 33.6px */
    }

    .accordion-button {
    color: var(--link-link, #554C4F);

    /* H4 */
    font-size: 28px;
    font-style: normal;
    font-weight: 500;
    line-height: 120%; /* 33.6px */
    }

    .accordion-body {
    color: var(--text-text-promary, #3A3536);

    /* Text Button */
    font-size: 20px;
    font-style: normal;
    font-weight: 500;
    line-height: 120%; /* 24px */
    letter-spacing: 0.3px;
    text-transform: uppercase;
    }

    .accordion-button:not(.collapsed) {
    color: var(--text-text-promary, #3A3536);
    background: var(--neutral-neutral-005, rgba(35, 31, 32, 0.05));
    box-shadow: inset 0 calc(-1 * var(--bs-accordion-border-width)) 0 var(--bs-accordion-border-color);
    }

    .name-text {
    color: var(--secondary, #463F41);
    text-align: center;

    /* H4 */
    font-size: 28px;
    font-style: normal;
    font-weight: 500;
    line-height: 120%; /* 33.6px */
    }

    .sub-name-text {
    color: var(--secondary, #463F41);

    /* H5 */
    font-size: 24px;
    font-style: normal;
    font-weight: 500;
    line-height: 120%;
    letter-spacing: 0.5px;
    }

    .contact {
    color: var(--secondary, #463F41);

    /* H5 */
    font-size: 24px;
    font-style: normal;
    font-weight: 500;
    line-height: 120%; /* 28.8px */
    letter-spacing: 0.5px;
    }

    .contact-address {
    color: var(--secondary, #463F41);

    /* Body 01 */
    font-size: 20px;
    font-style: normal;
    font-weight: 500;
    line-height: 120%; /* 24px */
    letter-spacing: 0.2px;
    }

    .svg {
    width: 20px;
    height: 20px;
    flex-shrink: 0;
    }

    .unit-another-header {
    color: var(--primary, #B11116);
    text-align: center;

    /* H4 */
    font-size: 28px;
    font-style: normal;
    font-weight: 500;
    line-height: 120%; /* 33.6px */
    }

    .unit-another-header-nd {
    color: var(--secondary, #463F41);

    /* H4 */
    font-size: 28px;
    font-style: normal;
    font-weight: 500;
    line-height: 120%;
    }

    .unit-logo {
    width: 60px;
    height: 60px;
    flex-shrink: 0;
    }

    .text-header {
    color: var(--secondary, #463F41);
    text-align: center;

    /* H4 */
    font-size: 28px;
    font-style: normal;
    font-weight: 500;
    line-height: 120%; /* 33.6px */
    }

    .text-name {
    color: var(--link-link, #554C4F);

    /* H4 */
    font-size: 28px;
    font-style: normal;
    font-weight: 500;
    line-height: 120%; /* 33.6px */
    }

    .text-book {
    color: var(--neutral-neutral-006, #C70E14);
    text-align: right;

    /* H4 */
    font-size: 28px;
    font-style: normal;
    font-weight: 500;
    line-height: 120%; /* 33.6px */
    }

    .text-sale {
    color: var(--link-link, #554C4F);

    /* H5 */
    font-size: 24px;
    font-style: normal;
    font-weight: 500;
    line-height: 120%; /* 28.8px */
    letter-spacing: 0.5px;
    }

    .text-price {
    color: var(--text-text-secondary, #CBC4C7);
    text-align: right;
    font-size: 20px;
    font-style: normal;
    font-weight: 500;
    line-height: 120%; /* 24px */
    letter-spacing: 0.5px;
    text-decoration-line: strikethrough;
    }

    .form-check-label {
    color: var(--text-text-promary, #3A3536);

    /* Body Base */
    font-size: 16px;
    font-style: normal;
    font-weight: 400;
    line-height: 120%; /* 19.2px */
    letter-spacing: 0.5px;
    }

    .modal-footer {
    align-items: normal;
    }

    .img-compare {
    width: 70px;
    height: 70px;
    object-fit: cover;
    border-radius: 5px;
    }

    .btn-map {
    height: 60px;
    color: #fff;
    background: #43A047;
    display: inline-flex;
    width: 100%;
    justify-content: center;
    align-items: center;
    }

    .detail-event {
    background: #fff;
    border-radius: 30px 30px 0 0;
    position: relative;
    top: -40px;
    }

    .circle-button-heart {
    background: #231F2080;
    color: #fff;
    border-radius: 50%;
    height: 60px;
    width: 60px;
    padding-top: 9px;
    padding-left: 10px;
    font-size: 40px;
    box-shadow: 0px 4px 10px 0px rgba(0, 0, 0, 0.25);
    }

    .circle-button-heart:hover .bi-heart,
    .circle-button-heart .bi-heart-fill {
    display: none;
    }

    .circle-button-heart:hover .bi-heart-fill {
    display: inline;
    color: #C70E14;
    }

    .circle-button-heart-color {
    background: #231F2080;
    color: #C70E14;
    border-radius: 50%;
    height: 60px;
    width: 60px;
    padding-top: 9px;
    padding-left: 10px;
    font-size: 40px;
    }

    .circle-button {
    background: #999;
    color: #fff;
    border-radius: 50%;
    height: 50px;
    width: 50px;
    padding-top: 9px;
    padding-left: 10px;
    }

    .fillter {
    height: 34px;
    border: #CBC4C7 1px solid;
    border-radius: 10px;
    width: 109px;
    margin-left: 8px;
    display: inline-flex;
    justify-content: center;
    background: none;
    color: #CBC4C7;
    }

    .facilities {
    height: 100px;
    width: 100px;
    border-radius: 50%;
    background: #fff;
    margin: auto;
    padding-top: 30px;
    }

    .tarvel-circle {
        height: 100px;
        width: 100px;
        border-radius: 50%;
        background: #463F41;
        margin: auto;
        padding-top: 18px;
        color:#fff;
    }

    .floor-status-text {
    color: var(--text-text-promary, #3A3536);
    font-size: 20px;
    font-style: normal;
    font-weight: 500;
    line-height: 120%; /* 24px */
    letter-spacing: 0.2px;
    }

    .modal-text-secondary {
    color: var(--text-text-secondary, #CBC4C7);
    font-size: 20px;
    font-style: normal;
    font-weight: 500;
    line-height: 120%; /* 24px */
    letter-spacing: 0.5px;
    }

    .modal-text-h4 {
    color: var(--link-link, #554C4F);

    /* H4 */
    font-size: 28px;
    font-style: normal;
    font-weight: 500;
    line-height: 120%; /* 33.6px */
    }

    .modal-text-h5 {
    color: var(--link-link, #554C4F);

    /* H5 */
    font-size: 24px;
    font-style: normal;
    font-weight: 500;
    line-height: 120%; /* 28.8px */
    letter-spacing: 0.5px;
    }

    .modal-text-primary-h5 {
    color: var(--neutral-neutral-006, #C70E14);

    /* H5 */
    font-size: 24px;
    font-style: normal;
    font-weight: 500;
    line-height: 120%; /* 28.8px */
    letter-spacing: 0.5px;
    }
    .btn-check:checked+.btn,
    .btn.active,
    .btn.show,
    .btn:first-child:active,
    :not(.btn-check)+.btn:active {
    color: {{ $color }};
    background-color: var(--bs-btn-active-bg);
    border-color: {{ $color }};
    }

    .btn-check:checked+.btn:focus-visible,
    .btn.active:focus-visible,
    .btn.show:focus-visible,
    .btn:first-child:active:focus-visible,
    :not(.btn-check)+.btn:active:focus-visible {
    box-shadow: var(--bs-btn-focus-box-shadow);
    }

    .section-travel {
    background: {{ $color }}40 ;
    {{-- background-image: url({{asset('assets/images/vector_g.png')}}) !important; --}}
    background-image: url({{ asset('assets/images/Maskgroup1.png') }}) !important;
    background-repeat: no-repeat !important;
    background-position-y: 13pc !important;
    }
    .section-contact-document {
    background: {{ $color }}40 ;
    background-image: url({{ asset('assets/images/vector_g2_3.png') }}) !important;
    background-repeat: repeat-x !important;
    background-size: contain !important;
    background-position-y: 15pc !important;
    }
    .owl-dots{
    display:none;
    }
@endsection

@section('content')
    @php
        $RegisStatus = $response['ResultData']['UserInfo']['RegisStatus'] ?? 'N';
        $SubScriptionStatus = $response['ResultData']['UserInfo']['SubScriptionStatus'] !== 'N' ? $response['ResultData']['UserInfo']['SubScriptionStatus'] : session('SubScriptionStatus') ?? 'N';
        
    @endphp
    @include('components.Unit.layout.sticky')
    <div class="row d-flex justify-content-center mt-5">
        <div class="col-md-12" style="padding-left: inherit; padding-right: inherit;">
            <div class="image-container image-header">
                <div class="img">
                    <img src="{{ asset('assets/images/image 54.png') }}" alt="">
                </div>
                
            </div>
        </div>
        <div class="col-lg-10 col-md-12" style="padding-left: inherit; padding-right: inherit;">
            <div class="card event-detail ms-0 me-0" style="border: none;">
                <div class="card-body" style="padding-left: inherit; padding-right: inherit;">
                    <div class="container-fluid ps-0 pe-0 text-center">
                        @include('components.Unit.layout.header')

                        <div class="row d-flex justify-content-center mt-3" style="padding-left: 16px;padding-right:16px" id="subscript">
                            @if ($RegisStatus == 'N' && $SubScriptionStatus == 'N')
                                <div class="col-lg-12 col-md-12 ps-0 pe-0" id="Guest">
                                    <div class="card card-subscription m-auto w-100">
                                        <div class="card-body text-center d-flex justify-content-center">
                                            <div class="col-lg-4" style="min-width: 280px">
                                                <span class="text-subscription-header">ลงทะเบียนรับสิทธิพิเศษ</span>
                                                <div class="row g-2">
                                                    <div class="col-md-12 text-start" id="TelSection">
                                                        <div class="form-group">
                                                            <label class="form-label label-subscription"
                                                                for="Tel">เบอร์โทรศัพท์</label>
                                                            <input type="text" class="form-control" name="Tel"
                                                                id="Tel" placeholder="0X-XXXX-XXXX">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-sm-10 text-center" id="PrivacySection">
                                                        <input class="form-check-input me-2 check-box-subscription"
                                                            type="checkbox" name="" id="PrivacyStatus"
                                                            class="me-1">
                                                        <label class="fnt-16" for="">ยินยอมรับข้อตกลงข้อมูลส่วนบุคคล
                                                            (Privacy
                                                            Notice)</label>
                                                    </div>
                                                    <div class="col-md-12 d-grid gap-2">
                                                        <button type="button" class="btn btn-main btn-subscription"
                                                            id="btn-subscription"
                                                            onclick="subscription()">ลงทะเบียน</button>
                                                    </div>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="SubscriptionModal" tabindex="-1"
                                                        aria-labelledby="SubscriptionModalLabel" aria-hidden="true">
                                                        <div
                                                            class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                                            <div class="modal-content">
                                                                <div class="modal-body">
                                                                    <span
                                                                        class="text-subscription-header">ลงทะเบียนรับสิทธิพิเศษ</span>
                                                                    <div class="row g-2">
                                                                        <div class="col-md-12 text-start">
                                                                            <div class="form-group mb-2">
                                                                                <label class="form-label label-subscription"
                                                                                    for="FullName">ชื่อ -
                                                                                    นามสกุล</label>
                                                                                <input type="text" class="form-control"
                                                                                    name="FullName" id="FullName"
                                                                                    placeholder="ชื่อ - นามสกุล">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="form-label label-subscription"
                                                                                    for="Email">อีเมล</label>
                                                                                <input type="text" class="form-control"
                                                                                    name="Email" id="Email"
                                                                                    placeholder="yourname@email.com">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6 mt-2 text-start"
                                                                            id="InterestSection">
                                                                            <strong>โครงการที่หน้าสนใจ</strong>
                                                                            <table class="mt-2">
                                                                                <tbody>
                                                                                    @foreach (range(1, 3) as $index)
                                                                                        <tr>
                                                                                            <td valign="middle">
                                                                                                <input
                                                                                                    class="form-check-input me-2"
                                                                                                    type="checkbox"
                                                                                                    name=""
                                                                                                    id="">
                                                                                            </td>
                                                                                            <td>
                                                                                                <img src="{{ asset('assets/images/image 20.jpg') }}"
                                                                                                    alt=""
                                                                                                    width="75px"
                                                                                                    height="75px"
                                                                                                    class="p-0 rounded-1 me-3" style="object-fit: cover">
                                                                                            </td>
                                                                                            <td>
                                                                                                <strong>คอนโดมิเนียม เดอะ
                                                                                                    สเตจ
                                                                                                    มายด์สเคป</strong>
                                                                                                <br>
                                                                                                <span class="fnt-16">รัชดา
                                                                                                    -
                                                                                                    ห้วยขวาง</span>
                                                                                            </td>
                                                                                        </tr>
                                                                                    @endforeach
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                        <div class="col-md-12 d-grid gap-2 mt-3">
                                                                            <button
                                                                                class="btn btn-main btn-confirm-subscription">ลงทะเบียน</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @elseif ($RegisStatus == 'Y' && $SubScriptionStatus == 'N')
                                <div class="col-lg-12 col-md-12 ps-0 pe-0" id="Member">
                                    <div class="card card-subscription w-100 m-auto" style="min-width:335px;">
                                        <div class="card-body text-center d-flex justify-content-center">
                                            <div class="col-lg-4" style="min-width: 280px">
                                                <span class="text-subscription-header">ลงทะเบียนรับสิทธิพิเศษ</span>
                                                <div class="row g-2">
                                                    <div class="col-md-12 col-sm-10 text-center" id="PrivacySection">
                                                        <input class="form-check-input me-2" type="checkbox"
                                                            name="" id="privacyCheckbox" class="me-1">
                                                        <label class="fnt-16"
                                                            for="">ยินยอมรับข้อตกลงข้อมูลส่วนบุคคล
                                                            (Privacy
                                                            Notice)</label>
                                                    </div>
                                                    <div class="col-md-6 mt-2 event-interest text-start"
                                                        id="eventInterestSection">
                                                        <strong>โครงการที่หน้าสนใจ</strong>
                                                        <table>
                                                            <tbody>
                                                                @foreach (range(1, 3) as $index)
                                                                    <tr>
                                                                        <td valign="middle">
                                                                            <input class="form-check-input me-2"
                                                                                type="checkbox" name=""
                                                                                id="">
                                                                        </td>
                                                                        <td>
                                                                            <img src="{{ asset('assets/images/image 20.jpg') }}"
                                                                                alt="" width="75px"
                                                                                height="75px" class="p-0 rounded-1 me-3">
                                                                        </td>
                                                                        <td>
                                                                            <strong>คอนโดมิเนียม เดอะ สเตจ
                                                                                มายด์สเคป</strong>
                                                                            <br>
                                                                            <span class="fnt-16">รัชดา - ห้วยขวาง</span>
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="col-md-12 d-grid gap-2">
                                                        <button
                                                            class="btn btn-main btn-confirm-subscription">ลงทะเบียน</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="col-lg-12 col-md-12 ps-0 pe-0 text-center" id="Customer">
                                    <div class="card card-subscription card-subscripted m-auto w-100"
                                        style="min-width:280px;">
                                        <div class="card-body">
                                            <span class="text-subscription-header">ลงทะเบียนรับสิทธิพิเศษ</span>
                                            <div class="row mt-3">
                                                <div class="col-md-12">
                                                    <span
                                                        class="text-subscripted">ท่านได้ทำการลงทะเบียนเรียบร้อยแล้ว</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                    @if ($SubScriptionStatus === 'Y')
                        @include('components.Unit.layout.unit-subscription')
                    @endif

                    {{-- Subscripted section --}}
                    <div class="subscripted-section">
                        @if ($SubScriptionStatus === 'N')
                            @include('components.Unit.layout.unit-subscription')
                        @endif
                    </div>
                    {{-- End Subscripted section --}}
                    <div class="container ps-0 pe-0 text-center">
                        <div class="container p-0 mt-5">
                            <div class="row">
                                <div class="col-12 text-center fnt-28">
                                    <strong>
                                        <span style="color: #B11116">โครงการ</span> น่าสนใจ
                                    </strong>
                                </div>
                            </div>

                            <div class="row justify-content-center">
                                @php
                                    $count = 0;
                                @endphp
                                @foreach (range(4, 9) as $index)
                                    @php
                                        $ProjectImg = '';
                                        $ProjectName = 'คอนโดมิเนียม เดอะ สเตจ มายด์สเคป';
                                        $Price = '3.19 ล้านบาท*';
                                        $PlaceName = 'รัชดา - ห้วยขวาง';
                                        $count = $count + 1;
                                    @endphp
                                    @if ($count > 6)
                                        <div hidden>
                                            @include('components.components-all.card-view')
                                        </div>
                                    @else
                                        @include('components.components-all.card-view')
                                    @endif
                            @endforeach
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    {{-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.0/dist/jquery.min.js"></script> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script>
        $(document).ready(function() {
            markPoints();

            $(".subscripted-section").hide();

            $(".btn-unit-view").click(function() {
                window.location.href = "{{ route('event') }}";
            });
        });

        function markPoints(){
            const imageContainer = $('.image-container');
            const markPoints = $('#markPoints');
            const pointPositions = [
                [
                    18.07020283025563,
                    57.599500369045586,
                    'success'
                ],
                [
                    17.88852142563127,
                    48.757546509207216,
                    'warning'
                ],
                [
                    17.797680723319093,
                    39.431102026911944,
                    'success'
                ],
                [
                    17.615999318694733,
                    29.135676299702872,
                    'warning'
                ],
                [
                    17.88852142563127,
                    19.08249588372225,
                    'success'
                ]
            ]; //[]; // Store point positions as percentages [x, y]

            const existingPoint = $('.point');
            if (existingPoint.length) {
                return;
            }

            function createPoint(x, y, color, id) {
                let status;
                if (color) {
                    status = color;
                } else {
                    status = 'success'
                }
                const point = $('<div></div>');
                point.addClass('point ' + status);
                // point.attr('id', id);
                point.css('left', x + '%');
                point.css('top', y + '%');
                markPoints.append(point);

                point.click(function(event) {
                    event.stopPropagation(); // Prevent click event from propagating to the image

                    // Remove class in btn
                    $('.btn-modal').removeClass('btn-lemon btn-custom-warning btn-custom-primary');

                    // Add class in btn
                    if (color === 'success') {
                        $('.floor-status-modal')[0].innerHTML =
                            '<circle cx="5" cy="5" r="5" fill="#43A047" />';
                        $('.floor-status-text').text('เปิดจอง');
                        $('.btn-modal').addClass('btn-lemon');
                    } else if (color === 'warning') {
                        $('.floor-status-modal')[0].innerHTML =
                            '<circle cx="5" cy="5" r="5" fill="#FFB300" />';
                        $('.floor-status-text').text('กำลังมีคิวจอง');
                        $('.btn-modal').addClass('btn-custom-warning');
                    } else {
                        $('.floor-status-modal')[0].innerHTML =
                            '<circle cx="5" cy="5" r="5" fill="#EC161D" />';
                        $('.floor-status-text').text('ขายแล้ว');
                        $('.btn-modal').addClass('btn-custom-primary');
                    }

                    $('#pointModal').modal('show');
                });

                // Store the relative position of the point
                pointPositions.push([x, y]);
            }

            // Create points based on the positions in pointPositions
            pointPositions.forEach(function(position) {
                const x = position[0];
                const y = position[1];
                const colorClass = position[2];
                const id = position[3];
                createPoint(x, y, colorClass, id);
            });

            // imageContainer.click(function (event) {
            //     const rect = imageContainer[0].getBoundingClientRect();
            //     const x = ((event.clientX - rect.left) / rect.width) * 100;
            //     const y = ((event.clientY - rect.top) / rect.height) * 100;
            //     createPoint(x, y);
            // });

            $(window).resize(function() {
                // Update the positions of all points based on stored percentages
                const points = $('.point');
                points.each(function(index) {
                    const xPercentage = pointPositions[index][0];
                    const yPercentage = pointPositions[index][1];
                    const x = (xPercentage / 100) * imageContainer.width();
                    const y = (yPercentage / 100) * imageContainer.height();
                    $(this).css('left', xPercentage + '%');
                    $(this).css('top', yPercentage + '%');
                });
            });
        }

        $("#check1").click(function() {
            $("#project-plan").css("display", "block");
            $("#room-plan").css("display", "none");
        })

        $("#check2").click(function() {
            $("#project-plan").css("display", "none");
            $("#room-plan").css("display", "block");
        })

        // const subscription = $('.btn-subscription');
        const confirm_subscription = $('.btn-confirm-subscription');
        const alert_subScription = $('.btn-alert-subScription');

        // if ("{{ $RegisStatus }}" == 'N') {
        //     $(".btn-unit").prop("disabled", true);
        // }
        // subscription.click(function() {
        //     console.log('ok');
        //     if ($("#Tel").val() != "" && $('#PrivacyStatus').prop('checked') == true) {
        //         console.log('Tel');
        //         CheckSubScriptionByMobile($("#Tel").val());
        //     } else {
        //         return;
        //     }
        // });
        var zoom = 1;
        $('.zoom').on('click', function(){
            $.fancybox.open({
                src  : '.markPoint',
                type : 'inline',
                opts : {
                afterClose : function( instance, current ) {
                    console.info('done!');
                    $('.markPoint').css('display','block');
                }
                }
  });
            // if(zoom==1){
			// zoom += 0.5;
			$('.markPoint').css('display','contents');
            markPoints();
			// $('.markPoints').css('transform', 'scale(' + zoom + ')');
            // }else{
            //     zoom -= 0.5;
            //     $('.markPoint').css('transform', 'scale(' + zoom + ')');
                // markPoints();
                // $('.markPoints').css('transform', 'scale(' + zoom + ')');
            // }
		});

        function subscription() {
            console.log('ok', '{{ $SubScriptionStatus }}');
            if ($("#Tel").val() != "" && $('#PrivacyStatus').prop('checked') == true) {
                console.log('Tel');
                CheckSubScriptionByMobile($("#Tel").val());
            } else {
                return;
            }
        }

        confirm_subscription.click(function() {
            if ($('#FullName').val() != "" && $('#Email').val() != "") {
                console.log($('#FullName').val(), $('#Email').val());
                let data = {
                    "EventID": "1",
                    "CusMemberID": "{{ $member_id }}",
                    "MemberStatus": "Guest",
                    "Mobile": $("#Tel").val(),
                    "Email": $("#Email").val()
                }
                console.log(data);
                SaveSubScriptionByEventID(data);
            } else {
                return;
            }
        });

        alert_subScription.click(function() {
            $("#Customer").remove();
        })

        $("#eventInterestSection").hide();
        // $("#InterestSection").hide();
        // $("#RegisSection").hide();

        $("#privacyCheckbox").change(function() {
            if ($(this).is(":checked")) {
                $("#eventInterestSection").show();
            } else {
                $("#eventInterestSection").hide();
            }
        });

        function CheckSubScriptionByMobile(val) {
            $.ajax({
                url: "{{ route('CheckSubScriptionByMobile') }}",
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                data: {
                    'Mobile': val
                },
                dataType: "json",
                success: function(res) {
                    console.log(res);
                    if (res['Result'] == 1) {
                        if (res['ResultData']['SubScriptionStatus'] === 'Y') {
                            // Create the new HTML content
                            var newContent = `
                                <div class="card card-subscription card-subscripted w-100 m-auto">
                                    <div class="card-body text-center">
                                        <span class="text-subscription-header">ลงทะเบียนรับสิทธิพิเศษ</span>
                                        <div class="row mt-3 text-center">
                                            <div class="col-md-12">
                                                <span class="text-subscripted">ท่านเคยลงทะเบียนแล้ว</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                `;

                            // Replace the content of the Customer div with the new HTML content
                            $("#Guest").html(newContent);
                            $(".btn-unit-view").prop("disabled", false);

                            // Swal.fire({
                            //     icon: 'success',
                            //     title: 'คุณเคย Subscription แล้ว',
                            //     showConfirmButton: false,
                            //     timer: 1500
                            // }).then(function() {
                            //     $("#Guest").remove();
                            //     $(".btn-unit-view").prop("disabled", false);
                            // })

                            $('.subscripted-section').show();
                            $(".btn-unit-view").prop("disabled", false);
                        } else {
                            $("#SubscriptionModal").modal('show');
                            // $("#TelSection").hide();
                            // $("#PrivacySection").remove();
                            // $("#RegisSection").show();
                            // $("#InterestSection").show();
                        }

                    }
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        }

        function SaveSubScriptionByEventID(val) {
            $.ajax({
                url: "{{ route('SaveSubScriptionByEventID') }}",
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                data: val,
                dataType: "json",
                success: function(res) {
                    console.log(res);
                    if (res['Result'] == 1) {
                        $("#SubscriptionModal").modal('hide');
                        // Create the new HTML content
                        var newContent = `
                            <div class="card card-subscription card-subscripted w-100 m-auto">
                                <div class="card-body text-center">
                                    <span class="text-subscription-header">ลงทะเบียนรับสิทธิพิเศษ</span>
                                    <div class="row mt-3">
                                        <div class="col-md-12">
                                            <span class="text-subscripted">ท่านได้ทำการลงทะเบียนเรียบร้อยแล้ว</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            `;

                        // Swal.fire({
                        //     icon: 'success',
                        //     title: 'คุณได้ทำการ Subscription แล้ว',
                        //     showConfirmButton: false,
                        //     timer: 1500
                        // }).then(function() {
                        if ("{{ $RegisStatus }}" == 'Y') {
                            $("#Member").html(newContent);
                            $(".btn-unit-view").prop("disabled", false);
                            $('.subscripted-section').show();
                        } else {
                            $("#Guest").html(newContent);
                            $(".btn-unit-view").prop("disabled", false);
                            $('.subscripted-section').show();
                        }
                        // })
                    }
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        }

        const owl = $('.owl-carousel');
        owl.owlCarousel({
            // rtl: true,
            loop: true,
            // margin: 30,
            responsive: {
                0: {
                    items: 1.15
                },
                400: {
                    items: 1.2
                },
                450: {
                    items: 1.3
                },
                500: {
                    items: 1.55
                },
                550: {
                    items: 1.7
                },
                600: {
                    items: 1.8
                },
                650: {
                    items: 1.9
                },
                700: {
                    items: 2.1
                },
                750: {
                    items: 2.3
                },
                850: {
                    items: 2.5
                },
                1250: {
                    items: 3.1
                },
                1300: {
                    items: 3.3
                },
                1400: {
                    items: 3.5
                },
                1500: {
                    items: 3.8
                },
                1600: {
                    items: 4.1
                },
                1800: {
                    items: 4.6
                }
            }
        });
    </script>
@endsection
