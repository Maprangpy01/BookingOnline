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
            <div class="col-md-7 mx-auto">
                <form action="{{ route('AccountsManage.IndividualSearch') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text bg-white" id="basic-addon1">
                                    <i class="bi bi-search"></i>
                                </span>
                                <input type="text" class="form-control" id="TextSearch" name="TextSearch" value="{{ $TextSearch ?? '' }}"
                                    placeholder="ค้นหาจากชื่อ หรือ เลขประจำตัวผู้เสียภาษี...">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="input-group mb-3">
                                <label class="input-group-text bg-white" for="inputGroupSelect01">สถานะ</label>
                                <select class="form-select" id="inputGroupSelect01" name="Status">
                                    <option value="All">All</option>
                                    @foreach ($GetMemberStatusList['ResultData'] as $item)
                                        <option {{ !empty($StatusSearch) && $StatusSearch == $item['NameTH'] ? 'selected' : '' }}
                                            value="{{ $item['NameTH'] }}">{{ $item['NameTH'] }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-primary btn-w-80 btn-w-mb" onclick="load()">ค้นหา</button>
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
        <div class="row mt-3">
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
                                        <td scope="col">ประเภทบัญชีผู้ใช้งาน</td>
                                        <td scope="col">สมาชิกบัญชีผู้ใช้งาน</td>
                                        <td scope="col" align="center">
                                            <div class="ps-3">
                                                สถานะ
                                            </div>
                                        </td>
                                        <td scope="col">วันที่เข้าใช้งานล่าสุด</td>
                                        <td scope="col" align="center">ดำเนินการ</td>
                                        <td valign="middle">
                                        </td>
                                    </tr>
                                    @if ($responseBody['Result'] == 1 && !empty($responseBody['ResultData']['MemeberList']))
                                        @foreach ($responseBodyData as $item)
                                            @php
                                                $MemberID = $item['CusMemberID'] ?? '-';
                                                $TitleKey = $item['Prefix']['Key'] ?? '-';
                                                $TitleValue = $item['Prefix']['Value'] ?? '-';
                                                $FirstName = $item['CusName'] ?? '-';
                                                $LastName = $item['CusSurname'] ?? '-';
                                                $Email = $item['CusEmail'] ?? '-';
                                                $TypeKey = $item['Type']['Key'] ?? '-';
                                                $TypeValue = $item['Type']['Value'] ?? '-';
                                                $JuristicID = $item['CompanyInfo']['JuristicID'] ?? '-';
                                                $JuristicName = $item['CompanyInfo']['CompanyName'] ?? '-';
                                                $Status = $item['Status'] ?? '-';
                                                $LastLoginDT = $item['LastLoginDT'] ?? '-';
                                            @endphp
                                            <tr>
                                                <td scope="col" scope="row"></td>
                                                <td valign="middle" width="50" height="80">
                                                    <img src="{{ asset('assets/images/no-picture-available.png') }}"
                                                        alt="" width="50px" height="50px"
                                                        class="border-radius-10">
                                                </td>
                                                <td valign="middle" scope="row">
                                                    <strong>{{ $TitleValue }}{{ $FirstName }}
                                                        {{ $LastName }}</strong><br>
                                                    <span class="fnt-15 text-secondary">ID : {{ $MemberID }}</span>
                                                </td>
                                                <td valign="middle">{{ $Email }}</td>
                                                <td valign="middle">
                                                    <button class="btn btn-outline-primary">{{ $TypeValue }}</button>
                                                </td>
                                                <td valign="middle">
                                                    <strong>{{ $JuristicName }}</strong><br>
                                                    <span class="fnt-15 text-secondary">ID : {{ $JuristicID }}</span>
                                                </td>
                                                <td valign="middle" align="center">
                                                    @if ($Status == 'active')
                                                        <strong class="text-green">
                                                            <p class="bullet-point mt-3">{{ strtoupper($Status) }}</p>
                                                        </strong>
                                                    @else
                                                        <strong class="text-orange">
                                                            <p class="bullet-point mt-3">{{ strtoupper($Status) }}</p>
                                                        </strong>
                                                    @endif
                                                </td>
                                                <td valign="middle">
                                                    <p class="text-secondary mt-3">
                                                        <i class="bi bi-clock me-2"></i>
                                                        {{ convertISOToDate($LastLoginDT) }}
                                                    </p>
                                                </td>
                                                <td valign="middle" align="center">
                                                    <a onclick="load()" href="{{ route('AccountsManage.MemberIndex', ['IDMember' => $MemberID,]) }}">
                                                        <button class="btn-action fnt-20 me-3 mt-2">
                                                            <i class="bi bi-file-earmark-text"></i>
                                                        </button>
                                                    </a>
                                                    <a onclick="load()" href="{{ route('AccountsManage.MemberIndex', ['IDMember' => $MemberID,]) }}">
                                                        <button class="btn-action fnt-20 mt-2">
                                                            <i class="bi bi-pencil-fill"></i>
                                                        </button>
                                                    </a>
                                                </td>
                                                <td valign="middle">
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <div class="text-center">
                                            <td valign="middle" align="center" colspan="10">
                                                <strong class="text-warning">
                                                    ไม่มีข้อมูล
                                                </strong>
                                            </td>
                                        </div>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                    @if (count($responseBodyData) > 0)
                        <div class="ms-3">
                            <div class="pagination-custom">
                                {!! $responseBodyData->links('vendor.pagination.custom') !!}
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
