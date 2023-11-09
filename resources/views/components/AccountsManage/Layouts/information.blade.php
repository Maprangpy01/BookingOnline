@php

    //$ID= 'MEM00001';
    $data = [
       // 'CusMemberID' => session('CusMemberIDInfo'),
       'CusMemberID' =>  $IDMember,
    ];
    //dd($data);
    $url = config('envpath.CA_Server_Publish') . '/GetUserInfoByID';
    $responseBody = postToApi($url, $data);
    
    // PersonInfo
    $MemeberID = $responseBody['ResultData']['PersonInfo']['CusMemberID'] ?? '-';
    $TitleKey = $responseBody['ResultData']['PersonInfo']['Prefix']['Key'] ?? '-';
    $TitleValue = $responseBody['ResultData']['PersonInfo']['Prefix']['Value'] ?? '-';
    $FirstName = $responseBody['ResultData']['PersonInfo']['CusName'] ?? '-';
    $LastName = $responseBody['ResultData']['PersonInfo']['CusSurname'] ?? '-';
    $IDNumber = $responseBody['ResultData']['PersonInfo']['CusTaxID'] ?? '-';
    $DateOfBirth = $responseBody['ResultData']['PersonInfo']['DateofBirth'] ?? '-';
    $Email = $responseBody['ResultData']['PersonInfo']['CusEmail'] ?? '-';
    $Mobile = $responseBody['ResultData']['PersonInfo']['CusMobile'] ?? '-';
    $Status = $responseBody['ResultData']['PersonInfo']['Status'] ?? '-';
    // CompanyInfo
    $JuristicName = $responseBody['ResultData']['CompanyInfo']['CompanyName'] ?? '-';
    $Telephone = $responseBody['ResultData']['CompanyInfo']['CompanyTelephone'] ?? '-';
    $JuristicTypeKey = $responseBody['ResultData']['CompanyInfo']['CompanyBusiness']['Key'] ?? '-';
    $JuristicTypeValue = $responseBody['ResultData']['CompanyInfo']['CompanyBusiness']['Value'] ?? '-';
    $SegmentKey = $responseBody['ResultData']['CompanyInfo']['CompanyDepartment']['Key'] ?? '-';
    $SegmentValue = $responseBody['ResultData']['CompanyInfo']['CompanyDepartment']['Value'] ?? '-';
    $PositionKey = $responseBody['ResultData']['CompanyInfo']['CompanyJobposition']['Key'] ?? '-';
    $PositionValue = $responseBody['ResultData']['CompanyInfo']['CompanyJobposition']['Value'] ?? '-';
@endphp
<div class="border-radius-15 bg-white p-4 navbar-shadow">
    <div class="row">
        <div class="col-md-8">
            <table>
                <tbody>
                    <tr>
                        <td scope="row" valign="middle" width="100">
                            <img src="{{ asset('assets/images/no-picture-available.png') }}" alt="" width="75px"
                                height="75px" class="img-logo-profile border-radius-10">
                        </td>
                        <td valign="middle">
                            <span class="fnt-20 me-2">
                                <strong>
                                    {{ $TitleValue }}{{ $FirstName }} {{ $LastName }}
                                </strong>
                            </span>
                            <button class="btn btn-outline-primary fnt-10">
                                บุคคลธรรมดา
                            </button>
                            <br>
                            <span class="text-secondary fnt-12">ID : {{ $MemeberID }}</span>
                            <br>
                            <span class="fnt-14 me-2">
                                <i class="bi bi-person-vcard"></i> {{ $IDNumber }}
                            </span>
                            <span class="fnt-14 me-2">
                                <i class="bi bi-envelope"></i> {{ $Email }}
                            </span>
                            <span class="fnt-14 me-2">
                                <i class="bi bi-phone"></i> {{ $Mobile }}
                            </span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-4 text-right-custom">
            <div class="dropdown">
                <button class="btn btn-outline-green dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <span class="me-3 fnt-14">ACTIVE</span>
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Block</a></li>
                </ul>
            </div>
            <span class="text-secondary fnt-12">
                วันที่ใช้งานล่าสุด
            </span>
            <br>
            <span>
                <i class="bi bi-clock me-2"></i>
                {{ timeNowThaiZon() }}
            </span>
        </div>
    </div>
</div>
