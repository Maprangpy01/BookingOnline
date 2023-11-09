@extends('main')

@section('style')
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
    border: #999 1px solid;
    border-radius: 10px;
    width: 109px;
    margin-left: 8px;
    display: inline-flex;
    justify-content: center;
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

    .btn-check:checked+.btn:focus-visible,
    .btn.active:focus-visible,
    .btn.show:focus-visible,
    .btn:first-child:active:focus-visible,
    :not(.btn-check)+.btn:active:focus-visible {
    box-shadow: var(--bs-btn-focus-box-shadow);
    }
    .carousel-inner {
    height: 20pc;
    }

    .carousel-item {
    width: 100%;
    height: 100%;
    }

    .carousel-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    }

    .custom-btn {
    color: #EC161D;
    cursor: pointer;
    text-align: left;
    padding-left: 10%;
    }

    .custom-btn.active {
    color: #EC161D;
    border-left: 5px solid #FF656A;
    }

    .custom-btn:hover {
    color: #EC161D;
    background-color: #FFF1F180;
    }

    {{-- .card {
    min-width: 100%;
    width: 100%;
    margin: 0;
    } --}}

    .image-card {
    width: 100%;
    }

    .card-text {
    color: var(--text-text-secondary, #CBC4C7);

    /* Body 01 */
    font-size: 20px;
    font-style: normal;
    font-weight: 500;
    line-height: 120%; /* 24px */
    letter-spacing: 0.2px;
    }

    .load-more {
    color: var(--link-link, #554C4F);
    text-align: center;

    /* H5 */
    font-style: normal;
    font-weight: 500;
    line-height: 120%; /* 28.8px */
    letter-spacing: 0.5px;
    }

    .btn-circle {
    color: #FFF;
    border-radius: 50%;
    background-color: rgba(35, 31, 32, 0.50);
    border: 1px solid rgba(255, 255, 255, 0.25);
    width: 40px;
    height: 40px;
    }
@endsection

@section('content')
    <div class="container mt-5">
        <div class="row mt-5 mb-4 g-4">
            <div class="col-md-12 text-center">
                <span class="fnt-34">
                    <strong>
                        รายการโปรด
                    </strong>
                </span>
            </div>
        </div>

        <div class="row g-3 justify-content-center" style="margin-bottom: 55px;">
            <div class="col-lg-11 col-md-10 col-12 fnt-24"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                <g clip-path="url(#clip0_1720_2465)">
                  <path d="M9.38 19.98C9.12 19.98 8.86 19.98 8.6 19.98C8.58 19.9 8.5 19.93 8.46 19.92C8.02 19.81 7.64 19.6 7.32 19.28C5.12 17.08 2.92 14.89 0.72 12.69C0.4 12.37 0.17 11.99 0.07 11.54C0.05 11.5 0.08 11.42 0 11.4C0 11.14 0 10.88 0 10.62C0.07 10.62 0.04 10.57 0.04 10.54C0.15 10.07 0.38 9.66003 0.72 9.32003C3.59 6.46003 6.45 3.60003 9.31 0.750029C9.86 0.200029 10.53 -0.0299707 11.3 0.0300294C13.29 0.190029 15.28 0.340029 17.27 0.490029C18.49 0.580029 19.44 1.54003 19.53 2.75003C19.66 4.51003 19.79 6.26003 19.93 8.01003C19.94 8.16003 19.92 8.33003 20 8.48003C20 8.78003 20 9.08003 20 9.38003C19.93 9.38003 19.96 9.43003 19.96 9.46003C19.85 9.95003 19.61 10.36 19.25 10.71C16.39 13.56 13.54 16.41 10.68 19.26C10.35 19.59 9.97 19.82 9.51 19.92C9.47 19.93 9.4 19.9 9.38 19.98ZM11.09 1.27003C10.71 1.25003 10.42 1.41003 10.15 1.67003C7.31 4.51003 4.47 7.34003 1.63 10.18C1.11 10.7 1.11 11.34 1.63 11.86C3.8 14.02 5.97 16.19 8.13 18.35C8.65 18.87 9.29 18.87 9.81 18.35C12.65 15.52 15.48 12.69 18.32 9.86003C18.65 9.54003 18.77 9.17003 18.73 8.72003C18.67 8.13003 18.63 7.53003 18.59 6.93003C18.48 5.55003 18.38 4.17003 18.27 2.79003C18.23 2.29003 17.86 1.88003 17.37 1.77003C17.15 1.72003 16.92 1.72003 16.69 1.70003C15.74 1.63003 14.8 1.55003 13.85 1.48003C12.93 1.41003 12.01 1.34003 11.09 1.27003Z" fill="#B11116"/>
                  <path d="M17.0101 5.39001C16.9901 6.72001 15.9101 7.76001 14.5601 7.74001C13.2701 7.72001 12.2401 6.62001 12.2601 5.30001C12.2801 4.04001 13.3901 2.97001 14.6601 3.00001C15.9801 3.03001 17.0301 4.10001 17.0101 5.39001ZM14.6501 6.49001C15.2701 6.49001 15.7801 5.97001 15.7701 5.36001C15.7601 4.74001 15.2601 4.25001 14.6501 4.25001C14.0301 4.25001 13.5201 4.75001 13.5301 5.38001C13.5201 5.99001 14.0201 6.49001 14.6501 6.49001Z" fill="#B11116"/>
                </g>
                <defs>
                  <clipPath id="clip0_1720_2465">
                    <rect width="20" height="20" fill="white"/>
                  </clipPath>
                </defs>
              </svg> โปรติดสปีดX3
            <hr></div>
            @if (!empty($cardUnit) && $cardUnit['Result'] == 1)
            @php
                    $count = 0;
                    @endphp
                    {{-- @foreach (range(1, 6) as $index) --}}
                    @foreach ($cardUnit['ResultData']['FavoritesInfoList']['unitList'] as $item)
                    @php
                        $count = $count + 1;
                        $countCard = 'card' . $count;
                        $ImgLogo = $item['ImgLogo'];
                        $Img = $item['Img'];
                        $UnitNo = $item['unit'];
                        $ProjectName = $item['Name'];
                        $UnitPlanName = $item['space'];
                        $Reserve = $item['reserve'];
                        $Price = $item['sell'];
                        $PriceFull = $item['full'];
                        $Event = $item['event'];
                        $Icon1 = $item['icon1'];
                        $Icon1Detail = $item['icon1Detail'];
                        $Icon2 = $item['icon2'];
                        $Icon2Detail = $item['icon2Detail'];
                        $Time = $item['time'];
                        $view = $item['view'];
                    @endphp
                        @include('components.components-all.card-favorite')
                @endforeach
                    <div class="row justify-content-center mt-4 ">
                        <div class="col-lg-2 col-sm-5 col-6 p-0 fnt-20">
                            <a href="" style="color: #554C4F">
                                <div class="row" id="loadMore">
                                    <div class="col-8 text-end p-0 me-1 fnt-24">โหลดเพิ่มเติม </div>
                                    <div class="col-3 text-start p-0" style="margin-top: 6px;margin-left:6px">
                                        <i class="bi bi-arrow-clockwise"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
            @else
                <div class="text-center">
                    <strong class="text-warning fnt-20">
                        ไม่มีข้อมูล
                    </strong>
                </div>
            @endif
        </div>

    </div>
    <script>
        $(document).ready(function() {
            $(".card-fav").slice(0, 3).show();
            $("#loadMore").on("click", function(e) {
                console.log("click");
                e.preventDefault();
                $(".card-fav:hidden").slice(0, 3).slideDown();
                if ($(".card-fav:hidden").length == 0) {
                    $("#loadMore").hide();
                }
            });
        });
    </script>
    <style>
        .card-fav {
            display: none;
        }
    </style>
@endsection
