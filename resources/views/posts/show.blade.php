@extends('layouts.app')
@section('title')
post info
@endsection
@section('content')
    <div style="border: 1px solid #ccc; padding: 20px; margin-bottom: 20px;" class="post">
        <h1>{{$post->title}}</h1>
        <p>{{$post->description}}</p>
        <p>Posted on: {{$post->created_at->format('Y-m-d')}}</p>
    </div>

    <div style="margin-top: 20px;" class="creator-info">
        <p>Created at: {{$post->created_at->format('Y-m-d')}}</p>
        <p>Contact: your.email@example.com</p>
    </div>
@endsection
