<div class="bg-white shadow rounded-lg mr-2 my-2 p-4">
    <ul class="text-sm font-normal">
        @foreach ($project->activity as $activity)
            <li>
                @include ("projects.activites.{$activity->description}")
                <span class="text-gray-400">
                    {{ $activity->created_at->diffForHumans(null, true) }}
                </span>
            </li>
        @endforeach
    </ul>
</div>