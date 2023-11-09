@extends('components.Members.template.temp-card')
@section('content-temp')
                <div class="col-lg-6 mx-auto mt-5 mb-5 ">
                    <div class="row mt-4">
                        <div class="col-lg-8">
                            <div class="text-center mt-3">
                                <span class="fnt-34">
                                    <strong>
                                        ลืมรหัสผ่าน
                                    </strong>
                                </span>
                            </div>
                            <div class="row fnt-20 mt-4">
                                <div class="col mb-1 text-center">
                                กรุณากรอกอีเมลที่ลงทะเบียนไว้ เราจะทำการ <br>ส่งอีเมลรีเซ็ตรหัสผ่านไปยังอีเมลของคุณ
                            </div></div>
                            <form action="{{ route('ForgotPasswordPost')}}" method="post">
                                @csrf
                            <div class="row mt-2">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        {{-- <strong class="ms-1 mb-1 fnt-20 bt" for="CusEmail">อีเมล <span class="text-danger fnt-14">*</span></strong> --}}
                                        <input type="hidden" name="status" value="0">
                                        <input type="email" name="CusEmail" id="CusEmail" class="form-control" placeholder="กรอกอีเมลที่ลงทะเบียนไว้"
                                            value="{{ old('CusEmail') }}">
                                        @error('CusEmail')
                                            <span class="text-danger fnt-14" id="CusEmailError">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="col-lg-12" style="margin-top: 10px">
                                    <div class="form-group text-center mb-4">
                                        <button type="submit" class="btn btn-main btn-w-lg " style="width: 100%;font-size:20px;height:44px">
                                            ส่ง
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
@endsection
