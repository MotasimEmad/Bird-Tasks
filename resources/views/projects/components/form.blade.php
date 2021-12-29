<div class="py-2 px-6 flex flex-col">

    @include ('projects.components.error_alert')

<label class="text-gray-500 font-semibold mb-3">Title</label>
    <input 
        name="title"
        type="text"
        placeholder="Lorem ipsum dolor"
        class="border border-gray-200 shadow rounded-lg mb-6 p-3 w-full focus:outline-none"
        value="{{ $project->title }}" required />

    <label class="text-gray-500 font-semibold mb-3">Description</label>
    <textarea 
        class="border border-gray-200 shadow rounded-lg mb-3 p-3 w-full focus:outline-none" 
        placeholder="Id quia accusantium enim, assumenda quidem voluptate aperiam ab laudantium." 
        style="min-height: 200px" 
        name="description">{{ $project->description }}</textarea>

    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">

    <div class="flex items-center">
        <button class="bg-blue-500 text-white py-2 px-6 mt-3 mb-3 rounded-lg shadow-2xl">
            {{ $btnText }}
        </button>
        <a href="" class="ml-4 text-red-400 mt-3 mb-3">Cancle</a>
    </div>

</div>


