@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ route('posts.create') }}" class="btn btn-default">Add Post</a>
    <div class="list-group">
        @foreach($posts as $post)
        <a href="{{ route('posts.show', $post->id) }}" class="list-group-item">
            <h4 class="list-group-item-heading">{{ $post->title }}</h4>
        </a>
        @endforeach
    </div>
</div>
@endsection
