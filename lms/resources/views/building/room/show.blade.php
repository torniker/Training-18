<h1>{{ $building->name }}</h1>
<h2>{{ $room->name }}</h2>

<ul>
    @foreach($room->equipments as $equipment=>$has)
        <li>
            {{ $equipment }}
            @if($has)
                Yes
            @else
                No
            @endif
        </li>
    @endforeach
</ul>
<a href="{{ route('buildings.rooms.edit', [$building->id, $room->id]) }}">Edit</a>
