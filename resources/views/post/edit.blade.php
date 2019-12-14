@extends('layouts.myapp')

@section('content')
    <fieldset>
        <legend>Edit Post <strong>{{ $post->post_content }} </strong></legend>
        <form action="{{ route('post.update', ['post' => $post->id]) }}" method="post" enctype=multipart/form-data>
            @method('PATCH')
            @include('post.form')
        </form>
    </fieldset>
@endsection