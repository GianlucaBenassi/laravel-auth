@extends('layouts.app')

@section('content')
    <div class="container">

        <h1 class="text-center mt-3">Posts list</h1>
        <a href="{{route('posts.create')}}"><button type="button" class="btn btn-success">Add post</button></a>

        @foreach ($posts as $post)
            
            <div class="card my-5">
                <div class="card-body">
                    <h3 class="card-title">{{$post->title}}</h3>
                    @if ($post->published == 0)
                        <span class="badge badge-secondary">Draft</span>
                    @else
                        <span class="badge badge-success">Published</span>
                    @endif
                    <span class="d-block">Created: {{$post->created_at}}</span>
                </div>
                <div class="card-footer d-flex">
                    <a href="{{route('posts.show', $post->id)}}"><button type="button" class="btn btn-info">Info</button></a>
                    <a href="{{route('posts.edit', $post->id)}}" class=ml-2><button type="button" class="btn btn-primary">Edit</button></a>
                    <form action="{{route('posts.destroy', $post->id)}}" method="POST" class="ml-auto">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger" value="Delete">
                    </form>
                </div>
            </div>

        @endforeach

    </div>
@endsection