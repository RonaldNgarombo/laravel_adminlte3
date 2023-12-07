<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }} | {{ env('APP_NAME') }}</title>

    {{-- FontAwesome --}}
    <link rel="stylesheet" href="{{ asset('theme/plugins/fontawesome-free/css/all.min.css') }}">
    {{-- Bootstrap 4 --}}
    <link rel="stylesheet"
        href="{{ asset('theme/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">

    <link rel="stylesheet" href="{{ asset('theme/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    {{-- JQVMap --}}
    <link rel="stylesheet" href="{{ asset('theme/plugins/jqvmap/jqvmap.min.css') }}">

    {{-- Theme style --}}
    <link rel="stylesheet" href="{{ asset('theme/dist/css/adminlte.min.css') }}">
    {{-- overlayScrollbars --}}
    <link rel="stylesheet" href="{{ asset('theme/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    {{-- Daterange picker --}}
    <link rel="stylesheet" href="{{ asset('theme/plugins/daterangepicker/daterangepicker.css') }}">
    {{-- summernote --}}
    <link rel="stylesheet" href="{{ asset('theme/plugins/summernote/summernote-bs4.min.css') }}">

    {{-- SweetAlert2 --}}
    <link rel="stylesheet" href="{{ asset('theme/plugins/sweetalert2/sweetalert2.min.css') }}">
    {{-- Toastr --}}
    <link rel="stylesheet" href="{{ asset('theme/plugins/toastr/toastr.min.css') }}">

    {{-- General Styles --}}
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <livewire:navigation.top-navigation />

        <livewire:navigation.side-navigation />

        <div class="content-wrapper">
            {{-- <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard</h1>
                        </div>

                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard v1</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div> --}}

            <section class="content">
                <div class="container-fluid">
                    {{ $slot }}
                </div>
            </section>
        </div>

        <livewire:navigation.footer />
    </div>

    {{-- jQuery --}}
    <script src="{{ asset('theme/plugins/jquery/jquery.min.js') }}"></script>
    {{-- jQuery UI 1.11.4 --}}
    <script src="{{ asset('theme/plugins/jquery-ui/jquery-ui.min.js') }}"></script>

    {{-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip  --}}
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>

    {{-- Bootstrap 4 --}}
    <script src="{{ asset('theme/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('theme/plugins/sparklines/sparkline.js') }}"></script>

    {{-- JQVMap --}}
    <script src="{{ asset('theme/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    {{-- <script src="{{ asset('theme/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script> --}}

    {{-- daterangepicker --}}
    <script src="{{ asset('theme/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('theme/plugins/daterangepicker/daterangepicker.js') }}"></script>

    {{-- Tempusdominus Bootstrap 4 --}}
    <script src="{{ asset('theme/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    {{-- Summernote --}}
    <script src="{{ asset('theme/plugins/summernote/summernote-bs4.min.js') }}"></script>

    {{-- overlayScrollbars --}}
    <script src="{{ asset('theme/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>

    <script src="{{ asset('theme/dist/js/adminlte.js') }}"></script>

    {{-- SweetAlert2 --}}
    <script src="{{ asset('theme/plugins/sweetalert2/sweetalert2.min.js') }}"></script>

    {{-- Toastr --}}
    <script src="{{ asset('theme/plugins/toastr/toastr.min.js') }}"></script>

    {{-- General Script --}}
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
