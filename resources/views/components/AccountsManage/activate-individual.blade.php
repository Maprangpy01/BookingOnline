@extends('main-authen')
@section('content')
    <script>
        document.body.style.backgroundColor = "#f3f8fe";
    </script>
    <div class="container-fluid mr-content container-card-manage">
        <div id="head-title" class="row">
            <div class="col-md-12">
                <strong class="fnt-20">
                    ACCOUNTS MANAGEMENT
                </strong>
            </div>
        </div>
        <div id="dashboard" class="row mt-3">
            @include('components.AccountsManage.Layouts.dashboard')
        </div>
        <div id="search" class="row mt-5">
            <div class="col-md-5 mx-auto">
                <form action="" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-9">
                            <div class="input-group mb-3">
                                <span class="input-group-text bg-white" id="basic-addon1">
                                    <i class="bi bi-search"></i>
                                </span>
                                <input type="text" class="form-control" id="" name=""
                                    placeholder="ค้นหาจากชื่อ หรือ เลขประจำตัวผู้เสียภาษี...">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <button class="btn btn-primary btn-w-80 btn-w-mb">ค้นหา</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div id="title" class="row mt-2">
            <div class="col-md-12">
                <strong class="fnt-18">
                    รายชื่อบัญชีแบบบุคคลธรรมดา
                </strong>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-12">
                <div class="border-radius-10 bg-white br-2">
                    <div class="content-wrapper" id="content-wrapper">
                        <div class="overflow-x">
                            <table class="table table-w-300per">
                                <tbody>
                                    <tr>
                                        <td scope="col"></td>
                                        <td colspan="2" scope="col">ชื่อสมาชิก</td>
                                        <td scope="col">บัญชีผู้ใช้งาน</td>
                                        <td scope="col" align="center">ประเภทบัญชีผู้ใช้งาน</td>
                                        <td scope="col" align="center">สถานะ</td>
                                        <td scope="col">วันที่เข้าใช้งานล่าสุด</td>
                                        <td scope="col" align="center">ดำเนินการ</td>
                                    </tr>
                                    <tr>
                                        <td scope="col" scope="row"></td>
                                        <td valign="middle" width="50" height="80">
                                            <img src="{{ asset('assets/images/no-picture-available.png') }}" alt=""
                                                width="50px" height="50px" class="border-radius-10">
                                        </td>
                                        <td valign="middle" scope="row">
                                            <strong>XXXXXXX XXXXX</strong><br>
                                            <span class="fnt-15 text-secondary">ID : 2022120100012</span>
                                        </td>
                                        <td valign="middle">Markxxxxxxx</td>
                                        <td valign="middle" align="center">
                                            <button class="btn btn-outline-primary">บุคคลธรรมดา</button>
                                        </td>
                                        <td valign="middle" align="center">
                                            <strong class="text-orange">
                                                <p class="bullet-point">WAITING FOR ACTIVATE</p>
                                            </strong>
                                        </td>
                                        <td valign="middle">
                                            <p class="text-secondary">
                                                <i class="bi bi-clock me-2"></i>
                                                {{ convertISOToDate('2022-10-1') }}
                                            </p>
                                        </td>
                                        <td valign="middle" align="center">
                                            <button class="btn-action fnt-20 me-3 mt-2">
                                                <i class="bi bi-person-fill-gear"></i>
                                            </button>
                                            <button class="btn-action fnt-20 me-3 mt-2">
                                                <i class="bi bi-file-earmark-text"></i>
                                            </button>
                                            <button class="btn-action fnt-20 mt-2">
                                                <i class="bi bi-pencil-fill"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td scope="col" scope="row"></td>
                                        <td valign="middle" width="50" height="80">
                                            <img src="{{ asset('assets/images/no-picture-available.png') }}" alt=""
                                                width="50px" height="50px" class="border-radius-10">
                                        </td>
                                        <td valign="middle" scope="row">
                                            <strong>XXXXXXX XXXXX</strong><br>
                                            <span class="fnt-15 text-secondary">ID : 2022120100012</span>
                                        </td>
                                        <td valign="middle">Markxxxxxxx</td>
                                        <td valign="middle" align="center">
                                            <button class="btn btn-outline-primary">บุคคลธรรมดา</button>
                                        </td>
                                        <td valign="middle" align="center">
                                            <strong class="text-orange">
                                                <p class="bullet-point">WAITING FOR ACTIVATE</p>
                                            </strong>
                                        </td>
                                        <td valign="middle">
                                            <p class="text-secondary">
                                                <i class="bi bi-clock me-2"></i>
                                                {{ convertISOToDate('2022-10-1') }}
                                            </p>
                                        </td>
                                        <td valign="middle" align="center">
                                            <button class="btn-action fnt-20 me-3 mt-2">
                                                <i class="bi bi-person-fill-gear"></i>
                                            </button>
                                            <button class="btn-action fnt-20 me-3 mt-2">
                                                <i class="bi bi-file-earmark-text"></i>
                                            </button>
                                            <button class="btn-action fnt-20 mt-2">
                                                <i class="bi bi-pencil-fill"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="ms-3">
                        <div class="pagination-custom">
                            <a href="#" class="page active">1</a>
                            <a href="#" class="page">2</a>
                            <a href="#" class="page">3</a>
                            <a href="#" class="page">4</a>
                            <a href="#" class="page">5</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        window.addEventListener('load', adjustContentWrapperHeight);
        window.addEventListener('resize', adjustContentWrapperHeight);
    </script>
@endsection
