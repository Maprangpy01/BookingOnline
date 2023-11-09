<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Booking</title>
    <link rel="icon" href="favicon.ico" type="image/ico">

    <!-- Style template -->
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <script src="{{ asset('assets/js/layout.js') }}"></script>

    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/bootstrap5.3/css/bootstrap.min.css') }}">
    <script src="{{ asset('assets/bootstrap5.3/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Include jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Include jQuery UI library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <!-- Include jQuery UI CSS theme -->
    <link rel="stylesheet"
        href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/ui-lightness/jquery-ui.css">

    <!-- Include jQuery UI Date Range Picker CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/litepicker/dist/css/litepicker.css" />

    <!-- icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <link rel="stylesheet" href="{{ asset('assets/css/layout.css') }}">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

        <script src="https://aframe.io/releases/1.3.0/aframe.min.js"></script>
    <style>
        @font-face {
            font-family: 'DBHeavent';
            font-style: normal;
            font-weight: normal;
            src: url("{{ asset('assets/font/DBHeavent.ttf') }}") format('truetype');
        }

        /* @font-face {
            font-family: 'DBHeavent';
            font-style: normal;
            font-weight: bold;
            src: url("{{ asset('assets/font/DBHeavent.ttf') }}") format('truetype');
        }
        @font-face {
            font-family: 'DBHeavent';
            font-style: italic;
            font-weight: normal;
            src: url("{{ asset('assets/font/DBHeavent.ttf') }}") format('truetype');
        }

        @font-face {
            font-family: 'DBHeavent';
            font-style: italic;
            font-weight: bold;
            src: url("{{ asset('assets/font/DBHeavent.ttf') }}") format('truetype');
        } */
        html,
        body {
            height: 100%;
            font-family: "DBHeavent";
        }

        a {
            text-decoration: none;
        }

        .main {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .container-fluid {
            flex: 1;
        }

        .btn {
            border-radius: 8px;
        }

        .card {
            border-radius: 8px;
        }

        @yield('style');
    </style>
</head>

<body>
    <div class="main">
        @include('layouts/nav')
        @yield('content')
        @include('layouts/form-post')


        <div id="footer" class="footer mt-0 pt-0">
            @include('layouts/footer')
        </div>
    </div>
    <script src="{{ asset('assets/js/slide.js') }}"></script>
    <script src="{{ asset('assets/js/input-validate.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>

    <!-- Include jQuery UI Date Range Picker JS -->
    <script src="https://cdn.jsdelivr.net/npm/litepicker/dist/litepicker.js"></script>
</body>

</html>
