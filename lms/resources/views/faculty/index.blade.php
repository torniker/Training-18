@extends('layouts.app')

@section('content')
<div class="container">
    <h2>
        Faculties
        <a href="{{ route('faculties.create') }}" class="btn btn-default">Create</a>
    </h2>

    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>Name</th>
                <th colspan="2">Actions</th>
            </tr>
        </thead>
        @foreach($faculties as $fac)
        <tr>
            <td>
                {{ $fac->name }}
            </td>
            <td class="text-center">
                <a href="{{ route('faculties.show', $fac->id) }}">
                    <i class="glyphicon glyphicon-eye-open"></i>
                </a>
            </td>
            <td class="text-center">
                <a href="{{ route('faculties.edit', $fac->id) }}">
                    <i class="glyphicon glyphicon-pencil"></i>
                </a>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
