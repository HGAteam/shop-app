<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>{{ config('app.name') . ' - ' . $title }}</title>
    
    @include('layouts.dlocal.partials._css')
</head>
<body style="background-color: #aab7c4">
    <div class="mainContent">
        <main>
            <div class="container-lg">
                @yield('content')
            </div>
        </main>
    </div>
    @include('layouts.dlocal.partials._scripts')
</body>