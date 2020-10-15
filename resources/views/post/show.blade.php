@extends('layout')

@section('content')
    <img src="https://demo.themezy.com/system/resources/demo_themes/000/000/202//wp-content/uploads/sites/2/2013/10/salt-lake-74570_1280-720x340.jpg" alt="">
    <div class="title-container">
        <h2 class="title">{{ $post->title }}</h2>
        <span>{{ $post->created_at }}</span>
    </div>
    <p>{{ $post->body }}</p>
@endsection
