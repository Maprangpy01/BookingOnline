@extends('main')
@section('content')
@php
    $payment;
    if (!empty($_POST)) {
        $payment = json_encode($_POST);
    } else {
        $payment = '';
    }
@endphp
    <div class="container mt-5">
        <div class="row d-flex justify-content-center mt-5 text-center">
            <div class="col-md-10 step-booking">
                <div class="circle-here">1</div>
                <div class="line-step" id="line-2"></div>
                <div class="circle" id="circle-2">2</div>
                <div class="line-step" id="line-3"></div>
                <div class="circle" id="circle-3">3</div>
                <div class="line-step" id="line-4"></div>
                <div class="circle" id="circle-4">4</div>
            </div>
        </div>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="booking-room-tab-pane" role="tabpanel" aria-labelledby="contact-tab"
                tabindex="0">
                @include('components.Booking.Layouts.booking')
            </div>
            <div class="tab-pane fade" id="information-tab-pane" role="tabpanel" aria-labelledby="contact-tab"
                tabindex="0">
                @include('components.Booking.Layouts.information')
            </div>
            <div class="tab-pane fade" id="payment-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                @include('components.Booking.Layouts.payment')
            </div>
            <div class="tab-pane fade" id="complete-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                @include('components.Booking.Layouts.complete')
            </div>
        </div>
        <div id="myTab" role="tablist" class="mb-5">
            <button hidden class="btn btn-main btn-w-300 btn-w-md active" data-bs-toggle="tab"
                data-bs-target="#booking-room-tab-pane" type="button" role="tab" aria-selected="true">BOOKING
                ROOM</button>
            <div id="first">
                <div class="col-12 mt-4 mb-2 text-center ps-2 pe-2">
                    <button class="btn btn-main btn-w-300 btn-w-md" id="btn-index" data-bs-toggle="tab"
                        data-bs-target="#information-tab-pane" type="button" role="tab" aria-selected="false">BOOKING
                        ROOM</button>
                </div>
            </div>
            <div id="information" style="display: none;">
                <div class="col-12 mt-4 mb-2 text-center ps-2 pe-2">
                    <button class="btn btn-main btn-w-300 btn-w-md" id="btn-information" data-bs-toggle="tab"
                        data-bs-target="#payment-tab-pane" type="button" role="tab" aria-selected="false">CONFIRM
                        BOOKING</button>
                </div>
            </div>
            <div id="payment" style="display: none;">
                <div class="col-12 mt-4 mb-2 text-center ps-2 pe-2">
                    <button class="btn btn-main btn-w-300 btn-w-md" id="btn-payment" {{-- data-bs-toggle="tab" data-bs-target="#complete-tab-pane" --}} type="submit"
                        role="tab" aria-selected="false">CONFIRM PAYMENT</button>
                </div>
            </div>
            <div id="complete" style="display: none;">
                <div class="col-12 mt-4 mb-2 text-center ps-2 pe-2">
                    <button class="btn btn-main btn-w-300 btn-w-md m-0" id="btn-complete"
                        type="button">ดูใบเสร็จรับเงิน</button>
                </div>
                <div class="col-12 mb-2 text-center ps-2 pe-2">
                    <a class="btn btn-outline-secondary btn-w-300 btn-w-md" id="index"
                        href="{{ route('OverviewIndex') }}" type="button">กลับหน้าหลัก</a>
                </div>
            </div>
        </div>
    </div>
    {{-- Spinner --}}
    <div class="modal fade" id="spinnerModal" tabindex="-1" aria-labelledby="spinnerModalLabel" aria-hidden="true"
        data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="d-flex justify-content-center mt-3">
                    <div class="spinner-border text-primary" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
                <div class="d-flex justify-content-center mt-3 mb-3">
                    <h3 class="text-primary">กรุณารอสักครู่</h3>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            console.log('{{ $payment }}');

            if ('{{ $payment }}') {
                // $('#spinnerModal').modal('show');

                $("#first").css("display", "none");
                $("#information").css("display", "none");
                $("#payment").css("display", "none");
                $("#complete").css("display", "block");
                document.getElementById("line-2").className = "line-step-here";
                document.getElementById("circle-2").className = "circle-here";
                document.getElementById("line-3").className = "line-step-here";
                document.getElementById("circle-3").className = "circle-here";
                document.getElementById("line-4").className = "line-step-here";
                document.getElementById("circle-4").className = "circle-here";

                $("#booking-room-tab-pane").removeClass("show active");
                $("#complete-tab-pane").addClass("show active");

                window.scrollTo(0, 0)

                // setTimeout(function() {
                //     $('#spinnerModal').modal('hide');
                // }, 1000);
            }
        });
        $("#btn-index").click(function() {
            $("#first").css("display", "none");
            $("#information").css("display", "block");
            document.getElementById("line-2").className = "line-step-here";
            document.getElementById("circle-2").className = "circle-here";
            window.scrollTo(0, 0)
        })
        $("#btn-information").click(function() {
            $("#information").css("display", "none");
            $("#payment").css("display", "block");
            document.getElementById("line-3").className = "line-step-here";
            document.getElementById("circle-3").className = "circle-here";
            window.scrollTo(0, 0)
        })
        $("#btn-payment").click(function() {
            $("#payform").submit();
            // $("#payment").css("display", "none");
            // $("#complete").css("display", "block");
            // document.getElementById("line-4").className = "line-step-here";
            // document.getElementById("circle-4").className = "circle-here";
            // window.scrollTo(0, 0)
        })
    </script>
@endsection
