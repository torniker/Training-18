<a href="{{ route('buildings.create') }}">Create</a>
<ul>
    @foreach($buildings as $bld)
    <li><a href="{{ route('buildings.show', $bld->id) }}">{{ $bld->name }}</a></li>
    @endforeach
</ul>
