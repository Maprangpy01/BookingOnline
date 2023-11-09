@extends('main')
@section('style')
    .img-promo {
    width: inherit;
    border-radius: 0 0 20px 20px;
    }
    .img-promo-nd {
    width: inherit;
    }
    .text-header {
    color: var(--primary, #B11116);
    text-align: center;

    /* H1 */
    font-size: 48px;
    font-style: normal;
    font-weight: 700;
    line-height: 120%; /* 57.6px */
    }
    .text-nd-header {
    color: var(--secondary, #463F41);

    /* H1 */
    font-size: 48px;
    font-style: normal;
    font-weight: 700;
    line-height: 120%;
    }
    .text-sub-header {
    color: var(--secondary, #463F41);

    /* H4 */
    font-size: 28px;
    font-style: normal;
    font-weight: 500;
    line-height: 120%; /* 33.6px */
    }
    .text-highlight {
    color: var(--text-text-promary, #3A3536);

    /* H3 */
    font-size: 34px;
    font-style: normal;
    font-weight: 600;
    line-height: 120%; /* 40.8px */
    }
    .text-sub-highlight {
    color: var(--text-text-promary, #3A3536);

    /* H5 */
    font-size: 24px;
    font-style: normal;
    font-weight: 500;
    line-height: 120%; /* 28.8px */
    letter-spacing: 0.5px;
    }
    .text-sub-highlight-nd {
    color: var(--text-text-promary, #3A3536);

    /* Body 01 */
    font-size: 20px;
    font-style: normal;
    font-weight: 500;
    line-height: 120%; /* 24px */
    letter-spacing: 0.2px;
    }
    .card-subscription {
    border-radius: 10px;
    width: 100%;
    margin: 0;

    }
    .text-subscription-header {
    color: var(--text-text-promary, #3A3536);

    /* H3 */
    font-size: 34px;
    font-style: normal;
    font-weight: 600;
    line-height: 120%; /* 40.8px */
    }
    .label-subscription {
    color: var(--secondary, #463F41);

    /* Body 01 */
    font-size: 20px;
    font-style: normal;
    font-weight: 500;
    line-height: 120%; /* 24px */
    letter-spacing: 0.2px;
    }
    .check-box-subscription {
    color: var(--text-text-promary, #3A3536);

    /* Body Base */
    font-size: 16px;
    font-style: normal;
    font-weight: 400;
    line-height: 120%; /* 19.2px */
    letter-spacing: 0.5px;
    }
    .text-interest {
    color: var(--secondary, #463F41);

    /* Body 01 */
    font-size: 20px;
    font-style: normal;
    font-weight: 500;
    line-height: 120%; /* 24px */
    letter-spacing: 0.2px;
    }
    .btn-subscription {
    border-radius: 8px;
    }
    .card-subscripted {
    min-height: 8pc;
    }
    .card{
        min-width:100%;
        margin:0;
    }
    .text-subscripted {
    color: var(--text-text-promary, #3A3536);
    font-size: 20px;
    font-style: normal;
    font-weight: 600;
    line-height: 120%; /* 20.4px */
    letter-spacing: 0.5px;
    }
    .text-search-event-header {
    color: var(--link-link, #554C4F);
    text-align: center;

    /* H3 */
    font-size: 34px;
    font-style: normal;
    font-weight: 500;
    line-height: 120%; /* 40.8px */
    }
    .form-search-unit {
    color: var(--secondary, #463F41);

    /* Body 01 */
    font-size: 20px;
    font-style: normal;
    font-weight: 500;
    line-height: 120%; /* 24px */
    letter-spacing: 0.2px;
    }
    .select-unit {
    color: var(--text-text-secondary, #CBC4C7);

    /* Body 01 */
    font-size: 20px;
    font-style: normal;
    font-weight: 500;
    line-height: 120%; /* 24px */
    letter-spacing: 0.2px;
    }

    .accordion, .accordion-header, button.accordion-button {
    border-radius: 10px;
    }
@endsection
@section('content')
    @php
        $RegisStatus = $response['ResultData']['UserInfo']['RegisStatus'] ?? 'N';
        $SubScriptionStatus = $response['ResultData']['UserInfo']['SubScriptionStatus'] ?? 'N';
    @endphp
    <div class="row g-4 d-flex justify-content-center mt-3">
        <div class="col-lg-12 p-0 text-center">
            <img src="{{ asset('assets/images/image 58.png') }}" alt="" width="100%">
        </div>
        <div class="col-md-10 text-center">
            <span class="text-header me-2">โปรติดสปีด</span><span class="text-nd-header">X3</span>
            <br>
            <span class="text-sub-header">ดีลร้อนเฉพาะคอนโดเรียล</span>
        </div>
        <div class="col-md-10 mt-3 text-center">
            <span class="text-highlight">ใจร้อนอยากมีคอนโดใหม่ ต้องจัดโปรนี้! โปรติดสปีดX3 ที่ 24 Online Booking
                ดีลร้อนเฉพาะคอนโด</span>
        </div>
        <div class="col-lg-6 col-md-10 m-auto mt-3 mb-3 ps-4 pe-4 text-center">
            <span class="text-sub-highlight">ใจร้อนอยากมีคอนโดใหม่ ต้องจัดโปรนี้!โปรติดสปีด X3 ที่ 24 Online Booking
                ดีลร้อนเฉพาะคอนโดตั้งแต่วันนี้ - 30 ก.ย.66 เมื่อใช้โค้ดผ่าน 24 Online Bookingและ Walk-in
                ที่โครงการเท่านั้น!!</span>
            <div class="fnt-20 text-start mt-3">
                <span class="text-sub-highlight-nd">
                    เพียงซื้อคูปอง 999 บาท ผ่าน Shopee นำมาใช้แทน
                    ส่วนลดบน พร้อมโปรพิเศษเพิ่มอีกเพียบ!!โปรโมชันจัดเต็ม!
                    <li>ลดสูงสุดกว่า 9 แสน*</li>
                    <li>รับคืนสูงสุด 1 แสน*</li>
                    <li>พิเศษ! On-Top จากคูปอง Shopee สูงสุด 2 แสนบาท*</li>
                    <li>ฟรี ทุกค่าใช้จ่ายวันโอน*</li>
                    <li>ฟรี ค่าส่วนกลางสูงสุด 3 ปี*- ฟรี เครื่องใช้ไฟฟ้า*</li>
                    <li>ฟรี เฟอร์นิเจอร์*</li>
                </span>
            </div>
        </div>
        <div class="col-lg-10 ps-4 pe-4 text-center">
            <img src="{{ asset('assets/images/image 59.png') }}" alt="" width="100%" >
        </div>
        @if ($RegisStatus == 'N' && $SubScriptionStatus == 'N')
        <div class="col-lg-10 col-md-12 ps-4 pe-4" id="Guest">
            <div class="card card-subscription m-auto w-100" style="min-width:335px;">
                <div class="card-body text-center d-flex justify-content-center" >
                    <div class="col-lg-6">
                    <span class="text-subscription-header">ลงทะเบียนรับสิทธิพิเศษ</span>
                    <div class="row g-2">
                        <div class="col-md-12 text-start" id="TelSection">
                            <div class="form-group">
                                <label class="form-label label-subscription"
                                    for="Tel">เบอร์โทรศัพท์</label>
                                <input type="text" class="form-control" name="Tel"
                                    id="Tel" placeholder="0X-XXXX-XXXX">
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-10 text-center" id="PrivacySection">
                            <input class="form-check-input me-2 check-box-subscription"
                                type="checkbox" name="" id="PrivacyStatus" class="me-1">
                            <label class="fnt-16" for="">ยินยอมรับข้อตกลงข้อมูลส่วนบุคคล
                                (Privacy
                                Notice)</label>
                        </div>
                        <div class="col-md-12 d-grid gap-2">
                            <button type="button" class="btn btn-main btn-subscription"
                                id="btn-subscription" onclick="subscription()">ลงทะเบียน</button>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="SubscriptionModal" tabindex="-1"
                            aria-labelledby="SubscriptionModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <span
                                            class="text-subscription-header">ลงทะเบียนรับสิทธิพิเศษ</span>
                                        <div class="row g-2">
                                            <div class="col-md-12 text-start">
                                                <div class="form-group mb-2">
                                                    <label class="form-label label-subscription"
                                                        for="FullName">ชื่อ -
                                                        นามสกุล</label>
                                                    <input type="text" class="form-control"
                                                        name="FullName" id="FullName"
                                                        placeholder="ชื่อ - นามสกุล">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label label-subscription"
                                                        for="Email">อีเมล</label>
                                                    <input type="text" class="form-control"
                                                        name="Email" id="Email"
                                                        placeholder="yourname@email.com">
                                                </div>
                                            </div>
                                            <div class="col-md-6 mt-2 text-start"
                                                id="InterestSection">
                                                <strong>โครงการที่หน้าสนใจ</strong>
                                                <table>
                                                    <tbody>
                                                        @foreach (range(1, 3) as $index)
                                                            <tr>
                                                                <td valign="middle">
                                                                    <input
                                                                        class="form-check-input me-2"
                                                                        type="checkbox"
                                                                        name=""
                                                                        id="">
                                                                </td>
                                                                <td>
                                                                    <img src="{{ asset('assets/images/image 20.jpg') }}"
                                                                        alt=""
                                                                        width="75px"
                                                                        height="75px"
                                                                        class="p-0 rounded-1 me-3">
                                                                </td>
                                                                <td>
                                                                    <strong>คอนโดมิเนียม เดอะ สเตจ
                                                                        มายด์สเคป</strong>
                                                                    <br>
                                                                    <span class="fnt-16">รัชดา -
                                                                        ห้วยขวาง</span>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="col-md-12 d-grid gap-2">
                                                <button
                                                    class="btn btn-main btn-confirm-subscription">ลงทะเบียน</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        @elseif ($RegisStatus == 'Y' && $SubScriptionStatus == 'N')
        <div class="col-lg-10 col-md-12 ps-4 pe-4" id="Guest">
            <div class="card card-subscription m-auto w-100" style="min-width:335px;">
                <div class="card-body text-center d-flex justify-content-center" >
                    <div class="col-lg-6">
                        <span class="text-subscription-header">ลงทะเบียนรับสิทธิพิเศษ</span>
                        <div class="row g-2">
                            <div class="col-md-12 col-sm-10 text-center" id="PrivacySection">
                                <input class="form-check-input me-2" type="checkbox" name="" id="privacyCheckbox"
                                    class="me-1">
                                <label class="fnt-16" for="">ยินยอมรับข้อตกลงข้อมูลส่วนบุคคล (Privacy
                                    Notice)</label>
                            </div>
                            <div class="col-md-6 mt-2 event-interest text-start" id="eventInterestSection">
                                <strong>โครงการที่หน้าสนใจ</strong>
                                <table>
                                    <tbody>
                                        @foreach (range(1, 3) as $index)
                                            <tr>
                                                <td valign="middle">
                                                    <input class="form-check-input me-2" type="checkbox" name=""
                                                        id="">
                                                </td>
                                                <td>
                                                    <img src="{{ asset('assets/images/image 20.jpg') }}" alt=""
                                                        width="75px" height="75px" class="p-0 rounded-1 me-3">
                                                </td>
                                                <td>
                                                    <strong>คอนโดมิเนียม เดอะ สเตจ มายด์สเคป</strong>
                                                    <br>
                                                    <span class="fnt-16">รัชดา - ห้วยขวาง</span>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-12 d-grid gap-2">
                                <button class="btn btn-main btn-confirm-subscription">ลงทะเบียน</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
        <div class="col-lg-10 col-md-12 ps-4 pe-4 text-center" id="Customer">
            <div class="card card-subscription card-subscripted m-auto w-100" style="min-width:335px;">
                <div class="card-body">
                    <span class="text-subscription-header">ลงทะเบียนรับสิทธิพิเศษ</span>
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <span
                                class="text-subscripted">ท่านได้ทำการลงทะเบียนเรียบร้อยแล้ว</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
    <div class="row g-4 d-flex justify-content-center mt-0">
        <div class="col-lg-10 col-md-10 ps-4 pe-4">
            <div class="accordion" id="accordionExample"
                style="box-shadow: 0px 0px 8px 0px rgba(218, 218, 218, 0.65); border-radius: 10px;">
                <div class="accordion-item" style="border-radius: 10px;">
                    <h2 class="accordion-header" style="border-radius: 10px;">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"
                            style="border-radius: 10px;">
                            <i class="bi bi-search me-2 fnt-20"></i><strong
                                class="text-search-event-header">ค้นหา</strong>
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample"
                        style="border-radius: 10px;">
                        <div class="accordion-body pt-1 pb-1" style="background: #fff;">
                            <div class="row g-3 justify-content-center mb-3">
                                <div class="col-md-6">
                                    <div class="form-group form-search-unit">
                                        <label class="form-label" for="">โครงการ</label>
                                        <select class="form-select select-unit">
                                            <option>โครงการ</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-search-unit">
                                        <label class="form-label" for="">ทำเล</label>
                                        <select class="form-select select-unit">
                                            <option>ทำเล</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-search-unit">
                                        <label class="form-label" for="">ช่วงราคา</label>
                                        <select class="form-select select-unit">
                                            <option>ช่วงราคา</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-search-unit">
                                        <label class="form-label" for="">โปรโมชั่น</label>
                                        <select class="form-select select-unit">
                                            <option>ทั้งหมด</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 d-grid gap-2">
                                    <button class="btn btn-main"><i class="bi bi-search me-2"></i>ค้นหาเลย</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-10 col-md-10 p-0">
            <div class="row g-4">
                @php
                    $count = 0;
                @endphp
                @foreach (range(1, 3) as $index)
                @php
                        $ProjectImg = "";
                        $ProjectName = "คอนโดมิเนียม เดอะ สเตจ มายด์สเคป";
                        $Price = '3.19 ล้านบาท*';
                        $PlaceName = "รัชดา - ห้วยขวาง";
                        $count = $count + 1;
                    @endphp
                    <div class="col-lg-4 col-md-10 ps-4 pe-4">
                        @if ($count > 3)
                            <div hidden>
                                @include('components.components-all.card-view')
                            </div>
                        @else
                            @include('components.components-all.card-view')
                        @endif
                        {{-- <div class="card m-0" style="min-width: 100%;">
                            <div class="image-container">
                                <div class="first d-grid align-content-between" style="height: 100%">
                                    <div class="d-flex justify-content-end">
                                        <img src="{{ asset('assets/images/brand.png') }}" alt="" width="50px"
                                            height="50px" class="" style="border-radius: 10px">
                                    </div>
                                    <div class="fnt-20 text-center">
                                        <div class="p-1"
                                            style="background: #EC161D;border-radius:5px;color:#fff;max-width:90px">
                                            โครงการใหม่
                                        </div>
                                        <div class="p-1 mt-1"
                                            style="background: #FAA613;border-radius:5px;color:#fff;max-width:140px">
                                            #PROTIDSPEEDX3
                                        </div>
                                    </div>
                                </div>
                                <img src="{{ asset('assets/images/image 20.jpg') }}" alt="" width="100%"
                                    class="image-card">
                            </div>
                            <div class="card-body pb-0">
                                <span class="text-red fnt-30"><strong>เริ่มต้น : 1.89 ล้านบาท*</strong></span><br>
                                <span class="mb-0 fnt-28"><strong>คอนโดมิเนียม เดอะ สเตจ มายด์สเคป</strong></span>
                                <label class="card-text fnt-24"><strong>รัชดา - ห้วยขวาง</strong></label>
                            </div>
                            <hr class="mt-1 mb-2 ms-4 me-4" style="border: 1px solid rgba(35, 31, 32, 0.25)">
                            <div class="card-body pt-0">
                                <span>กำลังจะหมดเวลา คลิกดูยูนิตได้เลย</span>
                                <div class="row">
                                    <div class="col-7">
                                        <div id="flipdown{{ $index }}" class="flipdown"></div>
                                    </div>
                                    <div class="col-5 text-end">
                                        <button class="btn btn-lemon btn-unit-view"
                                            @if ($SubScriptionStatus == 'N') disabled @endif>
                                            ดูยูนิตเปิดจอง
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                @endforeach
            </div>
        </div>

        @if($count > 3)
        <div class="row justify-content-center mt-4 " style="margin-bottom: 55px;">
            <div class="col-lg-2 col-sm-5 col-6 p-0 fnt-20">
                <a href="" style="color: #554C4F">
                    <div class="row">
                        <div class="col-8 text-end p-0 me-1 fnt-24">โหลดเพิ่มเติม </div>
                        <div class="col-3 text-start p-0" style="margin-top: 6px;margin-left:6px">
                            <i class="bi bi-arrow-clockwise"></i>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        @endif
    </div>
    <link rel="stylesheet" href="{{ asset('flipdown/flipdown.min.css') }}">
    <script src="{{ asset('flipdown/flipdown.min.js') }}"></script>

    <style>
        .detail-event {
            background: #fff;
            border-radius: 20px 20px 0 0;
            position: relative;
            top: -20px;
        }

        .circle-button {
            background: #999;
            color: #fff;
            border-radius: 50%;
            height: 50px;
            width: 50px;
            padding-top: 9px;
            padding-left: 10px;
        }

        .fillter {
            height: 34px;
            border: #999 1px solid;
            border-radius: 10px;
            width: 109px;
            margin-left: 8px;
            display: inline-flex;
            justify-content: center;
        }

        .facilities {
            height: 100px;
            width: 100px;
            border-radius: 50%;
            background: #fff;
            margin: auto;
        }
        
    </style>

    <script>
        const subscription = $('.btn-subscription');
        const confirm_subscription = $('.btn-confirm-subscription');
        const alert_subScription = $('.btn-alert-subScription');
        

        $(document).ready(function() {
            $(".btn-unit-view").click(function() {
                window.location.href = "{{ route('ProjectEventIndex') }}";
            });
            // if ("{{ $RegisStatus }}" == 'N') {
            //     $(".btn-unit").prop("disabled", true);
            // }
            subscription.click(function() {
                console.log('ok');
                if ($("#Tel").val() != "" && $('#PrivacyStatus').prop('checked') == true) {
                    console.log('Tel');
                    CheckSubScriptionByMobile($("#Tel").val());
                } else {
                    return;
                }
            });

            confirm_subscription.click(function() {
                if ($('#FullName').val() != "" && $('#Email').val() != "") {
                    console.log($('#FullName').val(), $('#Email').val());
                    let data = {
                        "EventID": "1",
                        "CusMemberID": "{{ $member_id }}",
                        "MemberStatus": "Guest",
                        "Mobile": $("#Tel").val(),
                        "Email": $("#Email").val()
                    }
                    console.log(data);
                    SaveSubScriptionByEventID(data);
                } else {
                    return;
                }
            });

            alert_subScription.click(function() {
                $("#Customer").remove();
            })

            $("#eventInterestSection").hide();
            // $("#InterestSection").hide();
            // $("#RegisSection").hide();
        });

        $("#privacyCheckbox").change(function() {
            if ($(this).is(":checked")) {
                $("#eventInterestSection").show();
            } else {
                $("#eventInterestSection").hide();
            }
        });

        var time = 5400;
        var twoDaysFromNow = (new Date().getTime() / 1000) + (time) + 1;
        new FlipDown(twoDaysFromNow, "flipdown1").start();
        new FlipDown(twoDaysFromNow, "flipdown2").start();
        new FlipDown(twoDaysFromNow, "flipdown3").start();

        function CheckSubScriptionByMobile(val) {
            $.ajax({
                url: "{{ route('CheckSubScriptionByMobile') }}",
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                data: {
                    'Mobile': val
                },
                dataType: "json",
                success: function(res) {
                    if (res['Result'] == 1) {
                        if (res['ResultData']['SubScriptionStatus'] == 'Y') {
                            // Create the new HTML content
                            var newContent = `
                            <div class="card card-subscription card-subscripted">
                                <div class="card-body text-center">
                                    <span class="text-subscription-header">ลงทะเบียนรับสิทธิพิเศษ</span>
                                    <div class="row mt-3 text-center">
                                        <div class="col-md-12">
                                            <span class="text-subscripted">ท่านเคยลงทะเบียนแล้ว</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            `;

                            // Replace the content of the Customer div with the new HTML content
                            $("#Guest").html(newContent);
                            $(".btn-unit-view").prop("disabled", false);

                            // Swal.fire({
                            //     icon: 'success',
                            //     title: 'คุณเคย Subscription แล้ว',
                            //     showConfirmButton: false,
                            //     timer: 1500
                            // }).then(function() {
                            //     $("#Guest").remove();
                            //     $(".btn-unit-view").prop("disabled", false);
                            // })
                        } else {
                            $("#SubscriptionModal").modal('show');
                            // $("#TelSection").hide();
                            // $("#PrivacySection").remove();
                            // $("#RegisSection").show();
                            // $("#InterestSection").show();
                        }

                    }
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        }

        function SaveSubScriptionByEventID(val) {
            $.ajax({
                url: "{{ route('SaveSubScriptionByEventID') }}",
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                data: val,
                dataType: "json",
                success: function(res) {
                    console.log(res);
                    if (res['Result'] == 1) {
                        $("#SubscriptionModal").modal('hide');
                        // Create the new HTML content
                        var newContent = `
                        <div class="card card-subscription card-subscripted">
                            <div class="card-body text-center">
                                <span class="text-subscription-header">ลงทะเบียนรับสิทธิพิเศษ</span>
                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <span class="text-subscripted">ท่านได้ทำการลงทะเบียนเรียบร้อยแล้ว</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        `;

                        // Swal.fire({
                        //     icon: 'success',
                        //     title: 'คุณได้ทำการ Subscription แล้ว',
                        //     showConfirmButton: false,
                        //     timer: 1500
                        // }).then(function() {
                        if ("{{ $RegisStatus }}" == 'Y') {
                            $("#Member").html(newContent);
                            $(".btn-unit-view").prop("disabled", false);
                        } else {
                            $("#Guest").html(newContent);
                            $(".btn-unit-view").prop("disabled", false);
                        }
                        // })
                    }
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        }
    </script>
@endsection
