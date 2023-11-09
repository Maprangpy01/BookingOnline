{{-- @if (!empty($result) && !isset($result['Result']) && $result['Result'] == 1)
    @if ($result['Message'] != 'ดึงข้อมูลสำเร็จ')
        @if ($result['Message'] != 'OK')
            <script>
                Swal.fire(
                    '',
                    `{!! $result['Message'] !!}`,
                    'success'
                )
            </script>
        @endif
    @endif
@elseif(!empty($result) && isset($result['Result']) && $result['Result'] == 0)
    <script>
        Swal.fire(
            '',
            `{!! $result['Message'] !!}`,
            'error'
        )
    </script>
@endif

@if (!empty($responseBody) && !isset($responseBody['Result']) && $result['Result'] == 1)
    @if ($responseBody['Message'] != 'ดึงข้อมูลสำเร็จ')
        @if ($responseBody['Message'] != 'OK')
            <script>
                Swal.fire(
                    '',
                    `{!! $result['Message'] !!}`,
                    'success'
                )
            </script>
        @endif
    @endif
@elseif(!empty($result) && isset($responseBody['Result']) && $result['Result'] == 0)
    <script>
        Swal.fire(
            '',
            `{!! $result['Message'] !!}`,
            'error'
        )
    </script>
@endif


@if (Session::get('Result') == 0 && !empty(Session::get('Message')))
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
@elseif (Session::get('Result') == 1 && !empty(Session::get('Message')))
    <script>
        Swal.fire({
                icon: 'success',
                title: '{{ session('Message') }}',
                showConfirmButton: true,
                confirmButtonText:'ปิด',
                allowOutsideClick: false,
                allowEscapeKey: false,
                allowEnterKey: false,
            })
    </script>
@endif --}}
{{-- @if(session('Result') == '1')
<script>
                Swal.fire({
                    icon: 'success',
                    title: '{{ session('Message') }}',
                    showConfirmButton: false,
                    timer: 3000, // Time in milliseconds
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                    allowEnterKey: false
                }).then(() => {
                    Swal.fire({
                            title: 'กรุณารอสักครู่...',
                            allowOutsideClick: false,
                            allowEscapeKey: false,
                            allowEnterKey: false,
                            didOpen: () => {
                                Swal.showLoading()
                            },
                        })
                })
            </script>
        @elseif (session('Result') == '0')
            <script>
                Swal.fire({
                    icon: 'error',
                    title: '{{ session('Message') }}',
                    showConfirmButton: false,
                    timer: 3000, // Time in milliseconds
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                    allowEnterKey: false
                });
            </script>
        @endif --}}