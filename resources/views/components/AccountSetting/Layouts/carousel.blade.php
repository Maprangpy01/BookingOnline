@section('style')
    .form-select {
        color: #CBC4C7;
        height: 44px;
    }
@endsection
<div class="row mt-3 carousel-search">
    <div id="carouselExample" class="carousel slide p-0">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active mb-3">
                <div class="mobile">
                    <a href="{{ route('EventNewIndex') }}" style="color: black" class="mb-3">
                        <div class="col-12">
                            <img src="{{ asset('assets/images/image 58.png') }}" alt="" width="100%"
                                class="p-0" style="border-radius: 0 0 10px 10px">
                        </div>
                        <div class="col-12 text-center mt-3" style="color: #463F41">
                            <span style="font-size: 48px">
                                <strong>
                                    <span style="color: #B11116">โปรติดสปีด</span> X3
                                </strong>
                            </span><br>
                            <span class="fnt-34">ดีลร้อนเฉพาะคอนโดเรียล</span>
                        </div>
                        <div class="col-10 mt-3 m-auto text-center">
                            <div style="font-size: 28px">ใจร้อนอยากมีคอนโดใหม่ ต้องจัดโปรนี้! โปรติดสปีดX3 ที่ 24 Online
                                Booking ดีลร้อนเฉพาะคอนโด</div>
                        </div>
                    </a>
                    <div class="row justify-content-center mt-2 mb-4">
                        <div class="col-lg-2 col-sm-4 col-5 p-0 fnt-20">
                            <a href="{{ route('EventNewIndex') }}" style="color: #554C4F">
                                <div class="row">
                                    <div class="col-7 text-end p-0 me-1 fnt-24"><strong>รายละเอียด </strong></div>
                                    <div class="col-2 text-start p-0" style="margin-top: 5px;margin-left:3px">
                                        <i class="bi bi-arrow-right-short"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="desktop">
                    <a href="{{ route('EventNewIndex') }}">
                    <img src="{{ asset('assets/images/image 18.jpg') }}" alt="" width="100%"
                            class="p-0" style="border-radius: 0 0 10px 10px">
                        </a>
                </div>
            </div>
            <div class="carousel-item active mb-3">
                <div class="mobile">
                    <a href="{{ route('EventNewIndex') }}" style="color: black" class="mb-3">
                        <div class="col-12">
                            <img src="{{ asset('assets/images/image 58.png') }}" alt="" width="100%"
                                class="p-0" style="border-radius: 0 0 10px 10px">
                        </div>
                        <div class="col-12 text-center mt-3" style="color: #463F41">
                            <span style="font-size: 48px">
                                <strong>
                                    <span style="color: #B11116">โปรติดสปีด</span> X3
                                </strong>
                            </span><br>
                            <span class="fnt-34">ดีลร้อนเฉพาะคอนโดเรียล</span>
                        </div>
                        <div class="col-10 mt-3 m-auto text-center">
                            <div style="font-size: 28px">ใจร้อนอยากมีคอนโดใหม่ ต้องจัดโปรนี้! โปรติดสปีดX3 ที่ 24 Online
                                Booking ดีลร้อนเฉพาะคอนโด</div>
                        </div>
                    </a>
                    <div class="row justify-content-center mt-2 mb-4">
                        <div class="col-lg-2 col-sm-4 col-5 p-0 fnt-20">
                            <a href="{{ route('EventNewIndex') }}" style="color: #554C4F">
                                <div class="row">
                                    <div class="col-7 text-end p-0 me-1 fnt-24"><strong>รายละเอียด </strong></div>
                                    <div class="col-2 text-start p-0" style="margin-top: 5px;margin-left:3px">
                                        <i class="bi bi-arrow-right-short"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="desktop">
                    <a href="{{ route('EventNewIndex') }}">
                    <img src="{{ asset('assets/images/image 18.jpg') }}" alt="" width="100%"
                            class="p-0" style="border-radius: 0 0 10px 10px">
                        </a>
                </div>
            </div>
            <div class="carousel-item active mb-3">
                <div class="mobile">
                    <a href="{{ route('EventNewIndex') }}" style="color: black" class="mb-3">
                        <div class="col-12">
                            <img src="{{ asset('assets/images/image 58.png') }}" alt="" width="100%"
                                class="p-0" style="border-radius: 0 0 10px 10px">
                        </div>
                        <div class="col-12 text-center mt-3" style="color: #463F41">
                            <span style="font-size: 48px">
                                <strong>
                                    <span style="color: #B11116">โปรติดสปีด</span> X3
                                </strong>
                            </span><br>
                            <span class="fnt-34">ดีลร้อนเฉพาะคอนโดเรียล</span>
                        </div>
                        <div class="col-10 mt-3 m-auto text-center">
                            <div style="font-size: 28px">ใจร้อนอยากมีคอนโดใหม่ ต้องจัดโปรนี้! โปรติดสปีดX3 ที่ 24 Online
                                Booking ดีลร้อนเฉพาะคอนโด</div>
                        </div>
                    </a>
                    <div class="row justify-content-center mt-2 mb-4">
                        <div class="col-lg-2 col-sm-4 col-5 p-0 fnt-20">
                            <a href="{{ route('EventNewIndex') }}" style="color: #554C4F">
                                <div class="row">
                                    <div class="col-7 text-end p-0 me-1 fnt-24"><strong>รายละเอียด </strong></div>
                                    <div class="col-2 text-start p-0" style="margin-top: 5px;margin-left:3px">
                                        <i class="bi bi-arrow-right-short"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="desktop">
                    <a href="{{ route('EventNewIndex') }}">
                    <img src="{{ asset('assets/images/image 18.jpg') }}" alt="" width="100%"
                            class="p-0" style="border-radius: 0 0 10px 10px">
                        </a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<div class="container" style="min-height: 240px" data-bs-spy="scroll" data-bs-target="#myScrollspy" data-bs-offset="50" >
