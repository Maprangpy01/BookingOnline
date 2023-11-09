@extends('components.AccountsManage.template.temp-card')
@section('style')
    .input-wrapper {
        position: relative;
    }

    .input-text {
        position: absolute;
        top: 50%;
        right: 10px;
        transform: translateY(-50%);
    }

    .disabled {
        background-color: #f8f8f8;
        pointer-events: none;
        opacity: 0.5;
    }

    .custom-radio {
        cursor: pointer;
    }
@endsection
@section('content-temp')
    @php
        // PersonInfo
        $MemeberID = $responseBody['ResultData']['PersonInfo']['CusMemberID'] ?? '-';
        $TitleKey = $responseBody['ResultData']['PersonInfo']['Prefix']['Key'] ?? '-';
        $TitleValue = $responseBody['ResultData']['PersonInfo']['Prefix']['Value'] ?? '-';
        $FirstName = $responseBody['ResultData']['PersonInfo']['CusName'] ?? '-';
        $LastName = $responseBody['ResultData']['PersonInfo']['CusSurname'] ?? '-';
        $CusNickname = $responseBody['ResultData']['PersonInfo']['CusNickname'] ?? '-';
        $GenderKey = $responseBody['ResultData']['PersonInfo']['Gender']['Key'] ?? '-';
        $GenderValue = $responseBody['ResultData']['PersonInfo']['Gender']['Value'] ?? '-';
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

        $SexKV = $GenderKey . ':' . $GenderValue;
        $JuristicTypeKV = $JuristicTypeKey . ':' . $JuristicTypeValue;
        $SegmentKV = $SegmentKey . ':' . $SegmentValue;
        $PositionKV = $PositionKey . ':' . $PositionValue;

        $Gender = [
            [
                "GenderID" => '1',
                "GenderName" => "ชาย"
            ],
            [
                "GenderID" => '2',
                "GenderName" => "หญิง"
            ]
        ];
    @endphp
    <div class="row">
        <div class="col-md-6">
            <p class="h-title-5">
                <strong>
                    ข้อมูลส่วนตัว
                </strong>
            </p>
        </div>
        <div class="col-md-6 text-end">
            <button class="btn btn-primary btn-w-150" data-bs-toggle="modal" data-bs-target="#edit-data-member">
                แก้ไขข้อมูลส่วนตัว
            </button>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <table width="80%" class="table-w-100per">
                <tbody>
                    <tr>
                        <td width="250" height="40" scope="row" class="text-secondary">ชื่อ-นามสกุล</td>
                        <td height="40">{{ $TitleValue }}{{ $FirstName }} {{ $LastName }}</td>
                    </tr>
                    <tr>
                        <td height="40" scope="row" class="text-secondary">เลขบัตรประจำตัวประชาชน
                        </td>
                        <td height="40">{{ $IDNumber }}</td>
                    </tr>
                    <tr>
                        <td height="40" scope="row" class="text-secondary">วันเดือนปีเกิด</td>
                        <td height="40">{{ convertISOToDate($DateOfBirth) }}</td>
                    </tr>
                    <tr>
                        <td height="40" scope="row" class="text-secondary">อีเมล</td>
                        <td height="40">{{ $Email }}</td>
                    </tr>
                    <tr>
                        <td height="40" scope="row" class="text-secondary">โทรศัพท์มือถือ</td>
                        <td height="40">{{ $Mobile }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-6">
            <table width="80%" class="table-w-100per">
                <tbody>
                    <tr>
                        <td width="250" height="40" scope="row" class="text-secondary">บริษัท/หน่วยงาน</td>
                        <td height="40">{{ $JuristicName }}</td>
                    </tr>
                    <tr>
                        <td height="40" scope="row" class="text-secondary">ประเภทธุรกิจ</td>
                        <td height="40">{{ $JuristicTypeValue }}</td>
                    </tr>
                    <tr>
                        <td height="40" scope="row" class="text-secondary">แผนก/ฝ่าย</td>
                        <td height="40">{{ $SegmentValue }}</td>
                    </tr>
                    <tr>
                        <td height="40" scope="row" class="text-secondary">ตำแหน่ง</td>
                        <td height="40">{{ $PositionValue }}</td>
                    </tr>
                    <tr>
                        <td height="40" scope="row" class="text-secondary">โทรศัพท์</td>
                        <td height="40">{{ $Telephone }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    
    <form action="{{ route('AccountsManage.ProfilePost',['IDMember'=>$IDMember])}}" method="post" id="form-send-data">
        @csrf
        <!-- Modal -->
        <div class="modal fade" id="edit-data-member" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body text-start">
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <p class="h-title-4">
                                    <strong>
                                        ข้อมูลส่วนตัว
                                    </strong>
                                </p>
                            </div>
                        </div>
                        <div class="row g-5">
                            <div class="col-md-12">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="IDNumber">เลขบัตรประจำตัวประชาชน</label>
                                            <input type="text" name="IDNumber" id="IDNumber" class="form-control bg-brightGray" placeholder="กรอกเลขบัตรประจำตัวประชาชน 13 หลัก" minlength="13"
                                                maxlength="13" value="{{ CheckValueInput(old('IDNumber'), $IDNumber) }}" readonly>
                                            @error('IDNumber')
                                                <span class="text-danger fnt-14" id="IDNumberError">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            @php
                                                $active = "<span class='text-success'>ACTIVE</span>";
                                            @endphp
                                            <label class="form-label" for="Email">อีเมล</label>
                                            <div class="input-wrapper">
                                                <input type="email" name="Email" id="Email" class="form-control bg-brightGray" placeholder="Email"
                                                    value="{{ CheckValueInput(old('Email'), $Email) }}" readonly>
                                                <span class="input-text text-success"><strong>ACTIVE</strong></span>
                                            </div>
                                            @error('Email')
                                                <span class="text-danger fnt-14" id="EmailError">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label class="form-label" for="Title">คำนำหน้า <span class="text-danger fnt-14">*</span></label>
                                            <select class="form-select" name="Title" id="Title">
                                                @if (!empty($TitleNames['Result']) == 1)
                                                    <option value="">คำนำหน้า</option>
                                                    @foreach ($TitleNames['ResultData'] as $TitleName)
                                                        @php
                                                            $value = $TitleName['CLID'];
                                                            $TitleKV = $TitleKey;
                                                        @endphp
                                                        <option {{ CheckSelectInput(old('Title'), $TitleKV, $value) ? 'selected' : '' }} value="{{ $value }}">
                                                            {{ $TitleName['NameTH'] }}
                                                        </option>
                                                    @endforeach
                                                @else
                                                    <option value="">
                                                        {{ !empty($TitleNames['Message']) }}
                                                    </option>
                                                @endif
                                            </select>
                                            @error('Title')
                                                <span class="text-danger fnt-14" id="TitleError">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-label" for="FirstName">ชื่อ <span class="text-danger fnt-14">*</span></label>
                                            <input type="text" name="FirstName" id="FirstName" class="form-control" placeholder="กรอกชื่อ"
                                                value="{{ CheckValueInput(old('FirstName'), $FirstName) }}">
                                            @error('FirstName')
                                                <span class="text-danger fnt-14" id="FirstNameError">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="LastName">นามสกุล <span class="text-danger fnt-14">*</span></label>
                                            <input type="text" name="LastName" id="LastName" class="form-control" placeholder="กรอกนามสกุล"
                                                value="{{ CheckValueInput(old('LastName'), $LastName) }}">
                                            @error('LastName')
                                                <span class="text-danger fnt-14" id="LastNameError">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6" hidden>
                                        <input type="hidden" class="form-control disabled" name="PrefixKey" id="PrefixKey" readonly>
                                    </div>
                                    <div class="col-md-6" hidden>
                                        <input type="hidden" class="form-control disabled" name="PrefixValue" id="PrefixValue" readonly>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="CusNickname">ชื่อเล่น</label>
                                            <input type="text" name="CusNickname" id="CusNickname" class="form-control"
                                                placeholder="กรอกชื่อเล่น" value="{{ CheckValueInput(old('CusNickname'), $CusNickname) }}">
                                            @error('CusNickname')
                                                <span class="text-danger fnt-14" id="NickNameError">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="Gender">เพศ <span class="text-danger fnt-14">*</span></label>
                                            <div class="row">
                                                @foreach ($Gender as $item)
                                                    <div class="col-md-6">
                                                        <label class="form-check-label custom-radio" for="{{ $item['GenderID'] }}">
                                                            <input type="radio" class="form-check-input" name="Gender" id="{{ $item['GenderID'] }}" value="{{ $item['GenderID'] }}"
                                                                {{ CheckRadioInput(old('Gender'), $GenderKey, $item['GenderID']) ? 'checked' : '' }}>
                                                            <span class="radiomark"></span>
                                                            {{ $item['GenderName'] }}
                                                        </label>
                                                    </div>
                                                @endforeach
                                            </div>
                                            {{-- <div class="row g-3">
                                                <div class="col-md-4">
                                                    <label class="form-check-label custom-radio" for="Gender">
                                                        <input type="radio" class="form-check-input" name="Gender" id="Gender" value="1:ชาย" {{ CheckRadioInput(old('Gender'), $SexKV, '1:ชาย') ? 'checked' : '' }}>
                                                        <span class="radiomark"></span>
                                                        ชาย
                                                    </label>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-check-label custom-radio" for="Sex2">
                                                        <input type="radio" class="form-check-input" name="Gender" id="Gender" value="2:หญิง" {{ CheckRadioInput(old('Gender'), $SexKV, '2:หญิง') ? 'checked' : '' }}>
                                                        <span class="radiomark"></span>
                                                        หญิง
                                                    </label>
                                                </div>
                                            </div> --}}
                                            @error('Sex')
                                                <span class="text-danger fnt-14">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6" hidden>
                                        <input type="hidden" class="form-control disabled" name="GenderKey" id="GenderKey" readonly>
                                    </div>
                                    <div class="col-md-6" hidden>
                                        <input type="hidden" class="form-control disabled" name="GenderValue" id="GenderValue" readonly>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="DateOfBirth">วันเดือนปีเกิด</label>
                                            <div class="datepicker-container">
                                                <input type="text" name="DateOfBirth" id="DateOfBirth" class="form-control" placeholder="" onchange="formatDate()"
                                                    value="{{ CheckValueInput(old('DateOfBirth'), $DateOfBirth) }}">
                                                <i class="bi bi-calendar-minus" style="font-size:14px;color:#000;padding-right:10px"></i>
                                            </div>
                                            @error('DateOfBirth')
                                                <span class="text-danger fnt-14" id="DateOfBirthError">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="Mobile">โทรศัพท์มือถือ</label>
                                            <input type="text" name="Mobile" id="Mobile" class="form-control" placeholder="กรอกหมายเลขโทรศัพท์"
                                                value="{{ CheckValueInput(old('Mobile'), $Mobile) }}">
                                            @error('Mobile')
                                                <span class="text-danger fnt-14" id="MobileError">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="JuristicName">บริษัทหน่วยงาน</label>
                                            <div class="input-group">
                                                <span class="input-group-text" id="basic-addon1">บริษัท</span>
                                                <input type="text" class="form-control" name="JuristicName"
                                                    value="{{ CheckValueInput(old('JuristicName'), $JuristicName) }}">
                                            </div>
                                            @error('JuristicName')
                                                <span class="text-danger fnt-14" id="JuristicNameError">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="Telephone">โทรศัพท์</label>
                                            <input type="text" name="Telephone" id="Telephone" class="form-control" placeholder="กรอกหมายเลขโทรศัพท์"
                                                value="{{ CheckValueInput(old('Telephone'), $Telephone) }}">
                                            @error('Telephone')
                                                <span class="text-danger fnt-14" id="TelephoneError">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="JuristicType">ประเภทธุรกิจ</label>
                                            <select class="form-select" name="JuristicType" id="JuristicType">
                                                @if (!empty($JuristicTypeList['Result']) == 1)
                                                    <option value="">เลือกประเภทธุรกิจ</option>
                                                    @foreach ($JuristicTypeList['ResultData'] as $JuristicType)
                                                        @php
                                                            $value = $JuristicType['CLID'];
                                                            $JuristicTypeKV = $JuristicTypeKey;
                                                        @endphp
                                                        <option {{ CheckSelectInput(old('JuristicType'), $JuristicTypeKV, $value) ? 'selected' : '' }}
                                                            value="{{ $value }}">
                                                            {{ $JuristicType['NameTH'] }}
                                                        </option>
                                                    @endforeach
                                                @else
                                                    <option value="">
                                                        {{ !empty($JuristicTypeList['Message']) }}
                                                    </option>
                                                @endif
                                            </select>
                                            @error('JuristicType')
                                                <span class="text-danger fnt-14" id="JuristicTypeError">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6" hidden>
                                        <input type="hidden" class="form-control disabled" name="JuristicTypeKey" id="JuristicTypeKey" readonly>
                                    </div>
                                    <div class="col-md-6" hidden>
                                        <input type="hidden" class="form-control disabled" name="JuristicTypeValue" id="JuristicTypeValue" readonly>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="Segment">แผนก/ฝ่าย</label>
                                            <select class="form-select" name="Segment" id="Segment">
                                                @if (!empty($DepartmentList['Result']) == 1)
                                                    <option value="">เลือกแผนก/ฝ่าย</option>
                                                    @foreach ($DepartmentList['ResultData'] as $Department)
                                                        @php
                                                            $value = $Department['CLID'];
                                                            $SegmentKV = $SegmentKey;
                                                        @endphp
                                                        <option
                                                            {{ CheckSelectInput(old('Segment'), $SegmentKV, $value) ? 'selected' : '' }}
                                                            value="{{ $value }}">
                                                            {{ $Department['NameTH'] }}
                                                        </option>
                                                    @endforeach
                                                @else
                                                    <option value="">
                                                        {{ !empty($DepartmentList['Message']) }}
                                                    </option>
                                                @endif
                                            </select>
                                            @error('Segment')
                                                <span class="text-danger fnt-14" id="SegmentError">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6" hidden>
                                        <input type="hidden" class="form-control disabled" name="SegmentKey" id="SegmentKey" readonly>
                                    </div>
                                    <div class="col-md-6" hidden>
                                        <input type="hidden" class="form-control disabled" name="SegmentValue" id="SegmentValue" readonly>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="Position">ตำแหน่ง</label>
                                            <select class="form-select" name="Position" id="Position">
                                                @if (!empty($PositionList['Result']) == 1)
                                                    <option value="">เลือกตำแหน่ง</option>
                                                    @foreach ($PositionList['ResultData'] as $Position)
                                                        @php
                                                            $value = $Position['CLID'];
                                                            $PositionKV = $PositionKey;
                                                        @endphp
                                                        <option
                                                            {{ CheckSelectInput(old('Position'), $PositionKV, $value) ? 'selected' : '' }}
                                                            value="{{ $value }}">
                                                            {{ $Position['NameTH'] }}
                                                        </option>
                                                    @endforeach
                                                @else
                                                    <option value="">
                                                        {{ !empty($PositionList['Message']) }}
                                                    </option>
                                                @endif
                                            </select>
                                            @error('Position')
                                                <span class="text-danger fnt-14" id="PositionError">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6" hidden>
                                        <input type="hidden" class="form-control disabled" name="PositionKey" id="PositionKey" readonly>
                                    </div>
                                    <div class="col-md-6" hidden>
                                        <input type="hidden" class="form-control disabled" name="PositionValue" id="PositionValue" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5 next-to">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row g-3">
                                        <div class="col-6 text-end">
                                            <button type="submit" onclick="load()" class="btn btn-primary btn-w-100">บันทึก</button>
                                        </div>
                                        <div class="col-6 text-start">
                                            <button type="button" class="btn btn-outline-primary btn-w-100" data-bs-dismiss="modal">ยกเลิก</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <script>
        $(document).ready(function() {
            // Get the current key value
            $('#PrefixKey').val($('#Title').val());
            $('#PrefixValue').val($('#Title').find('option:selected').text().trim());
            $('#GenderKey').val($('input[name="Gender"]:checked').val());
            $('#GenderValue').val($('input[name="Gender"]:checked').siblings('label').text().trim());
            $('#JuristicTypeKey').val($('#JuristicType').val());
            $('#JuristicTypeValue').val($('#JuristicType').find('option:selected').text().trim());
            $('#SegmentKey').val($('#Segment').val());
            $('#SegmentValue').val($('#Segment').find('option:selected').text().trim());
            $('#PositionKey').val($('#Position').val());
            $('#PositionValue').val($('#Position').find('option:selected').text().trim());

            // Get the data from selected
            $('#Title').change(function() {
                let select = $(this).find('option:selected');
                let key = select.val();
                let value = select.text().trim();
                $('#PrefixKey').val(key);
                $('#PrefixValue').val(value);
            });

            $('input[name="Gender"]').change(function() {
                let radio = $('input[name="Gender"]:checked');
                let key = radio.val();
                let value = radio.siblings('label').text().trim();

                // Update the values of the hidden input fields
                $('#GenderKey').val(key);
                $('#GenderValue').val(value);
            });

            // Get the data from selected
            $('#JuristicType').change(function() {
                let select = $(this).find('option:selected');
                let key = select.val();
                let value = select.text().trim();
                $('#JuristicTypeKey').val(key);
                $('#JuristicTypeValue').val(value);
            });

            // Get the data from selected
            $('#Segment').change(function() {
                let select = $(this).find('option:selected');
                let key = select.val();
                let value = select.text().trim();
                $('#SegmentKey').val(key);
                $('#SegmentValue').val(value);
            });

            // Get the data from selected
            $('#Position').change(function() {
                let select = $(this).find('option:selected');
                let key = select.val();
                let value = select.text().trim();
                $('#PositionKey').val(key);
                $('#PositionValue').val(value);
            });
        });
    </script>
@endsection
