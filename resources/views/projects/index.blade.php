@extends('layouts.app')

@section('content')
<body>
  <header>
    <!--Landing Page -->
    <div class="p-5 text-center bg-image" style="
        background-image: url('https://mdbcdn.b-cdn.net/img/new/slides/041.webp');
        height: 400px;">
      <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
        <div class="d-flex justify-content-center align-items-center h-100">
          <div class="text-white" style="padding: 50px;">
            <h1 class="mb-3">Welcome to My Profile</h1><br>
            <h4 class="mb-3">Christophorus Ardhito Haryo Dwinanda</h4>
            <h4 class="mb-3">Gadjah Mada University Student</h4>
            <a class="btn btn-outline-light btn-lg" href="#!" role="button">See My Bio</a>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!--Projects Page -->
  <br><br><h1><b><center>PROJECTS<br><br>
  <a href="{{ route('projects.create') }}">Create New Post</a>
  @if (\Session::has('success'))
    <div class="alert alert-success">
      {!! \Session::get('success') !!}
    </div>
  @endif
  <div class="container">
    <div class="row">
        @if(count($projects)>0)
            @foreach ($projects as $project)
            <div class="card" style="width: 23rem; margin:20px;">
                <img src="https://thumbs.dreamstime.com/b/projects-concept-black-chalkboard-d-rendering-handwritten-top-view-office-desk-lot-business-office-supplies-79906734.jpg" class="card-img-top">
                    <div class="card-body">
                    <h2 class="card-title" style="color: black;">{{$project->title}}</h2>
                    <p style="font-size:15px; font-weight:normal;">{{$project->created_at}}</p>
                    <p class="card-text">{{$project->description}}</p>
                    <a href="/projects/{{$project->id}}" class="btn btn-primary">Read More ></a>
                    </div>
            </div>
            @endforeach
        @else

        @endif
    </div>
  </div>
  <center>Halaman : {{ $projects->currentPage() }} <br />
  Jumlah Data : {{ $projects->total() }} <br />
  Data Per Halaman : {{ $projects->perPage() }} <br />
  <br><div class="pagination justify-content-center">
  {{ $projects->links() }}
  </div>
</body>

@endsection