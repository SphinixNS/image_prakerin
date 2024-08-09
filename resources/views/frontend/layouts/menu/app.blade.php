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
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css' rel='stylesheet'>
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
                @if (!isset($hideNavbar) || !$hideNavbar)
                    @include('frontend.layouts.menu.partials.navbar')
                @endif

                @yield('content')
            </div>
        </div>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/bootstrap5@6.1.15/index.global.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                themeSystem: 'bootstrap5',
                dateClick: function(info) {
                    console.log(info);
                    var modal = new bootstrap.Modal(document.getElementById('modal-action'));
                    modal.show();
                }
            });
            calendar.render();
        });
    </script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>
