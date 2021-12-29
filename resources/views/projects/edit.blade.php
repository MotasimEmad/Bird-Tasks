@extends('layouts.app')
@section('content')
    <form action="{{ route('projects.update', $project->id) }}" method="POST">
        @method('PATCH')
        @csrf
        <div class="bg-white rounded py-4 my-12 mx-24 lg:mx-64">
            <h1 class="text-gray-800 text-xl lg:text-2xl font-semibold mb-8 lg:mb-12 text-center">Edit Project</h1>
            @include ('projects.components.form', ['btnText' => 'Edit Project'])
        </div>
    </form>
@endsection