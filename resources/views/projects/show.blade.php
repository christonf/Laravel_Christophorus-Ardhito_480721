@extends('layouts.app2')

@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1><strong><center>{{$projects->title}}</center></strong></h1>
            <small><center>Tanggal: {{$projects->created_at}}</center></small>
            <h3>{{$projects->description}}</h3><br>
            <center><a href="/projects/{{$projects->id}}/edit" class="btn btn-primary">Edit</a>
        </div>
        <center><form action="{{ route('projects.destroy', $projects->id) }}" method="POST">
            @method('DELETE')
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{$projects->id }}"> <br />
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>

@endsection