@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <h2>
                {{ $post->title }}
                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-default">Edit</a>
                <a href="{{ route('posts.destroy', $post->id) }}" class="btn btn-default">Delete</a>
            </h2>
            <p>{{ $post->body }}</p>
        </div>
    </div>
</div>
@endsection
