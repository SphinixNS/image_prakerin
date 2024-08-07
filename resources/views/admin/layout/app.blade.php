<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Prakerin">

    <link rel="preconnect" href="https://fonts.gstatic.com">

    <title>Admin | @yield('title')</title>

    <link href="{{ asset('backend/static/css/app.css') }}" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.bootstrap5.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <style>
        .dataTables_wrapper .dataTables_paginate .pagination {
            display: flex;
            padding-left: 0;
            list-style: none;
            border-radius: 0.357rem;
        }

        .dataTables_wrapper .dataTables_paginate .pagination-lg .page-link {
            padding: 0.5575rem 1rem;
            font-size: 2rem;
            line-height: 1.25;
        }

        .dataTables_wrapper .dataTables_paginate .pagination-lg .page-item:first-child .page-link {
            border-top-left-radius: 0.6rem;
            border-bottom-left-radius: 0.6rem;
        }

        .dataTables_wrapper .dataTables_paginate .pagination-lg .page-item:last-child .page-link {
            border-top-right-radius: 0.6rem;
            border-bottom-right-radius: 0.6rem;
        }

        .dataTables_wrapper .dataTables_paginate .pagination-sm .page-link {
            padding: 0.443rem 0.745rem;
            font-size: 1rem;
            line-height: 1;
        }

        .dataTables_wrapper .dataTables_paginate .pagination-sm .page-item:first-child .page-link {
            border-top-left-radius: 0.25rem;
            border-bottom-left-radius: 0.25rem;
        }

        .dataTables_wrapper .dataTables_paginate .pagination-sm .page-item:last-child .page-link {
            border-top-right-radius: 0.25rem;
            border-bottom-right-radius: 0.25rem;
        }

        .dataTables_wrapper .dataTables_paginate .page-item {
            margin: 0;
        }

        .dataTables_wrapper .dataTables_paginate .page-link {
            display: block;
            padding: 0.5rem 0.75rem;
            color: #007bff;
            background-color: #fff;
            border: 1px solid #dee2e6;
            border-radius: 0.25rem;
            text-decoration: none;
            transition: background-color 0.15s ease, color 0.15s ease, border-color 0.15s ease;
        }

        .dataTables_wrapper .dataTables_paginate .page-link:hover {
            color: #fff;
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .dataTables_wrapper .dataTables_paginate .page-item.disabled .page-link {
            color: #6c757d;
            background-color: #fff;
            border-color: #dee2e6;
            cursor: not-allowed;
        }

        .dataTables_wrapper .dataTables_paginate .page-item.active .page-link {
            color: #fff;
            background-color: #007bff;
            border-color: #007bff;
        }
    </style>

</head>

<body>
    @include('sweetalert::alert')
    <div class="wrapper">
        @include('admin.layout.sidebar')

        <div class="main">
            @include('admin.layout.navbar')

            @yield('content')

            @include('admin.layout.footer')

        </div>
    </div>

    <script src="{{ asset('backend/static/js/app.js') }}"></script>

    {{-- <script>
        document.addEventListener("DOMContentLoaded", function() {
            var ctx = document.getElementById("chartjs-dashboard-line").getContext("2d");
            var gradient = ctx.createLinearGradient(0, 0, 0, 225);
            gradient.addColorStop(0, "rgba(215, 227, 244, 1)");
            gradient.addColorStop(1, "rgba(215, 227, 244, 0)");
            // Line chart
            new Chart(document.getElementById("chartjs-dashboard-line"), {
                type: "line",
                data: {
                    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov",
                        "Dec"
                    ],
                    datasets: [{
                        label: "Sales ($)",
                        fill: true,
                        backgroundColor: gradient,
                        borderColor: window.theme.primary,
                        data: [
                            2115,
                            1562,
                            1584,
                            1892,
                            1587,
                            1923,
                            2566,
                            2448,
                            2805,
                            3438,
                            2917,
                            3327
                        ]
                    }]
                },
                options: {
                    maintainAspectRatio: false,
                    legend: {
                        display: false
                    },
                    tooltips: {
                        intersect: false
                    },
                    hover: {
                        intersect: true
                    },
                    plugins: {
                        filler: {
                            propagate: false
                        }
                    },
                    scales: {
                        xAxes: [{
                            reverse: true,
                            gridLines: {
                                color: "rgba(0,0,0,0.0)"
                            }
                        }],
                        yAxes: [{
                            ticks: {
                                stepSize: 1000
                            },
                            display: true,
                            borderDash: [3, 3],
                            gridLines: {
                                color: "rgba(0,0,0,0.0)"
                            }
                        }]
                    }
                }
            });
        });
    </script> --}}

    {{-- <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Bar chart
            new Chart(document.getElementById("chartjs-dashboard-bar"), {
                type: "bar",
                data: {
                    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov",
                        "Dec"
                    ],
                    datasets: [{
                        label: "This year",
                        backgroundColor: window.theme.primary,
                        borderColor: window.theme.primary,
                        hoverBackgroundColor: window.theme.primary,
                        hoverBorderColor: window.theme.primary,
                        data: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79],
                        barPercentage: .75,
                        categoryPercentage: .5
                    }]
                },
                options: {
                    maintainAspectRatio: false,
                    legend: {
                        display: false
                    },
                    scales: {
                        yAxes: [{
                            gridLines: {
                                display: false
                            },
                            stacked: false,
                            ticks: {
                                stepSize: 20
                            }
                        }],
                        xAxes: [{
                            stacked: false,
                            gridLines: {
                                color: "transparent"
                            }
                        }]
                    }
                }
            });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var markers = [{
                    coords: [31.230391, 121.473701],
                    name: "Shanghai"
                },
                {
                    coords: [28.704060, 77.102493],
                    name: "Delhi"
                },
                {
                    coords: [6.524379, 3.379206],
                    name: "Lagos"
                },
                {
                    coords: [35.689487, 139.691711],
                    name: "Tokyo"
                },
                {
                    coords: [23.129110, 113.264381],
                    name: "Guangzhou"
                },
                {
                    coords: [40.7127837, -74.0059413],
                    name: "New York"
                },
                {
                    coords: [34.052235, -118.243683],
                    name: "Los Angeles"
                },
                {
                    coords: [41.878113, -87.629799],
                    name: "Chicago"
                },
                {
                    coords: [51.507351, -0.127758],
                    name: "London"
                },
                {
                    coords: [40.416775, -3.703790],
                    name: "Madrid "
                }
            ];
            var map = new jsVectorMap({
                map: "world",
                selector: "#world_map",
                zoomButtons: true,
                markers: markers,
                markerStyle: {
                    initial: {
                        r: 9,
                        strokeWidth: 7,
                        stokeOpacity: .4,
                        fill: window.theme.primary
                    },
                    hover: {
                        fill: window.theme.primary,
                        stroke: window.theme.primary
                    }
                },
                zoomOnScroll: false
            });
            window.addEventListener("resize", () => {
                map.updateSize();
            });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var date = new Date(Date.now() - 5 * 24 * 60 * 60 * 1000);
            var defaultDate = date.getUTCFullYear() + "-" + (date.getUTCMonth() + 1) + "-" + date.getUTCDate();
            document.getElementById("datetimepicker-dashboard").flatpickr({
                inline: true,
                prevArrow: "<span title=\"Previous month\">&laquo;</span>",
                nextArrow: "<span title=\"Next month\">&raquo;</span>",
                defaultDate: defaultDate
            });
        });
    </script> --}}

    <!-- Bootstrap JS and dependencies -->

    @yield('scripts')
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#yourTableId').DataTable({
                "pagingType": "simple_numbers",
                "language": {
                    "paginate": {
                        "previous": "<",
                        "next": ">"
                    }
                }
            });
        });
    </script>

</body>

</html>
