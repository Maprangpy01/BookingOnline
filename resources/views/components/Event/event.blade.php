@extends('main')
@php
    // $color = '#C70E14';
    $color = '#43A047';
@endphp
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
    {{-- background: var(--neutral-neutral-005, rgba(35, 31, 32, 0.05)); --}}
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

    .accordion-item {
    border: none;
    }

    .btn-later {
    color: var(--text-text-secondary, #CBC4C7);
    text-align: center;
    font-size: 16px;
    font-style: normal;
    font-weight: 400;
    line-height: 120%; /* 19.2px */
    letter-spacing: 0.2px;
    text-decoration-line: underline;
    }
    .owl-dots{
    display:none;
    }
    @media (max-width: 991.5px) {

    .event-detail {
    top: -44px;
    margin-bottom:0;
    }
    }
@endsection

@section('content')
    @include('components.Event.layouts.sticky')
    <div class="row d-flex justify-content-center mt-5">
        <div class="col-md-12" style="padding-left: inherit; padding-right: inherit;">
            <div class="first mt-1">
                <div class="d-flex justify-content-end">
                    <button class="btn btn-circle p-2 d-flex align-items-center me-2" data-bs-toggle="modal"
                        @if (session('MemberID') != '') data-bs-target="#compare" @endif>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <g clip-path="url(#clip0_278_2297)">
                                <path
                                    d="M22.9442 10.3082C22.4642 9.82823 21.9842 9.36023 21.5282 8.89223L21.5042 8.86823C21.0962 8.44823 20.7122 8.06424 20.1842 7.89623L20.0162 7.84823V7.66823V5.62823V5.38823H20.2562H20.5322H20.7962C20.9042 5.38823 21.0122 5.38823 21.1082 5.38823C21.5642 5.38823 21.8762 5.10023 21.8762 4.69223C21.8762 4.28423 21.5642 3.99623 21.1082 3.99623C20.7122 3.99623 20.3042 3.99623 19.9082 3.99623H18.7562H18.4202C17.7962 3.99623 17.2562 3.76823 16.8242 3.31223C16.2722 2.73623 15.7202 2.14823 15.1802 1.58423C14.3642 0.732234 13.2002 0.240234 12.0002 0.240234C10.8002 0.240234 9.63623 0.720234 8.83223 1.57223C8.68823 1.71623 8.55623 1.86023 8.41223 2.00423C8.02823 2.40023 7.63223 2.82023 7.24823 3.22823C6.78023 3.73223 6.21623 3.98423 5.52023 3.98423H5.48423C5.13623 3.98423 4.76423 3.97223 4.33223 3.97223C3.96023 3.97223 3.57623 3.97223 3.20423 3.97223H2.83223C2.41223 3.97223 2.10023 4.26023 2.10023 4.65623C2.10023 5.06423 2.41223 5.35223 2.84423 5.36423C2.95223 5.36423 3.06023 5.36423 3.18023 5.36423C3.27623 5.36423 3.36023 5.36423 3.45623 5.36423C3.55223 5.36423 3.64823 5.36423 3.73223 5.36423H3.97223V5.60423V7.64423V7.81223L3.81623 7.87223C3.42023 8.01623 3.06023 8.25623 2.68823 8.65223C2.47223 8.88023 2.24423 9.10823 2.02823 9.32423C1.93223 9.42023 1.82423 9.52823 1.72823 9.62423C1.66823 9.68423 1.59623 9.75624 1.53623 9.81624C1.40423 9.96024 1.26023 10.1042 1.10423 10.2362C0.648234 10.6682 0.372234 11.1962 0.240234 11.8802V17.7242C0.252234 17.7602 0.264234 17.7962 0.276234 17.8442C0.528234 19.1522 1.54823 20.0042 2.88023 20.0042C3.49223 20.0042 4.10423 20.0042 4.71623 20.0042C5.30423 20.0042 5.89223 20.0042 6.49223 20.0042C8.01623 20.0042 9.13223 18.8882 9.13223 17.3522C9.13223 16.7282 9.13223 16.1162 9.13223 15.4922C9.13223 14.4362 9.13223 13.3562 9.13223 12.2882C9.13223 11.4962 8.86823 10.8362 8.31623 10.2962C7.80023 9.79224 7.33223 9.32423 6.88823 8.88023C6.48023 8.46023 6.08423 8.06424 5.55623 7.89623L5.40023 7.83624V7.65623V5.61623V5.40023L5.62823 5.38823C6.72023 5.36423 7.62023 4.93223 8.37624 4.08023C8.72423 3.68423 9.09623 3.30023 9.45623 2.92823C9.57623 2.80823 9.69623 2.68823 9.81623 2.55623C10.3922 1.95623 11.1722 1.63223 12.0002 1.63223C12.8282 1.63223 13.6082 1.95623 14.1842 2.55623C14.6042 3.00023 15.0362 3.44423 15.4442 3.87623L15.8522 4.30823C16.2722 4.75223 16.7522 5.05223 17.2802 5.19623C17.5322 5.26823 17.7842 5.31623 18.0482 5.36423C18.1682 5.38823 18.2882 5.41223 18.4082 5.43623L18.6002 5.47223V5.66423V7.65623V7.82423L18.4442 7.88423C18.0722 8.02823 17.7362 8.24424 17.4242 8.55624C16.9082 9.07224 16.3082 9.68423 15.6962 10.2842C15.1322 10.8362 14.8562 11.4962 14.8682 12.2882C14.8682 13.3802 14.8682 14.4842 14.8682 15.5522C14.8682 16.1522 14.8682 16.7522 14.8682 17.3522C14.8682 18.8882 15.9842 19.9922 17.5082 20.0042C18.1082 20.0042 18.7202 20.0042 19.3202 20.0042C19.9202 20.0042 20.5082 20.0042 21.1082 20.0042C22.6322 20.0042 23.7482 18.8882 23.7482 17.3522C23.7482 16.7402 23.7482 16.1162 23.7482 15.5042C23.7482 14.4482 23.7482 13.3682 23.7482 12.3002C23.7602 11.4962 23.4962 10.8482 22.9442 10.3082ZM5.55623 9.51624C5.95223 9.90024 6.34823 10.3082 6.73223 10.6922C6.93623 10.9082 7.15223 11.1122 7.35623 11.3282C7.60823 11.5802 7.72823 11.8802 7.72823 12.2282C7.72823 13.0802 7.72823 13.9322 7.72823 14.7842C7.72823 15.6482 7.72823 16.5242 7.72823 17.3882C7.72823 18.1082 7.22423 18.6122 6.50423 18.6122C5.90423 18.6122 5.29223 18.6122 4.69223 18.6122C4.08023 18.6122 3.46823 18.6122 2.84423 18.6122C2.12423 18.6122 1.62023 18.1082 1.62023 17.3882C1.62023 16.7762 1.62023 16.1762 1.62023 15.5642V14.7842C1.62023 14.5442 1.62023 14.3042 1.62023 14.0642C1.62023 13.4762 1.62023 12.8522 1.62023 12.2522C1.62023 11.8802 1.75223 11.5682 2.00423 11.3042C2.28023 11.0282 2.55623 10.7522 2.82023 10.4882C3.14423 10.1642 3.46823 9.84023 3.79223 9.51624C4.05623 9.26424 4.35623 9.12023 4.66823 9.12023C5.00423 9.13223 5.30423 9.26424 5.55623 9.51624ZM22.3682 14.0882V14.8082V15.5642C22.3682 16.1642 22.3682 16.7642 22.3682 17.3642C22.3682 18.1082 21.8642 18.6122 21.1202 18.6122C20.5082 18.6122 19.9082 18.6122 19.2962 18.6122C18.6962 18.6122 18.1082 18.6122 17.5082 18.6122C16.7642 18.6122 16.2602 18.1082 16.2602 17.3642C16.2602 16.7162 16.2602 16.0682 16.2602 15.4202C16.2602 14.3642 16.2602 13.3082 16.2602 12.2522C16.2602 11.8802 16.3922 11.5682 16.6562 11.3042C16.9322 11.0282 17.2082 10.7522 17.4842 10.4762C17.8082 10.1522 18.1202 9.82823 18.4442 9.51624C18.6962 9.26424 19.0082 9.12023 19.3202 9.12023C19.6322 9.12023 19.9322 9.25224 20.1962 9.51624C20.5922 9.91224 21.0002 10.3202 21.3962 10.7042C21.6002 10.9082 21.8042 11.1122 22.0082 11.3162C22.2602 11.5682 22.3802 11.8682 22.3802 12.2282C22.3562 12.8522 22.3682 13.4762 22.3682 14.0882Z"
                                    fill="white" />
                                <path
                                    d="M18.3122 22.9444C18.2522 22.5964 17.9642 22.3684 17.6042 22.3564C16.9562 22.3564 16.3082 22.3564 15.6482 22.3564H14.4362H13.2242H13.2002H12.9362H12.6962V22.1164V21.8404V20.3044V4.88438C12.6962 4.86038 12.6962 4.83637 12.6962 4.81237C12.6962 4.75237 12.6962 4.69238 12.6962 4.64438C12.6722 4.27238 12.3722 3.98438 12.0002 3.98438H11.9882C11.5802 3.98438 11.3042 4.30838 11.3042 4.76438C11.3042 9.19238 11.3042 13.6084 11.3042 18.0364V21.8404V21.9724V22.1164V22.3564H11.0642H10.7762H10.7642H9.55216H8.34016C7.69216 22.3564 7.04416 22.3564 6.39616 22.3564C6.03616 22.3564 5.74816 22.5964 5.68816 22.9444C5.62816 23.2684 5.83216 23.6044 6.16816 23.7244C6.19216 23.7364 6.21616 23.7484 6.24016 23.7604H17.7602C17.7842 23.7484 17.8202 23.7364 17.8442 23.7244C18.1682 23.5924 18.3722 23.2684 18.3122 22.9444Z"
                                    fill="white" />
                                <path
                                    d="M20.2434 12.1801C20.2434 12.6961 19.8234 13.1161 19.3074 13.1281C18.7914 13.1281 18.3714 12.7081 18.3594 12.1921C18.3594 11.6761 18.7794 11.2561 19.2954 11.2441C19.8234 11.2441 20.2434 11.6641 20.2434 12.1801Z"
                                    fill="white" />
                                <path
                                    d="M4.69239 11.2441C5.20839 11.2441 5.62839 11.6761 5.61639 12.1921C5.61639 12.7081 5.18439 13.1281 4.66839 13.1161C4.15239 13.1161 3.73239 12.6841 3.74439 12.1681C3.75639 11.6641 4.17639 11.2441 4.69239 11.2441Z"
                                    fill="white" />
                            </g>
                            <defs>
                                <clipPath id="clip0_278_2297">
                                    <rect width="24" height="24" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </button>
                    <button class="btn btn-circle p-2 d-flex align-items-center me-2" data-bs-toggle="modal"
                        @if (session('MemberID') != '') data-bs-target="#favorite" @endif>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 23" fill="none">
                            <path
                                d="M17.4978 0C16.3722 0.0175079 15.2711 0.33172 14.3058 0.910904C13.3405 1.49009 12.5451 2.31374 12 3.29867C11.4549 2.31374 10.6595 1.49009 9.69417 0.910904C8.72886 0.33172 7.62781 0.0175079 6.50222 0C4.70788 0.0779593 3.01733 0.862906 1.7999 2.18335C0.582466 3.5038 -0.0628841 5.25241 0.00483915 7.04716C0.00483915 13.8194 10.9564 21.6413 11.4222 21.9731L12 22.382L12.5778 21.9731C13.0436 21.6433 23.9952 13.8194 23.9952 7.04716C24.0629 5.25241 23.4175 3.5038 22.2001 2.18335C20.9827 0.862906 19.2921 0.0779593 17.4978 0ZM12 19.921C8.74831 17.4919 2.00403 11.5244 2.00403 7.04716C1.9357 5.78238 2.37025 4.5419 3.21291 3.59625C4.05557 2.6506 5.23796 2.07651 6.50222 1.99919C7.76647 2.07651 8.94887 2.6506 9.79153 3.59625C10.6342 4.5419 11.0687 5.78238 11.0004 7.04716H12.9996C12.9313 5.78238 13.3658 4.5419 14.2085 3.59625C15.0511 2.6506 16.2335 2.07651 17.4978 1.99919C18.762 2.07651 19.9444 2.6506 20.7871 3.59625C21.6297 4.5419 22.0643 5.78238 21.996 7.04716C21.996 11.5264 15.2517 17.4919 12 19.921Z"
                                fill="white" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="image-container row">
                <div class="col-lg-6 ps-0 pe-0">
                    <div class="img">
                        <img src="{{ asset('assets/images/image 39.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 p-0 befor-event-detail">
                    <div class="card event-detail ms-0 me-0" style="border: none;">
                        <div class="card-body" style="padding-left: inherit; padding-right: inherit;">

                            @include('components.Event.layouts.detail')
                        </div>
                        <hr class="line-promotion">
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-lg-10 col-md-12" style="padding-left: inherit; padding-right: inherit;">




                    @include('components.Event.layouts.pomotion')
                    <div class="container-fluid p-0 mb-4">
                        @include('components.Event.layouts.plan')
                        <div class="row g-4 mt-3 text-center">
                            @include('components.Event.layouts.album')
                            @include('components.Event.layouts.around')
                        </div>
                    </div>
                    @include('components.Event.layouts.QnA')

                    @include('components.Event.layouts.cardUnitInProject')

                </div>
            </div>
        </div>

        <!-- Modal booking -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header flex-column" style="padding: 10px">
                        <span class="modal-title text-header" id="exampleModalLabel">ยืนยันการจอง</span>
                    </div>
                    <div class="modal-body p-0">
                        <div class="image-container">
                            <div class="first d-grid align-content-between">
                                <div class="d-flex justify-content-end">
                                    <img src="{{ asset('assets/images/logo01 1.png') }}" alt="" width="50px"
                                        height="50px" class="" style="border-radius: 6px">
                                </div>
                            </div>
                            <img src="{{ asset('assets/images/image 39.png') }}" alt="" width="100%">
                        </div>
                        <div class="row g-2 p-2">
                            <div class="col-sm-6 col-6">
                                <span class="text-name">ยูนิต : A12-1912 </span>
                            </div>
                            <div class="col-sm-6 col-6 text-end">
                                <span class="text-book">จอง 2,900฿</span>
                            </div>
                            <div class="col-sm-6 col-6">
                                <span class="text-sale">
                                    ราคา : ฿1,700,000
                                </span>
                            </div>
                            <div class="col-sm-6 col-6 text-end">
                                <span class="text-price">
                                    <del>฿1,700,000</del>
                                </span>
                            </div>
                            <div class="col-md-12">
                                <span class="text-name">คอนโดมิเนียม เดอะ สเตจ มายด์สเคป</span>
                                <br>
                                <span class="text-sale">รัชดา - ห้วยขวาง</span>
                            </div>
                        </div>
                        <div class="modal-footer flex-column">
                            <div class="form-check ps-0">
                                <label class="form-check-label custom-checkbox d-flex justify-content-center fnt-16"
                                    for="check-compare">
                                    <input type="checkbox" class="form-check-input" name="check-compare" id="check-compare"
                                        value="">
                                    <span class="checkmark"></span>
                                    ยอมรับข้อตกลงของยูนิตนี้และเงื่อนไขการจองออนไลน์
                                </label>
                            </div>
                            <div class="d-grid gap-2">
                                <a class="btn btn-lemon" style="height: 52px;font-size:24px"
                                    href="{{ route('Booking.BookingMain') }}" type="button">จองเลย!</a>
                                <button type="button" class="btn btn-link btn-later" style="padding-top: 10px"
                                    data-bs-dismiss="modal">ฉันยังไม่แน่ใจ</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal compare -->
        <div class="modal fade" id="compare" tabindex="-1" aria-labelledby="compareLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header" style="padding: 3px">
                        <button type="button" class="btn-close m-0" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                        <div class="row w-100" style="display: contents;">
                            <div class="col text-center">
                                <span class="modal-title fnt-28" id="compareLabel">เปรียบเทียบยูนิตในโครงการ</span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body p-0">
                        <div class="image-container">
                            <div class="first d-grid align-content-between">
                                <div class="d-flex justify-content-end">
                                    <img src="{{ asset('assets/images/logo01 1.png') }}" alt="" width="50px"
                                        height="50px" class="" style="border-radius: 10px">
                                </div>
                            </div>
                            <img src="{{ asset('assets/images/image 39.png') }}" alt="" width="100%">
                        </div>
                        <div class="row mt-3 ps-3">
                            <div class="col-4 fnt-28 ps-1 pe-1">A12-1912</div>
                            <div class="col-4 fnt-24 ps-1 pe-1 pt-1">จอง 2,900฿</div>
                            <div class="col-4 d-flex align-items-center ps-1 pe-1"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="25" viewBox="0 0 24 25" fill="none">
                                    <path
                                        d="M6.21603 23.1163C6.04803 22.9963 5.85603 22.9003 5.71203 22.7563C5.30403 22.3723 4.92003 21.9763 4.53603 21.5803C4.15203 21.1963 4.15203 20.8123 4.54803 20.4283C4.95603 20.0203 5.37603 19.6003 5.78403 19.1923C6.14403 18.8443 6.56403 18.8083 6.86403 19.0963C7.16403 19.3963 7.14003 19.8163 6.79203 20.1763C6.76803 20.2003 6.73203 20.2363 6.69603 20.2843C11.184 20.2843 15.66 20.2843 20.148 20.2843C20.064 20.2003 19.992 20.1283 19.92 20.0443C19.692 19.7683 19.716 19.3603 19.968 19.1083C20.208 18.8563 20.628 18.8083 20.892 19.0483C21.42 19.5403 21.936 20.0563 22.428 20.5843C22.656 20.8243 22.644 21.2083 22.416 21.4483C21.924 21.9643 21.42 22.4563 20.916 22.9603C20.844 23.0323 20.724 23.0683 20.628 23.1283C20.52 23.1283 20.4 23.1283 20.292 23.1283C20.28 23.1163 20.268 23.0923 20.256 23.0923C19.728 22.8523 19.62 22.3243 20.016 21.8923C20.064 21.8443 20.1 21.7963 20.16 21.7363C15.66 21.7363 11.196 21.7363 6.70803 21.7363C6.80403 21.8323 6.88803 21.9163 6.94803 22.0003C7.24803 22.4083 7.08003 22.8763 6.54003 23.1163C6.40803 23.1163 6.31203 23.1163 6.21603 23.1163Z"
                                        fill="#CBC4C7" />
                                    <path
                                        d="M22.5601 9.50819C22.5601 11.8722 22.5601 14.2362 22.5601 16.5882C22.5601 16.7082 22.5601 16.8402 22.5361 16.9602C22.4641 17.2602 22.1881 17.4522 21.8401 17.4642C21.4561 17.4762 21.0841 17.4642 20.7001 17.4642C16.4641 17.4642 12.2281 17.4642 7.98008 17.4642C7.89608 17.4642 7.81208 17.4642 7.72808 17.4522C7.36808 17.4282 7.10408 17.1642 7.06808 16.8042C7.05608 16.7322 7.06808 16.6482 7.06808 16.5762C7.06808 11.8482 7.06808 7.12019 7.06808 2.38019C7.06808 1.74419 7.32008 1.49219 7.94408 1.49219C12.5281 1.49219 17.1121 1.49219 21.6961 1.49219C22.3201 1.49219 22.5601 1.74419 22.5601 2.35619C22.5601 4.75619 22.5601 7.13219 22.5601 9.50819ZM21.1321 16.0602C21.1321 13.5522 21.1321 11.0562 21.1321 8.56019C20.4361 8.56019 19.7521 8.56019 19.0801 8.56019C18.7201 8.56019 18.4441 8.35619 18.3601 8.05619C18.2281 7.58819 18.5521 7.16819 19.0561 7.15619C19.6801 7.14419 20.3041 7.15619 20.9281 7.15619C21.0001 7.15619 21.0601 7.15619 21.1201 7.15619C21.1201 5.72819 21.1201 4.33619 21.1201 2.93219C18.1441 2.93219 15.1921 2.93219 12.2281 2.93219C12.2281 4.33619 12.2281 5.74019 12.2281 7.15619C12.3121 7.15619 12.3841 7.15619 12.4681 7.15619C13.4041 7.15619 14.3401 7.15619 15.2761 7.15619C15.4561 7.15619 15.6481 7.15619 15.8281 7.16819C16.1161 7.19219 16.3441 7.39619 16.4161 7.66019C16.5481 8.12819 16.2121 8.56019 15.6961 8.56019C14.6161 8.56019 13.5361 8.56019 12.4441 8.56019C12.3721 8.56019 12.3001 8.56019 12.2161 8.56019C12.2161 9.22019 12.2161 9.85619 12.2161 10.4922C12.2161 10.5882 12.2161 10.6842 12.2041 10.7802C12.1441 11.1882 11.7601 11.4522 11.3521 11.3442C11.0041 11.2602 10.8121 10.9842 10.8121 10.5522C10.8121 8.09219 10.8121 5.63219 10.8121 3.17219C10.8121 3.10019 10.8121 3.01619 10.8121 2.93219C10.0201 2.93219 9.25208 2.93219 8.47208 2.93219C8.47208 7.31219 8.47208 11.6802 8.47208 16.0602C9.25208 16.0602 10.0201 16.0602 10.8121 16.0602C10.8121 15.9762 10.8121 15.9042 10.8121 15.8202C10.8121 15.2202 10.8121 14.6082 10.8121 14.0082C10.8121 13.5762 11.1001 13.2642 11.4961 13.2522C11.8801 13.2402 12.1921 13.5402 12.2161 13.9722C12.2281 14.1402 12.2161 14.3082 12.2161 14.4762C12.2161 15.0042 12.2161 15.5202 12.2161 16.0602C15.2041 16.0602 18.1681 16.0602 21.1321 16.0602Z"
                                        fill="#CBC4C7" />
                                    <path
                                        d="M2.78397 3.95239C2.74797 4.00039 2.71197 4.06039 2.66397 4.09639C2.33997 4.40839 1.91997 4.42039 1.63197 4.12039C1.35597 3.84439 1.36797 3.41239 1.66797 3.10039C1.93197 2.82439 2.20797 2.54839 2.48397 2.28439C2.65197 2.10439 2.83197 1.93639 3.01197 1.76839C3.34797 1.44439 3.74397 1.44439 4.07997 1.76839C4.53597 2.21239 4.97997 2.65639 5.42397 3.11239C5.73597 3.43639 5.74797 3.85639 5.45997 4.14439C5.17197 4.43239 4.76397 4.42039 4.43997 4.12039C4.39197 4.07239 4.34397 4.02439 4.27197 3.96439C4.27197 8.15239 4.27197 12.2924 4.27197 16.4924C4.34397 16.4204 4.40397 16.3724 4.45197 16.3244C4.76397 16.0364 5.17197 16.0244 5.44797 16.3124C5.73597 16.6004 5.73597 17.0204 5.43597 17.3324C4.97997 17.8004 4.52397 18.2564 4.06797 18.7004C3.75597 19.0124 3.35997 19.0124 3.03597 18.7004C2.56797 18.2444 2.11197 17.7884 1.66797 17.3324C1.37997 17.0324 1.37997 16.6124 1.64397 16.3244C1.91997 16.0364 2.33997 16.0364 2.66397 16.3364C2.71197 16.3844 2.74797 16.4564 2.79597 16.5284C2.81997 16.5164 2.83197 16.4924 2.85597 16.4804C2.85597 12.3284 2.85597 8.17639 2.85597 4.01239C2.81997 3.96439 2.79597 3.96439 2.78397 3.95239Z"
                                        fill="#CBC4C7" />
                                </svg><span class="text-gray ps-1 fnt-20"> 28.5 ตร.ม.</span></div>
                        </div>
                        <div class="row ps-3">
                            <div class="col-4 text-red fnt-24 ps-1 pe-1">฿1,700,000</div>
                            <del class="col-4 text-gray fnt-22 ps-1 pe-1">฿1,700,000</del>
                            <div class="col-4 d-flex align-items-center ps-1 pe-1"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="25" viewBox="0 0 24 25" fill="none">
                                    <path
                                        d="M22.7999 13.1004C22.7999 14.6844 22.7999 16.2804 22.7999 17.8644C22.5359 18.5484 21.9239 18.3684 21.3959 18.4044C21.3959 19.0884 21.3959 19.7484 21.3959 20.4084C21.3959 20.9484 21.1199 21.2124 20.5919 21.2124C19.7159 21.2124 18.8519 21.2124 17.9759 21.2124C17.4359 21.2124 17.1719 20.9484 17.1719 20.4084C17.1719 19.8084 17.1719 19.2084 17.1719 18.6204C17.1719 18.5484 17.1719 18.4884 17.1599 18.4164C13.7159 18.4164 10.2959 18.4164 6.83991 18.4164C6.83991 18.5004 6.83991 18.5604 6.83991 18.6324C6.83991 19.2204 6.83991 19.8084 6.83991 20.4084C6.83991 20.9604 6.57591 21.2244 6.02391 21.2244C5.15991 21.2244 4.29591 21.2244 3.43191 21.2244C2.87991 21.2244 2.61591 20.9604 2.61591 20.4084C2.61591 19.8084 2.61591 19.2084 2.61591 18.6204C2.61591 18.5484 2.61591 18.4884 2.61591 18.4164C2.35191 18.4164 2.13591 18.4284 1.90791 18.4164C1.47591 18.3924 1.21191 18.1044 1.21191 17.6724C1.21191 16.2804 1.21191 14.8884 1.21191 13.4964C1.21191 12.9324 1.40391 12.4284 1.81191 12.0324C2.03991 11.8044 2.32791 11.6484 2.62791 11.4324C2.62791 10.3164 2.62791 9.15241 2.62791 8.00041C2.62791 7.44841 2.69991 6.92041 2.93991 6.42841C3.59991 5.01241 4.71591 4.31641 6.25191 4.31641C10.0799 4.31641 13.9199 4.31641 17.7479 4.31641C17.9759 4.31641 18.2159 4.32841 18.4439 4.36441C20.0039 4.58041 21.3119 5.98441 21.3719 7.54441C21.4079 8.36041 21.3959 9.18841 21.3959 10.0164C21.3959 10.4964 21.3959 10.9884 21.3959 11.4564C22.1039 11.8524 22.3079 12.0204 22.5359 12.4524C22.6439 12.6684 22.7159 12.8844 22.7999 13.1004ZM5.42391 11.3484C5.42391 11.1444 5.42391 10.9404 5.42391 10.7484C5.42391 9.46441 6.33591 8.54041 7.61991 8.54041C8.57991 8.54041 9.52791 8.54041 10.4879 8.54041C10.8959 8.54041 11.2799 8.61241 11.6399 8.82841C11.7599 8.90041 11.8799 8.98441 12.0119 9.08041C12.4199 8.73241 12.8759 8.55241 13.4039 8.55241C14.4599 8.55241 15.5159 8.54041 16.5719 8.56441C16.8479 8.57641 17.1479 8.66041 17.3999 8.78041C18.1919 9.17641 18.5759 9.86041 18.5879 10.7364C18.5879 10.9404 18.5879 11.1564 18.5879 11.3484C19.0679 11.3484 19.5239 11.3484 19.9919 11.3484C19.9919 11.2764 19.9919 11.2284 19.9919 11.1684C19.9919 10.0884 19.9919 9.00841 19.9919 7.91641C19.9919 6.63241 19.0679 5.72041 17.7839 5.72041C13.9439 5.72041 10.0919 5.72041 6.25191 5.72041C4.95591 5.72041 4.04391 6.63241 4.04391 7.94041C4.04391 9.00841 4.04391 10.0764 4.04391 11.1444C4.04391 11.2164 4.04391 11.2764 4.04391 11.3604C4.49991 11.3484 4.94391 11.3484 5.42391 11.3484ZM2.61591 16.9764C8.86791 16.9764 15.1199 16.9764 21.3839 16.9764C21.3839 16.5084 21.3839 16.0644 21.3839 15.5964C15.1319 15.5964 8.87991 15.5964 2.61591 15.5964C2.61591 16.0644 2.61591 16.5084 2.61591 16.9764ZM21.3959 14.1564C21.3959 13.9164 21.3959 13.7004 21.3959 13.4844C21.3959 13.2684 21.3239 13.0884 21.1559 12.9444C20.9759 12.7884 20.7719 12.7644 20.5439 12.7644C14.8439 12.7644 9.15591 12.7644 3.45591 12.7644C3.38391 12.7644 3.31191 12.7644 3.23991 12.7644C2.91591 12.8004 2.65191 13.0284 2.61591 13.3524C2.59191 13.6164 2.61591 13.8804 2.61591 14.1564C8.87991 14.1564 15.1199 14.1564 21.3959 14.1564ZM6.85191 11.3484C8.32791 11.3484 9.80391 11.3484 11.2919 11.3484C11.2919 11.1084 11.2919 10.8924 11.2919 10.6644C11.2799 10.2444 11.0039 9.95641 10.5959 9.94441C9.57591 9.93241 8.55591 9.93241 7.53591 9.94441C7.18791 9.94441 6.89991 10.1844 6.86391 10.4964C6.82791 10.7724 6.85191 11.0604 6.85191 11.3484ZM12.7199 11.3484C14.2079 11.3484 15.6719 11.3484 17.1599 11.3484C17.1599 11.1084 17.1719 10.8804 17.1599 10.6524C17.1359 10.2444 16.8719 9.95641 16.4639 9.95641C15.4439 9.94441 14.4239 9.94441 13.4039 9.95641C13.0439 9.95641 12.7439 10.2204 12.7199 10.5444C12.6959 10.8084 12.7199 11.0724 12.7199 11.3484ZM4.03191 18.4044C4.03191 18.8844 4.03191 19.3404 4.03191 19.7964C4.49991 19.7964 4.95591 19.7964 5.41191 19.7964C5.41191 19.3284 5.41191 18.8604 5.41191 18.4044C4.94391 18.4044 4.49991 18.4044 4.03191 18.4044ZM19.9679 18.4164C19.4999 18.4164 19.0439 18.4164 18.5879 18.4164C18.5879 18.8844 18.5879 19.3404 18.5879 19.7964C19.0559 19.7964 19.5119 19.7964 19.9679 19.7964C19.9679 19.3284 19.9679 18.8724 19.9679 18.4164Z"
                                        fill="#CBC4C7" />
                                </svg><span class="text-gray ps-1"> 1</span></div>
                        </div>
                        <div class="text-start" style="padding-left: 22px">
                            <span class="mb-0 fnt-28">คอนโดมิเนียม เดอะ สเตจ มายด์สเคป</span>
                            <label class="card-text fnt-24" style="margin-top: -10px">รัชดา - ห้วยขวาง</label>
                        </div>
                        <hr class="ms-3 me-3 mt-0">
                        <div class="text-start mb-3">
                            <span class="text-compare-header fnt-20 ps-4">เปรียบเทียบยูนิตกับ</span>
                        </div>
                        @foreach (range(1, 3) as $index)
                            <div class="form-check d-flex align-items-center mb-2 me-2">
                                {{-- <input class="custom-radio me-2" value="" type="radio" name="flexRadioDefault" id="flexRadioDefault{{ $index }}"> --}}

                                <label class="form-check-label custom-radio" for="flexRadioDefault{{ $index }}">
                                    <input type="radio" class="form-check-input" name="flexRadioDefault"
                                        id="flexRadioDefault{{ $index }}" value="">
                                    <span class="checkmark"></span>
                                </label>
                                {{-- <input class="form-check-input me-2" type="checkbox" value=""
                                        id="flexCheckDefault"> --}}
                                @if ($index == 2)
                                    <img class="img-compare me-2" src="{{ asset('assets/images/image 41.png') }}"
                                        alt="">
                                @else
                                    <img class="img-compare me-2" src="{{ asset('assets/images/image 40.png') }}"
                                        alt="">
                                @endif
                                <label class="form-check-label" for="flexCheckDefault">
                                    <span class="fnt-20">คอนโดมิเนียม เดอะ สเตจ มายด์สเคป</span>
                                    <br>
                                    ยูนิต :
                                    @if ($index == 1)
                                        A12-1920
                                    @elseif ($index == 2)
                                        A10-1910
                                    @else
                                        A15-1924
                                    @endif
                                    <br>
                                    สถานะ :
                                    @if ($index == 2)
                                        <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="8"
                                            height="9" viewBox="0 0 8 9" fill="none">
                                            <circle cx="4" cy="4.88428" r="4" fill="#FFB300" />
                                        </svg>
                                        กำลังมีคิวจอง
                                    @else
                                        <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="8"
                                            height="9" viewBox="0 0 8 9" fill="none">
                                            <circle cx="4" cy="4.88428" r="4" fill="#43A047" />
                                        </svg>
                                        เปิดจอง
                                    @endif
                                    <br>
                                    สถานที่ : รัชดา - ห้วยขวาง
                                </label>
                            </div>
                        @endforeach
                        <div class="modal-footer flex-column mt-4">
                            <div class="d-grid gap-2">
                                <a class="btn btn-primary" style="height: 52px;background:#1E88E5;font-size:24px"
                                    type="button" href="{{ route('compare') }}">
                                    <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 20 20" fill="none">
                                        <g clip-path="url(#clip0_278_2960)">
                                            <path
                                                d="M19.1192 8.59019C18.7192 8.1902 18.3192 7.80019 17.9392 7.41019L17.9192 7.39019C17.5792 7.04019 17.2592 6.7202 16.8192 6.5802L16.6792 6.54019V6.39019V4.6902V4.4902H16.8792H17.1092H17.3292C17.4192 4.4902 17.5092 4.4902 17.5892 4.4902C17.9692 4.4902 18.2292 4.2502 18.2292 3.91019C18.2292 3.57019 17.9692 3.33019 17.5892 3.33019C17.2592 3.33019 16.9192 3.33019 16.5892 3.33019H15.6292H15.3492C14.8292 3.33019 14.3792 3.1402 14.0192 2.7602C13.5592 2.2802 13.0992 1.7902 12.6492 1.3202C11.9692 0.610195 10.9992 0.200195 9.99922 0.200195C8.99922 0.200195 8.02922 0.600195 7.35922 1.3102C7.23922 1.4302 7.12922 1.5502 7.00922 1.6702C6.68922 2.0002 6.35922 2.3502 6.03922 2.6902C5.64922 3.1102 5.17922 3.3202 4.59922 3.3202H4.56922C4.27922 3.3202 3.96922 3.31019 3.60922 3.31019C3.29922 3.31019 2.97922 3.31019 2.66922 3.31019H2.35922C2.00922 3.31019 1.74922 3.55019 1.74922 3.88019C1.74922 4.22019 2.00922 4.4602 2.36922 4.4702C2.45922 4.4702 2.54922 4.4702 2.64922 4.4702C2.72922 4.4702 2.79922 4.4702 2.87922 4.4702C2.95922 4.4702 3.03922 4.4702 3.10922 4.4702H3.30922V4.6702V6.37019V6.51019L3.17922 6.56019C2.84922 6.68019 2.54922 6.88019 2.23922 7.21019C2.05922 7.40019 1.86922 7.59019 1.68922 7.77019C1.60922 7.85019 1.51922 7.94019 1.43922 8.02019C1.38922 8.07019 1.32922 8.1302 1.27922 8.1802C1.16922 8.30019 1.04922 8.4202 0.919219 8.5302C0.539219 8.89019 0.309219 9.33019 0.199219 9.9002V14.7702C0.209219 14.8002 0.219219 14.8302 0.229219 14.8702C0.439219 15.9602 1.28922 16.6702 2.39922 16.6702C2.90922 16.6702 3.41922 16.6702 3.92922 16.6702C4.41922 16.6702 4.90922 16.6702 5.40922 16.6702C6.67922 16.6702 7.60922 15.7402 7.60922 14.4602C7.60922 13.9402 7.60922 13.4302 7.60922 12.9102C7.60922 12.0302 7.60922 11.1302 7.60922 10.2402C7.60922 9.58019 7.38922 9.0302 6.92922 8.5802C6.49922 8.1602 6.10922 7.7702 5.73922 7.4002C5.39922 7.05019 5.06922 6.7202 4.62922 6.5802L4.49922 6.5302V6.38019V4.68019V4.5002L4.68922 4.4902C5.59922 4.4702 6.34922 4.1102 6.97922 3.4002C7.26922 3.0702 7.57922 2.7502 7.87922 2.4402C7.97922 2.3402 8.07922 2.2402 8.17922 2.1302C8.65922 1.6302 9.30922 1.3602 9.99922 1.3602C10.6892 1.3602 11.3392 1.6302 11.8192 2.1302C12.1692 2.5002 12.5292 2.8702 12.8692 3.2302L13.2092 3.5902C13.5592 3.9602 13.9592 4.2102 14.3992 4.33019C14.6092 4.39019 14.8192 4.4302 15.0392 4.4702C15.1392 4.4902 15.2392 4.51019 15.3392 4.53019L15.4992 4.56019V4.7202V6.38019V6.52019L15.3692 6.57019C15.0592 6.69019 14.7792 6.8702 14.5192 7.1302C14.0892 7.56019 13.5892 8.07019 13.0792 8.57019C12.6092 9.03019 12.3792 9.58019 12.3892 10.2402C12.3892 11.1502 12.3892 12.0702 12.3892 12.9602C12.3892 13.4602 12.3892 13.9602 12.3892 14.4602C12.3892 15.7402 13.3192 16.6602 14.5892 16.6702C15.0892 16.6702 15.5992 16.6702 16.0992 16.6702C16.5992 16.6702 17.0892 16.6702 17.5892 16.6702C18.8592 16.6702 19.7892 15.7402 19.7892 14.4602C19.7892 13.9502 19.7892 13.4302 19.7892 12.9202C19.7892 12.0402 19.7892 11.1402 19.7892 10.2502C19.7992 9.58019 19.5792 9.04019 19.1192 8.59019ZM4.62922 7.9302C4.95922 8.2502 5.28922 8.59019 5.60922 8.91019C5.77922 9.09019 5.95922 9.26019 6.12922 9.4402C6.33922 9.6502 6.43922 9.9002 6.43922 10.1902C6.43922 10.9002 6.43922 11.6102 6.43922 12.3202C6.43922 13.0402 6.43922 13.7702 6.43922 14.4902C6.43922 15.0902 6.01922 15.5102 5.41922 15.5102C4.91922 15.5102 4.40922 15.5102 3.90922 15.5102C3.39922 15.5102 2.88922 15.5102 2.36922 15.5102C1.76922 15.5102 1.34922 15.0902 1.34922 14.4902C1.34922 13.9802 1.34922 13.4802 1.34922 12.9702V12.3202C1.34922 12.1202 1.34922 11.9202 1.34922 11.7202C1.34922 11.2302 1.34922 10.7102 1.34922 10.2102C1.34922 9.90019 1.45922 9.64019 1.66922 9.42019C1.89922 9.19019 2.12922 8.96019 2.34922 8.7402C2.61922 8.47019 2.88922 8.2002 3.15922 7.9302C3.37922 7.7202 3.62922 7.60019 3.88922 7.60019C4.16922 7.61019 4.41922 7.7202 4.62922 7.9302ZM18.6392 11.7402V12.3402V12.9702C18.6392 13.4702 18.6392 13.9702 18.6392 14.4702C18.6392 15.0902 18.2192 15.5102 17.5992 15.5102C17.0892 15.5102 16.5892 15.5102 16.0792 15.5102C15.5792 15.5102 15.0892 15.5102 14.5892 15.5102C13.9692 15.5102 13.5492 15.0902 13.5492 14.4702C13.5492 13.9302 13.5492 13.3902 13.5492 12.8502C13.5492 11.9702 13.5492 11.0902 13.5492 10.2102C13.5492 9.90019 13.6592 9.64019 13.8792 9.42019C14.1092 9.19019 14.3392 8.9602 14.5692 8.7302C14.8392 8.4602 15.0992 8.1902 15.3692 7.9302C15.5792 7.7202 15.8392 7.60019 16.0992 7.60019C16.3592 7.60019 16.6092 7.7102 16.8292 7.9302C17.1592 8.26019 17.4992 8.60019 17.8292 8.92019C17.9992 9.09019 18.1692 9.26019 18.3392 9.43019C18.5492 9.64019 18.6492 9.89019 18.6492 10.1902C18.6292 10.7102 18.6392 11.2302 18.6392 11.7402Z"
                                                fill="white" />
                                            <path
                                                d="M15.2592 19.1203C15.2092 18.8303 14.9692 18.6403 14.6692 18.6303C14.1292 18.6303 13.5892 18.6303 13.0392 18.6303H12.0292H11.0192H10.9992H10.7792H10.5792V18.4303V18.2003V16.9203V4.07031C10.5792 4.05031 10.5792 4.03031 10.5792 4.01031C10.5792 3.96031 10.5792 3.91031 10.5792 3.87031C10.5592 3.56031 10.3092 3.32031 9.99916 3.32031H9.98916C9.64916 3.32031 9.41916 3.59031 9.41916 3.97031C9.41916 7.66031 9.41916 11.3403 9.41916 15.0303V18.2003V18.3103V18.4303V18.6303H9.21916H8.97916H8.96916H7.95916H6.94916C6.40916 18.6303 5.86916 18.6303 5.32916 18.6303C5.02916 18.6303 4.78916 18.8303 4.73916 19.1203C4.68916 19.3903 4.85916 19.6703 5.13916 19.7703C5.15916 19.7803 5.17916 19.7903 5.19916 19.8003H14.7992C14.8192 19.7903 14.8492 19.7803 14.8692 19.7703C15.1392 19.6603 15.3092 19.3903 15.2592 19.1203Z"
                                                fill="white" />
                                            <path
                                                d="M16.8688 10.1501C16.8688 10.5801 16.5188 10.9301 16.0888 10.9401C15.6588 10.9401 15.3088 10.5901 15.2988 10.1601C15.2988 9.73012 15.6488 9.38012 16.0788 9.37012C16.5188 9.37012 16.8688 9.72012 16.8688 10.1501Z"
                                                fill="white" />
                                            <path
                                                d="M3.90935 9.37012C4.33935 9.37012 4.68935 9.73012 4.67935 10.1601C4.67935 10.5901 4.31935 10.9401 3.88935 10.9301C3.45935 10.9301 3.10935 10.5701 3.11935 10.1401C3.12935 9.72012 3.47935 9.37012 3.90935 9.37012Z"
                                                fill="white" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_278_2960">
                                                <rect width="20" height="20" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    เปรียบเทียบ
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal favtite -->
        <div class="modal fade" id="favorite" tabindex="-1" aria-labelledby="favoriteLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content" style="background-color: rgba(0, 0, 0, 0); border: none;">
                    <div class="modal-header" style="background-color: var(--bs-modal-bg);padding: 11px">
                        <button type="button" class="btn-close m-0" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                        <div class="row w-100" style="display: contents;">
                            <div class="col text-center">
                                <span class="modal-title fnt-28" id="favoriteLabel">รายการโปรด</span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body flex-column"
                        style="background-color: var(--bs-modal-bg); border-bottom-left-radius: var(--bs-modal-inner-border-radius); border-bottom-right-radius: var(--bs-modal-inner-border-radius);">
                        @php
                            $data = [['unit' => 'A15-1924', 'status' => 'เปิดจอง', 'img' => asset('assets/images/image 39.png')], ['unit' => 'A12-1910', 'status' => 'ขายแล้ว', 'img' => asset('assets/images/image 40.png')], ['unit' => 'A09-1912', 'status' => 'กำลังมีคิวจอง', 'img' => asset('assets/images/image 41.png')], ['unit' => 'A15-1920', 'status' => 'กำลังมีคิวจอง', 'img' => asset('assets/images/image 40.png')], ['unit' => 'A14-1914', 'status' => 'เปิดจอง', 'img' => asset('assets/images/image 39.png')]];
                        @endphp
                        @foreach ($data as $index => $item)
                            <div class="form d-flex justify-content-between"
                                style="padding-bottom: inherit;margin-top:10px;margin-bottom:10px">
                                <div class="d-flex align-items-center">
                                    <img class="img-compare me-2" src="{{ $item['img'] }}">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        <span class="fnt-20">คอนโดมิเนียม เดอะ สเตจ มายด์สเคป</span>
                                        <br>
                                        ยูนิต : {{ $item['unit'] }}
                                        <br>
                                        สถานะ :
                                        @if ($item['status'] == 'เปิดจอง')
                                            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8"
                                                viewBox="0 0 8 8" fill="none">
                                                <circle cx="4" cy="4" r="4" fill="#43A047" />
                                            </svg>
                                            เปิดจอง
                                        @elseif ($item['status'] == 'กำลังมีคิวจอง')
                                            <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="8"
                                                height="9" viewBox="0 0 8 9" fill="none">
                                                <circle cx="4" cy="4.88428" r="4" fill="#FFB300" />
                                            </svg>
                                            กำลังมีคิวจอง
                                        @else
                                            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8"
                                                viewBox="0 0 8 8" fill="none">
                                                <circle cx="4" cy="4" r="4" fill="#EC161D" />
                                            </svg>
                                            ขายแล้ว
                                        @endif
                                        <br>
                                        สถานที่ : รัชดา - ห้วยขวาง
                                    </label>
                                </div>

                                <div class="text-end" style="margin-top:10px">
                                    <button class="btn" type="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                            viewBox="0 0 32 32" fill="none">
                                            <path
                                                d="M15.9996 30.4001C8.09564 30.4161 1.59964 23.9361 1.59964 16.0001C1.58364 8.08013 8.06364 1.61613 15.9996 1.60013C23.9196 1.58413 30.3836 8.04813 30.3996 16.0001C30.4156 23.9041 23.9356 30.3841 15.9996 30.4001ZM27.5036 16.0161C27.5196 9.69613 22.3676 4.54413 16.0156 4.51213C9.69564 4.48013 4.47964 9.69613 4.49564 16.0161C4.51164 22.3521 9.67964 27.5041 15.9996 27.5041C22.3196 27.5041 27.4876 22.3361 27.5036 16.0161Z"
                                                fill="#FFE0E1" />
                                            <path
                                                d="M15.8876 17.2642C14.4156 17.2642 12.9436 17.2802 11.4716 17.2642C10.4636 17.2482 9.8076 16.4802 9.9836 15.5202C10.1116 14.8162 10.7036 14.3682 11.5196 14.3682C13.1676 14.3682 14.8316 14.3682 16.4796 14.3682C17.7596 14.3682 19.0396 14.3682 20.3196 14.3682C21.3916 14.3842 22.0796 15.2642 21.7916 16.2242C21.5996 16.8642 21.0556 17.2482 20.3036 17.2642C19.0396 17.2642 17.7596 17.2642 16.4956 17.2642C16.3036 17.2642 16.0956 17.2642 15.8876 17.2642Z"
                                                fill="#FFE0E1" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    {{-- <div class="text-end">
                        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 80 80"
                            fill="none">
                            <g filter="url(#filter0_bd_278_4397)">
                                <circle cx="40" cy="36" r="30" fill="#231F20" fill-opacity="0.5"
                                    shape-rendering="crispEdges" />
                                <circle cx="40" cy="36" r="29.75"
                                    stroke="url(#paint0_linear_278_4397)" stroke-width="0.5"
                                    shape-rendering="crispEdges" />
                            </g>
                            <path
                                d="M48.2467 19.5C46.5583 19.5263 44.9067 19.9976 43.4587 20.8664C42.0108 21.7351 40.8177 22.9706 40 24.448C39.1823 22.9706 37.9892 21.7351 36.5413 20.8664C35.0933 19.9976 33.4417 19.5263 31.7533 19.5C29.0618 19.6169 26.526 20.7944 24.6998 22.775C22.8737 24.7557 21.9057 27.3786 22.0073 30.0707C22.0073 40.2291 38.4346 51.9619 39.1334 52.4597L40 53.073L40.8666 52.4597C41.5654 51.9649 57.9927 40.2291 57.9927 30.0707C58.0943 27.3786 57.1263 24.7557 55.3002 22.775C53.474 20.7944 50.9382 19.6169 48.2467 19.5Z"
                                fill="#FE353B" />
                            <defs>
                                <filter id="filter0_bd_278_4397" x="0" y="0" width="80"
                                    height="80" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                    <feGaussianBlur in="BackgroundImageFix" stdDeviation="3" />
                                    <feComposite in2="SourceAlpha" operator="in"
                                        result="effect1_backgroundBlur_278_4397" />
                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                    <feOffset dy="4" />
                                    <feGaussianBlur stdDeviation="5" />
                                    <feComposite in2="hardAlpha" operator="out" />
                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                                    <feBlend mode="normal" in2="effect1_backgroundBlur_278_4397"
                                        result="effect2_dropShadow_278_4397" />
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect2_dropShadow_278_4397"
                                        result="shape" />
                                </filter>
                                <linearGradient id="paint0_linear_278_4397" x1="55.75" y1="9.75" x2="20.5"
                                    y2="63" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="white" stop-opacity="0.25" />
                                    <stop offset="1" stop-opacity="0" />
                                </linearGradient>
                            </defs>
                        </svg>
                    </div>
                    <div class="row p-3">
                        <div class="col-7">
                            <span class="cost-text">ราคาจองเริ่มต้นที่ </span><span class="highlights-cost-text">฿
                                2,900</span>
                            <br><span class="sale-text">จองวันนี้ ดีลพิเศษ ฟรี 12 เดือน</span>
                        </div>
                        <div class="col-5 d-flex justify-content-end align-items-center">
                            <button type="button" class="btn btn-custom-primary btn-join">
                                ลงทะเบียน
                            </button>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <script>
        const owl = $('.owl-carousel');
        owl.owlCarousel({
            // rtl: true,
            loop: true,
            // margin: 30,
            responsive: {
                0: {
                    items: 1.2
                },
                400: {
                    items: 1.5
                },
                500: {
                    items: 2.5
                },
                750: {
                    items: 3.5
                },
                1300: {
                    items: 4
                },
                1400: {
                    items: 4
                },
                1500: {
                    items: 5
                }
            }
        });
    </script>
@endsection
