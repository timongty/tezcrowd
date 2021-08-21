<footer class="bg-white border-t border-gray-200 z-20 dark:bg-black dark:border-gray-500" aria-labelledby="footerHeading">
    <h2 id="footerHeading" class="sr-only">Footer</h2>
    <div class="max-w-md mx-auto pt-8 px-4 sm:max-w-7xl sm:px-6 lg:pt-8 lg:px-8">
        <div class="xl:grid xl:grid-cols-3 xl:gap-8">
            <div class="space-y-2 xl:col-span-1">

                <a href="{{ route('home') }}" class="pl-1">
                    <span class="font-sans text-lg font-extrabold relative -top-1 showcase_text_logo font-dreamscape">TezCrowd</span>
                </a>
                <p class="text-gray-600 font-title uppercase text-xs pl-1 font-semibold dark:text-gray-200">
                    A Gitcoin Hackathon Project
                </p>

            </div>

            <div class="mt-12 grid grid-cols-1 gap-8 xl:mt-0 xl:col-span-1">
            </div>

            <div class="mt-12 grid grid-cols-2 gap-8 xl:mt-0 xl:col-span-1">

                <div class="md:grid md:grid-cols-2 md:gap-4">
                    <div>

{{--                        <ul class="mt-4 space-y-4">--}}
{{--                            <li>--}}
{{--                                <a href="{{ route('about') }}" class="text-base font-aoki-regular text-gray-500 hover:text-gray-900 dark:text-gray-200 dark:hover:text-gray-400">--}}
{{--                                    About--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
                    </div>
                </div>
                <div class="md:grid md:grid-cols-2 md:gap-4">
                    <div class="mt-0">

                        <ul class="mt-4 space-y-4">

                            <li>
                                <a href="{{ route('about') }}" class="text-base font-aoki-regular text-gray-500 hover:text-gray-900 dark:text-gray-200 dark:hover:text-gray-400">
                                    About
                                </a>
                            </li>

                        </ul>

                    </div>
                </div>

            </div>

        </div>
        <div class="mt-10 py-2">

        </div>
    </div>
</footer>
