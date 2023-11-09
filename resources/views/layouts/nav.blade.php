{{-- <div class="container"> --}}
<nav class="navbar fixed-top navbar-expand-lg bd-navbar" style="background-color: #fff" id="myScrollspy">
    <div class="container-fluid" style="align-items: flex-start;padding-left:20px">
        <div>
            <button class="navbar-toggler-d p-0 me-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><span class="navbar-toggler-icon"></span></button>
            <a class="navbar-brand" href="#"><svg width="120" height="24" viewBox="0 0 120 24"
                    fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <rect width="120" height="24" fill="url(#pattern0)" />
                    <defs>
                        <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                            <use xlink:href="#image0_2_453"
                                transform="matrix(0.00380228 0 0 0.0190114 0 -0.00380228)" />
                        </pattern>
                        <image id="image0_2_453" width="263" height="53"
                            xlink:href="data:image/png;base64,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" />
                    </defs>
                </svg></a>
        </div>
        <div class="collapse navbar-collapse " id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-lg-0 text-center">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">HOW IT WORKS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">FEATURES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">PRESS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">PRICING</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">CONTACT</a>
                </li>
            </ul>
        </div>
        <div>
            {{-- <button class="navbar-toggler me-0 ps-0" type="button">
                <i class="bi bi-bell"></i>
            </button> --}}
            @if (Route::currentRouteName() == 'OverviewIndex' ||
                Route::currentRouteName() == 'OverviewSearchIndex'
                )
            <a class="navbar-toggler me-0 p-0" href="#scrollspyHeading1">
                <i class="bi bi-search"></i>
            </a>
            @endif
        </div>
    </div>
</nav>
<div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1"
    id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
    <div class="offcanvas-header">
        @if(session('MemberID') == '')
        <div class="d-inline-flex"></div>
        @else
        <div class="d-inline-flex">
        <img src="{{ asset('assets/images/no-picture-available.png') }}" alt="" style="width: 70px;height:70px"
                         class="img-logo-profile rounded-circle me-3">
        <strong class="offcanvas-title fnt-20" id="offcanvasScrollingLabel">สวัสดี<br><span class="text-red fnt-24">{{session('CusFullName')}}</span></strong>
        </div>
        @endif
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body p-0">
        <ul class="navbar-nav justify-content-end flex-grow-1 menu">
            @if(session('MemberID') == '')
            <a class="menu-bar-a" href="{{route('SignInIndex')}}"><li class="menu-bar"><span class="text-red">เข้าสู่ระบบ</span></li></a>
            <a class="menu-bar-a" href="{{route('SignUpIndex')}}"><li class="menu-bar" style="border-bottom: none;"><span class="text-red">ลงทะเบียน</span></li></a>
            @endif
            <a class="menu-bar-a active" aria-current="page" href="{{route('OverviewIndex')}}"><li class="menu-bar" style="border-top: 1.5px solid #cfcfcf52;">
              หน้าแรก
            </li>
            </a>
            <a class="menu-bar-a" href="{{route('OverviewIndex')}}">
            <li class="menu-bar">
              อีเว้นท์
            </li>
            </a>
            <a class="menu-bar-a" href="#"><li class="menu-bar">
              HOW TO BOOKING
            </li></a>

            <a class="menu-bar-a" href="#"><li class="menu-bar">
              HOW TO PAY
            </li></a>
            @if(session('MemberID') != '')
            <a class="menu-bar-a" ><li class="menu-bar d-flex justify-content-between pe-3" onclick="dropdown()">

                    ตั้งค่า

                <i class="bi bi-chevron-down" id="down"></i>
            </li></a>
            <div id="hide" style="display:none;">
            <a class="menu-bar-a" href="{{ route('ProfileIndex') }}"><li class="menu-bar-sub">แก้ไขข้อมูลส่วนตัว</li></a>
            <a class="menu-bar-a" href="{{ route('ChangePasswordIndex')}}"><li class="menu-bar-sub">เปลี่ยนรหัสผ่าน</li></a>
            <a class="menu-bar-a" href="{{ route('BookingHistory') }}"><li class="menu-bar-sub">ประวัติการจอง</li></a>
            <a class="menu-bar-a" href="#"><li class="menu-bar-sub">ประวัติการชำระเงิน</li></a>
            <a class="menu-bar-a" href="{{ route('InterestInIndex') }}"><li class="menu-bar-sub">ความสนใจ</li></a>
            <a class="menu-bar-a" href="{{ route('favorite')}}"><li class="menu-bar-sub">รายการโปรด</li></a>
            </div>
            @endif

            <a class="menu-bar-a" href="{{route('compare')}}"><li class="menu-bar">
              เปรียบเทียบคอนโดมิเนียม
            </li></a>

            <a class="menu-bar-a" href="{{route('contact')}}"><li class="menu-bar">
              ติดต่อเรา
            </li></a>
            @if(session('MemberID') != '')
            <a class="menu-bar-a" href="{{route('LogoutIndex')}}"><li class="menu-bar"><span class="text-red">ออกจากระบบ</span></li></a>
            @endif

          </ul>
    </div>
</div>
{{-- </div> --}}
<script>
    function dropdown(){
        var x = document.getElementById("hide");
        var icon = document.getElementById("down");
        if( x.style.display == "block"){
            x.style.display = "none";
            icon.style.transform = "rotate(0deg)";
        }else{
            x.style.display = "block";
            icon.style.transform = "rotate(180deg)";
        }
    }
</script>
<style>
    .navbar-toggler-d {
  padding: var(--bs-navbar-toggler-padding-y) var(--bs-navbar-toggler-padding-x);
  font-size: var(--bs-navbar-toggler-font-size);
  line-height: 1;
  color: var(--bs-navbar-color);
  background-color: transparent;
  border: var(--bs-border-width) solid var(--bs-navbar-toggler-border-color);
  border-radius: var(--bs-navbar-toggler-border-radius);
  transition: var(--bs-navbar-toggler-transition);
}
.row{
    margin-right: 0;
    margin-left: 0;
}

</style>
