<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight dark:text-gray-200">
            {{ __('Projects') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h3 class="text-2xl font-semibold text-gray-800 dark:text-gray-200 mb-4">Projects</h3>
            <div class="flex flex-wrap justify-start gap-6 items-center">
                <!-- Project Card -->
                @foreach ($projects as $project)
                    <div class="bg-gray-800 text-white shadow-md rounded-lg p-4 w-60 hover:shadow-lg transition-shadow duration-300">
                        <img src="{{ asset("storage/".$project->image) }}" alt="{{ $project->name }}" class="rounded-lg mb-4 w-50 h-60 object-cover">
                        <h3 class="font-bold text-lg">{{ $project->name }}</h3>
                        <p class="text-gray-400 truncate">{{ $project->description }}</p>
                        <a href="{{route('projects.show',$project->id)}}" class="text-blue-400 hover:underline mt-2 inline-block">View Project</a>
                    </div>
                @endforeach

                {{-- <!-- Plus Card -->
                <a href="{{route('projects.create')}}">
                    <div class="bg-gray-800 text-white shadow-md rounded-full w-36 h-20 flex items-center justify-center hover:shadow-lg transition-shadow duration-300">
                        <span class="text-white">show more</span>
                    </div>
                </a> --}}
            </div>
        </div>
    </div>

</x-app-layout>
