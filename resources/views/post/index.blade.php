@extends('layout')

@section('content')
    <a href={{ url('posts/create') }} class="btn btn-primary create">Create Post</a>
    @foreach ($posts as $post)
        <img src="https://demo.themezy.com/system/resources/demo_themes/000/000/202//wp-content/uploads/sites/2/2013/10/salt-lake-74570_1280-720x340.jpg" alt="">
        <div class="title-container">
            <h2 class="title"><a href="{{ url('posts/' . $post->id) }}">{{ $post->title }}</a></h2>
            <span>{{ $post->created_at }}</span>
        </div>
        <p>{{ $post->body }}</p>
    @endforeach
@endsection
