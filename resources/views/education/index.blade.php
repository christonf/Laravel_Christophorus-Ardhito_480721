@extends('layouts.app2')

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
            <a class="btn btn-outline-light btn-lg" href="/about" role="button">See My Bio</a>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!--Education Page -->
  <br><br><h1><b><center>EDUCATION<br>
  @if(count($education)>0)
    @foreach ($education as $edu)
        <div class="edu" style="margin-left:30px; margin-right:30px;">
            <div class="alert alert-dark" role="alert" style="margin-top:20px;">
            A simple dark alert with <a href="/education/{{$edu->id}}" class="alert-link">{{$edu->title}}</a>. Give it a click if you like.
            </div>
        </div>
    @endforeach
    @else

    @endif
</body>
@endsection