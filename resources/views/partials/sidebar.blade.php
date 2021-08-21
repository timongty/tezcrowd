<nav class="flex-1 px-2 space-y-1">

    <a href="{{ route('home') }}" class="{{ (\Request::route()->getName() == 'home') ? 'active' : '' }} single group flex items-center px-2 py-2 text-lg font-semibold rounded-md hover:text-blue-500">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon group-hover:text-blue-500 mr-3 h-6 w-6 relative -top-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
        </svg>
        Home
    </a>

    <a href="#" class="{{ \Request::route()->getName() == '' ? 'active' : '' }} single group flex items-center px-2 py-2 text-lg font-semibold rounded-md hover:text-blue-500">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-black group-hover:text-blue-500 mr-3 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
        </svg>
        NFTs
    </a>

    <a href="#" class="{{ \Request::route()->getName() == '' ? 'active' : '' }} single group flex items-center px-2 py-2 text-lg font-semibold rounded-md hover:text-blue-500">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-black group-hover:text-blue-500 mr-3 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        SDGs
    </a>

{{--    <a href="#" class="single group flex items-center px-2 py-2 text-lg font-triakis-semibold rounded-md">--}}
{{--        <svg xmlns="http://www.w3.org/2000/svg" class="icon group-hover:text-yellow-300 mr-3 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />--}}
{{--        </svg>--}}
{{--        Read Our Blog--}}
{{--    </a>--}}

{{--    <a href="{{ route('show_crypto_scam_quiz') }}" class="{{ \Request::route()->getName() == 'show_crypto_scam_quiz' ? 'active' : '' }} single group flex items-center px-2 py-2 text-lg font-triakis-semibold rounded-md ">--}}
{{--        <svg xmlns="http://www.w3.org/2000/svg" class="icon group-hover:text-yellow-300 mr-3 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />--}}
{{--        </svg>--}}
{{--        Crypto Scam IQ Test--}}
{{--    </a>--}}

{{--    <a href="{{ route('support') }}" class="{{ \Request::route()->getName() == 'support' ? 'active' : '' }} single group flex items-center px-2 py-2 text-lg font-triakis-semibold rounded-md ">--}}
{{--        <svg xmlns="http://www.w3.org/2000/svg" class="icon group-hover:text-yellow-300 mr-3 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />--}}
{{--        </svg>--}}
{{--        Support This Site--}}
{{--    </a>--}}

{{--    @if(Auth::check())--}}
{{--        @if(Auth::user()->hasRole('admin'))--}}
{{--            <a href="{{ route('admin') }}" class="{{ \Request::route()->getName() == 'admin' ? 'active' : '' }} single group flex items-center px-2 py-2 text-lg font-triakis-semibold rounded-md ">--}}
{{--                <svg xmlns="http://www.w3.org/2000/svg" class="icon group-hover:text-yellow-300 mr-3 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5" />--}}
{{--                </svg>--}}
{{--                Admin--}}
{{--            </a>--}}

{{--            <a href="{{ route('logout') }}" class="single group flex items-center px-2 py-2 text-lg font-triakis-semibold rounded-md ">--}}
{{--                <svg xmlns="http://www.w3.org/2000/svg" class="icon group-hover:text-yellow-300 mr-3 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />--}}
{{--                </svg>--}}
{{--                Logout--}}
{{--            </a>--}}
{{--        @endif--}}
{{--    @endif--}}

</nav>
