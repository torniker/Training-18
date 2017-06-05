<form action="{{ route('buildings.rooms.update', [$building->id, $room->id]) }}" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT">
    <p>
    {{ $errors->first('name') }}
    Name:
    <input type="text" name="name" value="{{ $room->name }}">
    </p>
    @foreach($room->equipments as $equpment=>$has)
        <input type="hidden" name="equipments[{{ $equpment }}]" value="">
        <label>
        <input type="checkbox" name="equipments[{{ $equpment }}]" value="1"
        @if($has)
        checked="checked"
        @endif
        > {{ $equpment }}
        </label>
    @endforeach
    <button type="submit">Save</button>
</form>
