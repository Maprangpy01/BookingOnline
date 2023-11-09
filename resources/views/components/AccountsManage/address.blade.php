@extends('components.AccountsManage.template.temp-card')
@section('content-temp')
    <div class="row">
        <div class="col-md-6">
            <p class="h-title-5">
                <strong>
                    ข้อมูลที่อยู่จัดส่ง
                </strong>
            </p>
        </div>
        <div class="col-md-6 text-end"></div>
    </div>
    <div class="row">
        @if (!empty($responseBody['ResultData']['AddressList']))
            @foreach ($responseBody['ResultData']['AddressList'] as $item)
                @php
                    $ID = $item['ID'] ?? '-';
                    $RefMemberID = $item['RefMemberID'] ?? '-';
                    $Sequence = $item['Sequence'] ?? '-';
                    $TitleKey = $item['RecipientInfo']['Prefix']['Key'] ?? '-';
                    $TitleValue = $item['RecipientInfo']['Prefix']['Value'] ?? '-';
                    $FullName = $item['RecipientInfo']['ContactName'] ?? '-';
                    $Mobile = $item['RecipientInfo']['CusMobile'] ?? '-';
                    $Telephone = $item['RecipientInfo']['CompanyTelephone'] ?? '-';

                    $AddressData = $item['AddressInfo']['AddressName'] ?? '-';
                    $No = $item['AddressInfo']['No'] ?? '-';
                    $Moo = $item['AddressInfo']['Moo'] ?? '-';
                    $VillageName = $item['AddressInfo']['VillageName'] ?? '-';
                    $BuildingName = $item['AddressInfo']['BuildingName'] ?? '-';
                    $Floor = $item['AddressInfo']['Floor'] ?? '-';
                    $Room = $item['AddressInfo']['Room'] ?? '-';
                    $Alley = $item['AddressInfo']['Alley'] ?? '-';
                    $Lane = $item['AddressInfo']['Lane'] ?? '-';
                    $Road = $item['AddressInfo']['Road'] ?? '-';
                    $ProvinceKey = $item['AddressInfo']['Province']['Key'] ?? '-';
                    $ProvinceValue = $item['AddressInfo']['Province']['Value'] ?? '-';
                    $DistrictKey = $item['AddressInfo']['District']['Key'] ?? '-';
                    $DistrictValue = $item['AddressInfo']['District']['Value'] ?? '-';
                    $SubDistrictKey = $item['AddressInfo']['SubDistrict']['Key'] ?? '-';
                    $SubDistrictValue = $item['AddressInfo']['SubDistrict']['Value'] ?? '-';
                    $PostCode = $item['AddressInfo']['Zipcode'] ?? '-';
                    $StatusMain = $item['AddressInfo']['StatusMain'] ?? '-';
                    $StatusUse = $item['AddressInfo']['StatusUse'] ?? '-';
                    $Status = $item['AddressInfo']['Status'] ?? '-';
                    $Remark = $item['AddressInfo']['Remark'] ?? '-';

                    $Primary = $item['Primary'] ?? '-';
                @endphp

                <div class="col-md-6">
                    <div class="dashed-line-2 ps-4 pe-4 pt-2 pb-4 me-2 mt-2 mb-2">
                        <table width="100%" class="table-w-100per">
                            <tbody>
                                <tr>
                                    <td height="40" colspan="2" scope="row">
                                        <strong class="fnt-18 me-2">
                                            {{ $AddressData }}
                                        </strong>
                                        @if ($Primary == '0')
                                            <button class="btn btn-outline-primary btn-primary-key-mark">Primary</button>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td height="40" class="text-secondary" scope="row" width="25%">
                                        ผู้รับ
                                    </td>
                                    <td height="40">
                                        {{ $TitleValue }}{{ $FullName }}
                                    </td>
                                </tr>
                                <tr>
                                    <td height="40" class="text-secondary" scope="row">
                                        โทรศัพท์ติดต่อ
                                    </td>
                                    <td height="40">
                                        {{ $Mobile }}
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
                            </tbody>
                        </table>
                    </div>
                </div>
            @endforeach
        @else
            <div class="text-center">
                <strong class="text-warning">
                    ไม่มีข้อมูล
                </strong>
            </div>
        @endif
    </div>
@endsection
