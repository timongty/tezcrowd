@extends('default')

@section('content')

    <div class="flex flex-col px-12 py-6 m-auto mt-20">
        <div class="flex ">
            <h3 class="font-semibold text-3xl">Create Project</h3>
        </div>

        <div class="w-full max-w-lg mt-6 create_project_form">
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="title">
                        Title
                    </label>
                    <input id="title" class="title appearance-none shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" type="text" placeholder="Project name">
                </div>
                <div class="w-full px-3 mt-6">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="about">
                        About
                    </label>
                    <textarea id="about" name="about" rows="3" class="about appearance-none shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" placeholder="Tell us about your project"></textarea>
                </div>
                <div class="w-full px-3 mb-6 md:mb-0 mt-6">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="target">
                        Target Amount
                    </label>
                    <input id="target" class="target appearance-none shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" type="text" placeholder="Your crowdfunding target">
                </div>
                <div class="w-full px-3 mb-6 md:mb-0 mt-6">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="type">
                        Crowdfunding Type
                    </label>
                    <div class="mt-1 sm:mt-0 w-full">
                        <select id="type" name="type" autocomplete="type" class="type block focus:ring-indigo-500 focus:border-indigo-500 w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            <option value="KIA" {{ old('type') == 'KIA' ? 'selected' :''  }}>Flexible (Keep-it-all Model)</option>
                            <option value="AON" {{ old('type') == 'AON' ? 'selected' :''  }}>Fixed (All-or-nothing Model)</option>
                        </select>
                    </div>
                </div>
            </div>
            <button type="button" class="create_project inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Start Project
            </button>

        </div>
    </div>

@endsection
