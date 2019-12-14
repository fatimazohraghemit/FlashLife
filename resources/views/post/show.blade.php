@extends('layouts.myapp')

@section('content')
    <br><br>
    @if (session('successNewPost'))
        <div class="alert alert-success alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            {{ session('successNewPost') }}
        </div>
        <br>
    @endif
    @if (session('successUpdatePost'))
        <div class="alert alert-success alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            {{ session('successUpdatePost') }}
        </div>
        <br>
    @endif
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">{{ $post->post_content}}</h3>
        </div>
    
        <div class="panel-footer py-2">
                <div class="row">
                    <a href="{{ route('post.edit', ['post'=> $post->id]) }}" class="btn btn-info">
                        Edit
                    </a>&nbsp;
                    <form action="{{ route('post.destroy', ['post'=> $post->id]) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </div>
            </div>
    </div>
@endsection