<div class="row d-flex justify-content-center" style="margin-top: -20px" id="scrollspyHeading1">
<div class="search-box col-xxl-10 col-lg-10 " style="max-width: 90%">
    <div class="row text-center mt-3 strong-500">
        <span class="fnt-34"> ค้นหา</span>
    </div>
    <div class="row d-flex justify-content-center mb-3" style="align-items: flex-end;padding:0 5px">
        <div class="col-lg-2 mt-2">
            <div class="form-group">
                <strong class="ms-1 mb-1 fnt-20 bt strong-500" for="Prefix">โครงการ</strong>
                <select class="form-select" style="height: 44px;color:#CBC4C7">
                    <option value="">โครงการ</option>
                </select>
            </div>
        </div>
        <div class="col-lg-2 mt-2">
            <div class="form-group">
                <strong class="ms-1 mb-1 fnt-20 bt strong-500" for="Prefix">ทำเล</strong>
                <select class="form-select" style="height: 44px;color:#CBC4C7">
                    <option value="">ทำเล</option>
                </select>
            </div>
        </div>
        <div class="col-lg-2 mt-2">
            <div class="form-group">
                <strong class="ms-1 mb-1 fnt-20 bt strong-500" for="Prefix">ช่วงราคา</strong>
                <select class="form-select" style="height: 44px;color:#CBC4C7">
                    <option value="">ช่วงราคา</option>
                </select>
            </div>
        </div>
        <div class="col-lg-2 mt-2">
            <div class="form-group">
                <strong class="ms-1 mb-1 fnt-20 bt strong-500" for="Prefix">โปรโมชั่น</strong>
                <select class="form-select" style="height: 44px;color:#CBC4C7">
                    <option value="">ทั้งหมด</option>
                </select>
            </div>
        </div>
        <div class="col-lg-2 mt-2">
            <button class="btn btn-main btn-w-lg btn-search" type="button"  style="height: 44px;font-size:20px;width:100%"><i
                    class="bi bi-search me-2" style="font-size: 16x;"></i>ค้นหาเลย</button>

        </div>
    </div>
