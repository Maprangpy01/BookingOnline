@extends('components.AccountsManage.template.temp-card')
@section('content-temp')
    @php
        $CusMemberID = $responseBody['ResultData']['CusMemberID'] ?? '-';
        $InvoiceTypeKey = $responseBody['ResultData']['TaxInfo']['InvoiceType']['Key'] ?? '-';
        $InvoiceTypeValue = $responseBody['ResultData']['TaxInfo']['InvoiceType']['Value'] ?? '-';
        $JuristicID = $responseBody['ResultData']['TaxInfo']['InvoiceTaxID'] ?? '-';
        $JuristicName = $responseBody['ResultData']['TaxInfo']['InvoiceName'] ?? '-';
        $Telephone = $responseBody['ResultData']['TaxInfo']['Telephone'] ?? '-';
        $BranchTypeKey = $responseBody['ResultData']['TaxInfo']['BranchType']['Key'] ?? '-';
        $BranchTypeValue = $responseBody['ResultData']['TaxInfo']['BranchType']['Value'] ?? '-';
        $BranchNo = $responseBody['ResultData']['TaxInfo']['BranchNo'] ?? '-';
        $No = $responseBody['ResultData']['AddressInfo']['No'] ?? '-';
        $Moo = $responseBody['ResultData']['AddressInfo']['Moo'] ?? '-';
        $VillageName = $responseBody['ResultData']['AddressInfo']['VillageName'] ?? '-';
        $BuildingName = $responseBody['ResultData']['AddressInfo']['BuildingName'] ?? '-';
        $Floor = $responseBody['ResultData']['AddressInfo']['Floor'] ?? '-';
        $Room = $responseBody['ResultData']['AddressInfo']['Room'] ?? '-';
        $Alley = $responseBody['ResultData']['AddressInfo']['Alley'] ?? '-';
        $Lane = $responseBody['ResultData']['AddressInfo']['Lane'] ?? '-';
        $Road = $responseBody['ResultData']['AddressInfo']['Road'] ?? '-';
        $ProvinceKey = $responseBody['ResultData']['AddressInfo']['Province']['Key'] ?? '-';
        $ProvinceValue = $responseBody['ResultData']['AddressInfo']['Province']['Value'] ?? '-';
        $DistrictKey = $responseBody['ResultData']['AddressInfo']['District']['Key'] ?? '-';
        $DistrictValue = $responseBody['ResultData']['AddressInfo']['District']['Value'] ?? '-';
        $SubDistrictKey = $responseBody['ResultData']['AddressInfo']['City']['Key'] ?? '-';
        $SubDistrictValue = $responseBody['ResultData']['AddressInfo']['City']['Value'] ?? '-';
        $PostCode = $responseBody['ResultData']['AddressInfo']['Zipcode'] ?? '-';
    @endphp
    <div class="row">
        <div class="col-md-6">
            <p class="h-title-5">
                <strong>
                    ข้อมูลออกใบกำกับภาษี
                </strong>
            </p>
        </div>
        <div class="col-md-6 text-end"></div>
    </div>
    <div class="row">
        @if ($JuristicName != '-')
            <div class="col-md-6">
                <div class="dashed-line-2 ps-4 pe-4 pt-2 pb-4 me-2 mt-2 mb-2">
                    <table width="90%" class="table-w-100per">
                        <tbody>
                            <tr>
                                <td height="40" colspan="2" scope="row" width="30%">
                                    <strong class="fnt-18">
                                        {{ $JuristicName }}
                                    </strong>
                                    <button type="button" class="btn btn-outline-primary btn-primary-key-mark">
                                        Primary
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td height="40" class="text-secondary" scope="row" width="30%">
                                    บริษัท/บุคคล
                                </td>
                                <td height="40">
                                    {{ $JuristicName }}
                                </td>
                            </tr>
                            <tr>
                                <td height="40" class="text-secondary" scope="row">
                                    รูปแบบ
                                </td>
                                <td height="40">
                                    {{ $InvoiceTypeValue }} {{ $BranchTypeValue }} {{ $BranchNo }}
                                </td>
                            </tr>
                            <tr>
                                <td height="40" class="text-secondary" scope="row">
                                    เลขประจำผู้เสียภาษี
                                </td>
                                <td height="40">
                                    {{ $JuristicID }}
                                </td>
                            </tr>
                            <tr>
                                <td height="40" class="text-secondary" valign="top" scope="row">
                                    ที่อยู่
                                </td>
                                <td height="40">
                                    {{ displayAddress($No, $Moo, $VillageName, $BuildingName, $Floor, $Room, $Alley, $Lane, $Road, $SubDistrictValue, $DistrictValue, $ProvinceValue, $PostCode) }}
                                </td>
                            </tr>
                            <tr>
                                <td height="40" class="text-secondary" scope="row">
                                    โทรศัพท์
                                </td>
                                <td height="40">
                                    {{ $Telephone }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-6"></div>
        @else
            <div class="text-center">
                <strong class="text-warning">
                    ไม่มีข้อมูล
                </strong>
            </div>
        @endif
    </div>
@endsection
