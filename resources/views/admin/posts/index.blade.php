@extends('layouts.app')

@section('content')
    <div class="container">
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
                    <a href="#" class=ml-2><button type="button" class="btn btn-primary">Edit</button></a>
                    <a href="#" class="ml-auto"><button type="button" class="btn btn-danger">Delete</button></a>
                </div>
            </div>

        @endforeach

    </div>
@endsection