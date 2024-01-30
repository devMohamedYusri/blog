@extends('layouts.app')
@section('title')
posts
@endsection
@section('content')
<div class="container mt-4">
    <div class="mt-4"></div>
    <div class="text-center">
<a class="btn btn-success" type="button" href="{{route('posts.create')}}">create post</a>
    </div>
        <table class="table table-bordered border-primary caption-top">
            <caption>list of posts</caption>
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">title</th>
                <th scope="col">description</th>
                <th scope="col">created At</th>
                <th scope="col">actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post )
            <tr>
                <th scope="row">{{$post->id}}</th>
                <td>{{$post->title}}</td>
                <td>{{$post->description}}</td>
                <td>{{$post->created_at->format('Y-m-d')}}</td>
                <td>
                    <a class="btn btn-info" type="button" href="{{route('posts.show',$post['id'])}}">view</a>
                    <a class="btn btn-primary" type="button"  href="{{route('posts.edit',$post['id'])}}">edit</a>
                    <form style="display:inline;" method="post" action="{{route('posts.destroy',$post['id'])}}">
                        @CSRF
                        @method('delete')
                        <button class="btn btn-danger" type="submit" >Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
