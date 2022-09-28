@extends('layouts.app')

@section('content')

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            @if (\Session::has('success'))
                <div class="alert alert-success">
                    {{!! \Session::get('success') !!}}
                </div>
            @endif
            <a href="{{ route('posts.create') }}">Create New Post</a>
            <h1>Blog Posts</h1>
            @if(count($posts)>0)
                @foreach ($posts as $post)
                <div class="well">
                    <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                    <small>Tanggal:{{$post->created_at}}</small>
                </div>
                @endforeach
            @else
                <h3>Tidak ada data.</h3>
            @endif
        </div>
    </div>

@endsection