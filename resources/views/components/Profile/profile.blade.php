@extends('main')
@section('content')
@if (session('Result') == '1')
        <script>
            Swal.fire({
                icon: 'success',
                title: '{{ session('Message') }}',
                showConfirmButton: true,
                confirmButtonText:'ปิด',
                allowOutsideClick: false,
                allowEscapeKey: false,
                allowEnterKey: false
                })
        </script>
@elseif (session('Result')!='' && session('Result') != '1')
<script>
    Swal.fire({
        icon: 'error',
        title: '{{ session('Message') }}',
        showConfirmButton: true,
        confirmButtonText:'ปิด',
        allowOutsideClick: false,
        allowEscapeKey: false,
        allowEnterKey: false
        })
</script>
        @endif
@php
    $PrefixKey = $responseBody['ResultData']['PersonInfo']['Prefix']['Key'] ?? '';
    $CusName = $responseBody['ResultData']['PersonInfo']['CusName'] ?? '';
    $CusSurname = $responseBody['ResultData']['PersonInfo']['CusSurname']?? '';
    $CusNickname = $responseBody['ResultData']['PersonInfo']['CusNickname']?? '';
    $CusTaxID = $responseBody['ResultData']['PersonInfo']['CusTaxID']?? '';
    $DateofBirth = $responseBody['ResultData']['PersonInfo']['DateofBirth'] ?? '';
    $CusNationality = $responseBody['ResultData']['PersonInfo']['CusNationality']?? '';
    $CusGenderKey = $responseBody['ResultData']['PersonInfo']['Gender']['Key']?? '';
    $CusMarriedStatus = $responseBody['ResultData']['PersonInfo']['CusMarriedStatus']?? '';
    $CusEmail = $responseBody['ResultData']['PersonInfo']['CusEmail']?? '';
    $CusTelephone = $responseBody['ResultData']['PersonInfo']['CusTelephone']?? '';
    $CusMobile = $responseBody['ResultData']['PersonInfo']['CusMobile']?? '';
    $CusLineID = $responseBody['ResultData']['PersonInfo']['CusLineID']?? '';
    //HouseRegisAddress
    $HouseAddressID = $responseBody['ResultData']['HouseRegisAddressInfo']['AddressID']?? 0;
    $HouseAddressNo = $responseBody['ResultData']['HouseRegisAddressInfo']['AddressNo']?? '';
    $HouseAddressVillage = $responseBody['ResultData']['HouseRegisAddressInfo']['AddressVillage']?? '';
    $HouseAddressMoo = $responseBody['ResultData']['HouseRegisAddressInfo']['AddressMoo']?? '';
    $HouseAddressSoi = $responseBody['ResultData']['HouseRegisAddressInfo']['AddressSoi']?? '';
    $HouseAddressRoad = $responseBody['ResultData']['HouseRegisAddressInfo']['AddressRoad']?? '';
    $HouseProvince = $responseBody['ResultData']['HouseRegisAddressInfo']['Province']['Key']?? '';
    $HouseDistrict = $responseBody['ResultData']['HouseRegisAddressInfo']['District']['Key']?? '';
    $HouseCity = $responseBody['ResultData']['HouseRegisAddressInfo']['City']['Key']?? '';
    $HouseZipCode = $responseBody['ResultData']['HouseRegisAddressInfo']['ZipCode']?? '';
    //SendDocRegisAddress
    $SendDocAddressID = $responseBody['ResultData']['SendDocAddressInfo']['AddressID']?? 0;
    $SendDocAddressNo = $responseBody['ResultData']['SendDocAddressInfo']['AddressNo']?? '';
    $SendDocAddressVillage = $responseBody['ResultData']['SendDocAddressInfo']['AddressVillage']?? '';
    $SendDocAddressMoo = $responseBody['ResultData']['SendDocAddressInfo']['AddressMoo']?? '';
    $SendDocAddressSoi = $responseBody['ResultData']['SendDocAddressInfo']['AddressSoi']?? '';
    $SendDocAddressRoad = $responseBody['ResultData']['SendDocAddressInfo']['AddressRoad']?? '';
    $SendDocProvince = $responseBody['ResultData']['SendDocAddressInfo']['Province']['Key']?? '';
    $SendDocDistrict = $responseBody['ResultData']['SendDocAddressInfo']['District']['Key']?? '';
    $SendDocCity = $responseBody['ResultData']['SendDocAddressInfo']['City']['Key']?? '';
    $SendDocZipCode = $responseBody['ResultData']['SendDocAddressInfo']['ZipCode']['Key']?? '';
    //ContactRegisAddress
    $StatusType = $responseBody['ResultData']['ContactAddressInfo']['StatusType']?? '';
    $ContactAddressID = $responseBody['ResultData']['ContactAddressInfo']['AddressID']?? 0;
    $ContactAddressNo = $responseBody['ResultData']['ContactAddressInfo']['AddressNo']?? '';
    $ContactAddressVillage = $responseBody['ResultData']['ContactAddressInfo']['AddressVillage']?? '';
    $ContactAddressMoo = $responseBody['ResultData']['ContactAddressInfo']['AddressMoo']?? '';
    $ContactAddressSoi = $responseBody['ResultData']['ContactAddressInfo']['AddressSoi']?? '';
    $ContactAddressRoad = $responseBody['ResultData']['ContactAddressInfo']['AddressRoad']?? '';
    $ContactProvince = $responseBody['ResultData']['ContactAddressInfo']['Province']['Key']?? '';
    $ContactDistrict = $responseBody['ResultData']['ContactAddressInfo']['District']['Key']?? '';
    $ContactCity = $responseBody['ResultData']['ContactAddressInfo']['City']['Key']?? '';
    $ContactZipCode = $responseBody['ResultData']['ContactAddressInfo']['ZipCode']?? '';

    $CusGenderList = [
        'Result' => '1',
        'ResultData' => [[
                'CLID' => '1',
                'NameTH' => 'ชาย',
            ],
            [
                'CLID' => '2',
                'NameTH' => 'หญิง',
            ],
            ]
    ];
