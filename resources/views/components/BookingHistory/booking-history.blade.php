@extends('main')

@section('style')
    .carousel-inner {
    height: 20pc;
    }

    .carousel-item {
    width: 100%;
    height: 100%;
    }

    .carousel-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    }

    .custom-btn {
    color: #EC161D;
    cursor: pointer;
    text-align: left;
    padding-left: 10%;
    }

    .custom-btn.active {
    color: #EC161D;
    border-left: 5px solid #FF656A;
    }

    .custom-btn:hover {
    color: #EC161D;
    background-color: #FFF1F180;
    }

    {{-- .card {
    width: 100%;
    margin: 0;
    } --}}

    .image-card {
    width: 100%;
    }

    .card-text {
    color: var(--text-text-secondary, #CBC4C7);

    /* Body 01 */
    font-size: 20px;
    font-style: normal;
    font-weight: 500;
    line-height: 120%; /* 24px */
    letter-spacing: 0.2px;
    }

    .load-more {
    color: var(--link-link, #554C4F);
    text-align: center;

    /* H5 */
    font-style: normal;
    font-weight: 500;
    line-height: 120%; /* 28.8px */
    letter-spacing: 0.5px;
    }

    .btn-circle {
    color: #FFF;
    border-radius: 50%;
    background-color: rgba(35, 31, 32, 0.50);
    border: 1px solid rgba(255, 255, 255, 0.25);
    width: 40px;
    height: 40px;
    }
@endsection

@section('content')
    <div class="container mt-5 p-0">
        <div class="row mt-5 mb-4 g-4">
            <div class="col-md-12 text-center">
                <span class="fnt-34">
                    <strong>
                        ประวัติการจอง
                    </strong>
                </span>
            </div>
        </div>

        <div class="row justify-content-center" style="margin-bottom: 55px;">
            {{-- @foreach (range(1, 6) as $index) --}}
            @if (!empty($history) && $history['Result'] == 1)
                @php
                    $count = 0;
                @endphp
                @foreach ($history['ResultData']['BookingInfoList'] as $index)
                    @php
                        $UnitNo = $index['UnitNo'];
                        $Img = $index['Img'];
                        $ProjectName = $index['ProjectName'];
                        $UnitPlanName = $index['UnitPlanName'];
                        $UnitFloor = $index['UnitFloor'];
                        $BookingDateTime = $index['BookingDateTime'];
                        $count = $count + 1;
                    @endphp
                    @if ($count > 6)
                    <div hidden>
                        @include('components.components-all.card-booking-history')
                    </div>
                    @else
                        @include('components.components-all.card-booking-history')
                    @endif
                @endforeach
                {{-- @if($count > 3) --}}
                <div class="row justify-content-center mt-4 ">
                    <div class="col-lg-2 col-sm-5 col-6 p-0 fnt-20">
                        <a href="" style="color: #554C4F">
                            <div class="row" id="loadMore">
                                <div class="col-8 text-end p-0 me-1 fnt-24">โหลดเพิ่มเติม </div>
                                <div class="col-3 text-start p-0" style="margin-top: 6px;margin-left:6px">
                                    <i class="bi bi-arrow-clockwise"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                {{-- @endif --}}
            @else
                <div class="text-center">
                    <strong class="text-warning fnt-20">
                        ไม่มีข้อมูล
                    </strong>
                </div>
            @endif
        </div>


    </div>
    @include('components.components-all.receipt')
    <script>
        $(document).ready(function() {
            $(".card-his").slice(0, 3).show();
            $("#loadMore").on("click", function(e) {
                console.log("click");
                e.preventDefault();
                $(".card-his:hidden").slice(0, 3).slideDown();
                if ($(".card-his:hidden").length == 0) {
                    $("#loadMore").hide();
                }
            });
        });
    </script>
@endsection
