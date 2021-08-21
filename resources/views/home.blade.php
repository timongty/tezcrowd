@extends('default')

@section('content')

    <div class="flex w-full px-10 py-8">

        <div class="project_container flex flex-col sm:flex-row w-full">

            <div class="flex w-full sm:w-2/3 sm:pr-6">
                <img src="https://source.unsplash.com/ABVE1cyT7hk" class="featured_image rounded-md w-full h-72 sm:h-auto">
            </div>

            <div class="flex flex-col w-full sm:w-1/3 sm:px-6 py-6 ">

                <span class="text-gray-500 text-sm">Project #1</span>
                <h2 class="title text-2xl font-semibold">Loading Project...</h2>

                <div class="relative mt-3 pt-1">
                    <div class="flex mb-2 items-center justify-between">
                        <div>
                          <div class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-blue-600 bg-blue-200">
                              <span class="amount_raised_percentage">X%</span> Funded - <span class="cf_type">Fixed</span> Goal
                          </div>
                        </div>
                        <div class="text-right">
                            <span class="amount_raised text-xs font-semibold inline-block text-blue-600">
                                X
                            </span>
                            <span class="text-xs font-semibold inline-block text-blue-600">
                                /
                            </span>
                            <span class="target_amount text-xs font-semibold inline-block text-blue-600">
                                XXX
                            </span>
                            <span class="text-xs font-semibold inline-block text-blue-600">
                                tez
                            </span>
                        </div>
                    </div>
                    <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-blue-200">
                        <div style="width:30%" class="progress_bar shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-blue-500"></div>
                    </div>
                </div>

                <h3 class="about text-base mt-4 mb-2 text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</h3>

                @include('partials.flash_messages')

                <div class="mt-3">
                    <label for="add_funds" class="block text-sm font-medium text-blue-700">Support This Project:</label>
                    <div class="mt-3 flex rounded-md shadow-sm">
                        <div class="relative flex items-stretch flex-grow focus-within:z-10">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <span class="h-5 w-5 text-gray-400 relative -top-1" aria-hidden="true">ꜩ</span>
                            </div>
                            <input type="text" name="add_funds" id="add_funds" class="add_funds focus:ring-indigo-500 focus:border-indigo-500 block w-full rounded-none rounded-l-md pl-10 sm:text-sm border-gray-300" placeholder="Pledge Amount" />
                        </div>
                        <button type="button" class="-ml-px relative inline-flex items-center space-x-2 px-4 py-2 border border-gray-300 text-sm font-medium rounded-r-md text-gray-700 bg-gray-50 hover:bg-gray-100 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500">
                            <span>Tez</span>
                        </button>
                    </div>

                    <button class="pledge disabled:opacity-50 bg-blue-500 flex items-center justify-center text-white active:bg-blue-600 font-bold uppercase text-sm px-6 py-3 mt-6 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" class="inline h-5 w-5 text-white mr-3" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                        Pledge
                    </button>
                </div>
            </div>

        </div>

    </div>

@endsection
