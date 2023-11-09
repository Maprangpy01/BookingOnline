@extends('main')
@section('content')
    <div class="container">
        <div class="row g-4">
            <div class="col-md-8">
                <img src="{{ asset('assets/images/no-picture-available2.jpg') }}" alt="" width="100%" height="350px">
            </div>
            <div class="col-md-4">
                <img src="{{ asset('assets/images/no-picture-available.jpg') }}" alt="" width="100%" height="350px">
            </div>
            <div class="col-md-12">
                <div class="text-center">
                    <h5 class="text-primary">
                        <strong>
                            xxxxxxxxxxxxxxxxxxxxxxxxx
                        </strong>
                    </h5>
                    <p>
                        xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx xxxxxxxxxxxxxxxxxxxxxxxxxxxxx
                    </p>
                    <h4>
                        xxxxxxxxxxxxxxxxx
                    </h4>
                </div>
            </div>
        </div>
    </div>
    @if(session('message'))
        <script>
            Swal.fire({
                title: 'Session Timeout',
                text: '{{ session('message') }}',
                icon: '{{ session('alertType') }}',
                confirmButtonText: 'ตกลง'
            });
        </script>
    @endif
@endsection
