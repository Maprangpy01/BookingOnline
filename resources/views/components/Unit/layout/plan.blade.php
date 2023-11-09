<div class="container-fluid p-0 text-center mt-4 mb-4">
    <span class="fnt-30 text-green" style="color:{{$color}}">แบบแปลน</span>
    <div class="row">
        <div class="col-12 mt-3">
            <input type="radio" class="btn-check" name="radiobtn" id="check1" autocomplete="off" checked>
            <label class="btn btn-outline-success-radio me-3" for="check1"
                style="width: 150px;padding-top:6px;height:45px;border-color: {{$color}}">
                ผังโครงการ
            </label>
            <input type="radio" class="btn-check" name="radiobtn" id="check2" autocomplete="off">
            <label class="btn btn-outline-success-radio" for="check2"
                style="width: 150px;padding-top:6px;height:45px;border-color: {{$color}}">
                ผังห้อง
            </label>
        </div>
    </div>
</div>
<div id="project-plan">
    <div class="container-fluid mb-3">
        <div class="row d-flex justify-content-center">
            <div class="col-10">
                <div class="form-group">
                    <select class="form-select" style="height: 44px">
                        <option value="">Ground Floor</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <img src="{{ asset('assets/images/image 34.png') }}" alt="" width="100%" class="p-0">
    </div>
</div>
<div id="room-plan" style="display: none;">
    <div class="container-fluid mb-3">
        <div class="row d-flex justify-content-center">
            <div class="col-10">
                <div class="form-group">
                    <select class="form-select" style="height: 44px">
                        <option value="">26.09 SQ.M.</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <img src="{{ asset('assets/images/image 56.png') }}" alt="" width="100%" class="p-0">
    </div>
</div>