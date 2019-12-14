@extends('layouts.myapp')

@section('content')

@if (session('successDelete'))
    <div class="alert alert-danger alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        {{ session('successDelete') }}
    </div>
    <br>
  @endif
  
    <h2>What Others Say ?</h2>
    <ul class="list-group">
        @foreach ($posts as $post)
            <li class="list-group-item">
            <a href="{{ route('post.show', ['post' => $post->id]) }}">
                    {{ $post->post_content }} Posted On : {{ $post->post_date }}
            </a>
            </li>
        @endforeach
    </ul>
    
    <a href="{{ route('post.create') }}">
        <button class="btn btn-primary">Add Post</button>
    </a>
    
@endsection