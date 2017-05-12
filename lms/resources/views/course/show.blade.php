<link rel="stylesheet" type="text/css" href="/css/app.css">
<h1>{{ $course->name }}</h1>
<p>
    {{ $course->credits }}
</p>
<a href="{{ route('courses.edit', $course->id) }}">Edit</a>
