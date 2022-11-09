@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <h1>Edit Deskripsi Project</h1>
        <form action="{{ route('projects.update', $projects->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
            {{ csrf_field() }}
            <div class="form-group">
                <label for="input-file">File input</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="input-file" name="picture">
                        <label class="custom-file-label" for="input-file">Choose file</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" aria-describedby="emailHelp" name="title" value="{{$projects->title}}">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" rows="5" name="description">{{$projects->description}}</textarea>
            </div>
            <input type="hidden" name="id" value="{{ $projects->id }}">
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</div>

@endsection