
@extends('layouts.app')
@section('title')edit post @endsection
@section('content')
<div class="container mt-5">
    <h2>edit post</h2>
    <form method='post' action="{{route('posts.update',$post->id)}}">
        @CSRF
        @method('PUT')
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" value="{{$post->title}}" placeholder="Enter title" name="title">
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" id="description" name="desc" rows="3" placeholder="Enter description">{{$post->description}}</textarea>
        </div>

        <div class="form-group">
            <label for="postCreator">Post Creator:</label>
            <input type="text" class="form-control" id="postCreator" value="{{$post->created_at->format('Y-m-d')}}" name="creator" placeholder="Enter post creator">
        </div>

        <button type="submit" class="btn btn-primary">update</button>
    </form>
</div>
@endsection
