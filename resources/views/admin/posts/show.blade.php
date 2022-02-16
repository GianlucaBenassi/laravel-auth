@extends('layouts.app')

@section('content')
    <div class="container">

        <h2 class="text-center mb-5">{{$post->title}}</h2>
        <p>{{$post->content}}</p>
        <span class="d-block"><strong>Id:</strong> {{$post->id}}</span>
        <span class="d-block"><strong>Slug:</strong> {{$post->slug}}</span>
        @if ($post->published == 0)
            <span class="badge badge-secondary">Draft</span>
        @else
            <span class="badge badge-success">Published</span>
        @endif
        <span class="d-block mb-5"><strong>Created:</strong> {{$post->created_at}}</span>

        <a href="{{route('posts.index')}}"><button type="button" class="btn btn-dark">Posts list</button></a>
        <a href="{{route('posts.edit', $post->id)}}"><button type="button" class="btn btn-primary">Edit</button></a>
        <form action="{{route('posts.destroy', $post->id)}}" method="POST" class="d-inline-block">
            @csrf
            @method('DELETE')
            <input type="submit" class="btn btn-danger" value="Delete">
        </form>
        
    </div>
@endsection