</div>
</div>
</div>
<script>
    $(document).ready(function() {
        $(".btn-search").click(function() {
            window.location.href = "{{ route('OverviewSearchIndex') }}";
        });
    });
    $('#scrollspyHeading1').click(function(){
    console.log("click");
    const scrollSpy = new bootstrap.ScrollSpy(document.body, {
  target: '#scrollspyHeading1'
})
  })
</script>
<style>
    .search-box {
        /* background-image: url("{{ asset('assets/images/Union.png') }}"); */
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='463' height='495' viewBox='0 0 463 495' fill='none'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M18.1109 1.14108C17.201 0.762096 16.288 0.381793 15.3716 0C15.2913 0.498788 15.2142 0.91103 15.1472 1.26903C15.0281 1.90581 14.9411 2.37096 14.9252 2.84625C13.4871 36.3083 33.7695 68.6813 64.5403 82.2195C68.0808 83.7707 71.6291 85.3045 75.177 86.8382C85.6678 91.3729 96.1543 95.9058 106.419 100.881C116.412 105.732 125.363 112.019 122.734 125.581C140.314 121.498 152.811 107.365 154.745 89.7435C156.704 71.973 147.926 55.8112 131.537 48.7575C110.116 39.548 88.5919 30.5701 67.067 21.5918C58.7431 18.1198 50.419 14.6478 42.1007 11.1623C34.2025 7.8439 26.2841 4.54558 18.1109 1.14108ZM1.38711 446.317C4.53609 465.251 12.9664 481.462 27.2484 495C27.3807 494.167 27.4413 493.364 27.4982 492.609C27.6121 491.1 27.7113 489.786 28.3394 488.813C29.7131 486.716 31.0385 484.565 32.3657 482.411C36.069 476.401 39.7861 470.368 44.605 465.449C72.2516 437.234 105.031 415.553 138.504 395.084C157.991 383.17 177.908 371.958 197.823 360.746C206.618 355.795 215.413 350.843 224.171 345.832L364.537 265.568C370.862 261.948 377.188 258.327 383.514 254.706C406.125 241.763 428.74 228.818 451.369 215.919C458.882 211.637 462.899 205.326 462.527 196.713C462.155 187.828 457.469 181.764 449.187 178.348C441.638 175.243 434.112 172.077 426.584 168.91C418.212 165.388 409.839 161.865 401.432 158.425C343.14 134.541 284.811 110.695 226.494 86.8542C218.033 83.3952 209.572 79.9363 201.112 76.4775C196.202 74.4645 191.249 72.5395 186.296 70.6146C183.819 69.652 181.342 68.6895 178.871 67.716C196.128 87.417 192.756 109.841 170.341 123.008L170.341 123.008C168.134 124.295 165.927 125.582 163.721 126.844C153.186 132.861 142.643 138.863 132.101 144.865C104.135 160.786 76.1699 176.707 48.3491 192.902C33.9183 201.317 23.9011 213.692 20.281 230.447C16.8345 246.485 18.3222 261.855 26.9261 276.532C117.354 224.854 207.385 173.398 298.11 121.522C298.329 121.866 298.521 122.199 298.706 122.517C299.066 123.138 299.395 123.704 299.821 124.196C325.633 153.97 318.194 198.767 283.853 218.988C256.5 235.097 229.132 251.187 201.764 267.276C148.653 298.5 95.5389 329.726 42.5222 361.103C34.1911 366.028 25.7359 371.696 19.3884 378.848C2.30453 398.079 -2.80327 421.171 1.38711 446.317Z' fill='%23FFF1F1' fill-opacity='0.5'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position-x: 110%;
        background-position-y: -5pc;
        margin-top: -20px;
    }
    .carousel-indicators{
        bottom: 30px;
    }
    .mobile{
            display: none;
        }
        .desktop{
            display: inherit;
        }
    @media (max-width: 991.5px) {
        .btn-w-lg {
            width: 100%;
            margin-top: 10px;
        }
        .carousel-search{
            padding-left:5px;
            padding-right:5px;
        }
        .carousel-control-prev-icon{
            margin-top: -18pc;
        }
        .carousel-control-next-icon{
            margin-top: -18pc;
        }
        .search-box {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='263' height='295' viewBox='0 0 463 495' fill='none'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M18.1109 1.14108C17.201 0.762096 16.288 0.381793 15.3716 0C15.2913 0.498788 15.2142 0.91103 15.1472 1.26903C15.0281 1.90581 14.9411 2.37096 14.9252 2.84625C13.4871 36.3083 33.7695 68.6813 64.5403 82.2195C68.0808 83.7707 71.6291 85.3045 75.177 86.8382C85.6678 91.3729 96.1543 95.9058 106.419 100.881C116.412 105.732 125.363 112.019 122.734 125.581C140.314 121.498 152.811 107.365 154.745 89.7435C156.704 71.973 147.926 55.8112 131.537 48.7575C110.116 39.548 88.5919 30.5701 67.067 21.5918C58.7431 18.1198 50.419 14.6478 42.1007 11.1623C34.2025 7.8439 26.2841 4.54558 18.1109 1.14108ZM1.38711 446.317C4.53609 465.251 12.9664 481.462 27.2484 495C27.3807 494.167 27.4413 493.364 27.4982 492.609C27.6121 491.1 27.7113 489.786 28.3394 488.813C29.7131 486.716 31.0385 484.565 32.3657 482.411C36.069 476.401 39.7861 470.368 44.605 465.449C72.2516 437.234 105.031 415.553 138.504 395.084C157.991 383.17 177.908 371.958 197.823 360.746C206.618 355.795 215.413 350.843 224.171 345.832L364.537 265.568C370.862 261.948 377.188 258.327 383.514 254.706C406.125 241.763 428.74 228.818 451.369 215.919C458.882 211.637 462.899 205.326 462.527 196.713C462.155 187.828 457.469 181.764 449.187 178.348C441.638 175.243 434.112 172.077 426.584 168.91C418.212 165.388 409.839 161.865 401.432 158.425C343.14 134.541 284.811 110.695 226.494 86.8542C218.033 83.3952 209.572 79.9363 201.112 76.4775C196.202 74.4645 191.249 72.5395 186.296 70.6146C183.819 69.652 181.342 68.6895 178.871 67.716C196.128 87.417 192.756 109.841 170.341 123.008L170.341 123.008C168.134 124.295 165.927 125.582 163.721 126.844C153.186 132.861 142.643 138.863 132.101 144.865C104.135 160.786 76.1699 176.707 48.3491 192.902C33.9183 201.317 23.9011 213.692 20.281 230.447C16.8345 246.485 18.3222 261.855 26.9261 276.532C117.354 224.854 207.385 173.398 298.11 121.522C298.329 121.866 298.521 122.199 298.706 122.517C299.066 123.138 299.395 123.704 299.821 124.196C325.633 153.97 318.194 198.767 283.853 218.988C256.5 235.097 229.132 251.187 201.764 267.276C148.653 298.5 95.5389 329.726 42.5222 361.103C34.1911 366.028 25.7359 371.696 19.3884 378.848C2.30453 398.079 -2.80327 421.171 1.38711 446.317Z' fill='%23FFF1F1' fill-opacity='0.5'/%3E%3C/svg%3E");
            background-position-x: -2pc;
            background-position-y: 11pc;
            margin-top: 0px;
        }
        .carousel-indicators{
            bottom: 0;
        }
        .mobile{
            display: inherit;
        }
        .desktop{
            display: none;
        }
    }
    
</style>
