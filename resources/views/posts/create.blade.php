
@extends('layouts.app')
@section('title')create post @endsection
@section('content')
<div class="container mt-5">
    <h2>Create post</h2>
    <form method='post' action="{{route('posts.store')}}">
        @CSRF
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" placeholder="Enter title" name="title">
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" id="description"name="desc" rows="3" placeholder="Enter description"></textarea>
        </div>

        <div class="form-group">
            <label for="postCreator">Post Creator:</label>
            <input type="text" class="form-control" id="postCreator" name="creator" placeholder="Enter post creator">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
