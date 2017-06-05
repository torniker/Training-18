<form action="{{ route('buildings.rooms.store', $building->id) }}" method="post">
    {{ csrf_field() }}
    <p>
    {{ $errors->first('name') }}
    Name:
    <input type="text" name="name" value="{{ old('name') }}">
    </p>
    @foreach($equipments as $equpment)
        <input type="hidden" name="equipments[{{ $equpment }}]" value="">
        <label>
        <input type="checkbox" name="equipments[{{ $equpment }}]" value="1"> {{ $equpment }}
        </label>
    @endforeach
    <button type="submit">Save</button>
</form>
