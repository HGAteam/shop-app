<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">

    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/apple-icon.png') }}">

    <link rel="icon" type="image/png" href="{{ asset('front/images/altcoin.png.png') }}">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />

    <!-- CSRF Token -->

    <meta name="csrf-token" content="{{ csrf_token() }}">



    <title>{{ config('app.name', 'Laravel') }}</title>



    @include('layouts.include._css')

    <style>
        div.card div.card-body.about_us {

            height: 300px;

            min-height: 100px;

            max-height: 300px;

        }
    </style>

</head>
<body class="@yield('page-type') sidebar-collapse">
    <!-- Navbar -->
    @include('layouts.front.partials._navbar')
    <!-- End Navbar -->
    @yield('header')
    <div class="wrapper" id="app">
        @if (request()->is('/'))
            <div class="page-header" style="height:350px;">

                <div class="page-header-image"
                    style="background-image:url('images/woman-library.jpg');">

                </div>

                <div class="container">

                    <div class="content-center brand">

                        {{-- <img class="n-logo" src="{{asset('img/now-logo.png')}}" alt=""> --}}

                        <h1 class="h1-seo">Welcome to Liftitfy</h1>

                        <h3>Buy courses online from anywhere</h3>

                    </div>

                </div>

            </div>
        @else
        @endif

        <div class="main">

            @yield('content')

        </div>

        @include('layouts.include._footer')
    </div>

    @include('layouts.include._scripts')
</body>

</html>
