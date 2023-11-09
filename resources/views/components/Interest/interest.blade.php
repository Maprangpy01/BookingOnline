@extends('main')
@section('content')
    <div class="container mt-5">
        <div class="row mt-5 mb-4 g-4">
            <div class="col-md-12 text-center">
                <span class="fnt-34">
                    <strong>
                        ความสนใจ
                    </strong>
                </span>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-11 p-0">
                @if (!empty($responseBody))
                    @foreach ($responseBody['ResultData']['InterestInfoList'] as $item)
                        <input type="checkbox" class="btn-check btn-interest" name="radiobtn" id="{{ $item['ID'] }}"
                            autocomplete="off" @if ($item['CusMemberID'] !== null) checked @endif>
                        <label class="btn btn-main-checkbox me-2 mt-3" for="{{ $item['ID'] }}"
                            style="height:45px;border-radius: 24px;">
                            {{ $item['InterestTopic'] }}
                        </label>
                    @endforeach
                @endif
            </div>
        </div>
        <div class="row justify-content-center mt-4" style="margin-bottom: 55px;">
            <div class="col-lg-6 mb-2 text-end ps-2 pe-2">
                    <a class="btn btn-outline-secondary btn-w-300 btn-w-lg" id="index"
                            href="{{ route('OverviewIndex') }}" type="button" style="height:45px;font-size:20px">ข้าม</a>
            </div>
            <div class="col-lg-6 mb-2 text-start ps-2 pe-2">
                    <button class="btn btn-main btn-w-300 btn-w-lg m-0" id="btn-complete" style="height:45px;font-size:20px"
                    type="button">บันทึก</button>
            </div>
        </div>

    </div>
    <style>
        .btn-check:checked+.btn,
        .btn.active,
        .btn.show,
        .btn:first-child:active,
        :not(.btn-check)+.btn:active {
            color: #fff;
            background-color: #C70E14;
            border-color: #C70E14;
        }

        .btn-check:checked+.btn:focus-visible,
        .btn.active:focus-visible,
        .btn.show:focus-visible,
        .btn:first-child:active:focus-visible,
        :not(.btn-check)+.btn:active:focus-visible {
            box-shadow: var(--bs-btn-focus-box-shadow);
        }

        .btn-main-checkbox {
            font-size: 20px;
            --bs-btn-color: #C70E14;
            background: #fff;
            --bs-btn-border-color: #C70E14;
            --bs-btn-focus-shadow-rgb: 66, 70, 73;
            padding: 6px 10px;
        }

        .btn-main-checkbox:hover {
            border: 1px solid #C70E14;
            background: #C70E14;
            color: #fff;
        }

        .btn-main-checkbox:checked {
            border: 1px solid #C70E14;
            background: #C70E14;
            color: #fff;
        }
    </style>

    <script>
        var interests = [];
        for (var i = 0; i < $('.btn-interest').length; i++) {
            console.log($('.btn-interest')[i].id);
            console.log($('.btn-interest')[i].checked);
            if($('.btn-interest')[i].checked){
                status = "success";
            }else{
                status ="delete"
            }
            data = {
                "InterestID": $('.btn-interest')[i].id,
                "InterestType": "interest",
                "InterestStatus": status
            }
            interests.push(data);
            }
            console.log(interests);

        $('.btn-interest').click(function() {
            var interestID = $(this).attr('id');
            var interestTopic = $(this).next('label').text();
            var interestIndex = -1;

            // Check if interest with same ID already exists
            for (var i = 0; i < interests.length; i++) {
                if (interests[i].InterestID === interestID) {
                    interestIndex = i;
                    break;
                }
            }

            if ($(this).is(':checked')) {
                if (interestIndex !== -1) {
                    // Update existing interest
                    interests[interestIndex].InterestStatus = "success";
                } else {
                    // Add new interest
                    interests.push({
                        "InterestID": interestID,
                        "InterestType": "interest",
                        "InterestStatus": "success"
                    });
                }
                console.log(interests);
            } else {
                if (interestIndex !== -1) {
                    // Update existing interest
                    interests[interestIndex].InterestStatus = "delete";
                } else {
                    // Add new interest
                    interests.push({
                        "InterestID": interestID,
                        "InterestType": "interest",
                        "InterestStatus": "delete"
                    });
                }
                console.log(interests);
            }
        });

        $('#btn-complete').click(function() {
            console.log(interests);
            save(interests);
        });

        function save(val) {
            console.log(val);

            const data = {
                "InterestList": val,
                "_token": '{{ csrf_token() }}'
            }

            $.ajax({
                url: "{{ route('InterestPost') }}",
                method: "POST",
                data: data,
                success: function(res) {
                    console.log(res);
                    if (res.Result === '1') {
                        window.location.href = "{{ route('OverviewIndex') }}";
                    }
                },
                error: function(err) {
                    console.log(err);
                }
            });

            console.log(data);
        }
    </script>
@endsection
