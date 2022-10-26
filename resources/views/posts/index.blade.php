@extends('layouts.app')

@section('content')
    <div class="card-body">
        @auth
        <p>Welcome <b>{{ Auth::user()->name }}</b></p>
        <a class="btn btn-danger" href="{{ route('logout') }}">Logout</a>
        @endauth
        @guest
        <a class="btn btn-primary" href="{{ route('login') }}">Login</a>
        <a class="btn btn-info" href="{{ route('register') }}">Register</a>
        @endguest
    </div>
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
            Halaman : {{ $posts->currentPage() }} <br />
            Jumlah Data : {{ $posts->total() }} <br />
            Data Per Halaman : {{ $posts->perPage() }} <br />
            <div class="d-flex">
            {{ $posts->links() }}
            </div>
        </div>
    </div>

@endsection