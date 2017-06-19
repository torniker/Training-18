@extends('layouts.app')

@section('content')
<div class="container">
    <ol class="breadcrumb">
        <li><a href="{{ route('programs.index') }}">Programs</a></li>
        <li class="active">{{ $program->name }}</li>
    </ol>
    <div class="row">
        <div class="col-xs-6">{{ $program->faculty->name }}</div>
        <div class="col-xs-6">{{ $program->name }}</div>
    </div>
    <div class="row">
        <div class="col-xs-6">{{ $program->mandatorty_credits }}</div>
        <div class="col-xs-6">{{ $program->optional_credits }}</div>
    </div>
    <a href="{{ route('programs.edit', $program->id) }}" class="btn btn-default">Edit</a>
    <a href="{{ route('programs.courses.index', $program->id) }}" class="btn btn-info">Courses</a>
</div>
@endsection
