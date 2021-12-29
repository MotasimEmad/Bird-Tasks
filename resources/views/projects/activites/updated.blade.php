@if (count($activity->changes['after']) == 2)
    You updated the {{ key($activity->changes['after']) }} of the project
@else
    You updated the project
@endif