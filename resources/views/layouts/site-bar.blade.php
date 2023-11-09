<button class="show-button btn btn-secondary">&#9776;</button>
<div class="site-bar center-items">
    <div class="nav">
        <div class="item top">
            <div>
                <strong>
                    <!--<span class="text-primary m-0 p-0">M</span>
                    <span>P</span>-->
                    <div class="img-nonimg-mp pt-1">
                        <strong><span class="text-primary m-0 p-0">M</span><span>P</span></strong>
                    </div>
                </strong>
            </div>
        </div>
        @if (Route::currentRouteName() == 'OverviewIndex' ||
                Route::currentRouteName() == 'ProfileIndex' ||
                Route::currentRouteName() == 'ProfilePost' 
                )
            <div class="item middle">

                <div class="text-icon">
                    <a onclick="load()" href="{{ route('OverviewIndex') }}" class="text-secondary"><i class="bi bi-house-door-fill"></i></a>
                    </div>
                <div class="text-icon">
                    <a href="" class="text-secondary"><i class="bi bi-file-earmark-bar-graph"></i></a>
                </div>
                <div class="text-icon">
                    <a href="#" class="text-secondary"><i class="bi bi-search"></i></a>
                </div>
                <div class="text-icon">
                    <a href="#" class="text-secondary"><i class="bi bi-bell"></i></a>
                </div>
                <div class="text-icon">
                    <a href="" class="text-secondary"><i class="bi bi-cart-fill"></i></a>
                </div>
                <div class="text-icon">
                    <a href="{{ route("BackendManagement.OverviewIndex") }}" class="text-secondary"><i class="bi bi-arrow-bar-right"></i></a>
                </div>
            </div>
        @elseif(
                Route::currentRouteName() == 'BackendManagement.OverviewIndex' 
                )

            <div class="item middle">
                <div class="text-icon">
                    <a onclick="load()" href="{{ route("BackendManagement.OverviewIndex")}}" class="text-secondary"><i class="bi bi-house-door-fill"></i></a>
                </div>
                <div class="text-icon">
                    <a href="#" class="text-secondary"><i class="bi bi-cart-fill"></i></a>
                </div>
                <div class="btn-group dropend">
                    <div class="text-icon" data-bs-toggle="dropdown">
                        <a href="#" class="text-secondary"><i class="bi bi-people-fill"></i></a>
                    </div>
                    <ul class="dropdown-menu text-start">
                        <li><a class="dropdown-item" ><strong class="fnt-18">ACCOUNT MANAGEMENT</strong></a>
                        </li>
                        <li><a class="dropdown-item"
                            onclick="load()" href=""><i
                                    class="bi bi-dot"></i>ACCOUNT LIST</a>
                        </li>
                    </ul>
                </div>
                <br>
                <div class="btn-group dropend">
                    <div class="text-icon" data-bs-toggle="dropdown">
                        <a href="#" class="text-secondary"><i class="bi bi-person-vcard-fill"></i></a>
                    </div>
                    <ul class="dropdown-menu text-start">
                        <li><a class="dropdown-item" ><strong class="fnt-18">PRODUCTS
                                    MANAGEMENT</strong></a>
                        </li>
                        <li><a class="dropdown-item"
                            onclick="load()" href=""><i
                                    class="bi bi-dot"></i>SERVICES LIST</a>
                        </li>
                        <li><a class="dropdown-item"
                            onclick="load()" href=""><i
                                    class="bi bi-dot"></i>PRODUCTS LIST</a>
                        </li>
                        <li><a class="dropdown-item"
                            onclick="load()" href=""><i
                                    class="bi bi-dot"></i>SKU LIST</a>
                        </li>
                        <li><a class="dropdown-item"
                            onclick="load()" href=""><i
                                    class="bi bi-dot"></i>PREMIUMS LIST</a>
                        </li>
                    </ul>
                </div>
                <br>
                <div class="btn-group dropend">
                    <div class="text-icon" data-bs-toggle="dropdown">
                        <a href="#" class="text-secondary"><i class="bi bi-stack"></i></a>
                    </div>
                    <ul class="dropdown-menu text-start">
                        <li><a class="dropdown-item" ><strong class="fnt-18">CONTENTS
                                    MANAGEMENT</strong></a>
                        </li>
                        <li><a class="dropdown-item"
                            onclick="load()" href=""><i
                                    class="bi bi-dot"></i>CONTENT LIST</a>
                        </li>
                        <li><a class="dropdown-item"
                            onclick="load()" href=""><i
                                    class="bi bi-dot"></i>CATEGORYS LIST</a>
                        </li>
                        <li><a class="dropdown-item"
                            onclick="load()" href=""><i
                                    class="bi bi-dot"></i>CONTRIBUTOR LIST</a>
                        </li>
                    </ul>
                </div>
                <div class="text-icon">
                    <a onclick="load()" href="" class="text-secondary"><i class="bi bi-file-earmark-text-fill"></i></a>
                </div>
                <div class="text-icon">
                    <a onclick="load()" href="" class="text-secondary"><i class="bi bi-person-fill-gear"></i></a> 
                </div>
                <div class="text-icon">
                    <a onclick="load()" href="{{ route('OverviewIndex')}}" class="text-secondary"><i class="bi bi-arrow-bar-left"></i></a>
                </div>

            </div>
        @endif
        <div class="item bottom">
            {{-- @if (Route::currentRouteName() == 'MemberController.CreateCorporateIndex' ||
                    Route::currentRouteName() == 'MemberController.CreateCorporatePost' ||
                    Route::currentRouteName() == 'MemberController.CreateCorporate2Index' ||
                    Route::currentRouteName() == 'MemberController.CreateCorporate2Post' ||
                    Route::currentRouteName() == 'MemberController.CreateCorporate3Index' ||
                    Route::currentRouteName() == 'MemberController.CreateCorporate3Post' ||
                    Route::currentRouteName() == 'MemberController.CreateCorporate4Index')
                <a href="#" class="text-primary fnt-20">
                    <i class="bi bi-grid-3x3-gap-fill"></i>
                </a>
                <br><br>
            @endif --}}
            <button class="btn btn-primary mb-5 ps-2 pe-2 pt-1 pb-1 btn-full-model" data-bs-toggle="dropdown">
                <i class="bi bi-person"></i>
            </button>
            <ul class="dropdown-menu text-center">
                {{-- @if (session('pageAction') == 'Corporate')
                    <li>
                        <a class="dropdown-item" href="#">
                            <strong class="fnt-18">{{ session('user')['JuristicInfo']['CoporateName'] }}</strong>
                        </a>
                    </li>
                @else
                    <li>
                        <a class="dropdown-item" href="#">
                            <strong class="fnt-18">
                                {{ session('user')['PersonInfo']['Prefix']['Value'] ?? ''}}{{ session('user')['PersonInfo']['CusName'] ?? '' }}
                                {{ session('user')['PersonInfo']['CusSurname'] ?? '' }}
                            </strong>
                        </a>
                    </li>
                @endif --}}
                {{-- @if (session('user')['PersonInfo']['RefCompanyInfo']['CoporateStatus'] ?? false)
                    @if (session('user')['PersonInfo']['RefCompanyInfo']['CoporateStatus'] == 'owner')
                        @if (session('pageAction') == 'Corporate') --}}
                            <li><a class="dropdown-item text-primary"
                                onclick="load()" href="{{ route('OverviewIndex') }}">เปลี่ยนบัญชีผู้ใช้งานบุคคลธรรมดา</a>
                            </li>
                        {{-- @else
                            <li><a class="dropdown-item text-primary"
                                onclick="load()" href="{{ route('CreateCorporateIndex.OverviewIndex') }}">เปลี่ยนบัญชีผู้ใช้งานนิติบุคคล</a>
                            </li>
                        @endif
                    @else
                        <li><a class="dropdown-item text-primary"
                            onclick="load()" href="{{ route('MemberController.CreateCorporateIndex') }}">สร้างบัญชีนิติบุคคล</a>
                        </li>
                    @endif
                @else
                    <li><a class="dropdown-item text-primary"
                        onclick="load()" href="{{ route('MemberController.CreateCorporateIndex') }}">สร้างบัญชีนิติบุคคล</a>
                    </li>
                @endif --}}
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" onclick="load()" href="{{ route('LogoutIndex') }}">ออกจากระบบ</a></li>
            </ul>
        </div>
    </div>
</div>
<script>   
    function load() {
                        Swal.fire({
                            title: 'กรุณารอสักครู่...',
                            allowOutsideClick: false,
                            allowEscapeKey: false,
                            allowEnterKey: false,
                            didOpen: () => {
                                Swal.showLoading()
                            },
                        })
                    }
</script>