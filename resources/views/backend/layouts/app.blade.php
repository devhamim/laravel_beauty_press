<!doctype html>

<html lang="{{ htmlLang() }}" @langrtl dir="rtl" @endlangrtl>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ app_name() }} | @yield('title')</title>
    <meta name="description" content="@yield('meta_description', app_name())">
    <meta name="author" content="@yield('meta_author', 'Anthony Rappa')">
    @yield('meta')
    <link href="{{ asset('icon_img/assets/icons/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('icon_img/assets/icons/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('icon_img/assets/icons/linearicons.css') }}" rel="stylesheet">
    <link href="{{ asset('icon_img/assets/icons/simple-line-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('icon_img/assets/icons/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('icon_img/assets/icons/fontAwesome/css/all.css') }}" rel="stylesheet">

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset(get_setting('favicon')) }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset(get_setting('favicon')) }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset(get_setting('favicon')) }}">
    <link rel="manifest" href="{{ asset(get_setting('favicon')) }}">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>

    @stack('before-styles')
    <link href="{{ mix('css/backend.css') }}" rel="stylesheet">
    <livewire:styles />
    @stack('after-styles')
</head>


<body class="hold-transition sidebar-mini text-sm">
    <div class="wrapper">
        {{-- <div class="preloader">
            <div class="spinner-container">
                <div class="spinner-border" role="status">
                    <span class="sr-only text-info">Loading...</span>
                </div>
            </div>
        </div> --}}
        @include('backend.includes.header')
        @include('backend.includes.sidebar')

        <div class="content-wrapper">
            @include('includes.partials.read-only')
            @include('includes.partials.logged-in-as')
            {{-- @include('includes.partials.announcements') --}}
            <section class="content-header">
                @include('includes.partials.messages')
                @include('backend.includes.partials.breadcrumbs')
            </section>

            <section class="content">
                @yield('content')
            </section> <!-- section -->
        </div> <!-- content -->

        {{-- @include('backend.includes.footer') --}}
    </div>

    @stack('before-scripts')

    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="{{ mix('js/manifest.js') }}"></script>
    <script src="{{ mix('js/vendor.js') }}"></script>
    <script src="{{ mix('js/backend.js') }}"></script>
    <livewire:scripts />
    @stack('after-scripts')
</body>

</html>
