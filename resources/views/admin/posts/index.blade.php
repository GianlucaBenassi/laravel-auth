@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach ($posts as $post)
            
            <div class="card my-5">
                <div class="card-header">
                    <h3>{{$post->title}}</h3>
                </div>
                <div class="card-body">
                    <p class="card-text">{{$post->content}}</p>
                    <span class="d-block">Published: {{$post->published == 0 ? "No" : "Yes"}}</span>
                    <span class="d-block">Created: {{$post->created_at}}</span>
                </div>
                <div class="card-footer d-flex">
                    <a href="#"><button type="button" class="btn btn-info">Info</button></a>
                    <a href="#" class=ml-2><button type="button" class="btn btn-primary">Edit</button></a>
                    <a href="#" class="ml-auto"><button type="button" class="btn btn-danger">Delete</button></a>
                </div>
            </div>

        @endforeach

    </div>
@endsection