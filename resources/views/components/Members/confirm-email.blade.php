@extends('components.Members.template.temp-card')
@section('content-temp')
                <div class="col-lg-6 mx-auto mt-5 mb-5 ">
                    <div class="row mt-4">
                        <div class="col-lg-8">
                            <div class="text-center">
                                <span class="fnt-34">
                                    <strong>
                                        ยืนยันอีเมล
                                    </strong>
                                </span>
                            </div>
                            <div class="row text-center fnt-24">
                                <div class="col mb-1 text-center">
                                ขอบคุณสำหรับเข้าร่วมสมาชิก 
                                   <br>โปรดตรวจสอบและยืนยันการสมัครสมาชิกจากอีเมลที่ Real Asset ได้ส่งไปที่
                            </div>
                            </div>
                            <div class="row mt-3 text-center mb-4">
                                <span for="" class="text-blue fnt-34">{{ session('CusEmail') }}</span>
                                <div class="col-lg-12 mt-1">
                                    <div class="form-group text-center mt-2">
                                        <a href="{{route('SignInIndex')}}">
                                        <button class="btn btn-main btn-w-lg" type="button" style="width: 100%;font-size:20px;height:44px">
                                            เสร็จสิ้น
                                        </button>
                                    </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection
