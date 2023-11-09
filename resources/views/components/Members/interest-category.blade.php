@extends('main')
@section('content')
    <script>
        document.body.style.backgroundColor = "#f3f8fe";
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <div class="container-fluid mr-content container-card-manage">
        <div class="row  justify-content-center">
            <div class="col-md-9 mb-4 text-center">
                <p class="h-title-4">
                    <strong>
                        {{ $title }}
                    </strong>
                </p>
                <label>หน้าฟีดหลักของคุณอิงตามหมวดหมู่ความสนใจ ประวัติการเข้าชม</label><br>
                <label>สามารถข้ามขั้นตอนนี้ และแก้ไขการตั้งค่าเพื่อปรับปรุงฟีดของคุณในภายหลังได้</label>
            </div>
        </div>
        <div class="row mt-4 justify-content-center">
            <div class="col-md-9">
                <div class="owl-carousel owl-theme">
                    @foreach($responseBody['ResultData']['InterestCetagoriesList'] as $item)
                        <div class="card b-rd-10 br-sh-0" style="height: 32em;width:20em" data-main-categories-id="{{ $item['MainInterestCetagoriesID'] }}" data-sub-categories-id="{{ $item['SubInterestID'] }}">
                            <div class="card-body p-3">
                                <div class="row justify-content-center aling-items-between ">
                                    <div class="col-9 text-center ">
                                        <img class="card-img-top mb-4 border-radius-10" src="{{ asset('assets/images/no-picture-available.jpg') }}" alt="">
                                        <strong class="card-title" style="font-size:26px">{{ $item['InterestCategoriesName'] }}</strong>
                                        <p class="card-text mt-3 line-clamp-4" style="height: 6em;">{{ $item['SubInterestName'] }}</p><br>
                                        @if ($item['CusMember_id'] == session('user')['MemberID'])
                                            <button class="btn btn-primary btn-category mb-3 active"><i class="bi bi-x"></i>นำออก</button>
                                        @else
                                            <button class="btn btn-primary btn-category mb-3"><i class="bi bi-plus"></i>สนใจ</button>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="card b-rd-10 br-sh-0" style="height: 32em;width:20em" data-main-categories-id="{{ $item['MainInterestCetagoriesID'] }}" data-sub-categories-id="{{ $item['SubInterestID'] }}">
                        <div class="card-body p-3">
                            <div class="row justify-content-center aling-items-between ">
                                <div class="col-9 text-center ">
                                    <img class="card-img-top mb-4 border-radius-10" src="{{ asset('assets/images/no-picture-available.jpg') }}" alt="">
                                    <strong class="card-title" style="font-size:26px">{{ $item['InterestCategoriesName'] }}</strong>
                                    <p class="card-text mt-3 line-clamp-4" style="height: 6em;">{{ $item['SubInterestName'] }}</p><br>
                                    @if ($item['CusMember_id'] == session('user')['MemberID'])
                                        <button class="btn btn-primary btn-category mb-3 active"><i class="bi bi-x"></i>นำออก</button>
                                    @else
                                        <button class="btn btn-primary btn-category mb-3"><i class="bi bi-plus"></i>สนใจ</button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5 justify-content-center">
            <div class="col-md-9 text-center">
                <button class="btn btn-outline-primary me-3 btn-w-160 btn-skip">ข้าม</button>
                <button class="btn btn-primary btn-w-160 btn-save">บันทึก</button>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        let InterestCetagoriesArray = [];
        $('.btn-category').on('click', function() {
            let $parentCard = $(this).closest('.card');
            let interestCategoriesName = $parentCard.find('.card-title').text();
            let subInterestName = $parentCard.find('.card-text').text();
            let cusMemberId = '{{ session("user")["MemberID"] }}';
            let mainCategoriesId = $parentCard.data('main-categories-id');
            let subCategoriesId = $parentCard.data('sub-categories-id');

            let actionFlag = "";
            if ($(this).hasClass('active')) {
                $(this).html('<i class="bi bi-plus"></i>สนใจ');
                $(this).removeClass('active');
                actionFlag = "DELETE";
            } else {
                $(this).html('<i class="bi bi-x"></i>นำออก');
                $(this).addClass('active');
                actionFlag = "ADD";
            }

            let InterestCetagoriesData = {
                "CusMemberID": cusMemberId,
                "MainCategoriesID": mainCategoriesId,
                "SubCategoriesID": subCategoriesId,
                "ActionFlag": actionFlag
            };

            let index = InterestCetagoriesArray.findIndex(function(item) {
                return item.CusMemberID === cusMemberId && item.MainCategoriesID === mainCategoriesId && item.SubCategoriesID === subCategoriesId;
            });

            if (index !== -1) {
                InterestCetagoriesArray.splice(index, 1);
            } else {
                InterestCetagoriesArray.push(InterestCetagoriesData);
            }
        });

        const owl = $('.owl-carousel');
        owl.owlCarousel({
            smartSpeed: 250,
            // loop: true,
            // nav: true,
            margin: 25,
            responsive: {
                0: {
                    items: 3
                },
                1780: {
                    items: 3
                },
            }
        });

        // $('.btn-save').on('click', function() {
        //     $.ajax({
        //         url: "",
        //         type: "POST",
        //         data: JSON.stringify({
        //             "InterestCetagoriesList": {
        //                 InterestCetagoriesList : InterestCetagoriesArray
        //             }
        //         }),
        //         contentType: "application/json",
        //         dataType: "json",
        //         headers: {
        //             'X-CSRF-TOKEN': '{{ csrf_token() }}'
        //         },
        //         beforeSend: function() {
        //             $('body').append('<div id="spinner"><div class="spinner-inner"><div class="spinner-border text-primary" role="status"><span class="visually-hidden">Loading...</span></div></div></div>');
        //         },
        //         success: function(res) {
        //             if (res['Result'] == 1) {
        //                 window.location.href = "{{ route('OverviewIndex') }}";
        //             } else {
        //                 window.location.href = "{{ route('OverviewIndex') }}";
        //             }
        //         },
        //         error: function(err) {
        //             $('#spinner').remove();
        //             console.log(err);
        //         },
        //         complete: function() {
        //             $('#spinner').remove();
        //         }
        //     });
        // });

        $('.btn-skip').on('click', function() {
            window.location.href = "{{ route('OverviewIndex') }}";
        });
    </script>
    <style>
        .owl-carousel .owl-item img {
            width: 200px;
            display: unset;
        }

        .line-clamp-4 {
            /* Required declarations: */
            overflow: hidden;
            display: -webkit-box;
            -webkit-box-orient: vertical;

            /* Limit the text block to three lines */
            -webkit-line-clamp: 4;
        }
    </style>
@endsection
