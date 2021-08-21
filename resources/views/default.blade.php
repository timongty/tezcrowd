@extends('default_no_sidebar')

@section('mobile_sidebar')
    {{-- Set user default sidebar - mobile --}}
{{--    @yield('sidebar', \View::make('partials.mobile_sidebar'))--}}
@endsection


@section('sidebar')
    {{-- Set user default sidebar - desktop --}}
    @yield('sidebar', \View::make('partials.sidebar'))
@endsection


@section('content')

    @yield('content')

@endsection

@section('scripts')

    @yield('scripts')

@endsection
