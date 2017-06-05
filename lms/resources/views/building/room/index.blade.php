<a href="{{ route('buildings.rooms.create', $building->id) }}">Create</a>
<ul>
    @foreach($rooms as $room)
    <li><a href="{{ route('buildings.rooms.show', [$building->id, $room->id]) }}">{{ $room->name }}</a></li>
    @endforeach
</ul>
