@extends('layouts.app')
@section('content')
    <header class="flex justify-between items-center px-8 mt-6 md:px-14">
        <h1 class="text-gray-400 font-normal">My Projects</h1>
        <a href="{{ route('projects.create') }}" class="bg-blue-500 text-white font-semibold py-2 px-6 mr-2 rounded-lg shadow-2xl">Add Project</a>
    </header>

    <main class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-2 mt-4 py-2 px-8 md:px-14">
        @forelse ($projects as $project)
           @include ('projects.components.card')
        @empty
            <h1 class="text-gray-400 text-xl">
                No Projects Yet ...
            </h1>
        @endforelse
    </main>
@endsection