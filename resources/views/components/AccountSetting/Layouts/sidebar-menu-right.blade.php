@php
    $fname = session('user')['PersonInfo']['CusName'];
    $lname = session('user')['PersonInfo']['CusSurname'];
    $fullname = $fname . ' ' . $lname;
    $word = explode(' ', $fullname);
    $acronym = '';
    foreach ($word as $w) {
        $acronym .= mb_substr($w, 0, 1);
    }
@endphp
<div class="container">
    <div class="row">
        <div class="col-12 text-center">
            {{-- <img src="{{ asset('assets/images/no-picture-available.png') }}" class="img-logo" alt=""> --}}
            <div class="img-nonimg">
                <strong> {{ $acronym }} </strong>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12 text-center">
            <h5>
                <strong>
                    {{ session('user')['PersonInfo']['Prefix']['Value'] }}{{ session('user')['PersonInfo']['CusName'] }}
                    {{ session('user')['PersonInfo']['CusSurname'] }}
                </strong>
            </h5>
            <div class="text-secondary fnt-14">
                ID : {{ session('user')['PersonInfo']['CusTaxID'] }} <br>
                <strong class="text-primary">
                    {{ session('user')['PersonInfo']['RefCompanyInfo']['CoporateName'] }}
                </strong>
            </div>

        </div>
    </div>
    @php
        if (Route::currentRouteName() == 'ProfileIndex' || Route::currentRouteName() == 'ProfilePost' || Route::currentRouteName() == 'BillingIndex' || Route::currentRouteName() == 'BillingPost' || Route::currentRouteName() == 'AddressIndex' || Route::currentRouteName() == 'AddAddressIndex' || Route::currentRouteName() == 'AddAddressPost' || Route::currentRouteName() == 'EditAddressIndex' || Route::currentRouteName() == 'EditAddressPost') {
            $ActivePerInfo = 'class=text-primary';
        } else {
            $ActivePerInfo = '';
        }
    @endphp
    <div class="row mt-3">
        <div class="col-10 mx-auto">
            <nav class="nav-custom-vertical-navbar">
                <ul>
                    <li><a onclick="load()" href="{{ route('OverviewIndex') }}"
                            {{ Route::currentRouteName() == 'OverviewIndex' ? 'class=text-primary' : '' }}>ภาพรวม</a>
                    </li>

                    <li><a onclick="load()" href="{{ route('ProfileIndex') }}" {{ $ActivePerInfo }}>ข้อมูลส่วนตัว</a>
                    </li>
                    <li><a onclick="load()" href=""
                            >ข้อมูลสมาชิก</a>
                    </li>
                    <li><a href="#">ข้อมูลการใช้บริการ</a></li>
                    <li><a onclick="load()" href="">ตระกร้าสินค้า</a></li>
                    <li><a onclick="load()" href="">ประวัติการสั่งซื้อ</a>
                    </li>
                    <li><a onclick="load()" href="{{ route('ChangePasswordIndex') }}">เปลี่ยนรหัสผ่าน</a>
                    </li>
                    <!--<li><a href="#">บัญชีผู้ใช้งาน</a></li>-->
                    <li><a href="#">ศูนย์ช่วยเหลือ</a></li>
                    <li><a href="#"></a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12 text-center">
            <a onclick="load()" href="{{ route('LogoutIndex') }}">
                <button class="btn btn-primary btn-w-200">ออกจากระบบ</button>
            </a>
        </div>
    </div>
</div>