@endphp
<form action="{{ route('ProfilePost') }}" method="post" id="form-profile">
    @csrf
    {{-- <div class="container"> --}}
        <div class="row justify-content-center text-center" style="margin-top:120px">
            <span class="fnt-34"><strong>ข้อมูลส่วนตัว</strong></span>
            <div class="col-lg-10">
                <div class="row justify-content-center">
                    <div class="col-12" style="height: 130px;width:170px">
                        <img src="{{ asset('assets/images/profile.png') }}" alt="" width="100%">
                        <div class="icon-edit"><i class="bi bi-pencil-fill" style="color: #fff"></i></div>
                    </div>
                </div>
                <div class="row text-start">
                    <span class="mt-4 fnt-24">ข้อมูลส่วนตัว</span>
                    <div class="col-lg-6">
                        <div class="form-group mt-2">
                            <span class="ms-1 mb-1 fnt-20 bt" for="Prefix">คำนำหน้า <span
                                    class="text-danger fnt-14">*</span></span>
                            <select class="form-select" name="Prefix" id="Prefix">
                                @if (!empty($TitleNames['Result']) == 1)
                                    @foreach ($TitleNames['ResultData'] as $PrefixName)
                                        @php
                                            $value = $PrefixName['CLID'];
                                        @endphp
                                        <option {{ CheckSelectInput(old('Prefix'), $PrefixKey, $value) ? 'selected' : '' }} value="{{ $value }}">
                                            {{ $PrefixName['NameTH'] }}
                                        </option>
                                    @endforeach
                                @else
                                    <option value="">
                                        {{ $TitleNames['Message'] ?? 'The service is under construction. please wait a moment' }}
                                    </option>
                                @endif

                            </select>
                            @error('Prefix')
                                <span class="text-danger fnt-14" id="PrefixError">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6" hidden >
                        <input type="hidden" class="form-control disabled" name="PrefixKey" id="PrefixKey" readonly>
                    </div>
                    <div class="col-md-6" hidden >
                        <input type="hidden" class="form-control disabled" name="PrefixValue" id="PrefixValue" readonly>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group mt-2">
                            <span class="ms-1 mb-1 fnt-20 bt" for="CusName">ชื่อ <span
                                    class="text-danger fnt-14">*</span></span>
                            <input type="text" name="CusName" id="CusName" class="form-control" placeholder="ชื่อ"
                            value="{{ CheckValueInput(old('CusName'), $CusName) }}">
                            @error('CusName')
                                <span class="text-danger fnt-14" id="CusNameError">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group mt-2">
                            <span class="ms-1 mb-1 fnt-20 bt" for="CusSurname">นามสกุล <span
                                    class="text-danger fnt-14">*</span></span>
                            <input type="text" name="CusSurname" id="CusSurname" class="form-control"
                                placeholder="นามสกุล" value="{{ CheckValueInput(old('CusSurname'), $CusSurname) }}">
                            @error('CusSurname')
                                <span class="text-danger fnt-14" id="CusSurnameError">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group mt-2">
                            <span class="ms-1 mb-1 fnt-20 bt" for="CusNickname">ชื่อเล่น</span>
                            <input type="text" name="CusNickname" id="CusNickname" class="form-control"
                                placeholder="ชื่อเล่น" value="{{ CheckValueInput(old('CusNickname'), $CusNickname) }}">
                            @error('CusNickname')
                                <span class="text-danger fnt-14" id="CusNicknameError">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group mt-2">
                            <span class="ms-1 mb-1 fnt-20 bt" for="CusTaxID">หมายเลขเลขบัตรประชาชน <span
                                    class="text-danger fnt-14">*</span></span>
                            <input type="text" name="CusTaxID1" id="CusTaxID1" class="form-control"
                                placeholder="หมายเลขเลขบัตรประชาชน" value="{{ CheckValueInput(old('CusTaxID'), $CusTaxID) }}" disabled>
                            <input type="hidden" name="CusTaxID" id="CusTaxID" class="form-control"
                                placeholder="หมายเลขเลขบัตรประชาชน" value="{{ CheckValueInput(old('CusTaxID'), $CusTaxID) }}" >
                            @error('CusTaxID')
                                <span class="text-danger fnt-14" id="CusTaxIDError">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group mt-2">
                            <span class="ms-1 mb-1 fnt-20 bt" for="CusNationality">สัญชาติ </span>
                            <input type="text" name="CusNationality" id="CusNationality" class="form-control"
                                placeholder="สัญชาติ" value="{{ CheckValueInput(old('CusNationality'), $CusNationality) }}">
                            @error('CusNationality')
                                <span class="text-danger fnt-14" id="CusNationalityError">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group mt-2">
                            <span class="ms-1 mb-1 fnt-20 bt" for="CusGender">เพศ </span>
                            <select class="form-select" name="CusGender" id="CusGender">
                                @if (!empty($CusGenderList['Result']) == 1)
                                    @foreach ($CusGenderList['ResultData'] as $CusGenderName)
                                        @php
                                            $value = $CusGenderName['CLID'];
                                        @endphp
                                        <option {{ CheckSelectInput(old('CusGender'), $CusGenderKey, $value) ? 'selected' : '' }}
                                            value="{{ $value }}">
                                            {{ $CusGenderName['NameTH'] }}
                                        </option>
                                    @endforeach
                                @else
                                    <option value="">
                                        {{ $CusGenderList['Message'] ?? 'The service is under construction. please wait a moment' }}
                                    </option>
                                @endif

                            </select>
                            @error('CusGender')
                                <span class="text-danger fnt-14" id="CusGenderError">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6" hidden>
                        <input type="hidden" class="form-control disabled" name="DateofBirth" id="DateofBirth" value="{{$DateofBirth}}" readonly>
                    </div>
                    <div class="col-md-6" hidden>
                        <input type="hidden" class="form-control disabled" name="CusGenderKey" id="CusGenderKey" readonly>
                    </div>
                    <div class="col-md-6" hidden>
                        <input type="hidden" class="form-control disabled" name="CusGenderValue" id="CusGenderValue" readonly>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group mt-2">
                            <span class="ms-1 mb-1 fnt-20 bt" for="CusMarriedStatus">สถานะภาพ</span>
                            <select class="form-select" name="CusMarriedStatus" id="CusMarriedStatus">
                                @if (!empty($MarriedStatusList['Result']) == 1)
                                    @foreach ($MarriedStatusList['ResultData'] as $MarriedStatus)
                                        @php
                                            $value = $MarriedStatus['CLID'];
                                        @endphp
                                        <option {{ CheckSelectInput(old('CusMarriedStatus'), $CusMarriedStatus, $value) ? 'selected' : '' }}
                                            value="{{ $value }}">
                                            {{ $MarriedStatus['NameTH'] }}
                                        </option>
                                    @endforeach
                                @else
                                    <option value="">
                                        {{ $MarriedStatusList['Message'] ?? 'The service is under construction. please wait a moment' }}
                                    </option>
                                @endif

                            </select>
                            @error('CusMarriedStatus')
                                <span class="text-danger fnt-14" id="CusMarriedStatusError">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-md-6" hidden>
                    <input type="hidden" class="form-control disabled" name="CusMarriedStatusKey" id="CusMarriedStatusKey" readonly>
                </div>
                <div class="col-md-6" hidden>
                    <input type="hidden" class="form-control disabled" name="CusMarriedStatusValue" id="CusMarriedStatusValue" readonly>
                </div>
                <div class="row text-start">
                    <span class="mt-4 fnt-24">ข้อมูลติดต่อ</span>
                    <div class="col-lg-6">
                        <div class="form-group mt-2">
                            <span class="ms-1 mb-1 fnt-20 bt" for="CusEmail">อีเมล <span
                                    class="text-danger fnt-14">*</span></span>
                            <input type="text" name="CusEmail1" id="CusEmail1" class="form-control"
                                placeholder="@youemail.com" value="{{ CheckValueInput(old('CusEmail'), $CusEmail) }}" disabled>
                            <input type="hidden" name="CusEmail" id="CusEmail" class="form-control"
                                placeholder="@youemail.com" value="{{ CheckValueInput(old('CusEmail'), $CusEmail) }}" >
                            @error('CusEmail')
                                <span class="text-danger fnt-14" id="CusEmailError">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group mt-2">
                            <span class="ms-1 mb-1 fnt-20 bt" for="CusTelephone">เบอร์ติดต่อ</span>
                            <input type="text" name="CusTelephone" id="CusTelephone" class="form-control"
                                placeholder="0XX-XXX-XXXX" value="{{ CheckValueInput(old('CusTelephone'), $CusTelephone) }}">
                            @error('CusTelephone')
                                <span class="text-danger fnt-14" id="CusTelephoneError">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group mt-2">
                            <span class="ms-1 mb-1 fnt-20 bt" for="CusMobile">เบอร์โทรศัพท์มือถือ <span
                                    class="text-danger fnt-14">*</span></span>
                            <input type="text" name="CusMobile1" id="CusMobile1" class="form-control"
                                placeholder="0XX-XXX-XXXX" value="{{ CheckValueInput(old('CusMobile'), $CusMobile) }}" disabled>
                            <input type="hidden" name="CusMobile" id="CusMobile" class="form-control"
                                placeholder="0XX-XXX-XXXX" value="{{ CheckValueInput(old('CusMobile'), $CusMobile) }}" >
                            @error('CusMobile')
                                <span class="text-danger fnt-14" id="CusMobileError">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group mt-2">
                            <span class="ms-1 mb-1 fnt-20 bt" for="CusLineID">LINE ID</span>
                            <input type="text" name="CusLineID" id="CusLineID" class="form-control"
                                placeholder="LINE ID" value="{{ CheckValueInput(old('CusLineID'), $CusLineID) }}">
                            @error('CusLineID')
                                <span class="text-danger fnt-14" id="CusLineIDError">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row text-start">
                    <span class="mt-4 fnt-24">ที่อยู่ตามบัตรประชาชน</span>
                    <div class="col-lg-6">
                        <input type="hidden" name="HouseAddressID" id="HouseAddressID" value="{{$HouseAddressID}}">
                        <div class="form-group mt-2">
                            <span class="ms-1 mb-1 fnt-20 bt" for="HouseAddressNo">เลขที่ <span
                                    class="text-danger fnt-14">*</span></span>
                            <input type="text" name="HouseAddressNo" id="HouseAddressNo" class="form-control"
                                placeholder="เลขที่" value="{{ CheckValueInput(old('HouseAddressNo'), $HouseAddressNo) }}">
                            @error('HouseAddressNo')
                                <span class="text-danger fnt-14" id="HouseAddressNoError">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group mt-2">
                            <span class="ms-1 mb-1 fnt-20 bt" for="HouseAddressVillage">หมู่บ้าน/อาคาร</span>
                            <input type="text" name="HouseAddressVillage" id="HouseAddressVillage" class="form-control"
                                placeholder="หมู่บ้าน/อาคาร" value="{{ CheckValueInput(old('HouseAddressVillage'), $HouseAddressVillage) }}">
                            @error('HouseAddressVillage')
                                <span class="text-danger fnt-14" id="HouseAddressVillageError">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group mt-2">
                            <span class="ms-1 mb-1 fnt-20 bt" for="HouseAddressMoo">หมู่ที่</span>
                            <input type="text" name="HouseAddressMoo" id="HouseAddressMoo" class="form-control"
                                placeholder="หมู่ที่" value="{{ CheckValueInput(old('HouseAddressMoo'), $HouseAddressMoo) }}">
                            @error('HouseAddressMoo')
                                <span class="text-danger fnt-14" id="HouseAddressMooError">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group mt-2">
                            <span class="ms-1 mb-1 fnt-20 bt" for="HouseAddressSoi">ซอย</span>
                            <input type="text" name="HouseAddressSoi" id="HouseAddressSoi" class="form-control" placeholder="ซอย"
                            value="{{ CheckValueInput(old('HouseAddressSoi'), $HouseAddressSoi) }}">
                            @error('HouseAddressSoi')
                                <span class="text-danger fnt-14" id="HouseAddressSoiError">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group mt-2">
                            <span class="ms-1 mb-1 fnt-20 bt" for="HouseAddressRoad">ถนน </span>
                            <input type="text" name="HouseAddressRoad" id="HouseAddressRoad" class="form-control" placeholder="ถนน"
                            value="{{ CheckValueInput(old('HouseAddressRoad'), $HouseAddressRoad) }}">
                            @error('HouseAddressRoad')
                                <span class="text-danger fnt-14" id="HouseAddressRoadError">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group mt-2">
                            <label class="form-label" for="Province">จังหวัด <span
                                    class="text-danger fnt-14">*</span></label>
                            <select class="form-select" name="Province" id="Province" required>
                                <option value="">เลือกจังหวัด</option>
                            </select>
                            @error('Province')
                                <span class="text-danger fnt-14" id="ProvinceError">{{ $message }}</span>
                            @enderror
                            <div class="invalid-feedback">
                                กรุณากรอกข้อมูล
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group mt-2">
                            <label class="form-label" for="District">เขต/อำเภอ <span
                                    class="text-danger fnt-14">*</span></label>
                            <select class="form-select" name="District" id="District" required>
                                <option value="">เลือกเขต/อำเภอ</option>
                            </select>
                            @error('District')
                                <span class="text-danger fnt-14" id="DistrictError">{{ $message }}</span>
                            @enderror
                            <div class="invalid-feedback">
                                กรุณากรอกข้อมูล
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group mt-2">
                            <label class="form-label" for="SubDistrict">แขวง/ตำบล <span
                                    class="text-danger fnt-14">*</span></label>
                            <select class="form-select" name="SubDistrict" id="SubDistrict" required>
                                <option value="">เลือกแขวง/ตำบล</option>
                            </select>
                            @error('SubDistrict')
                                <span class="text-danger fnt-14" id="SubDistrictError">{{ $message }}</span>
                            @enderror
                            <div class="invalid-feedback">
                                กรุณากรอกข้อมูล
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group mt-2">
                            <label class="form-label" for="PostCode">รหัสไปรษณีย์ <span
                                    class="text-danger fnt-14">*</span></label>
                            <input type="text" name="PostCode" id="PostCode" class="form-control"
                                placeholder="กรอกรหัสไปรษณีย์" value="{{ old('PostCode') }}" required>
                            @error('PostCode')
                                <span class="text-danger fnt-14" id="PostCodeError">{{ $message }}</span>
                            @enderror
                            <div class="invalid-feedback">
                                กรุณากรอกข้อมูล
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" hidden>
                        <input type="hidden" class="form-control disabled" name="HouseProvinceKey" id="ProvinceKey">
                    </div>
                    <div class="col-md-6" hidden>
                        <input type="hidden" class="form-control disabled" name="HouseProvinceValue" id="ProvinceValue">
                    </div>
                    <div class="col-md-6" hidden>
                        <input type="hidden" class="form-control disabled" name="HouseDistrictKey" id="DistrictKey">
                    </div>
                    <div class="col-md-6" hidden>
                        <input type="hidden" class="form-control disabled" name="HouseDistrictValue" id="DistrictValue">
                    </div>
                    <div class="col-md-6" hidden>
                        <input type="hidden" class="form-control disabled" name="HouseSubDistrictKey" id="SubDistrictKey">
                    </div>
                    <div class="col-md-6" hidden>
                        <input type="hidden" class="form-control disabled" name="HouseSubDistrictValue"
                            id="SubDistrictValue">
                    </div>
                </div>
            </div>

        </div>
    {{-- </div> --}}
    {{-- <div class="container-fluid"> --}}
    <div class="row justify-content-center mt-3 text-start p-0">
        <div class="col-lg-10 col-12 p-0">
            <div class="accordion" id="accordionPanelsStayOpenExample" style="border-radius: 0px">
                <div class="accordion-item" style="border-left:none;border-right:none">
                    <span class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            <span class="fnt-24">ที่อยู่จัดส่งเอกสาร</span>
                        </button>
                    </span>
                    <div id="collapseOne" class="accordion-collapse collapse ps-3 pe-3"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body" style="padding: 10px 0 20px 0;background:#fff">
                            <div class="row">
                                {{-- <div class="col-lg-10">
                                <div class="row"> --}}
                                <div class="col-lg-12 mt-2 fnt-20 d-flex ms-3">
                                    <input type="checkbox" name="" id="checkSamTax" style="width: 15px">
                                    <span class="ms-2">ที่อยู่จัดส่งเอกสารตามที่อยู่ตามบัตรประชาชน</span>
                                </div>
                                <div class="col-lg-6">
                                    <input type="hidden" name="SendDocAddressID" id="SendDocAddressID" value="{{$SendDocAddressID}}">
                                    <div class="form-group mt-2">
                                        <span class="ms-1 mb-1 fnt-20 bt" for="SendDocAddressNo">เลขที่ <span
                                                class="text-danger fnt-14">*</span></span>
                                        <input type="text" name="SendDocAddressNo" id="SendDocAddressNo" class="form-control"
                                            placeholder="เลขที่" value="{{ CheckValueInput(old('SendDocAddressNo'), $SendDocAddressNo) }}">
                                        @error('SendDocAddressNo')
                                            <span class="text-danger fnt-14" id="SendDocAddressNoError">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mt-2">
                                        <span class="ms-1 mb-1 fnt-20 bt" for="SendDocAddressVillage">หมู่บ้าน/อาคาร</span>
                                        <input type="text" name="SendDocAddressVillage" id="SendDocAddressVillage" class="form-control"
                                            placeholder="หมู่บ้าน/อาคาร" value="{{ CheckValueInput(old('SendDocAddressVillage'), $SendDocAddressVillage) }}">
                                        @error('SendDocAddressVillage')
                                            <span class="text-danger fnt-14" id="SendDocAddressVillageError">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mt-2">
                                        <span class="ms-1 mb-1 fnt-20 bt" for="SendDocAddressMoo">หมู่ที่ </span>
                                        <input type="text" name="SendDocAddressMoo" id="SendDocAddressMoo" class="form-control"
                                            placeholder="หมู่ที่" value="{{ CheckValueInput(old('SendDocAddressMoo'), $SendDocAddressMoo) }}">
                                        @error('SendDocAddressMoo')
                                            <span class="text-danger fnt-14" id="SendDocAddressMooError">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mt-2">
                                        <span class="ms-1 mb-1 fnt-20 bt" for="SendDocAddressSoi">ซอย </span>
                                        <input type="text" name="SendDocAddressSoi" id="SendDocAddressSoi" class="form-control"
                                            placeholder="ซอย" value="{{ CheckValueInput(old('SendDocAddressSoi'), $SendDocAddressSoi) }}">
                                        @error('SendDocAddressSoi')
                                            <span class="text-danger fnt-14" id="SendDocAddressSoiError">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mt-2">
                                        <span class="ms-1 mb-1 fnt-20 bt" for="SendDocAddressRoad">ถนน</span>
                                        <input type="text" name="SendDocAddressRoad" id="SendDocAddressRoad" class="form-control"
                                            placeholder="ถนน" value="{{ CheckValueInput(old('SendDocAddressRoad'), $SendDocAddressRoad) }}">
                                        @error('SendDocAddressRoad')
                                            <span class="text-danger fnt-14" id="SendDocAddressRoadError">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mt-2">
                                        <label class="form-label" for="ProvinceDoc">จังหวัด <span
                                                class="text-danger fnt-14">*</span></label>
                                        <select class="form-select" name="ProvinceDoc" id="ProvinceDoc" required>
                                            <option value="">เลือกจังหวัด</option>
                                        </select>
                                        @error('ProvinceDoc')
                                            <span class="text-danger fnt-14" id="ProvinceDocError">{{ $message }}</span>
                                        @enderror
                                        <div class="invalid-feedback">
                                            กรุณากรอกข้อมูล
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mt-2">
                                        <label class="form-label" for="DistrictDoc">เขต/อำเภอ <span
                                                class="text-danger fnt-14">*</span></label>
                                        <select class="form-select" name="DistrictDoc" id="DistrictDoc" required>
                                            <option value="">เลือกเขต/อำเภอ</option>
                                        </select>
                                        @error('DistrictDoc')
                                            <span class="text-danger fnt-14" id="DistrictDocError">{{ $message }}</span>
                                        @enderror
                                        <div class="invalid-feedback">
                                            กรุณากรอกข้อมูล
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mt-2">
                                        <label class="form-label" for="SubDistrictDoc">แขวง/ตำบล <span
                                                class="text-danger fnt-14">*</span></label>
                                        <select class="form-select" name="SubDistrictDoc" id="SubDistrictDoc" required>
                                            <option value="">เลือกแขวง/ตำบล</option>
                                        </select>
                                        @error('SubDistrictDoc')
                                            <span class="text-danger fnt-14"
                                                id="SubDistrictDocError">{{ $message }}</span>
                                        @enderror
                                        <div class="invalid-feedback">
                                            กรุณากรอกข้อมูล
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mt-2">
                                        <label class="form-label" for="PostCodeDoc">รหัสไปรษณีย์ <span
                                                class="text-danger fnt-14">*</span></label>
                                        <input type="text" name="PostCodeDoc" id="PostCodeDoc" class="form-control"
                                            placeholder="กรอกรหัสไปรษณีย์" value="{{ old('PostCodeDoc') }}" required>
                                        @error('PostCodeDoc')
                                            <span class="text-danger fnt-14" id="PostCodeDocError">{{ $message }}</span>
                                        @enderror
                                        <div class="invalid-feedback">
                                            กรุณากรอกข้อมูล
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" hidden>
                                    <input type="hidden" class="form-control disabled" name="SendDocProvinceKey" id="ProvinceDocKey">
                                </div>
                                <div class="col-md-6" hidden>
                                    <input type="hidden" class="form-control disabled" name="SendDocProvinceValue" id="ProvinceDocValue">
                                </div>
                                <div class="col-md-6" hidden>
                                    <input type="hidden" class="form-control disabled" name="SendDocDistrictKey" id="DistrictDocKey">
                                </div>
                                <div class="col-md-6" hidden>
                                    <input type="hidden" class="form-control disabled" name="SendDocDistrictValue" id="DistrictDocValue">
                                </div>
                                <div class="col-md-6" hidden>
                                    <input type="hidden" class="form-control disabled" name="SendDocSubDistrictKey" id="SubDistrictDocKey">
                                </div>
                                <div class="col-md-6" hidden>
                                    <input type="hidden" class="form-control disabled" name="SendDocSubDistrictValue"
                                        id="SubDistrictDocValue">
                                </div>
                            {{-- </div>
                            </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item" style="border-left:none;border-right:none">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <span class="fnt-24">ที่อยู่สามารถติดต่อได้</span>
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse ps-3 pe-3"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body" style="padding: 10px 0 20px 0;background:#fff">
                            <div class="row">
                                <div class="col-lg-12 mt-2 fnt-20 d-flex ms-3">
                                    <input type="checkbox" name="" id="checkSamTax1" style="width: 15px">
                                    <span class="ms-2">ที่อยู่จัดส่งเอกสารตามที่อยู่ตามบัตรประชาชน</span>
                                </div>
                                <div class="col-lg-6">
                                    <input type="hidden" name="ContactAddressID" id="ContactAddressID" value="{{$ContactAddressID}}">
                                    <div class="form-group mt-2">
                                        <span class="ms-1 mb-1 fnt-20 bt" for="ContactAddressNo">เลขที่ <span
                                                class="text-danger fnt-14">*</span></span>
                                        <input type="text" name="ContactAddressNo" id="ContactAddressNo" class="form-control"
                                            placeholder="เลขที่" value="{{ CheckValueInput(old('ContactAddressNo'), $ContactAddressNo) }}">
                                        @error('ContactAddressNo')
                                            <span class="text-danger fnt-14" id="ContactAddressNoError">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mt-2">
                                        <span class="ms-1 mb-1 fnt-20 bt" for="ContactAddressVillage">หมู่บ้าน/อาคาร</span>
                                        <input type="text" name="ContactAddressVillage" id="ContactAddressVillage" class="form-control"
                                            placeholder="หมู่บ้าน/อาคาร" value="{{ CheckValueInput(old('ContactAddressVillage'), $ContactAddressVillage) }}">
                                        @error('ContactAddressVillage')
                                            <span class="text-danger fnt-14" id="ContactAddressVillageError">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mt-2">
                                        <span class="ms-1 mb-1 fnt-20 bt" for="ContactAddressMoo">หมู่ที่</span>
                                        <input type="text" name="ContactAddressMoo" id="ContactAddressMoo" class="form-control"
                                            placeholder="หมู่ที่" value="{{ CheckValueInput(old('ContactAddressMoo'), $ContactAddressMoo) }}">
                                        @error('ContactAddressMoo')
                                            <span class="text-danger fnt-14" id="ContactAddressMooError">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mt-2">
                                        <span class="ms-1 mb-1 fnt-20 bt" for="ContactAddressSoi">ซอย</span>
                                        <input type="text" name="ContactAddressSoi" id="ContactAddressSoi" class="form-control"
                                            placeholder="ซอย" value="{{ CheckValueInput(old('ContactAddressSoi'), $ContactAddressSoi) }}">
                                        @error('ContactAddressSoi')
                                            <span class="text-danger fnt-14" id="ContactAddressSoiError">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mt-2">
                                        <span class="ms-1 mb-1 fnt-20 bt" for="ContactAddressRoad">ถนน</span>
                                        <input type="text" name="ContactAddressRoad" id="ContactAddressRoad" class="form-control"
                                            placeholder="ถนน" value="{{ CheckValueInput(old('ContactAddressRoad'), $ContactAddressRoad) }}">
                                        @error('ContactAddressRoad')
                                            <span class="text-danger fnt-14" id="ContactAddressRoadError">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mt-2">
                                        <label class="form-label" for="ProvinceCon">จังหวัด <span
                                                class="text-danger fnt-14">*</span></label>
                                        <select class="form-select" name="ProvinceCon" id="ProvinceCon" required>
                                            <option value="">เลือกจังหวัด</option>
                                        </select>
                                        @error('ProvinceCon')
                                            <span class="text-danger fnt-14" id="ProvinceConError">{{ $message }}</span>
                                        @enderror
                                        <div class="invalid-feedback">
                                            กรุณากรอกข้อมูล
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mt-2">
                                        <label class="form-label" for="DistrictCon">เขต/อำเภอ <span
                                                class="text-danger fnt-14">*</span></label>
                                        <select class="form-select" name="DistrictCon" id="DistrictCon" required>
                                            <option value="">เลือกเขต/อำเภอ</option>
                                        </select>
                                        @error('DistrictCon')
                                            <span class="text-danger fnt-14" id="DistrictConError">{{ $message }}</span>
                                        @enderror
                                        <div class="invalid-feedback">
                                            กรุณากรอกข้อมูล
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mt-2">
                                        <label class="form-label" for="SubDistrictCon">แขวง/ตำบล <span
                                                class="text-danger fnt-14">*</span></label>
                                        <select class="form-select" name="SubDistrictCon" id="SubDistrictCon" required>
                                            <option value="">เลือกแขวง/ตำบล</option>
                                        </select>
                                        @error('SubDistrictCon')
                                            <span class="text-danger fnt-14"
                                                id="SubDistrictConError">{{ $message }}</span>
                                        @enderror
                                        <div class="invalid-feedback">
                                            กรุณากรอกข้อมูล
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mt-2">
                                        <label class="form-label" for="PostCodeCon">รหัสไปรษณีย์ <span
                                                class="text-danger fnt-14">*</span></label>
                                        <input type="text" name="PostCodeCon" id="PostCodeCon" class="form-control"
                                            placeholder="กรอกรหัสไปรษณีย์" value="{{ old('PostCodeCon') }}" required>
                                        @error('PostCodeCon')
                                            <span class="text-danger fnt-14" id="PostCodeConError">{{ $message }}</span>
                                        @enderror
                                        <div class="invalid-feedback">
                                            กรุณากรอกข้อมูล
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" hidden>
                                    <input type="hidden" class="form-control disabled" name="ContactProvinceKey" id="ProvinceConKey">
                                </div>
                                <div class="col-md-6" hidden>
                                    <input type="hidden" class="form-control disabled" name="ContactProvinceValue" id="ProvinceConValue">
                                </div>
                                <div class="col-md-6" hidden>
                                    <input type="hidden" class="form-control disabled" name="ContactDistrictKey" id="DistrictConKey">
                                </div>
                                <div class="col-md-6" hidden>
                                    <input type="hidden" class="form-control disabled" name="ContactDistrictValue" id="DistrictConValue">
                                </div>
                                <div class="col-md-6" hidden>
                                    <input type="hidden" class="form-control disabled" name="ContactSubDistrictKey" id="SubDistrictConKey">
                                </div>
                                <div class="col-md-6" hidden>
                                    <input type="hidden" class="form-control disabled" name="ContactSubDistrictValue"
                                        id="SubDistrictConValue">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {{-- </div> --}}
    </div>
    {{-- <div class="container"> --}}
        <div class="row mt-4" style="margin-bottom: 70px">
            <div class="col">
                <div class="row">
                    <div class="col-lg-6 mb-2 text-end ps-2 pe-2">
                        <button class="btn btn-main btn-w-300 btn-w-lg m-0" onclick="data()" id="btn-complete"
                            type="submit">บันทึก</button>
                    </div>
                    <div class="col-lg-6 mb-2 text-start ps-2 pe-2">
                        <a class="btn btn-outline-secondary btn-w-300 btn-w-lg" id="index"
                            href="{{ route('OverviewIndex') }}" type="button">ยกเลิก</a>
                    </div>
                </div>
            </div>
        </div>
    {{-- </div> --}}
</form>
    <script>
        
        $('#PrefixKey').val($('#Prefix').val());
        $('#PrefixValue').val($('#Prefix').find('option:selected').text().trim());
        $('#CusGenderKey').val($('#CusGender').val());
        $('#CusGenderValue').val($('#CusGender').find('option:selected').text().trim());
        $('#CusMarriedStatusKey').val($('#CusMarriedStatus').val());
        $('#CusMarriedStatusValue').val($('#CusMarriedStatus').find('option:selected').text().trim());

        $('#Prefix').change(function() {
            let select = $(this).find('option:selected');
            let key = select.val();
            let value = select.text().trim();
            $('#PrefixKey').val(key);
            $('#PrefixValue').val(value);
        });
        $('#CusGender').change(function() {
            let select = $(this).find('option:selected');
            let key = select.val();
            let value = select.text().trim();
            $('#CusGenderKey').val(key);
            $('#CusGenderValue').val(value);
        });
        $('#CusMarriedStatus').change(function() {
            let select = $(this).find('option:selected');
            let key = select.val();
            let value = select.text().trim();
            $('#CusMarriedStatusKey').val(key);
            $('#CusMarriedStatusValue').val(value);
        });

        $('#ProvinceKey').val($('#Province').val());
        $('#ProvinceValue').val($('#Province').find('option:selected').text().trim());
        $('#DistrictKey').val($('#District').val());
        $('#DistrictValue').val($('#District').find('option:selected').text().trim());
        $('#SubDistrictKey').val($('#SubDistrict').val());
        $('#SubDistrictValue').val($('#SubDistrict').find('option:selected').text().trim());

        $('#Province').change(function() {
            $('#ProvinceError').text('');
            $('#Province').removeClass('is-invalid');
            let select = $(this).find('option:selected');
            let key = select.val();
            let value = select.text().trim();
            $('#ProvinceKey').val(key);
            $('#ProvinceValue').val(value);
        });

        $('#District').change(function() {
            $('#DistrictError').text('');
            $('#District').removeClass('is-invalid');
            let select = $(this).find('option:selected');
            let key = select.val();
            let value = select.text().trim();
            $('#DistrictKey').val(key);
            $('#DistrictValue').val(value);
        });

        $('#SubDistrict').change(function() {
            $('#SubDistrictError').text('');
            $('#SubDistrict').removeClass('is-invalid');
            $('#PostCodeError').text('');
            $('#PostCode').removeClass('is-invalid');
            let select = $(this).find('option:selected');
            let key = select.val();
            let value = select.text().trim();
            $('#SubDistrictKey').val(key);
            $('#SubDistrictValue').val(value);
        });

        $('#ProvinceDocKey').val($('#ProvinceDoc').val());
        $('#ProvinceDocValue').val($('#ProvinceDoc').find('option:selected').text().trim());
        $('#DistrictDocKey').val($('#DistrictDoc').val());
        $('#DistrictDocValue').val($('#DistrictDoc').find('option:selected').text().trim());
        $('#SubDistrictDocKey').val($('#SubDistrictDoc').val());
        $('#SubDistrictDocValue').val($('#SubDistrictDoc').find('option:selected').text().trim());

        $('#ProvinceDoc').change(function() {
            $('#ProvinceDocError').text('');
            $('#ProvinceDoc').removeClass('is-invalid');
            let select = $(this).find('option:selected');
            let key = select.val();
            let value = select.text().trim();
            $('#ProvinceDocKey').val(key);
            $('#ProvinceDocValue').val(value);
        });

        $('#DistrictDoc').change(function() {
            $('#DistrictDocError').text('');
            $('#DistrictDoc').removeClass('is-invalid');
            let select = $(this).find('option:selected');
            let key = select.val();
            let value = select.text().trim();
            $('#DistrictDocKey').val(key);
            $('#DistrictDocValue').val(value);
        });

        $('#SubDistrictDoc').change(function() {
            $('#SubDistrictDocError').text('');
            $('#SubDistrictDoc').removeClass('is-invalid');
            $('#PostCodeDocError').text('');
            $('#PostCodeDoc').removeClass('is-invalid');
            let select = $(this).find('option:selected');
            let key = select.val();
            let value = select.text().trim();
            $('#SubDistrictDocKey').val(key);
            $('#SubDistrictDocValue').val(value);
        });

        $('#ProvinceConKey').val($('#ProvinceCon').val());
        $('#ProvinceConValue').val($('#ProvinceCon').find('option:selected').text().trim());
        $('#DistrictConKey').val($('#DistrictCon').val());
        $('#DistrictConValue').val($('#DistrictCon').find('option:selected').text().trim());
        $('#SubDistrictConKey').val($('#SubDistrictCon').val());
        $('#SubDistrictConValue').val($('#SubDistrictCon').find('option:selected').text().trim());

        $('#ProvinceCon').change(function() {
            $('#ProvinceConError').text('');
            $('#ProvinceCon').removeClass('is-invalid');
            let select = $(this).find('option:selected');
            let key = select.val();
            let value = select.text().trim();
            $('#ProvinceConKey').val(key);
            $('#ProvinceConValue').val(value);
        });

        $('#DistrictCon').change(function() {
            $('#DistrictConError').text('');
            $('#DistrictCon').removeClass('is-invalid');
            let select = $(this).find('option:selected');
            let key = select.val();
            let value = select.text().trim();
            $('#DistrictConKey').val(key);
            $('#DistrictConValue').val(value);
        });

        $('#SubDistrictCon').change(function() {
            $('#SubDistrictConError').text('');
            $('#SubDistrictCon').removeClass('is-invalid');
            $('#PostCodeConError').text('');
            $('#PostCodeCon').removeClass('is-invalid');
            let select = $(this).find('option:selected');
            let key = select.val();
            let value = select.text().trim();
            $('#SubDistrictConKey').val(key);
            $('#SubDistrictConValue').val(value);
        });
        
        $('#checkSamTax').click(function(){
            if($('#checkSamTax').prop('checked')===true){
                console.log("check");
                document.getElementById("SendDocAddressNo").value = document.querySelector('#HouseAddressNo').value;
                document.getElementById("SendDocAddressVillage").value = document.querySelector('#HouseAddressVillage').value;
                document.getElementById("SendDocAddressMoo").value = document.querySelector('#HouseAddressMoo').value;
                document.getElementById("SendDocAddressSoi").value = document.querySelector('#HouseAddressSoi').value;
                document.getElementById("SendDocAddressRoad").value = document.querySelector('#HouseAddressRoad').value;
            }
        })
        $('#checkSamTax1').click(function(){
            if($('#checkSamTax1').prop('checked')===true){
                console.log("check2");
                document.getElementById("ContactAddressNo").value = document.querySelector('#HouseAddressNo').value;
                document.getElementById("ContactAddressVillage").value = document.querySelector('#HouseAddressVillage').value;
                document.getElementById("ContactAddressMoo").value = document.querySelector('#HouseAddressMoo').value;
                document.getElementById("ContactAddressSoi").value = document.querySelector('#HouseAddressSoi').value;
                document.getElementById("ContactAddressRoad").value = document.querySelector('#HouseAddressRoad').value;
            }
        })

        function data(){
            $('#PrefixKey').val($('#Prefix').val());
            $('#PrefixValue').val($('#Prefix').find('option:selected').text().trim());
            $('#CusGenderKey').val($('#CusGender').val());
            $('#CusGenderValue').val($('#CusGender').find('option:selected').text().trim());
            $('#CusMarriedStatusKey').val($('#CusMarriedStatus').val());
            $('#CusMarriedStatusValue').val($('#CusMarriedStatus').find('option:selected').text().trim());
            $('#ProvinceKey').val($('#Province').val());
            $('#ProvinceValue').val($('#Province').find('option:selected').text().trim());
            $('#DistrictKey').val($('#District').val());
            $('#DistrictValue').val($('#District').find('option:selected').text().trim());
            $('#SubDistrictKey').val($('#SubDistrict').val());
            $('#SubDistrictValue').val($('#SubDistrict').find('option:selected').text().trim());
            $('#ProvinceDocKey').val($('#ProvinceDoc').val());
            $('#ProvinceDocValue').val($('#ProvinceDoc').find('option:selected').text().trim());
            $('#DistrictDocKey').val($('#DistrictDoc').val());
            $('#DistrictDocValue').val($('#DistrictDoc').find('option:selected').text().trim());
            $('#SubDistrictDocKey').val($('#SubDistrictDoc').val());
            $('#SubDistrictDocValue').val($('#SubDistrictDoc').find('option:selected').text().trim());
            $('#ProvinceConKey').val($('#ProvinceCon').val());
            $('#ProvinceConValue').val($('#ProvinceCon').find('option:selected').text().trim());
            $('#DistrictConKey').val($('#DistrictCon').val());
            $('#DistrictConValue').val($('#DistrictCon').find('option:selected').text().trim());
            $('#SubDistrictConKey').val($('#SubDistrictCon').val());
            $('#SubDistrictConValue').val($('#SubDistrictCon').find('option:selected').text().trim());

        }
    </script>
    <style>
        .accordion {
            --bs-accordion-color: var(--bs-body-color);
            --bs-accordion-bg: var(--bs-body-bg);
            --bs-accordion-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, border-radius 0.15s ease;
            --bs-accordion-border-color: var(--bs-border-color);
            --bs-accordion-border-width: var(--bs-border-width);
            --bs-accordion-border-radius: var(--bs-border-radius);
            --bs-accordion-inner-border-radius: calc(var(--bs-border-radius) - (var(--bs-border-width)));
            --bs-accordion-btn-padding-x: 1.25rem;
            --bs-accordion-btn-padding-y: 1rem;
            --bs-accordion-btn-color: var(--bs-body-color);
            --bs-accordion-btn-bg: var(--bs-accordion-bg);
            --bs-accordion-btn-icon: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23212529'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
            --bs-accordion-btn-icon-width: 1.25rem;
            --bs-accordion-btn-icon-transform: rotate(-180deg);
            --bs-accordion-btn-icon-transition: transform 0.2s ease-in-out;
            --bs-accordion-btn-active-icon: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%230a58ca'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
            --bs-accordion-btn-focus-border-color: #86b7fe;
            --bs-accordion-btn-focus-box-shadow: 0px 13px 10px -15px rgba(13, 110, 253, 0.25);
            --bs-accordion-body-padding-x: 1.25rem;
            --bs-accordion-body-padding-y: 1rem;
            --bs-accordion-active-color: var(--bs-primary-text);
            --bs-accordion-active-bg: var(--bs-primary-bg-subtle);
        }
    </style>
@endsection
