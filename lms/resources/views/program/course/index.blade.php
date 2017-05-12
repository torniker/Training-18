<a href="{{ route('programs.courses.create', $program->id) }}">Add</a>
<h1>{{ $program->name }}</h1>
<ul>
    @foreach($programCourses as $pc)
    <li><a href="{{ route('programs.courses.show', [$program->id, $pc->id]) }}">{{ $pc->course->name }} ({{ $pc->type }})</a></li>
    @endforeach
</ul>
