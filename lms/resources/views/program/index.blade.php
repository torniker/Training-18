@extends('layouts.app')

@section('content')
<div class="container">
    <h2>
        Programs
        <a href="{{ route('programs.create') }}" class="btn btn-default">Create</a>
    </h2>

    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>Name</th>
                <th>Faculty</th>
                <th>Credits</th>
                <th colspan="2">Actions</th>
            </tr>
        </thead>
        @foreach($programs as $program)
        <tr>
            <td>
                {{ $program->name }}
                @if ($program->featured)
                    <i class="glyphicon glyphicon-ok"></i>
                @endif
            </td>
            <td>
                {{ $program->faculty->name }}
            </td>
            <td>
                {{ $program->mandatorty_credits }} + {{ $program->optional_credits }}
            </td>
            <td class="text-center">
                <a href="{{ route('programs.show', $program->id) }}">
                    <i class="glyphicon glyphicon-eye-open"></i>
                </a>
            </td>
            <td class="text-center">
                <a href="{{ route('programs.edit', $program->id) }}">
                    <i class="glyphicon glyphicon-pencil"></i>
                </a>
            </td>
        </tr>
        @endforeach
    </table>
    {{ $programs->links() }}
</div>
@endsection
