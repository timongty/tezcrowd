<nav class="px-2 space-y-1">

    <a href="{{ route('home') }}" class="{{ \Request::route()->getName() == 'home' ? 'active' : '' }} single group flex items-center px-2 py-2 text-sm font-medium rounded-md">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon group-hover:text-yellow-300 mr-3 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
        </svg>
        Crypto Scams
    </a>

    <a href="{{ route('best_practices') }}" class="single group flex items-center px-2 py-2 text-sm font-medium rounded-md">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-white group-hover:text-yellow-300 mr-3 h-6 w-6" fill="currentColor" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 214.27 214.27" style="enable-background:new 0 0 214.27 214.27;" xml:space="preserve">
            <g>
                <path d="M196.926,55.171c-0.11-5.785-0.215-11.25-0.215-16.537c0-4.142-3.357-7.5-7.5-7.5c-32.075,0-56.496-9.218-76.852-29.01   c-2.912-2.832-7.546-2.831-10.457,0c-20.354,19.792-44.771,29.01-76.844,29.01c-4.142,0-7.5,3.358-7.5,7.5   c0,5.288-0.104,10.755-0.215,16.541c-1.028,53.836-2.436,127.567,87.331,158.682c0.796,0.276,1.626,0.414,2.456,0.414   c0.83,0,1.661-0.138,2.456-0.414C199.36,182.741,197.954,109.008,196.926,55.171z M107.131,198.812   c-76.987-27.967-75.823-89.232-74.79-143.351c0.062-3.248,0.122-6.396,0.164-9.482c30.04-1.268,54.062-10.371,74.626-28.285   c20.566,17.914,44.592,27.018,74.634,28.285c0.042,3.085,0.102,6.231,0.164,9.477C182.961,109.577,184.124,170.844,107.131,198.812   z"/>
                <path d="M132.958,81.082l-36.199,36.197l-15.447-15.447c-2.929-2.928-7.678-2.928-10.606,0c-2.929,2.93-2.929,7.678,0,10.607   l20.75,20.75c1.464,1.464,3.384,2.196,5.303,2.196c1.919,0,3.839-0.732,5.303-2.196l41.501-41.5   c2.93-2.929,2.93-7.678,0.001-10.606C140.636,78.154,135.887,78.153,132.958,81.082z"/>
            </g>
        </svg>
        Best Practices
    </a>

    {{--    <a href="#" class="single group flex items-center px-2 py-2 text-sm font-medium rounded-md">--}}
    {{--        <svg xmlns="http://www.w3.org/2000/svg" class="icon group-hover:text-yellow-400 mr-3 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
    {{--            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />--}}
    {{--        </svg>--}}
    {{--        Read Our Blog--}}
    {{--    </a>--}}

    <a href="{{ route('show_crypto_scam_quiz') }}" class="single group flex items-center px-2 py-2 text-sm font-medium rounded-md">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon group-hover:text-yellow-300 mr-3 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
        </svg>
        Crypto Scam IQ Test
    </a>

    <a href="{{ route('support') }}" class="single group flex items-center px-2 py-2 text-sm font-medium rounded-md">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon group-hover:text-yellow-300 mr-3 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        Support
    </a>

    @if(Auth::check())
        @if(Auth::user()->hasRole('admin'))
            <a href="{{ route('admin') }}" class="{{ \Request::route()->getName() == 'admin' ? 'active' : '' }} single group flex items-center px-2 py-2 text-lg font-triakis-semibold rounded-md ">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon group-hover:text-yellow-300 mr-3 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5" />
                </svg>
                Admin
            </a>

            <a href="{{ route('logout') }}" class="single group flex items-center px-2 py-2 text-lg font-triakis-semibold rounded-md ">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon group-hover:text-yellow-300 mr-3 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                </svg>
                Logout
            </a>
        @endif
    @endif

</nav>
