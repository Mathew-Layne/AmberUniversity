@extends('layouts.app')

@section('content')
   <section class="container px-6 py-4 mx-auto">
    <div class="grid gap-6 mb-8 md:grid-cols-1 lg:grid-cols-2">
        <!-- Card 1 -->
        <div class="flex items-center p-4 bg-white border-2 border-gray-200 rounded-lg shadow-sm dark:bg-gray-800">
            <img alt="mountain" class="w-45 rounded-md border-2 border-gray-300"
                src="https://picsum.photos/seed/picsum/200" />
            <div id="body" class="flex flex-col ml-5">
                <h4 id="name" class="text-xl font-semibold mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit
                </h4>
                <p id="job" class="text-gray-800 mt-2">Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    laboris nisi ut aliquip ex ea commodo consequat.</p>
                <div class="flex mt-5">
                    <img alt="avatar" class="w-6 rounded-full border-2 border-gray-300"
                        src="https://picsum.photos/seed/picsum/200" />
                    <p class="ml-3">John Doe</p>
                </div>
            </div>
        </div>
        <!-- Card 2 -->
        <div class="flex items-center p-4 bg-white border-2 border-gray-200 rounded-lg shadow-sm dark:bg-gray-800">
            <img alt="mountain" class="w-45 rounded-md border-2 border-gray-300"
                src="https://picsum.photos/seed/picsum/200" />
            <div id="body" class="flex flex-col ml-5">
                <h4 id="name" class="text-xl font-semibold mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit
                </h4>
                <p id="job" class="text-gray-800 mt-2">Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    laboris nisi ut aliquip ex ea commodo consequat.</p>
                <div class="flex mt-5">
                    <img alt="avatar" class="w-6 rounded-full border-2 border-gray-300"
                        src="https://picsum.photos/seed/picsum/200" />
                    <p class="ml-3">John Doe</p>
                </div>
            </div>
        </div>
        <!-- Card 3 -->
        <div class="flex items-center p-4 bg-white border-2 border-gray-200 rounded-lg shadow-sm dark:bg-gray-800">
            <img alt="mountain" class="w-45 rounded-md border-2 border-gray-300"
                src="https://picsum.photos/seed/picsum/200" />
            <div id="body" class="flex flex-col ml-5">
                <h4 id="name" class="text-xl font-semibold mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit
                </h4>
                <p id="job" class="text-gray-800 mt-2">Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    laboris nisi ut aliquip ex ea commodo consequat.</p>
                <div class="flex mt-5">
                    <img alt="avatar" class="w-6 rounded-full border-2 border-gray-300"
                        src="https://picsum.photos/seed/picsum/200" />
                    <p class="ml-3">John Doe</p>
                </div>
            </div>
        </div>
        <!-- Card 4 -->
        <div class="flex items-center p-4 bg-white border-2 border-gray-200 rounded-lg shadow-sm dark:bg-gray-800">
            <img alt="mountain" class="w-45 rounded-md border-2 border-gray-300"
                src="https://picsum.photos/seed/picsum/200" />
            <div id="body" class="flex flex-col ml-5">
                <h4 id="name" class="text-xl font-semibold mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit
                </h4>
                <p id="job" class="text-gray-800 mt-2">Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    laboris nisi ut aliquip ex ea commodo consequat.</p>
                <div class="flex mt-5">
                    <img alt="avatar" class="w-6 rounded-full border-2 border-gray-300"
                        src="https://picsum.photos/seed/picsum/200" />
                    <p class="ml-3">John Doe</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection