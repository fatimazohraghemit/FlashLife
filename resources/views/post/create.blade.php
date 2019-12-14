@extends('layouts.myapp')

@section('content')
    <fieldset>
        @error('post_content')
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            {{ $message }}
        </div>
        @enderror

        <legend>Add Post</legend>
        <form action="{{ route('post.store') }}" method="post" enctype=multipart/form-data>
            @include('post.form')
        </form>
    </fieldset>
@endsection