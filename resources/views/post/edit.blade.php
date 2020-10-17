@extends('layout');

@section('content')

<h1>Edit Post</h1>
<br>
<form method="POST" action="{{ url('posts/' . $post->id ) }}">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label>Title</label>
      <input type="text" name="title" value="{{ $post->title }}" class="form-control" placeholder="Enter post title">
    </div>
    <div class="form-group">
      <label>Body</label>
      <textarea name="body" class="form-control" cols="30" rows="5" placeholder="Enter post body">{{ $post->body }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>

@endsection
