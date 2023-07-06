<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">

    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/apple-icon.png') }}">

    {{-- <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}"> --}}

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />

    <!-- CSRF Token -->

    <meta name="csrf-token" content="{{ csrf_token() }}">



    <title>{{ config('app.name') . ' - ' . $title }}</title>



    @include('layouts.dashboard.partials._css')

</head>

<body>
    <div class="wrapper">
        @include('layouts.dashboard.partials._sidebar')
        <div class="main-panel" id="main-panel">
            <!-- Navbar -->
            @include('layouts.dashboard.partials._navbar')
            <!-- End Navbar -->
            <div class="panel-header">
                <div class="header text-center">
                    <h2 class="title">{{ $title }}</h2>
                    {{-- <p class="category">Handcrafted by our friend <a target="_blank" href="https://github.com/mouse0270">Robert McIntosh</a>. Please checkout the <a href="http://bootstrap-notify.remabledesigns.com/" target="_blank">full documentation.</a></p> --}}
                </div>
            </div>
            <div class="content" id="app">
                @yield('content')
            </div>
        </div>
    </div>



    @include('layouts.dashboard.partials._scripts')

</body>

</html>
