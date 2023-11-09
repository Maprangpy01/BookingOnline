@extends('components.Members.template.temp-card')
@section('content-temp')
    @if (session('Result') == '1')
        <script>
            Swal.fire({
                icon: 'success',
                title: '{{ session('Message') }}',
                showConfirmButton: true,
                // timer: 3000, // Time in milliseconds
                allowOutsideClick: false,
                allowEscapeKey: false,
                allowEnterKey: false
            }).then((result) => {
                window.location.href = "{{ route('SignInIndex') }}";
            })
        </script>
    @elseif (session('Result') == '0')
        <script>
            Swal.fire({
                icon: 'error',
                title: '{{ session('Message') }}',
                showConfirmButton: true,
                allowOutsideClick: false,
                allowEscapeKey: false,
                allowEnterKey: false
            })
        </script>
    @endif
    <div class="col-lg-6 mx-auto mt-5 mb-5 ">
        <div class="row mt-4">
            <div class="col-lg-8">
                <div class="text-center mt-3">
                    <span class="fnt-34">
                        <strong>
                            รีเซ็ตรหัสผ่าน
                        </strong>
                    </span>
                </div>
                <form action="{{ route('ChangePasswordPost') }}" method="POST">
                    @csrf
                    <div class="row mt-2">
                        @if (!empty($CusMemberID))
                            <input type="hidden" name="CusMemberID" value="{{ $CusMemberID }}">
                        @endif
                        <div class="col-lg-12">
                            <div class="form-group mt-2" style="position: relative;">
                                <strong class="ms-1 mb-1 fnt-20 bt" for="Password">รหัสผ่าน <span
                                        class="text-danger fnt-14">*</span></strong>
                                <input type="Password" name="Password" id="Password" class="form-control"
                                    placeholder="***********" value="{{ old('Password') }}" min="6" max="10">
                                <i class="bi bi-eye" style="position: absolute;right: 24px;top: 40px;"
                                    id="togglePassword"></i>
                                @error('Password')
                                    <span class="text-danger fnt-14" id="PasswordError">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group mt-2" style="position: relative;">
                                <strong class="ms-1 mb-1 fnt-20 bt" for="ConfirmPassword">ยืนยันรหัสผ่าน <span
                                        class="text-danger fnt-14">*</span></strong>
                                <input type="password" name="ConfirmPassword" id="ConfirmPassword" class="form-control"
                                    placeholder="1234567890" value="{{ old('ConfirmPassword') }}">
                                <i class="bi bi-eye" style="position: absolute;right: 24px;top: 40px;"
                                    id="togglePasswordConfirm"></i>
                                @error('ConfirmPassword')
                                    <span class="text-danger fnt-14" id="ConfirmPasswordError">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-12 mt-2 mb-4">
                            <div class="form-group text-center">
                                <button class="btn btn-main btn-w-lg" type="submit"
                                    style="width: 100%;font-size:20px;height:44px">
                                    ยืนยัน
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#Password');

        // $('#togglePassword').click(function() {
        //     if (password.getAttribute('type') === 'password')
        //         const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        //     password.setAttribute('type', type);
        //     // toggle the eye slash icon
        //     if (togglePassword.className == 'bi-eye') {
        //         togglePassword.className = 'bi-eye-slash';
        //     } else {
        //         togglePassword.className = 'bi-eye';
        //     }
        // })
        togglePassword.addEventListener('click', function (e) {
            // toggle the type attribute
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            // toggle the eye slash icon
            if(togglePassword.className == 'bi-eye'){
                togglePassword.className = 'bi-eye-slash';
            }else{
                togglePassword.className = 'bi-eye';
            }
        });
        const togglePasswordConfirm = document.querySelector('#togglePasswordConfirm');
        const Confirmpassword = document.querySelector('#ConfirmPassword');

        togglePasswordConfirm.addEventListener('click', function(e) {
            // toggle the type attribute
            const type = Confirmpassword.getAttribute('type') === 'password' ? 'text' : 'password';
            Confirmpassword.setAttribute('type', type);
            // toggle the eye slash icon
            if (togglePasswordConfirm.className == 'bi-eye') {
                togglePasswordConfirm.className = 'bi-eye-slash';
            } else {
                togglePasswordConfirm.className = 'bi-eye';
            }
        });
    </script>
@endsection
