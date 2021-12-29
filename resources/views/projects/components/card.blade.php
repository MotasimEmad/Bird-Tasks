<div class="bg-white shadow rounded-lg mr-2 p-5">
    <a href="{{ route('projects.show', $project->id) }}" class="text-xl text-black font-semibold border-l-4 border-blue-500 -ml-5 py-2 pl-4">
        {{ $project->title }}
    </a>
    <p class="text-gray-400 mt-4">
        {{ $project->description }}
    </p>
    <footer class="text-right">
        <form action="{{ route('projects.destroy', $project->id) }}" method="POST">
            @method('DELETE')
            @csrf
            <button class="text-red-400 font-semibold px-6 mr-2">
                Delete
            </button>
        </form>
    </footer>
</div>