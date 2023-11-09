@extends('main')
@section('style')
    .main {
        position: relative;
    }

    .footer {
        position: absolute;
        bottom: 0;
        width: 100%;
    }
@endsection
@section('content')
<?php if(!empty($_POST)) : ?>
<div class="alert alert-success" role="alert">
    <?php print_r($_POST); ?>
</div>
<?php endif; ?>

{{-- Spinner --}}
<div class="modal fade" id="spinnerModal" tabindex="-1" aria-labelledby="spinnerModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="d-flex justify-content-center mt-3">
                <div class="spinner-border text-primary" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
            <div class="d-flex justify-content-center mt-3 mb-3">
                <h3 class="text-primary">กรุณารอสักครู่</h3>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('#spinnerModal').modal('show');

        console.log({!! json_encode($_POST) !!});

        if ({!! json_encode($_POST) !!}) {
            $('#first').hide();
            $('#information').show();
            $('#btn-index').removeClass('active');
            $('#btn-information').addClass('active');
            $('#line-4').addClass('active');
            $('#circle-4').addClass('active');
        }
    });
</script>
@endsection
