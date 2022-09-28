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
  <br><br><h1><b><center>PROJECTS<br>
  <div class="container">
    <div class="row">
        <div class="card" style="width: 23rem; margin:20px;">
            <img src="https://thumbs.dreamstime.com/b/projects-concept-black-chalkboard-d-rendering-handwritten-top-view-office-desk-lot-business-office-supplies-79906734.jpg" class="card-img-top">
                <div class="card-body">
                <h2 class="card-title" style="color: black;">Project 1</h2>
                <p style="font-size:20px;">timestamp</p>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Read More ></a>
                </div>
        </div>
        <div class="card" style="width: 23rem; margin:20px;">
            <img src="https://thumbs.dreamstime.com/b/projects-concept-black-chalkboard-d-rendering-handwritten-top-view-office-desk-lot-business-office-supplies-79906734.jpg" class="card-img-top">
                <div class="card-body">
                <h2 class="card-title" style="color: black;">Project 2</h2>
                <p style="font-size:20px;">timestamp</p>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Read More ></a>
                </div>
        </div>
        <div class="card" style="width: 23rem; margin:20px;">
            <img src="https://thumbs.dreamstime.com/b/projects-concept-black-chalkboard-d-rendering-handwritten-top-view-office-desk-lot-business-office-supplies-79906734.jpg" class="card-img-top">
                <div class="card-body">
                <h2 class="card-title" style="color: black;">Project 3</h2>
                <p style="font-size:20px;">timestamp</p>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Read More ></a>
                </div>
        </div>
    </div>
  </div>
</body>
@endsection