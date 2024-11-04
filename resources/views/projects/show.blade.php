<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight dark:text-gray-200">
            {{ $project->name }}
        </h2>
    </x-slot>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <div class="max-w-7xl mx-auto flex center sm:px-6 lg:px-8 py-8">
        <!-- Project Members Section -->
        <div class="mb-6 p-6">
            <h3 class="text-lg font-medium text-gray-800 dark:text-gray-200">Team Members</h3>
            <div class="flex flex-wrap mt-4 gap-4">
                @foreach ($project->members as $member)
                    <div class="w-60 h-32 p-4 bg-gray-800 rounded-lg shadow-md text-white flex flex-col items-center justify-center text-center">
                        <h4 class="font-semibold text-lg">{{ $member->function }}</h4>
                        <p class="text-sm mt-2">{{ $member->task_description }}</p>
                        @if ($member->user_id===null)
                            <a href="{{route('joinproject',$member->id)}}" class="text-gray-200">join</a>
                        @else
                            <span  class="text-gray-200 ">Held By {{App\Models\User::find($member->user_id)->name}}</span>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
        <!-- Project Description Section -->
        <div class="bg-white dark:bg-gray-900 rounded-lg p-6 shadow-md">
            <h3 class="text-lg font-medium text-gray-800 dark:text-gray-200">Project Description</h3>
            <p class="text-gray-700 dark:text-gray-300 mt-4">{{ $project->description }}</p>
        </div>
    </div>
</x-app-layout>
