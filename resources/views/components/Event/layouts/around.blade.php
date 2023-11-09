<div class="col-md-12 mt-3 text-center">
            <span class="album-text" style="color: {{$color}}">มุมมอง 360 องศา</span>
        </div>
        <div class="col-md-12 p-0" style="height:600px;width:100%">
            <a-scene embedded>
            <a-sky src="{{ asset('assets/images/panoramic.jpg') }}" rotation="0 -130 0"></a-sky>
        </a-scene>
        </div>
        <style>
            .a-canvas{
            width: 100%!important;
            height: 100%!important;
            top: 0!important;
            left: 0!important;
            right: 0!important;
            bottom: 0!important;
            position: relative;
            }
            .a-enter-vr{
                display: none;
            }
        </style>