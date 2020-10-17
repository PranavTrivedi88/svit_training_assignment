@extends('layout')

@section('content')
    <a href={{ url('posts/create') }} class="btn btn-primary create">Create Post</a>
    @foreach ($posts as $post)
        <img src="https://demo.themezy.com/system/resources/demo_themes/000/000/202//wp-content/uploads/sites/2/2013/10/salt-lake-74570_1280-720x340.jpg" alt="">
        <div class="title-container">
            <div>
                <h2 class="title"><a href="{{ url('posts/' . $post->id) }}">{{ $post->title }}</a></h2>
                <a href="{{ url('posts/' . $post->id . '/edit') }}" class="btn btn-warning" style="margin-left: 30px;"><i class="fa fa-edit"></i></a>
                <form method="POST" action="{{ url('posts/'. $post->id) }}" style="margin-left: 20px">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                </form>
            </div>
            <span>{{ $post->created_at }}</span>
        </div>
        <p>{{ $post->body }}</p>
    @endforeach
@endsection
