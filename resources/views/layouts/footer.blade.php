<div class="row footer">
    <div class="col-md-4 mt-5 pe-0">
        <div class="row foot-menu">
            <div class="col-6 foot-menu">
                <div class="foot-text-title">EVENTS
                </div>
                <div class="foot-detail">
                    <a href="">
                        <li>Pre Event</li>
                    </a>
                    <a href="">
                        <li>Open Event</li>
                    </a>
                    <a href="">
                        <li>Close Event</li>
                    </a>
                    <a href="">
                        <li>เปรียบเทียบโครงการ</li>
                    </a>
                </div>
            </div>
            <div class="col-6 foot-menu">
                <div class="foot-text-title">เกี่ยวกับเรา
                </div>
                <div class="foot-detail">
                    <a href="">
                        <li>Real Family</li>
                    </a>
                    <a href="">
                        <li>Real Home Care</li>
                    </a>
                    <a href="">
                        <li>คำนวณสินเชื่อ</li>
                    </a>
                    <a href="">
                        <li>คู่มืออยู่อาศัย</li>
                    </a>
                    <a href="">
                        <li>ที่ปรึกษาด้านการอยู่อาศัย</li>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4 mt-5 pe-0">
        <div class="row">
            <div class="col-6 foot-menu">
                <div class="foot-text-title">HOW TO
                </div>
                <div class="foot-detail">
                    <a href="">
                        <li>How to booking</li>
                    </a>
                    <a href="">
                        <li>How to pay</li>
                    </a>
                </div>
            </div>
            <div class="col-6 foot-menu">
                <div class="foot-text-title">ติดต่อเรา
                </div>
                <div class="foot-detail">
                    <a href="">
                        <li>ติดต่อเรา</li>
                    </a>
                    <a href="">
                        <li>ข้อกำหนดและเงื่อนไข</li>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4 mt-5 foot-menu mb-4">
        <div class="logo mb-2">
            <img src="{{ asset('assets/images/logo.png') }}" alt="" class="img-logo">
        </div>
        {{-- <div style="font-size:28px"> --}}
            {{-- <svg width="120" height="24" viewBox="0 0 120 24" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <rect width="120" height="24" fill="url(#pattern0)"/>
            <defs>
            <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
            <use xlink:href="#image0_2_453" transform="matrix(0.00380228 0 0 0.0190114 0 -0.00380228)"/>
            </pattern>
            <image id="image0_2_453" width="263" height="53" xlink:href="data:image/png;base64,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"/>
            </defs>
            </svg> --}}
            {{-- REAL ASSET</div> --}}
        <div class="foot-text-title">บริษัท เรียลแอสเสท ดีเลลลอปเม้นท์ จำกัด</div>
        <div class="foot-detail" style="line-height:24px">1768 อาคารไทยซัมมิททาวเวอร์ ชั้น 25 ถนนเพรชบุรีตัดใหม่
            แขวนบางกระปิ เขตห้วยขวาง กรุงเทพมหานคร 10310 <br> โทรศัพท์ : 02-076-1232 <br> อีเมล : info@realasset.co.th
        </div>
        <div style="font-size: 28px;display: flex;align-items: center;"><i class="bi bi-telephone-fill"></i>
            <p style="font-size: 40px;margin:0 10px"> 1232</p>
        </div>
        <div style="display: flex;align-items: flex-end; margin-top:10px;margin-bottom:10px">
            {{-- button-facebook --}}
            <a href="" class="me-3"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="33"
                    viewBox="0 0 32 33" fill="none">
                    <g clip-path="url(#clip0_2_490)">
                        <path
                            d="M1.1233e-06 16.2812C0.00327797 7.45339 7.17629 0.285298 16.0057 0.288575C24.8368 0.291852 32.0033 7.46322 32 16.2943C31.9967 25.1254 24.8237 32.2919 15.9926 32.2886C7.16318 32.2853 -0.00327572 25.1123 1.1233e-06 16.2812ZM10.3843 13.373V17.2659H13.7038V27.1357H17.6835V17.243H21.0226C21.1897 15.9437 21.3519 14.6805 21.519 13.3763H17.7228C17.7228 12.349 17.6933 11.3561 17.7326 10.3681C17.7605 9.67345 18.1668 9.2491 18.8484 9.1213C19.181 9.05904 19.5251 9.05085 19.8642 9.0443C20.4475 9.03283 21.0291 9.04102 21.6124 9.04102V5.5774C20.3312 5.47582 19.0647 5.32672 17.7998 5.48892C15.9992 5.71994 14.6622 6.62763 14.0511 8.38401C13.8316 9.01645 13.7447 9.71277 13.707 10.3845C13.6513 11.3709 13.6923 12.3621 13.6923 13.373H10.3827H10.3843Z"
                            fill="white" />
                    </g>
                    <defs>
                        <clipPath id="clip0_2_490">
                            <rect width="32" height="32" fill="white" transform="translate(0 0.288574)" />
                        </clipPath>
                    </defs>
                </svg></a>
            {{-- button-youtube --}}
            <a href="" class="me-3"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="33"
                    viewBox="0 0 32 33" fill="none">
                    <g clip-path="url(#clip0_2_492)">
                        <path
                            d="M2.80816e-07 16.2845C0.0016387 7.45503 7.17301 0.286936 16.0041 0.288574C24.8352 0.290213 32.0016 7.45994 32 16.2927C32 25.1238 24.827 32.2919 15.9959 32.2902C7.16645 32.2869 -0.00163814 25.1139 2.80816e-07 16.2845ZM15.9959 24.2767C18.7927 24.1882 21.5846 24.1833 24.3699 23.9064C25.8166 23.7622 26.8423 22.9496 27.1699 21.5684C27.2699 21.144 27.342 20.7115 27.3944 20.2789C27.6352 18.2604 27.6205 16.2337 27.5304 14.2086C27.4845 13.1698 27.3633 12.1262 27.1847 11.1005C26.952 9.7652 26.0017 8.89356 24.6566 8.71661C23.8226 8.60684 22.9805 8.52656 22.1416 8.49706C17.2919 8.33158 12.4422 8.24311 7.599 8.67401C6.16702 8.80181 5.15939 9.63085 4.8317 11.0055C4.7334 11.4184 4.66131 11.8411 4.61052 12.2622C4.36639 14.2692 4.39261 16.2861 4.46634 18.2997C4.50074 19.2549 4.61216 20.2118 4.74978 21.1588C4.94312 22.4957 5.64436 23.4509 7.00261 23.795C7.44171 23.9064 7.90866 23.9408 8.36414 23.9605C10.9086 24.0735 13.4547 24.1702 15.9992 24.2718L15.9959 24.2767Z"
                            fill="white" />
                        <path
                            d="M13.5628 19.6121C13.2843 19.5663 13.2057 19.4106 13.2073 19.1943C13.2073 17.1054 13.2073 15.0164 13.2073 12.929C13.2073 12.7111 13.2892 12.5587 13.5661 12.5112C13.8299 12.639 14.1265 12.7783 14.4181 12.9241C16.2515 13.84 18.0865 14.7526 19.915 15.6799C20.0657 15.7569 20.2623 15.9339 20.2607 16.065C20.2607 16.196 20.0625 16.3714 19.9117 16.4467C17.903 17.4642 15.8878 18.4669 13.8725 19.4729C13.7693 19.5253 13.6611 19.5679 13.5612 19.6121H13.5628Z"
                            fill="white" />
                    </g>
                    <defs>
                        <clipPath id="clip0_2_492">
                            <rect width="32" height="32" fill="white" transform="translate(0 0.288574)" />
                        </clipPath>
                    </defs>
                </svg></a>
            {{-- button-instragram --}}
            <a href="" class="me-3"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="33"
                    viewBox="0 0 32 33" fill="none">
                    <g clip-path="url(#clip0_2_495)">
                        <path
                            d="M16.0107 0.288577C24.8418 0.293492 32.0049 7.4665 32 16.2992C31.9951 25.1287 24.8188 32.2951 15.9877 32.2886C7.14518 32.282 -0.0163562 25.0959 2.80569e-05 16.2452C0.0164123 7.43537 7.19433 0.283661 16.0107 0.288577ZM6.14411 16.291C6.13428 16.291 6.12608 16.291 6.11625 16.291C6.11625 17.5166 6.09987 18.7438 6.12281 19.9693C6.13428 20.5313 6.1736 21.1014 6.28337 21.6503C6.64219 23.4591 7.61869 24.8043 9.34886 25.5383C10.2238 25.9086 11.1462 26.0642 12.0899 26.0691C14.5738 26.079 17.0593 26.079 19.5431 26.0675C20.0953 26.0642 20.654 26.0347 21.1979 25.9446C23.1984 25.6104 24.6861 24.5929 25.4349 22.6432C25.7478 21.8289 25.8789 20.9786 25.8805 20.1086C25.8838 17.6558 25.8854 15.2031 25.8772 12.7504C25.8756 12.272 25.8543 11.7887 25.7855 11.3168C25.5299 9.58334 24.7549 8.17102 23.1788 7.29283C22.1892 6.74068 21.1045 6.51949 19.9855 6.5113C17.3296 6.49164 14.6754 6.49492 12.0195 6.5113C11.043 6.51621 10.0894 6.69153 9.19649 7.10605C7.1845 8.04158 6.28829 9.73571 6.15885 11.8476C6.06874 13.3239 6.14083 14.8099 6.14083 16.2927L6.14411 16.291Z"
                            fill="white" />
                        <path
                            d="M15.9844 8.35785C17.3181 8.35785 18.6501 8.34474 19.9838 8.36604C20.4065 8.37259 20.8325 8.43977 21.2486 8.52661C23.0214 8.89689 23.7947 10.2814 23.9946 11.6314C24.0471 11.9886 24.0618 12.354 24.0618 12.7144C24.0667 15.1573 24.0831 17.5985 24.052 20.0414C24.0438 20.6378 23.952 21.2604 23.762 21.824C23.2704 23.2822 22.1629 24.0605 20.667 24.144C18.8058 24.2489 16.938 24.2292 15.0718 24.2473C14.1018 24.2571 13.1303 24.2489 12.1603 24.2145C11.6639 24.1965 11.1609 24.1358 10.6759 24.0293C8.96703 23.6541 8.19698 22.2779 8.00528 20.9311C7.95449 20.5739 7.9381 20.2085 7.9381 19.8481C7.93319 17.3954 7.91844 14.9427 7.94793 12.4899C7.95449 11.9132 8.04952 11.3152 8.23302 10.7696C8.72291 9.31305 9.82393 8.5479 11.3182 8.43322C12.6125 8.33327 13.9167 8.35621 15.2176 8.32836C15.4732 8.32344 15.7288 8.32836 15.986 8.32836C15.986 8.33983 15.986 8.34966 15.986 8.36112L15.9844 8.35785ZM16.0073 21.4898C18.8598 21.4996 21.1913 19.178 21.2011 16.3222C21.2093 13.4337 18.9073 11.1006 16.0401 11.0891C13.1352 11.0776 10.8184 13.3698 10.7988 16.2731C10.7808 19.155 13.1024 21.4816 16.0073 21.4914V21.4898ZM21.2323 10.0782C20.6588 10.0782 20.1968 10.532 20.1886 11.1038C20.182 11.6888 20.6506 12.1541 21.2421 12.1492C21.8123 12.1442 22.2743 11.6773 22.2694 11.1088C22.2645 10.5369 21.8041 10.0798 21.2323 10.0782Z"
                            fill="white" />
                        <path
                            d="M15.9942 12.9339C17.8473 12.9273 19.3415 14.4134 19.3563 16.2746C19.371 18.1342 17.8539 19.653 15.991 19.6448C14.1346 19.6366 12.642 18.1391 12.6437 16.2877C12.6437 14.4347 14.1379 12.9404 15.9942 12.9339Z"
                            fill="white" />
                    </g>
                    <defs>
                        <clipPath id="clip0_2_495">
                            <rect width="32" height="32" fill="white" transform="translate(0 0.288574)" />
                        </clipPath>
                    </defs>
                </svg></a>
            {{-- button-line --}}
            <a href="" class="me-3"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="33"
                    viewBox="0 0 32 33" fill="none">
                    <g clip-path="url(#clip0_2_499)">
                        <path
                            d="M15.9984 32.2886C7.16801 32.287 -0.0111869 25.103 1.30867e-05 16.2774C0.0112131 7.43901 7.19521 0.271007 16.0208 0.288607C24.848 0.306207 31.9936 7.45661 32 16.279C32.0064 25.1094 24.832 32.2886 15.9984 32.2886ZM25.8336 14.887C25.7872 12.5894 24.7888 10.8166 23.0992 9.41021C21.3056 7.91901 19.2 7.18141 16.896 7.02781C13.9056 6.82781 11.1616 7.52701 8.82081 9.47101C5.39201 12.319 5.27201 16.8582 8.53441 19.8838C10.2288 21.455 12.2784 22.2486 14.5456 22.5366C15.0464 22.6006 15.2224 22.807 15.1648 23.303C15.1056 23.8198 15.016 24.335 14.9952 24.8534C14.9872 25.0614 15.0656 25.3574 15.2128 25.4614C15.3568 25.5638 15.6768 25.551 15.8528 25.4598C16.8848 24.927 17.92 24.3942 18.9104 23.7894C21.272 22.3462 23.352 20.591 24.8352 18.2086C25.48 17.175 25.8048 16.0502 25.832 14.8854L25.8336 14.887Z"
                            fill="white" />
                        <path
                            d="M17.7025 15.0662C17.7025 14.2614 17.7009 13.5702 17.7025 12.879C17.7041 12.4598 17.8817 12.2486 18.2145 12.2566C18.5329 12.2646 18.6929 12.4646 18.6945 12.8742C18.6977 14.039 18.6929 15.2054 18.6977 16.3702C18.6977 16.6518 18.6513 16.8982 18.3585 17.0054C18.0593 17.1142 17.8769 16.9414 17.7057 16.7174C17.0913 15.9126 16.4657 15.1142 15.7809 14.2294C15.7809 14.6614 15.7809 15.0006 15.7809 15.3398C15.7809 15.6998 15.7841 16.0582 15.7809 16.4182C15.7777 16.8166 15.6081 17.0278 15.2961 17.0358C14.9697 17.0438 14.7937 16.8278 14.7857 16.407C14.7857 16.383 14.7857 16.3574 14.7857 16.3334C14.7857 15.2054 14.7889 14.0774 14.7841 12.9494C14.7841 12.6614 14.8033 12.3862 15.1217 12.279C15.4337 12.1734 15.6241 12.359 15.8033 12.5942C16.4065 13.3942 17.0225 14.1846 17.7025 15.0678V15.0662Z"
                            fill="white" />
                        <path
                            d="M20.4784 13.2422V14.1366C20.96 14.1366 21.4512 14.1078 21.9376 14.1526C22.1104 14.1686 22.3264 14.3254 22.4096 14.4806C22.4736 14.599 22.4096 14.855 22.312 14.9734C22.2208 15.0838 22.0096 15.1334 21.848 15.1414C21.4032 15.1638 20.9552 15.1494 20.4864 15.1494V16.0454C20.9712 16.0454 21.4656 16.0134 21.9536 16.063C22.1312 16.0806 22.36 16.2598 22.432 16.4246C22.4864 16.5494 22.3568 16.7846 22.256 16.935C22.2048 17.0118 22.0352 17.0358 21.9184 17.0374C21.2864 17.047 20.6528 17.047 20.0208 17.0406C19.6512 17.0358 19.4624 16.8662 19.4592 16.4966C19.4496 15.2566 19.4496 14.0166 19.4592 12.7766C19.4624 12.439 19.6592 12.2534 20.0048 12.2518C20.6496 12.2502 21.2944 12.2438 21.9392 12.255C22.2704 12.2614 22.4736 12.4678 22.472 12.751C22.4704 13.0326 22.2576 13.239 21.9344 13.2438C21.4544 13.2534 20.9744 13.2454 20.4784 13.2454V13.2422Z"
                            fill="white" />
                        <path
                            d="M10.5344 16.0406C11.0368 16.0406 11.48 16.0358 11.9248 16.0406C12.3152 16.0454 12.536 16.2278 12.5392 16.5334C12.5424 16.8406 12.3184 17.0342 11.936 17.0358C11.328 17.0406 10.72 17.0406 10.1136 17.0358C9.70881 17.0326 9.52961 16.8502 9.52801 16.4406C9.52321 15.2374 9.52321 14.0342 9.52801 12.831C9.52801 12.4646 9.70881 12.2582 10.0112 12.2486C10.328 12.239 10.528 12.447 10.5312 12.8342C10.5392 13.7526 10.5344 14.6694 10.5344 15.5878C10.5344 15.7222 10.5344 15.8566 10.5344 16.0406Z"
                            fill="white" />
                        <path
                            d="M13.0224 14.647C13.0224 14.0166 13.0288 13.3846 13.0192 12.7542C13.0144 12.4182 13.152 12.2454 13.4992 12.2438C13.8848 12.2438 14.0224 12.3558 14.024 12.7446C14.0304 14.007 14.0304 15.2694 14.024 16.5302C14.0224 16.927 13.8928 17.0422 13.5088 17.039C13.1488 17.0342 13.024 16.9014 13.0224 16.503C13.0192 15.8838 13.0224 15.2662 13.0224 14.647Z"
                            fill="white" />
                    </g>
                    <defs>
                        <clipPath id="clip0_2_499">
                            <rect width="32" height="32" fill="white" transform="translate(0 0.288574)" />
                        </clipPath>
                    </defs>
                </svg></a>

        </div>
    </div>
</div>
<div class="row footer-hr">
    <hr>
</div>
<div class="row fnt-16">
    <div align="center">
        Copyright &copy; 2023 REAL ASSET. All Rights Reserved.
    </div>
</div>
