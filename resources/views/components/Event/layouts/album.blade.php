{{-- @section('style')
    .album-unit {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
@endsection --}}
<style>
    .owl-stage {
        width: 10000px !important;
    }
    .owl-item {
        width: auto !important;
    }
    /* .owl-item.cloned.active {
        width: auto !important;
    } */
    .album-unit {
        /* width: 100%; */
        height: inherit;
        /* object-fit: cover; */
    }
</style>
<div class="col-md-12 text-center">
    <span class="album-text" style="color: {{ $color }}">อัลบั้มภาพ</span>
</div>
<div class="col-md-12 ps-5 pe-5 mb-4">
    <select class="form-select" aria-label="Default select example" style="height: 44px">
        <option selected>ทั้งหมด</option>
    </select>
</div>
<div class="container-fluid p-0">
    <div class="overflow-hidden">
        <div class="owl-carousel owl-theme">
            <div style="height: 320px; width:320px; margin-right: 0.5rem;">
                <img src="{{ asset('assets/images/image 20.jpg') }}" alt="" class="album-unit p-0">
            </div>
            <div style="height: 320px;width:320px; margin-right: 0.5rem;">
                <img src="{{ asset('assets/images/image 29.png') }}" alt="" class="album-unit p-0">
            </div>

        </div>
    </div>
</div>
