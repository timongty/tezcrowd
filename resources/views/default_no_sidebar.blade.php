<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- CSRF Token--}}
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <link rel="stylesheet" href="{{ asset_path('assets/css/app.css') }}" >

    <title>@yield('title', 'TezCrowd')</title>
    {{--SEO meta--}}
    <meta name="description" content="@yield('description')" />
    <meta property="og:site_name" content="TezCrowd" />
    <meta property="og:locale" content="en_US" />

    @yield('meta')

</head>

<body id="body" class="flex min-h-screen flex-col">

@include('partials.nav')

<div id="app" class="app flex flex-grow min-h-screen mt-14 dark:bg-black z-10">

    @yield('content')

</div>

@yield('extras')

@include('partials.footer')

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<script src="{{ asset_path('/assets/js/default.js') }}"></script>
<script src="{{ asset_path('/assets/js/tezos.js') }}"></script>

@yield('scripts')

</body>

@if(config('app.env') !== 'production')
    {{-- Development tag at bottom right of browser --}}
    <div style="background: #FF0000;
                                    color: #fff;
                                    font-weight: 600;
                                    position: fixed;
                                    display: block;
                                    z-index: 9999;
                                    padding: 8px 10px;
                                    border-radius: 8px;
                                    right: 10px;
                                    bottom: 10px">Development</div>
@endif

</html>
