@section('style')
    .form-select {
        color: #CBC4C7;
        height: 44px;
    }
@endsection

<div class="search-box col-xxl-10 col-lg-12" style="margin-top: 67px" id="scrollspyHeading1">
    <div class="row text-center mt-3 strong-500">
        <span class="fnt-34"> ค้นหา</span>
    </div>
    <div class="row d-flex justify-content-center mb-3" style="align-items: flex-end;padding:0 5px">
        <div class="col-lg-2 mt-0 p-1">
            <div class="form-group">
                <strong class="ms-1 mb-1 fnt-20 bt strong-500" for="Prefix">โครงการ</strong>
                <select class="form-select">
                    <option value="">โครงการ</option>
                </select>
            </div>
        </div>
        <div class="col-lg-2 mt-1 p-1">
            <div class="form-group">
                <strong class="ms-1 mb-1 fnt-20 bt strong-500" for="Prefix">ทำเล</strong>
                <select class="form-select">
                    <option value="">ทำเล</option>
                </select>
            </div>
        </div>
        <div class="col-lg-2 mt-1 p-1">
            <div class="form-group">
                <strong class="ms-1 mb-1 fnt-20 bt strong-500" for="Prefix">ช่วงราคา</strong>
                <select class="form-select">
                    <option value="">ช่วงราคา</option>
                </select>
            </div>
        </div>
        <div class="col-lg-2 mt-1 p-1">
            <div class="form-group">
                <strong class="ms-1 mb-1 fnt-20 bt strong-500" for="Prefix">โปรโมชั่น</strong>
                <select class="form-select">
                    <option value="">ทั้งหมด</option>
                </select>
            </div>
        </div>
        <div class="col-lg-2 mt-1 p-1">
            <button class="btn btn-main btn-w-lg btn-search" style="height: 44px;font-size:20px;width:100%" type="button"><i
                    class="bi bi-search me-2" style="font-size: 16x;"></i>ค้นหาเลย</button>

        </div>
    </div>
</div>
<div class="col-12">
    <div class="row mt-3 justify-content-center">
        <div class="col-12">
            <div class="row justify-content-center">
                @php
                    $count = 0;
                @endphp
                @foreach (range(1, 6) as $index)
                @php
                        $ProjectImg = "";
                        $ProjectName = "คอนโดมิเนียม เดอะ สเตจ มายด์สเคป";
                        $Price = '3.19 ล้านบาท*';
                        $PlaceName = "รัชดา - ห้วยขวาง";
                        $count = $count + 1;
                    @endphp
                    {{-- @if ($count > 6)
                        <div hidden>
                            @include('components.components-all.card-view')
                        </div>
                    @else --}}
                        @include('components.components-all.card-view')
                    {{-- @endif --}}
                @endforeach
            </div>
            {{-- @if($count > 6) --}}
            <div class="row justify-content-center mt-4 " style="margin-bottom: 55px;">
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
        </div>
    </div>
</div>

<script>
    
    $(document).ready(function() {
        $(".btn-unit-view").click(function() {
            window.location.href = "{{ route('ProjectEventIndex') }}";
        });
        $(".card").slice(0, 3).show();
            $("#loadMore").on("click", function(e){
                console.log("click");
                e.preventDefault();
                $(".card:hidden").slice(0, 3).slideDown();
                if($(".card:hidden").length == 0) {
                $("#loadMore").hide();
                }
            });
    });

</script>
<style>
    .search-box {
        background-image: url("{{ asset('assets/images/Union.png') }}");
        background-repeat: no-repeat;
        background-position-y: 10pc;
    }
    .card{
        display: none;
    }
    @media (max-width: 991.5px) {

        .btn-w-lg {
            width: 100%;
            margin-top: 10px;
        }
    }
</style>
