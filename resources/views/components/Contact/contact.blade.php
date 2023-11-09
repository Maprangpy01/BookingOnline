@extends('main')

@section('style')
    h3.contact-header {
    font-size: 34px;
    }

    .contact-logo {
    width: 100%;
    height: 100%
    }

    .contact-company {
    color: #C70E14;
    font-size: 28px;
    }

    .contact-address {
    font-size: 20px;
    font-style: normal;
    font-weight: 500;
    line-height: 120%;
    letter-spacing: 0.2px;
    }

    .contact-tel {
    color: var(--link-link-active, #C70E14);
    font-size: 48px;
    font-style: normal;
    font-weight: 700;
    line-height: 120%; /* 57.6px */
    letter-spacing: 2px;
    }

    .contact-other {
    font-size: 24px;
    font-style: normal;
    font-weight: 500;
    line-height: 120%; /* 28.8px */
    letter-spacing: 0.5px;
    }

    .contact-socials {
    display: inline-flex;
    justify-content: center;
    gap: 20px;
    }
@endsection

@section('content')
    <div class="container mt-5">
        <div class="row g-4 mt-5 justify-center text-center">
            <div class="col-md-12">
                <label class="form-label">
                    <h3 class="contact-header"><strong>ติดต่อเรา</strong></h3>
                </label>
            </div>
            <div class="col-md-12 ps-5 pe-5">
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <svg class="contact-logo" viewBox="0 0 120 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                            <rect width="120" height="24" fill="url(#pattern0)" />
                            <defs>
                                <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1"
                                    height="1">
                                    <use xlink:href="#logo" transform="matrix(0.00380228 0 0 0.0190114 0 -0.00380228)" />
                                </pattern>
                                <image id="logo" width="100%" height="100%"
                                    xlink:href="data:image/png;base64,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" />
                            </defs>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <div class="col-md-12 text-start">
                            <label class="contact-company">
                                <strong>บริษัท เรียลแอสเสท ดีเวลลอปเม้นท์ จำกัด</strong>
                            </label>
                        </div>
                        <div class="col-md-12 text-start">
                            <label class="contact-address">
                                1768 อาคารไทยซัมมิททาวเวอร์ ชั้น 25 ถนนเพชรบุรีตัดใหม่ แขวงบางกะปิ เขตห้วยขวาง กรุงเทพมหานคร
                                10310<br>โทรศัพท์ : 02-076-1232<br>อีเมล : info@realasset.co.th
                            </label>
                        </div>
                        <div class="col-md-12 text-start">
                            <label class="contact-tel">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <g clip-path="url(#clip0_122_1440)">
                                        <path
                                            d="M21.0938 23.9996C20.8317 23.9732 20.5708 23.9395 20.3086 23.9203C17.2581 23.6871 14.3844 22.8384 11.691 21.3972C8.89182 19.8995 6.52188 17.8872 4.5836 15.3714C2.50224 12.6716 1.12548 9.64843 0.437708 6.31396C0.145524 4.89555 0.00844948 3.45911 3.26511e-05 2.01064C-0.00597937 0.869904 0.81887 0.0176551 1.96236 0.00803876C3.40765 -0.00398167 4.85294 -0.00398167 6.29823 0.00803876C7.39963 0.0176551 8.21246 0.797781 8.24733 1.89885C8.29422 3.36535 8.49382 4.80059 8.9363 6.20337C9.15875 6.91017 8.99041 7.54004 8.52508 8.12544C7.83009 8.99812 7.17358 9.89965 6.50143 10.788C7.99362 13.7714 10.2337 15.9916 13.2133 17.4978C14.1235 16.8078 15.0481 16.1166 15.962 15.411C16.467 15.0216 17.0261 14.9002 17.6357 15.0384C18.3271 15.1935 19.0052 15.4134 19.7014 15.5336C20.376 15.6502 21.0662 15.7332 21.7491 15.732C22.8445 15.732 23.7343 16.2056 24 17.4377V22.312C23.8666 22.6197 23.7692 22.9514 23.5912 23.2315C23.3002 23.6871 22.8229 23.883 22.3131 23.9996H21.0938Z"
                                            fill="#C70E14" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_122_1440">
                                            <rect width="24" height="24" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                1232
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row justify-content-center">
                    <div class="col-md-4 contact-other">
                        <span>
                            ช่องทางติดต่ออื่นๆ
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row justify-content-center">
                    <div class="col-md-3 contact-socials">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40"
                                fill="none">
                                <g clip-path="url(#clip0_122_1418)">
                                    <path
                                        d="M1.40412e-06 19.9908C0.00409746 8.95602 8.97036 -0.00409465 20.0072 1.4038e-06C31.046 0.00409746 40.0041 8.96831 40 20.0072C39.9959 31.046 31.0296 40.0041 19.9908 40C8.95397 39.9959 -0.00409465 31.0296 1.40412e-06 19.9908ZM12.9804 16.3555V21.2217H17.1297V33.559H22.1043V21.193H26.2782C26.4871 19.5689 26.6899 17.9899 26.8988 16.3596H22.1535C22.1535 15.0755 22.1166 13.8344 22.1658 12.5995C22.2006 11.7311 22.7085 11.2007 23.5605 11.0409C23.9762 10.9631 24.4063 10.9528 24.8303 10.9447C25.5594 10.9303 26.2864 10.9406 27.0155 10.9406V6.61103C25.414 6.48405 23.8308 6.29768 22.2498 6.50044C19.999 6.78921 18.3278 7.92382 17.5639 10.1193C17.2894 10.9098 17.1809 11.7802 17.1338 12.6199C17.0642 13.8529 17.1154 15.0919 17.1154 16.3555H12.9783H12.9804Z"
                                        fill="#C70E14" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_122_1418">
                                        <rect width="40" height="40" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40"
                                fill="none">
                                <g clip-path="url(#clip0_122_1420)">
                                    <path
                                        d="M3.5102e-07 19.9949C0.00204838 8.95807 8.96626 -0.00204768 20.0051 3.5102e-07C31.044 0.00204838 40.002 8.96421 40 20.0051C40 31.044 31.0337 40.0041 19.9949 40.0021C8.95807 39.998 -0.00204768 31.0317 3.5102e-07 19.9949ZM19.9949 29.9852C23.4909 29.8746 26.9807 29.8684 30.4623 29.5223C32.2707 29.3421 33.5528 28.3263 33.9624 26.5998C34.0873 26.0693 34.1775 25.5286 34.243 24.988C34.5441 22.4648 34.5256 19.9314 34.413 17.4C34.3556 16.1016 34.2041 14.797 33.9809 13.5149C33.69 11.8458 32.5022 10.7562 30.8207 10.535C29.7783 10.3978 28.7256 10.2975 27.677 10.2606C21.6149 10.0538 15.5527 9.94317 9.49875 10.4818C7.70877 10.6415 6.44923 11.6778 6.03963 13.3961C5.91675 13.9122 5.82663 14.4406 5.76315 14.967C5.45799 17.4758 5.49076 19.9969 5.58292 22.514C5.62593 23.708 5.76519 24.904 5.93723 26.0878C6.1789 27.7589 7.05545 28.9529 8.75326 29.383C9.30214 29.5223 9.88582 29.5653 10.4552 29.5899C13.6358 29.7312 16.8184 29.852 19.999 29.979L19.9949 29.9852Z"
                                        fill="#C70E14" />
                                    <path
                                        d="M16.9542 24.1545C16.6061 24.0971 16.5077 23.9026 16.5098 23.6322C16.5098 21.021 16.5098 18.4098 16.5098 15.8006C16.5098 15.5282 16.6122 15.3377 16.9583 15.2783C17.288 15.4381 17.6587 15.6121 18.0233 15.7944C20.315 16.9393 22.6088 18.08 24.8944 19.2392C25.0828 19.3355 25.3286 19.5566 25.3266 19.7205C25.3266 19.8843 25.0787 20.1035 24.8903 20.1977C22.3794 21.4695 19.8604 22.7229 17.3413 23.9804C17.2123 24.0459 17.0771 24.0992 16.9522 24.1545H16.9542Z"
                                        fill="#C70E14" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_122_1420">
                                        <rect width="40" height="40" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40"
                                fill="none">
                                <g clip-path="url(#clip0_122_1423)">
                                    <path
                                        d="M20.0133 3.16515e-06C31.0522 0.00614724 40.0062 8.97241 40 20.0133C39.9939 31.0501 31.0235 40.0082 19.9847 40C8.93148 39.9918 -0.0204452 31.0092 3.50712e-05 19.9457C0.0205153 8.93349 8.99292 -0.00614091 20.0133 3.16515e-06ZM7.68013 20.0031C7.66785 20.0031 7.65761 20.0031 7.64532 20.0031C7.64532 21.535 7.62484 23.069 7.65351 24.6009C7.66785 25.3034 7.717 26.0161 7.85422 26.7022C8.30273 28.9632 9.52336 30.6446 11.6861 31.5621C12.7797 32.025 13.9328 32.2196 15.1124 32.2257C18.2172 32.238 21.3241 32.238 24.4289 32.2236C25.1191 32.2196 25.8175 32.1827 26.4974 32.07C28.998 31.6522 30.8576 30.3804 31.7936 27.9433C32.1848 26.9254 32.3486 25.8625 32.3507 24.775C32.3548 21.7091 32.3568 18.6432 32.3466 15.5773C32.3445 14.9793 32.3179 14.3751 32.2319 13.7853C31.9124 11.6185 30.9437 9.85306 28.9735 8.75531C27.7365 8.06513 26.3807 7.78865 24.9819 7.77841C21.662 7.75383 18.3442 7.75793 15.0244 7.77841C13.8037 7.78455 12.6118 8.00369 11.4956 8.52184C8.98063 9.69126 7.86036 11.8089 7.69857 14.4488C7.58592 16.2941 7.67604 18.1517 7.67604 20.0051L7.68013 20.0031Z"
                                        fill="#C70E14" />
                                    <path
                                        d="M19.98 10.0865C21.6471 10.0865 23.3122 10.0701 24.9793 10.0967C25.5077 10.1049 26.0401 10.1889 26.5603 10.2974C28.7763 10.7603 29.743 12.4909 29.9928 14.1784C30.0584 14.6249 30.0768 15.0816 30.0768 15.5322C30.0829 18.5858 30.1034 21.6373 30.0645 24.6909C30.0543 25.4364 29.9396 26.2147 29.702 26.9192C29.0876 28.7419 27.7031 29.7148 25.8333 29.8192C23.5067 29.9503 21.172 29.9257 18.8393 29.9482C17.6268 29.9605 16.4124 29.9503 15.1999 29.9073C14.5794 29.8847 13.9506 29.809 13.3444 29.6758C11.2083 29.2068 10.2458 27.4865 10.0061 25.803C9.94265 25.3566 9.92217 24.8998 9.92217 24.4493C9.91603 21.3834 9.8976 18.3175 9.93446 15.2516C9.94265 14.5307 10.0614 13.7832 10.2908 13.1012C10.9032 11.2805 12.2795 10.324 14.1473 10.1807C15.7652 10.0557 17.3954 10.0844 19.0216 10.0496C19.341 10.0435 19.6605 10.0496 19.9821 10.0496C19.9821 10.0639 19.9821 10.0762 19.9821 10.0906L19.98 10.0865ZM20.0087 26.5014C23.5743 26.5137 26.4887 23.6116 26.5009 20.0419C26.5112 16.4313 23.6337 13.5149 20.0497 13.5005C16.4185 13.4862 13.5226 16.3514 13.498 19.9805C13.4755 23.583 16.3776 26.4912 20.0087 26.5034V26.5014ZM26.5399 12.2369C25.823 12.2369 25.2455 12.8042 25.2353 13.519C25.2271 14.2501 25.8128 14.8317 26.5521 14.8256C27.2649 14.8195 27.8424 14.2358 27.8363 13.5251C27.8301 12.8103 27.2546 12.2389 26.5399 12.2369Z"
                                        fill="#C70E14" />
                                    <path
                                        d="M19.9929 15.8067C22.3092 15.7985 24.177 17.656 24.1955 19.9826C24.2139 22.3071 22.3174 24.2056 19.9888 24.1954C17.6684 24.1851 15.8026 22.3132 15.8047 19.999C15.8047 17.6827 17.6725 15.8149 19.9929 15.8067Z"
                                        fill="#C70E14" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_122_1423">
                                        <rect width="40" height="40" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40"
                                fill="none">
                                <g clip-path="url(#clip0_122_1427)">
                                    <path
                                        d="M19.998 40C8.96002 39.998 -0.0139836 31.018 1.63584e-05 19.986C0.0140164 8.93804 8.99402 -0.0219596 20.026 4.04268e-05C31.06 0.0220404 39.992 8.96004 40 19.988C40.008 31.026 31.04 40 19.998 40ZM32.292 18.248C32.234 15.376 30.986 13.16 28.874 11.402C26.632 9.53804 24 8.61604 21.12 8.42404C17.382 8.17404 13.952 9.04804 11.026 11.478C6.74002 15.038 6.59002 20.712 10.668 24.494C12.786 26.458 15.348 27.45 18.182 27.81C18.808 27.89 19.028 28.148 18.956 28.768C18.882 29.414 18.77 30.058 18.744 30.706C18.734 30.966 18.832 31.336 19.016 31.466C19.196 31.594 19.596 31.578 19.816 31.464C21.106 30.798 22.4 30.132 23.638 29.376C26.59 27.572 29.19 25.378 31.044 22.4C31.85 21.108 32.256 19.702 32.29 18.246L32.292 18.248Z"
                                        fill="#C70E14" />
                                    <path
                                        d="M22.1285 18.4719C22.1285 17.4659 22.1265 16.6019 22.1285 15.7379C22.1305 15.2139 22.3525 14.9499 22.7685 14.9599C23.1665 14.9699 23.3665 15.2199 23.3685 15.7319C23.3725 17.1879 23.3665 18.6459 23.3725 20.1019C23.3725 20.4539 23.3145 20.7619 22.9485 20.8959C22.5745 21.0319 22.3465 20.8159 22.1325 20.5359C21.3645 19.5299 20.5825 18.5319 19.7265 17.4259C19.7265 17.9659 19.7265 18.3899 19.7265 18.8139C19.7265 19.2639 19.7305 19.7119 19.7265 20.1619C19.7225 20.6599 19.5105 20.9239 19.1205 20.9339C18.7125 20.9439 18.4925 20.6739 18.4825 20.1479C18.4825 20.1179 18.4825 20.0859 18.4825 20.0559C18.4825 18.6459 18.4865 17.2359 18.4805 15.8259C18.4805 15.4659 18.5045 15.1219 18.9025 14.9879C19.2925 14.8559 19.5305 15.0879 19.7545 15.3819C20.5085 16.3819 21.2785 17.3699 22.1285 18.4739V18.4719Z"
                                        fill="#C70E14" />
                                    <path
                                        d="M25.5975 16.192V17.31C26.1995 17.31 26.8135 17.274 27.4215 17.33C27.6375 17.35 27.9075 17.546 28.0115 17.74C28.0915 17.888 28.0115 18.208 27.8895 18.356C27.7755 18.494 27.5115 18.556 27.3095 18.566C26.7535 18.594 26.1935 18.576 25.6075 18.576V19.696C26.2135 19.696 26.8315 19.656 27.4415 19.718C27.6635 19.74 27.9495 19.964 28.0395 20.17C28.1075 20.326 27.9455 20.62 27.8195 20.808C27.7555 20.904 27.5435 20.934 27.3975 20.936C26.6075 20.948 25.8155 20.948 25.0255 20.94C24.5635 20.934 24.3275 20.722 24.3235 20.26C24.3115 18.71 24.3115 17.16 24.3235 15.61C24.3275 15.188 24.5735 14.956 25.0055 14.954C25.8115 14.952 26.6175 14.944 27.4235 14.958C27.8375 14.966 28.0915 15.224 28.0895 15.578C28.0875 15.93 27.8215 16.188 27.4175 16.194C26.8175 16.206 26.2175 16.196 25.5975 16.196V16.192Z"
                                        fill="#C70E14" />
                                    <path
                                        d="M13.1687 19.6901C13.7967 19.6901 14.3507 19.6841 14.9067 19.6901C15.3947 19.6961 15.6708 19.9241 15.6748 20.3061C15.6788 20.6901 15.3987 20.9321 14.9207 20.9341C14.1607 20.9401 13.4008 20.9401 12.6427 20.9341C12.1367 20.9301 11.9127 20.7021 11.9107 20.1901C11.9047 18.6861 11.9047 17.1821 11.9107 15.6781C11.9107 15.2201 12.1368 14.9621 12.5148 14.9501C12.9108 14.9381 13.1608 15.1981 13.1648 15.6821C13.1748 16.8301 13.1687 17.9761 13.1687 19.1241C13.1687 19.2921 13.1687 19.4601 13.1687 19.6901Z"
                                        fill="#C70E14" />
                                    <path
                                        d="M16.2776 17.9481C16.2776 17.1601 16.2856 16.3701 16.2736 15.5821C16.2676 15.1621 16.4396 14.9461 16.8736 14.9441C17.3556 14.9441 17.5276 15.0841 17.5296 15.5701C17.5376 17.1481 17.5376 18.7261 17.5296 20.3021C17.5276 20.7981 17.3656 20.9421 16.8856 20.9381C16.4356 20.9321 16.2796 20.7661 16.2776 20.2681C16.2736 19.4941 16.2776 18.7221 16.2776 17.9481Z"
                                        fill="#C70E14" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_122_1427">
                                        <rect width="40" height="40" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row d-flex justify-content-center mt-5">
        <div class="col-md-4 p-0 contact-socials">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.514436726875!2d100.56459270986707!3d13.747821686587923!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29ef1a9dadd51%3A0x144c09a521600cf4!2z4Lia4Lij4Li04Lip4Lix4LiXIOC5gOC4o-C4teC4ouC4peC5geC4reC4quC5gOC4quC4lyDguJTguLXguYDguKfguKXguKXguK3guJvguYDguKHguYnguJnguJfguYwg4LiI4Liz4LiB4Lix4LiU!5e0!3m2!1sth!2sth!4v1698813169281!5m2!1sth!2sth" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            {{-- <img src="{{ asset('assets/images/screen_shot_map.png') }}" class="map-dummy w-100" alt=""> --}}
        </div>
    </div>
@endsection
