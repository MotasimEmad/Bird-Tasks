@if ($errors->any())
    <div class="bg-red-400 w-full py-2 px-4 m-2 rounded-lg">
        <ul class="text-white">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif