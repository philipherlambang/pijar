<ul class="list-group list-group-flush">
    @foreach ($card->tasks as $task)
        <li class="list-group-item">
            <a href="{{ route('taskDetail', ['slug' => $task->slug]) }}">
                {{ $task->title }}
            </a>
        </li>
    @endforeach
</ul>
