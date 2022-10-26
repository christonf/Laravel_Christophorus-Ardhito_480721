@extends('layouts.app2')

@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1><strong><center>{{$education->title}}</center></strong></h1>
            <h3><center>{{$education->created_at}}</center></h3>
            <h3><center>{{$education->major}}</center></h3>
        </div>
    </div>

@endsection