<nav class="fixed w-full bg-white shadow z-20 dark:bg-black dark:border-b border-b border-transparent dark:border-gray-500 ">
    <div class="max-w-full mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-14">
            <div class="flex w-3/5">
                <div class="flex-shrink-0 flex items-center">

                    <a href="{{ route('home') }}" class="inline-flex items-center py-2 ml-2 relative top-0.5">
                        <span class=" text-lg font-extrabold ">TezCrowd</span>
                    </a>

                </div>

                <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                    <a href="{{ route('about') }}" class="{{ \Request::route()->getName() == 'about' ? 'border-indigo-500 text-gray-900' : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700' }} inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                        About
                    </a>
                    <a href="#" class="disconnect_wallet border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                        Disconnect
                    </a>
{{--                    <a href="{{ route('show_all_projects') }}" class="{{ \Request::route()->getName() == 'show_all_projects' ? 'border-indigo-500 text-gray-900' : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700' }} inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">--}}
{{--                        All Projects--}}
{{--                    </a>--}}
{{--                    <a href="{{ route('create_project') }}" class="{{ \Request::route()->getName() == 'create_project' ? 'border-indigo-500 text-gray-900' : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700' }} border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">--}}
{{--                        Start Project--}}
{{--                    </a>--}}
                </div>

            </div>

        <div class="ml-6 flex items-center">

            <div class="connect_wallet cursor-pointer text-sm font-semibold">
                Connect Wallet
            </div>

        </div>

</nav>
