@extends('layouts.app')

@section('content')
    <div class="container">

        <h2 class="text-center mb-5">{{$post->title}}</h2>
        <p>{{$post->content}}</p>
        <span class="d-block"><strong>Id:</strong> {{$post->id}}</span>
        <span class="d-block"><strong>Slug:</strong> {{$post->slug}}</span>
        <span class="d-block"><strong>Published:</strong> {{$post->published == 0 ? "No" : "Yes"}}</span>
        <span class="d-block mb-5"><strong>Created:</strong> {{$post->created_at}}</span>

        <a href="{{route('posts.index')}}"><button type="button" class="btn btn-dark">Posts list</button></a>
        <a href="#"><button type="button" class="btn btn-primary">Edit</button></a>
        <a href="#"><button type="button" class="btn btn-danger">Delete</button></a>
        
    </div>
@endsection