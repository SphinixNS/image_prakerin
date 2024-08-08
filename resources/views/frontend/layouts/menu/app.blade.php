<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Your keywords here">
    <meta name="description" content="Your description here">
    <meta name="author" content="Your name or company">

    <title>{{ config('app.name') }} | {{ $title }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://themify.me/wp-content/themes/themify-v32/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('/frontend/menu/assets/vendor/fonts/boxicons.css') }}" />

    <!-- CSS FILES -->
    <link rel="stylesheet" href="{{ asset('frontend/menu/assets/vendor/css/core.css') }}"
        class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('frontend/menu/assets/vendor/css/theme-default.css') }}"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('frontend/menu/assets/css/menu.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('frontend/menu/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/menu/assets/vendor/libs/apex-charts/apex-charts.css') }}" />
    <link href="{{ asset('/frontend/css/bootstrap-icons.css') }}" rel="stylesheet">
    @stack('styles')
</head>

<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            @include('frontend.layouts.menu.partials.sidebar')
            <div class="layout-page">
                @include('frontend.layouts.menu.partials.navbar')

                @yield('content')
            </div>
        </div>
    </div>

    <!-- JavaScript Libraries -->
    <script src="{{ asset('/frontend/menu/assets/vendor/js/helpers.js') }}"></script>
    <script src="{{ asset('/frontend/menu/assets/js/config.js') }}"></script>
    <script src="{{ asset('/frontend/menu/assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('/frontend/menu/assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('/frontend/menu/assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('/frontend/menu/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

    <script src="{{ asset('/frontend/menu/assets/vendor/js/menu.js') }}"></script>
    <script src="{{ asset('/frontend/menu/assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>
    <script src="{{ asset('/frontend/menu/assets/js/main.js') }}"></script>
    <script src="{{ asset('/frontend/menu/assets/js/dashboards-analytics.js') }}"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>
