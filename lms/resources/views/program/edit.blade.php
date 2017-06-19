<form action="{{ route('programs.update', $program->id) }}" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT">
    <p>
    {{ $errors->first('name') }}
    Name:
    <input type="text" name="name" value="{{ $program->name }}">
    </p>
    <p>
    {{ $errors->first('faculty_id') }}
    Faculty:
    <select name="faculty_id">
        @foreach($faculties as $faculty)
        <option
            value="{{ $faculty->id }}"
            @if ($program->faculty_id == $faculty->id)
            selected
            @endif
        >
            {{ $faculty->name }}
        </option>
        @endforeach
    </select>
    </p>
    <p>
    {{ $errors->first('mandatorty_credits') }}
    Mandatory Credits:
    <input type="number" name="mandatorty_credits" value="{{ $program->mandatorty_credits }}">
    </p>
    <p>
    {{ $errors->first('optional_credits') }}
    Optional Credits:
    <input type="number" name="optional_credits" value="{{ $program->optional_credits }}">
    </p>
    <p>
    {{ $errors->first('featured') }}
    Featured:
    <input type="hidden" name="featured" value="0">
    <input type="checkbox" name="featured" value="1"
    @if($program->featured)
        checked="checked"
    @endif
    >
    </p>
    <button type="submit">Save</button>
</form>
