@extends('layout');

@section('content')

<h1>Add Post</h1>
<br>
<form method="POST" action="{{ url('posts') }}">
    @csrf
    <div class="form-group">
      <label>Title</label>
      <input type="text" name="title" class="form-control @error('title') error @enderror" placeholder="Enter post title">
      @error('title')
        <span class="text-danger">{{ $errors->first('title') }}</span>
      @enderror

    </div>
    <div class="form-group">
      <label>Body</label>
      <textarea name="body" class="form-control @error('body') error @enderror" cols="30" rows="5" placeholder="Enter post body"></textarea>
      @error('body')
        <span class="text-danger">{{$errors->first('body')}}</span>
      @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
