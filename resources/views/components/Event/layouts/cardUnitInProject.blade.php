<div class="container-fluid ps-3">
    <div class="row d-flex justify-content-center g-4 mt-3">
        @include('components.Event.layouts.contact')

        <div class="col-md-12 text-center" style="margin-top:40px">
            <span class="fnt-30">
                <span style="color: #B11116">ยูนิตอื่น</span>ในโครงการ
            </span>
        </div>
        <div class="row justify-content-center p-0">
            @php
                $count = 0;
            @endphp
            @foreach (range(1, 6) as $index)
                @php
                    $count = $count + 1;
                    $countCard = 'card' . $count;
                    $UnitNo = 'A12-1912';
                    $ProjectName = 'คอนโดมิเนียม เดอะ สเตจ มายด์สเคป';
                    $UnitPlanName = 'รัชดา - ห้วยขวาง';
                    $Reserve = '2,900฿';
                    $Price = '฿1,700,000';
                    $PriceFull = '฿1,700,000';
                @endphp
                @if ($count > 6)
                <div hidden>
                    @include('components.components-all.card-unit-project')
                </div>
            @else
                @include('components.components-all.card-unit-project')
            @endif
        @endforeach
        @if($count > 6)
        <div class="row justify-content-center mt-4 ">
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

    </div>
</div>
