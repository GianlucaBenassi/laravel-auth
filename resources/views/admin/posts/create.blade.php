@extends('layouts.app')

@section('content')
    <div class="container">

        <h1 class="text-center mb-3">Add new post</h1>

        <form action="{{route('posts.store')}}" method="POST" class="mb-5">
            @csrf

            {{-- post title --}}
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Add title">
            </div>

            {{-- post content --}}
            <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control" id="content" name="content" placeholder="Add post content" rows="10"></textarea>
            </div>

            {{-- post published --}}
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="published" name="published">
                <label class="form-check-label" for="published">Public</label>
            </div>

            {{-- submit button --}}
            <button type="submit" class="btn btn-primary">Add post</button>

        </form>

        <a href="{{route('posts.index')}}"><button type="button" class="btn btn-dark">Posts list</button></a>
    </div>
@endsection