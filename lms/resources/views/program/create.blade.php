@extends('layouts.app')

@section('content')
<div class="container">
    <ol class="breadcrumb">
        <li><a href="{{ route('programs.index') }}">Programs</a></li>
        <li class="active">Create</li>
    </ol>

    <form action="{{ route('programs.store') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Name: </label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
            <small class="text-danger">{{ $errors->first('name') }}</small>
        </div>

        <div class="form-group">
            <label for="faculty">Faculty: </label>
            <select name="faculty_id" id="faculty" class="form-control">
                @foreach($faculties as $faculty)
                <option
                    value="{{ $faculty->id }}"
                    @if (old('faculty_id') == $faculty->id)
                    selected
                    @endif
                >
                    {{ $faculty->name }}
                </option>
                @endforeach
            </select>
            <small class="text-danger">{{ $errors->first('faculty_id') }}</small>
        </div>

        <div class="form-group">
            <label for="mandatorty_credits">Mandatory:</label>
            <div class="input-group">
                <input type="number" name="mandatorty_credits" id="mandatorty_credits" class="form-control" value="{{ old('mandatorty_credits') }}">
                <div class="input-group-addon">Credits</div>
            </div>
            <small class="text-danger">{{ $errors->first('mandatorty_credits') }}</small>
        </div>

        <div class="form-group">
            <label for="optional_credits">Optional:</label>
            <div class="input-group">
                <input type="number" name="optional_credits" id="optional_credits" class="form-control" value="{{ old('optional_credits') }}">
                <div class="input-group-addon">Credits</div>
            </div>
            <small class="text-danger">{{ $errors->first('optional_credits') }}</small>
        </div>

        <div class="form-group">
            <label for="featured">Featured:</label>
                <input type="hidden" name="featured" value="0">
                <input type="checkbox" name="featured" id="featured" class="form-control" value="1"
                @if(old('optional_credits') == 1)
                checked="checked"
                @endif
                >
            </div>
            <small class="text-danger">{{ $errors->first('featured') }}</small>
        </div>

        <div class="form-group">
    {{ $errors->first('featured') }}
    Featured:
    <input type="hidden" name="featured" value="0">
    <input type="number" name="featured" value="1"
    @if($program->featured)
        checked="checked"
    @endif
    >
    </p>

        <div class="form-group">
            <label for="images">Files:</label>
            <input type="file" name="images[]" id="images" class="form-control" multiple="multiple">
            <small class="text-danger">{{ $errors->first('optional_credits') }}</small>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection
