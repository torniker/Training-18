@extends('layouts.app')

@section('content')
<div class="container">
<h1>{{ $building->name }}</h1>
	<a href="{{ route('buildings.edit', $building->id) }}">Edit</a>
	<a href="{{ route('buildings.rooms.index', $building->id) }}">Rooms</a>
	<rooms building-id="{{ $building->id }}"></rooms>
</div>
@endsection
