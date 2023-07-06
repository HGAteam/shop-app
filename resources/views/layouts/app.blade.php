<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- site Favicon -->
    <link rel="icon" href="{{asset('assets/images/favicon/favicon.png')}}" sizes="32x32" />
    <link rel="apple-touch-icon" href="{{asset('assets/images/favicon/favicon.png')}}" />
    <meta name="msapplication-TileImage" content="{{asset('assets/images/favicon/favicon.png')}}" />

    <!-- begin::links -->
    @include('layouts.partials._styles')
    <!-- end::links -->

</head>
<body>
    <!-- start::loader -->
    <div id="ec-overlay">
        <div class="ec-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- end::loader -->

    <!-- start::navigation -->
    @include('layouts.partials._navigation')
    <!-- end::navigation -->

    <!-- begin::content -->
    @yield('content')
    <!-- end::content -->

    <!-- begin::footer -->
    @include('layouts.partials._footer')
    <!-- end::footer -->

    <!-- begin::scrtips -->
    @include('layouts.partials._scripts')
    <!-- end::scrtips -->
</body>
</html>
