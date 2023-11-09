@extends('components.Members.template.temp-card')
@section('content-temp')
                <div class="col-lg-6 mx-auto mt-5 mb-5 ">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="text-center mt-3">
                                <span class="fnt-34">
                                    <strong>
                                        ลืมรหัสผ่าน
                                    </strong>
                                </span>
                            </div>
                            <div class="row text-center fnt-20 mt-4">
                                <div class="col mb-1 text-center">
                                อีเมลรีเซ็ตรหัสผ่านไปยังอีเมลของคุณแล้ว
                                   <br> โปรดตรวจสอบอีเมลของท่าน
                            </div>
                            </div>
                            <div class="row mt-2 text-center">
                                <label class="text-gray" for="">ยังไม่ได้รับอีเมลใช่หรือไม่ ?</label>
                                <form action="{{ route('ForgotPasswordPost')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="CusEmail" value="{{session('email')}}">
                                    <input type="hidden" name="status" value="1">
                                <div class="col-lg-12 mt-0">
                                    <div class="form-group text-center">
                                        <button type="submit" class="btn btn-main btn-w-lg " style="width: 100%;font-size:20px;height:44px">
                                            ส่งอีกครั้ง
                                        </button>
                                    </div>
                                </div>
                                </form>
                                <div class="col-lg-12 mt-2 mb-4">
                                    <div class="form-group text-center">
                                        <a href="{{route('SignInIndex')}}">
                                        <button class="btn btn-outline-dark btn-w-lg " style="width: 100%;font-size:20px;height:44px">
                                            ยกเลิก
                                        </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection
