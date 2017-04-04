@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ route('post.add') }}" class="btn btn-default">Add Post</a>
    <div class="list-group">
        @foreach($posts as $post)
        <a href="#" class="list-group-item">
            <h4 class="list-group-item-heading">{{ $post->title }}</h4>
            <p class="list-group-item-text">{{ $post->body }}</p>
        </a>
        @endforeach
    </div>
</div>
@endsection
