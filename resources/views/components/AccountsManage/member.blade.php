@extends('components.AccountsManage.template.temp-card')
@section('content-temp')
@if (!empty($responseBody['Result']) == '1')
    <div class="row mt-3">
        <div class="col-md-6">
            <p class="h-title-5 ct-am-pl">
                {{ $responseBody['Result'] }}
                <strong>
                    ข้อมูลสมาชิกบริการ
                </strong>
            </p>
        </div>
        <div class="col-md-6 text-end"></div>
    </div>
    @foreach ($responseBody['ResultData']['ServicesList'] as $item)
        @php
            $ServiceId = $item['ServicesInfo']['ServiceId'] ?? '-';
            $ServiceName = $item['ServicesInfo']['ServiceName'] ?? '-';
            $ServiceTypeId = $item['ServicesInfo']['ServiceType']['Key'] ?? '-';
            $ServiceTypeName = $item['ServicesInfo']['ServiceType']['Value'] ?? '-';
            $ProductId = $item['ServicesInfo']['ProductId'] ?? '-';
            $ProductName = $item['ServicesInfo']['ProductName'] ?? '-';
            $CusMemberID = $item['ServicesInfo']['CusMemberID'] ?? '-';
            $UnitAmount = $item['ServicesInfo']['UnitAmount'] ?? '-';
            $UnitId = $item['ServicesInfo']['Units']['Key'] ?? '-';
            $UnitName = $item['ServicesInfo']['Units']['Value'] ?? '-';
            $SubscriptionDateStart = $item['ServicesInfo']['SubscriptionDateStart'] ?? '-';
            $SubscriptionDateEnd = $item['ServicesInfo']['SubscriptionDateEnd'] ?? '-';
            $SubscriptStatus = $item['ServicesInfo']['SubscriptionStatus'] ?? '-';

            $PaymentTopic = $item['ServicesInfo']['PaymentTopic'] ?? '-';
            $OrderID = $item['OrderInfo']['OrderID'] ?? '-';
            $OrderDate = $item['OrderInfo']['OrderDate'] ?? '-';
            $SKUName = $item['OrderInfo']['SKUName'] ?? '-';
            $OrderTotalPrice = $item['OrderInfo']['OrderTotalPrice'] ?? '-';
            $OrderStatusKey = $item['OrderInfo']['OrderStatus']['Key'] ?? '-';
            $OrderStatusValue = $item['OrderInfo']['OrderStatus']['Value'] ?? '-';

            $CusType = $item['PurchaserInfo']['CusType'] ?? '-';
            $CoporateId = $item['PurchaserInfo']['CoporateId'] ?? '-';
            $CoporateName = $item['PurchaserInfo']['CoporateName'] ?? '-';

            $AddrId = $item['AddressDeliveryInfo']['AddrID'] ?? '-';

            $ContactNamePrefixKey = $item['AddressDeliveryInfo']['RecipientInfo']['Prefix']['Key'] ?? '-';
            $ContactNamePrefixValue = $item['AddressDeliveryInfo']['RecipientInfo']['Prefix']['Value'] ?? '-';
            $ContactName = $item['AddressDeliveryInfo']['RecipientInfo']['ContactName'] ?? '-';
            $CompanyDepartmentKey = $item['AddressDeliveryInfo']['RecipientInfo']['CompanyDepartment']['Key'] ?? '-';
            $CompanyDepartmentValue = $item['AddressDeliveryInfo']['RecipientInfo']['CompanyDepartment']['Value'] ?? '-';
            $CompanyJobpositionKey = $item['AddressDeliveryInfo']['RecipientInfo']['CompanyJobposition']['Key'] ?? '-';
            $CompanyJobpositionValue = $item['AddressDeliveryInfo']['RecipientInfo']['CompanyJobposition']['Value'] ?? '-';
            $CusMobile = $item['AddressDeliveryInfo']['RecipientInfo']['CusMobile'] ?? '-';
            $CompanyTelephone = $item['AddressDeliveryInfo']['RecipientInfo']['CompanyTelephone'] ?? '-';

            $No = $item['AddressDeliveryInfo']['AddressInfo']['No'] ?? '-';
            $Moo = $item['AddressDeliveryInfo']['AddressInfo']['Moo'] ?? '-';
            $VillageName = $item['AddressDeliveryInfo']['AddressInfo']['VillageName'] ?? '-';
            $BuildingName = $item['AddressDeliveryInfo']['AddressInfo']['BuildingName'] ?? '-';
            $Floor = $item['AddressDeliveryInfo']['AddressInfo']['Floor'] ?? '-';
            $Room = $item['AddressDeliveryInfo']['AddressInfo']['Room'] ?? '-';
            $Lane = $item['AddressDeliveryInfo']['AddressInfo']['Lane'] ?? '-';
            $Alley = $item['AddressDeliveryInfo']['AddressInfo']['Alley'] ?? '-';
            $Road = $item['AddressDeliveryInfo']['AddressInfo']['Road'] ?? '-';
            $ProvinceKey = $item['AddressDeliveryInfo']['AddressInfo']['Province']['Key'] ?? '-';
            $ProvinceValue = $item['AddressDeliveryInfo']['AddressInfo']['Province']['Value'] ?? '-';
            $DistrictKey = $item['AddressDeliveryInfo']['AddressInfo']['District']['Key'] ?? '-';
            $DistrictValue = $item['AddressDeliveryInfo']['AddressInfo']['District']['Value'] ?? '-';
            $CityKey = $item['AddressDeliveryInfo']['AddressInfo']['City']['Key'] ?? '-';
            $CityValue = $item['AddressDeliveryInfo']['AddressInfo']['City']['Value'] ?? '-';
            $Zipcode = $item['AddressDeliveryInfo']['AddressInfo']['Zipcode'] ?? '-';
        @endphp
        @if ($SubscriptStatus == '1')
            <div class="overflow-x">
                <table class="table table-w-300per">
                    {{-- <style>
                        table, th, td {
                            border: solid;
                        }
                    </style> --}}
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td style="width:5%"></td>
                            <td></td>
                            <td></td>
                            <td style="width:15%"></td>
                            <td style="width:15%"></td>
                            <td style="width:25%"></td>
                            <td ></td>
                        </tr>
                        <tr>
                            <td scope="col" scope="row"></td>
                            <td valign="middle" style="width:5%">
                                <img src="{{ asset('assets/images/no-picture-available.png') }}" alt=""
                                    width="50px" height="50px" class="border-radius-10">
                            </td>
                            <td valign="middle" style="width:40%" colspan="2">
                                <span class="fnt-12 text-secondary">
                                    {{ $ServiceName }}
                                </span><br>
                                <strong>
                                    {{ $ProductName }}
                                </strong><br>
                                <span class="fnt-12 text-secondary">
                                    MEMBER ID : {{ $CusMemberID }}
                                </span>
                            </td>
                            <td style="width:20%"></td>
                            <td valign="middle" align="right" style="width:30%" colspan="3">
                                <strong style="color: #007bff;">อายุสมาชิก {{ $UnitAmount }} {{ $UnitName }}
                                </strong><br>
                                <span class="fnt-15 text-secondary">
                                    <i class="bi bi-clock me-2"></i>
                                    {{ convertISOToDate($SubscriptionDateStart) . ' - ' . convertISOToDate($SubscriptionDateEnd) }}
                                </span><br>
                                <button class="btn btn-outline-success dropdown-toggle btn-w-150 me-3">SUBSCRIPTION</button>
                                <button class="btn btn-primary btn-w-150 ">{{ $PaymentTopic }}</button>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td scope="col" scope="row" height="80"></td>
                            <td valign="middle" colspan="3" style="width:60%">
                                <strong>
                                    รายการสั่งซื้อ
                                </strong><br><br>
                                <span>{{ $SKUName }}</span><br>
                                <span class="text-blue fnt-15"><i class="bi bi-file-earmark-text"></i>
                                    {{ $OrderID }}</span>
                            </td>
                            <td style="width:20%"></td>
                            <td style="width:10%">
                                <br><br>
                                <span class="fnt-10">วันที่สั่งซื้อ</span><br>
                                <span><i class="bi bi-clock me-2"></i>{{ convertISOToDate($OrderDate) }}</span>
                            </td>
                            <td style="width:10%">
                                <br><br>
                                <span class="fnt-10">ยอดเงินที่ชำระ</span><br>
                                <strong>{{ convertCurrencyTHB($OrderTotalPrice) }}</strong>
                            </td>
                            <td colspan="1" align="right" style="width:10%"><br><br>
                                <span class="fnt-10">สถานะการชำระเงิน</span><br>
                                <span class="text-success">{{ $OrderStatusValue }}</span>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td style="width:20%" colspan="2">
                                <br>
                                <strong>ผู้สั่งซื้อ</strong><br>
                                <span>ผู้สมัครสมาชิก</span><br>
                                <span>ประเภทการสั่งซื้อ</span><br>
                                <span>รหัสสมาชิก</span>
                                <br>
                            </td>
                            <td style="width:20%"><br><br>
                                <span>{{ $CoporateName }}</span><br>
                                <span>{{ $CusType }}</span><br>
                                <span>{{ $CoporateId }}</span>
                            </td>
                            <td style="width:20%"></td>
                            <td><br>
                                <strong>ที่อยู่จัดส่ง</strong><br>
                                <span>ผู้รับ</span><br>
                                <span>โทรศัพท์ติดต่อ</span><br>
                                <span>ที่อยู่</span>
                            </td>
                            <td colspan="2">
                                <div style="display: flex;justify-content: flex-end;margin-bottom:10px;">
                                <button class="btn btn-outline-primary btn-w-150 ">เปลี่ยนที่อยู่จัดส่ง</button>
                            </div>
                                {{-- <br> --}}
                                <span>{{ $ContactName }}</span><br>
                                <span>{{ $CusMobile }}</span><br>
                                <span>{{ displayAddress($No, $Moo, $VillageName, $BuildingName, $Floor, $Room, $Alley, $Lane, $Road, $CityValue, $DistrictValue, $ProvinceValue, $Zipcode) }}</span>
                            </td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        @endif
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
@endsection
