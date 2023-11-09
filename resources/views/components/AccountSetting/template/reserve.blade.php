<div class="row mt-3 justify-content-center">
    <div class="row justify-content-center">
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
            {{-- @if ($count > 3)
            <div hidden>
                @include('components.components-all.card-view')
            </div>
        @else --}}
            @include('components.components-all.card-view')
        {{-- @endif --}}
        @endforeach
    </div>
    <div class="col-10">
        {{-- <div class="row">
            <div class="col-sm-6 text-start-center">
                <h3>
                    <strong>
                        <span style="color: #EC161D">โครงการ</span> เปิดจอง
                    </strong>
                </h3>
            </div>
        </div> --}}
        {{-- @if($count > 3) --}}
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
    .card{
        display: none;
    }
</style>