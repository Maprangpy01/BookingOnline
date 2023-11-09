@extends('components.Members.template.temp-card')
@section('content-temp')

@if (session('Result') == '3')
@php
$email = session('CusEmail');
$id = session('CusMemberID');
@endphp
        <script>
            Swal.fire({
                icon: 'warning',
                title: 'กรุณายืนยันตัวตนผ่านอีเมลของท่าน',
                showConfirmButton: true,
                // showCancelButton: true,
                confirmButtonColor: '#3085d6',
                // cancelButtonColor: '#d33',
                confirmButtonText: 'ส่ง Email อีกครั้ง',
                showDenyButton: true,
                denyButtonText: 'ยกเลิก',
                preConfirm: () => {
                    sendEmail('{{$email}}','{{$id}}');
                    window.location.href = "{{ route('SignInIndex') }}";
                    // return true;
                }
                }).then((result) => {
                     if (result.isDenied) {
                        window.location.href = "{{ route('SignInIndex') }}";
                    }
                })
        </script>
    @elseif (session('Result')!='' && session('Result')!='1')
        <script>
            Swal.fire({
                icon: 'error',
                title: '{{ session('Message') }}',
                showConfirmButton: true,
                confirmButtonText:'ปิด',
                allowOutsideClick: false,
                allowEscapeKey: false,
                allowEnterKey: false
                })
        </script>
        @endif
                <div class="col-lg-6 mx-auto mt-5 mb-5">
                    <div class="row mt-4">
                        <div class="col-lg-8">
                            <div class="text-center">
                                <span class="fnt-34">
                                    <strong>
                                        เข้าสู่ระบบ
                                    </strong>
                                </span>
                            </div>
                            @if(Route::currentRouteName() == 'SignInVerifyIndex')
                            <form action="{{ route('SignInVerifyPost')}}" method="post">
                            @else
                            <form action="{{ route('SignInPost')}}" method="post">
                            @endif
                                @csrf
                            <div class="row mt-3">
                                <div class="col-lg-12">
                                    <div class="form-group mt-3">
                                        {{-- <strong class="ms-1 mb-1 fnt-20 bt" for="CusEmail">อีเมล <span class="text-danger fnt-14">*</span></strong> --}}
                                        <input type="email" name="CusEmail" id="CusEmail" class="form-control" placeholder="Email Address"
                                            value="{{ old('CusEmail') }}">
                                        @error('CusEmail')
                                            <span class="text-danger fnt-14" id="CusEmailError">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group mt-3" style="position: relative;">
                                        {{-- <strong class="ms-1 mb-1 fnt-20 bt" for="Password">รหัสผ่าน <span class="text-danger fnt-14">*</span></strong> --}}
                                        <input type="Password" name="Password" id="Password" class="form-control"
                                            placeholder="Password" value="{{ old('Password') }}"
                                            min="6" max="10"><i class="bi bi-eye" style="position: absolute;right: 24px;top: 10px;" id="togglePassword"></i>
                                        @error('Password')
                                            <span class="text-danger fnt-14" id="PasswordError">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12 mt-2 fnt-20 d-flex ms-3" >
                                    <input type="checkbox" name="" id="">
                                    <strong class="ms-3">Remember Me</strong>
                                </div>
                                
                                
                                <div class="col-lg-12 mt-2">
                                    <div class="form-group text-center">
                                        <button type="submit" class="btn btn-main btn-w-lg" style="width: 100%;font-size:20px;height:44px">
                                            เข้าสู่ระบบ
                                        </button>
                                    </div>
                                </div>
                            </form>
                                <div class="col-lg-12 mt-3 fnt-20 text-center" >
                                    <a href="{{route('ForgotPasswordIndex')}}" style="color: #000">ลืมรหัสผ่าน</a>
                                </div>
                                <hr class="mt-4" style="border: 1px solid">
                                {{-- <div class="col-lg-12 mt-4" >
                                    
                                </div> --}}
                                {{-- <div class="col-lg-12 mt-3 d-inline-flex align-items-center justify-content-center">
                                    <div class="line-or"></div><strong class="fnt-20"> OR </strong>
                                    <div class="line-or"></div>
                                </div>
                                <div class="col-lg-12 mt-3">
                                    <div class="form-group text-center mt-2">
                                        <a href="{{ route('redirectToGoogle')}}">
                                        <button class="btn btn-outline-main btn-w-lg " style="width: 100%;font-size:20px;" type="button">
                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="48" height="48" viewBox="0 0 48 48" style="zoom: 0.5;margin-right:50px;margin-top: -5px;">
                                                <path fill="#FFC107" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"></path><path fill="#FF3D00" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"></path><path fill="#4CAF50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"></path><path fill="#1976D2" d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z"></path>
                                                </svg>
                                            Login with Google
                                        </button>
                                    </a>
                                    </div>
                                </div>
                                <div class="col-lg-12 mt-3">
                                    <div class="form-group text-center mt-2">
                                        <a href="{{ route('redirectToFacebook')}}">
                                        <button class="btn btn-outline-main btn-w-lg " style="width: 100%;font-size:20px;" type="button">
                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="48" height="48" viewBox="0 0 48 48" style="zoom: 0.5;margin-right:25px;margin-top: -5px;">
                                                <path fill="#039be5" d="M24 5A19 19 0 1 0 24 43A19 19 0 1 0 24 5Z"></path><path fill="#fff" d="M26.572,29.036h4.917l0.772-4.995h-5.69v-2.73c0-2.075,0.678-3.915,2.619-3.915h3.119v-4.359c-0.548-0.074-1.707-0.236-3.897-0.236c-4.573,0-7.254,2.415-7.254,7.917v3.323h-4.701v4.995h4.701v13.729C22.089,42.905,23.032,43,24,43c0.875,0,1.729-0.08,2.572-0.194V29.036z"></path>
                                                </svg>
                                            Login with Facebook
                                        </button>
                                    </a>
                                    </div>
                                </div> --}}
                                <div class="col-lg-12 mt-3 fnt-20 text-center mb-4" >
                                    <strong>
                                    คุณยังไม่มีบัญชีผู้ใช้งาน ? 
                                    <a href="{{ route('SignUpIndex')}}" style="color: #EC161D">ลงทะเบียนใหม่</a></strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    const togglePassword = document.querySelector('#togglePassword');
                    const password = document.querySelector('#Password');

                    togglePassword.addEventListener('click', function (e) {
                        // toggle the type attribute
                        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                        password.setAttribute('type', type);
                        console.log(password.setAttribute('type', type));
                        // toggle the eye slash icon
                        if(togglePassword.className == 'bi-eye'){
                            togglePassword.className = 'bi-eye-slash';
                        }else{
                            togglePassword.className = 'bi-eye';
                        }
                    });

                    function sendEmail(email,id){
                        console.log(email,id);
                        let data = {
                            CusEmail: email,
                            CusMemberID: id,
                            _token: '{{ csrf_token() }}'
                        }
                        $.ajax({
                            url:"{{ route('SendEmail')}}",
                            type:'POST',
                            data: data,
                            dataType: 'json',
                            // success: function(response) {
                            //     window.location.href = "{{ route('SignInIndex') }}";
                            // },
                            error: function(error) {
                            console.log(data);
                            console.error('Error fetching data:', error);
                        }
                        });
                    }
                </script>
@endsection
