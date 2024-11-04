<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight dark:text-gray-200">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h3 class="text-2xl font-semibold text-gray-800 dark:text-gray-200 mb-4">Your Projects</h3>
            <div class="flex flex-wrap justify-start gap-6 items-center">
                <!-- Placeholder Projects -->
                @php
                    $projects = [
                        (object)[ 'name' => 'Project Alpha', 'description' => 'A brief description of Project Alpha.', 'image' => 'https://via.placeholder.com/150' ],
                        (object)[ 'name' => 'Project Beta', 'description' => 'A brief description of Project Beta.', 'image' => 'https://via.placeholder.com/150' ],
                        (object)[ 'name' => 'Project Gamma', 'description' => 'A brief description of Project Gamma.', 'image' => 'https://via.placeholder.com/150' ],
                        (object)[ 'name' => 'Project Delta', 'description' => 'A brief description of Project Delta.', 'image' => 'https://via.placeholder.com/150' ],
                    ];
                @endphp

                <!-- Project Card -->
                @foreach ($projects as $project)
                    <div class="bg-gray-800 text-white shadow-md rounded-lg p-4 w-60 hover:shadow-lg transition-shadow duration-300">
                        <img src="{{ $project->image }}" alt="{{ $project->name }}" class="rounded-lg mb-4 w-full h-full object-cover">
                        <h3 class="font-bold text-lg">{{ $project->name }}</h3>
                        <p class="text-gray-400 truncate">{{ $project->description }}</p>
                        <a href="#" class="text-blue-400 hover:underline mt-2 inline-block">View Project</a>
                    </div>
                @endforeach

                <!-- Plus Card -->
                <a href="{{route('projects.create')}}">
                    <div class="bg-gray-800 text-white shadow-md rounded-full w-20 h-20 flex items-center justify-center hover:shadow-lg transition-shadow duration-300">
                        <span class="text-white">Add</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h3 class="text-2xl font-semibold text-gray-800 dark:text-gray-200 mb-4">Joined Projects</h3>
            <div class="flex flex-wrap justify-start gap-6 items-center">
                <!-- Placeholder Projects -->
                @php
                    $projects = [
                        (object)[ 'name' => 'Project Alpha', 'description' => 'A brief description of Project Alpha.', 'image' => 'https://via.placeholder.com/150' ],
                        (object)[ 'name' => 'Project Beta', 'description' => 'A brief description of Project Beta.', 'image' => 'https://via.placeholder.com/150' ],
                        (object)[ 'name' => 'Project Gamma', 'description' => 'A brief description of Project Gamma.', 'image' => 'https://via.placeholder.com/150' ],
                        (object)[ 'name' => 'Project Delta', 'description' => 'A brief description of Project Delta.', 'image' => 'https://via.placeholder.com/150' ],
                    ];
                @endphp

                <!-- Project Card -->
                @foreach ($projects as $project)
                    <div class="bg-gray-800 text-white shadow-md rounded-lg p-4 w-60 hover:shadow-lg transition-shadow duration-300">
                        <img src="{{ $project->image }}" alt="{{ $project->name }}" class="rounded-lg mb-4 w-full h-full object-cover">
                        <h3 class="font-bold text-lg">{{ $project->name }}</h3>
                        <p class="text-gray-400 truncate">{{ $project->description }}</p>
                        <a href="#" class="text-blue-400 hover:underline mt-2 inline-block">View Project</a>
                    </div>
                @endforeach

                <!-- Plus Card -->
                <a href="#">
                    <div class="bg-gray-800 text-white shadow-md rounded-full w-20 h-20 flex items-center justify-center hover:shadow-lg transition-shadow duration-300">
                        <span class="text-white">Add</span>
                    </div>
                </a>
            </div>
        </div>
    </div>

</x-app-layout>
