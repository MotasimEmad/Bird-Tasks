@extends('layouts.app')
@section('content')

    <header class="flex items-center px-8 mt-6 justify-between">
        <p class="text-gray-400 font-normal">
           <a href="{{ route('projects.index') }}">My Projects /</a> {{ $project->title }}
        </p>
        <a href="{{ route('projects.edit', $project->id) }}" class="bg-blue-500 text-white font-semibold py-2 px-6 mr-4 rounded-lg shadow-2xl">Edit Project</a>
    </header>

    <main class="flex flex-col lg:flex-row mt-8 px-8">
        <div class="w-full lg:w-3/4">
            <div class="mb-2">
                <h1 class="text-gray-400 font-semibold mb-3">Tasks</h1>
                @foreach ($project->tasks as $task)
                    <form method="POST" action="{{ route('tasks.update', $task->id) }}">
                        @method('PATCH')
                        @csrf
                        <div class="flex items-center bg-white shadow rounded-lg mb-3 p-5 w-full">
                            <label class="w-full {{ $task->completed ? 'text-gray-400' : ''}}">
                                <input class="focus:outline-none w-full" name="body" value="{{ $task->body }}"></input>
                            </label>
                            <input type="checkbox" name="completed" onChange="this.form.submit()" {{ $task->completed ? 'checked' : ''}}></input>
                        </div>
                    </form>
                @endforeach

                <form action="{{ route('tasks.store') }}" method="POST">
                    @csrf
                    <input class="bg-white shadow rounded-lg mb-3 p-5 w-full focus:outline-none" placeholder="Add New Task..." name="body"></input>
                    <input type="hidden" name="project_id" value="{{ $project->id }}">
                </form>

            </div>

            <div class="mb-6">
                <h1 class="text-gray-400 font-semibold mb-3">General Notes</h1>
                <form method="POST" action="{{ route('projects.update', $project->id) }}">
                    @method('PATCH')
                    @csrf
                    <textarea 
                        placeholder="Write notes here ;-)"
                        name="notes"
                        class="bg-white shadow rounded-lg p-5 w-full focus:outline-blue-500 mb-3" 
                        style="min-height: 200px">{{ $project->notes }}</textarea>
                    <button class="bg-blue-500 text-white font-semibold py-2 px-6 mr-2 rounded-lg shadow-2xl">Save</button>
                </form>
            </div>
        </div>

        <div class="lg:w-1/4 mt-4 mx-2 lg:mt-8">
            @include ('projects.components.card')
            @include ('projects.activites.components.card')
        </div>
    </main>

@endsection
