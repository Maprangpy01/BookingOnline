@extends('main')
@section('content')
    <div class="container">
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="index-tab-pane" role="tabpanel" tabindex="0">
                <div class="row justify-content-center text-center" style="margin-top:120px">
                    <span class="fnt-34"><strong>แบบสอบถาม</strong></span>
                    <br>
                    <span class="fnt-24 mt-3 mb-3">ขอเชิญร่วมทำแบบสอบถาม<br>
                        เพื่อการพัฒนาบริการที่ดียิ่งขึ้นของเรา</span>
                    
                </div>
            </div>
            <div class="tab-pane fade" id="question1-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                @include("components.Questionnaire.Layouts.question1")
            </div>
            <div class="tab-pane fade" id="question2-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                @include("components.Questionnaire.Layouts.question2")
            </div>
            <div class="tab-pane fade" id="question3-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                @include("components.Questionnaire.Layouts.question3")
            </div>
            <div class="tab-pane fade" id="send-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                <div class="row justify-content-center text-center" style="margin-top:120px">
                    
                    <span class="fnt-34"><strong>ขอบคุณสำหรับ<br><p style="margin-top: -10px">การตอบแบบสอบถาม</p></strong></span>
                    <br>
                    <span class="fnt-24 mt-3">เราจะนำคำตอบของท่านไปพัฒนาบริการที่ดียิ่งขึ้น<br>
                        ของเราในอนาคต</span>
                </div>
            </div>
        </div>
        <div  id="myTab" role="tablist">
            <button hidden class="btn btn-main btn-w-300 btn-w-md active" data-bs-toggle="tab" style="height: 44px;"
                data-bs-target="#index-tab-pane" type="button" role="tab"
                aria-selected="true">ทำแบบสอบถาม</button>
            <div id="first">
                <div class="col-12 mt-3 mb-0 text-center" style="height: 50px">
                    <button class="btn btn-main btn-w-300 btn-w-md" id="btn-index" data-bs-toggle="tab" style="height: 44px;"
                        data-bs-target="#question1-tab-pane" type="button" role="tab"
                        aria-selected="false">ทำแบบสอบถาม</button>
                </div>
                <div class="row justify-content-center" style="margin-bottom: 70px">
                    <div class="col-lg-2 col-sm-2 col-3 p-0 pt-2">
                        <a href="" style="color: #000">
                            <div class="row">
                                <div class="col-7 text-end p-0 fnt-20">ข้าม</div>
                                <div class="col-4 text-start p-0" style="margin-top: 6px;margin-left:3px">
                                    <i class="bi bi-chevron-right" style="font-size: 16px"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div id="box-question1" style="display: none;">
                <div class="col-12 mt-4 mb-0 text-center" style="height: 50px">
                    <button class="btn btn-main btn-w-300 btn-w-md" id="btn-question1" data-bs-toggle="tab" style="height: 44px;"
                        data-bs-target="#question2-tab-pane" type="button" role="tab"
                        aria-selected="false">ถัดไป</button>
                </div>
                <div class="row justify-content-center " style="margin-bottom: 70px">
                    <div class="col-lg-2 col-sm-2 col-3 p-0 pt-2">
                        <a href="" style="color: #000" data-bs-toggle="tab" data-bs-target="#index-tab-pane"
                            role="tab" aria-selected="false" id="back-index">
                            <div class="row">
                                <div class="col-4 text-end p-0" style="margin-top: 6px;margin-left:3px">
                                    <i class="bi bi-chevron-left" style="font-size: 16px"></i>
                                </div>
                                <div class="col-7 text-start fnt-20 p-0">ย้อนกลับ</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div id="box-question2" style="display: none;">
                <div class="col-12 mt-4 mb-0 text-center" style="height: 50px">
                    <button class="btn btn-main btn-w-300 btn-w-md" id="btn-question2" data-bs-toggle="tab" style="height: 44px;"
                        data-bs-target="#question3-tab-pane" type="button" role="tab"
                        aria-selected="false">ถัดไป</button>
                </div>
                <div class="row justify-content-center" style="margin-bottom: 70px">
                    <div class="col-lg-2 col-sm-2 col-3 p-0 pt-2">
                        <a href="" style="color: #000" data-bs-toggle="tab" data-bs-target="#question1-tab-pane"
                            role="tab" aria-selected="false" id="back-ques1">
                            <div class="row">
                                <div class="col-4 text-end p-0" style="margin-top: 6px;margin-left:3px">
                                    <i class="bi bi-chevron-left" style="font-size: 16px"></i>
                                </div>
                                <div class="col-7 text-start fnt-20 p-0">ย้อนกลับ</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div id="box-question3" style="display: none;">
                <div class="col-12 mt-4 mb-0 text-center" style="height: 50px">
                    <button class="btn btn-main btn-w-300 btn-w-md" id="btn-question3" data-bs-toggle="tab" style="height: 44px;"
                        data-bs-target="#send-tab-pane" type="button" role="tab"
                        aria-selected="false">ถัดไป</button>
                </div>
                <div class="row justify-content-center" style="margin-bottom: 70px">
                    <div class="col-lg-2 col-sm-2 col-3 p-0 pt-2">
                        <a href="" style="color: #000" data-bs-toggle="tab" data-bs-target="#question2-tab-pane"
                            role="tab" aria-selected="false" id="back-ques2">
                            <div class="row">
                                <div class="col-4 text-end p-0" style="margin-top: 6px;margin-left:3px">
                                    <i class="bi bi-chevron-left" style="font-size: 16px"></i>
                                </div>
                                <div class="col-7 text-start fnt-20 p-0">ย้อนกลับ</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div id="save" style="display: none;">
                <div class="col-12 text-center" style="margin-bottom: 70px">
                    <button class="btn btn-main btn-w-300 btn-w-md" style="height: 44px;" id="btn-save">ส่งแบบสอบถาม</button>
                </div>
            </div>
            {{-- <div class="col-12 mt-4 mb-2 text-center">
                <button class="btn btn-main btn-w-300 btn-w-md" data-bs-toggle="tab" data-bs-target="#profile-tab-pane"
                    type="button" role="tab" aria-controls="profile-tab-pane"
                    aria-selected="false">ทำแบบสอบถาม</button>
            </div>
            <div class="col-12 mt-4 mb-2 text-center">
                <button class="btn btn-main btn-w-300 btn-w-md" data-bs-toggle="tab" data-bs-target="#contact-tab-pane"
                    type="button" role="tab" aria-controls="contact-tab-pane"
                    aria-selected="false">ทำแบบสอบถาม</button>
            </div> --}}
        </div>



    </div>
    <script>
        $("#btn-index").click(function() {
            $("#first").css("display", "none");
            $("#box-question1").css("display", "block");
        })
        $("#btn-question1").click(function() {
            $("#box-question1").css("display", "none");
            $("#box-question2").css("display", "block");
            console.log("succ1");
        })
        $("#btn-question2").click(function() {
            $("#box-question2").css("display", "none");
            $("#box-question3").css("display", "block");
            console.log("succ2");
        })
        $("#btn-question3").click(function() {
            $("#box-question3").css("display", "none");
            $("#save").css("display", "block");
            console.log("succ3");
        })
        $("#back-index").click(function() {
            $("#box-question1").css("display", "none");
            $("#first").css("display", "block");
        })
        $("#back-ques1").click(function() {
            $("#box-question2").css("display", "none");
            $("#box-question1").css("display", "block");
        })
        $("#back-ques2").click(function() {
            $("#box-question3").css("display", "none");
            $("#box-question2").css("display", "block");
        })
    </script>
@endsection
