@extends('layouts.app')
@section('content')
    <form action="{{ route('projects.store') }}" method="POST">
        @csrf
        <div class="bg-white rounded py-4 my-12 mx-24 lg:mx-64">
            <h1 class="text-gray-800 text-xl lg:text-2xl font-semibold mb-8 lg:mb-12 text-center">Let's Build Something New</h1>
            @include ('projects.components.form',[
                "project" => new App\Models\Project,
                "btnText" => "Add Project"
                ]
            )
        </div>
    </form>
@endsection