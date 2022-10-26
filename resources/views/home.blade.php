@extends('layouts.app2')

@section('content')
<body>
  <header>
    <!--Landing Page -->
    <br><div class="p-5 text-center bg-image" style="
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
  <!--About Page -->
  <br><br><h1><b><center>ABOUT ME</h1>
  <div class="container" style="background-color:black; border-radius:50px; display:flex; flex-direction:row;">
    <div class="col-left">
      <img src="https://images.tokopedia.net/img/cache/700/VqbcmM/2020/12/16/4e829484-37a7-484c-9065-fc81e769bf69.jpg" style="height:400px; padding:40px; border-radius:50px">
    </div>
    <div class="col-right"style="color:white;">
      <h1 style="padding:40px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et malesuada fames ac turpis egestas maecenas. Neque laoreet suspendisse interdum consectetur libero. Iaculis nunc sed augue lacus viverra. Faucibus ornare suspendisse sed nisi lacus sed.
    </div>
  </div>
  <!--Education Page -->
  <br><br><h1><b><center>EDUCATION<br>
  <div class="edu" style="margin-left:30px; margin-right:30px;">
    <div class="alert alert-dark" role="alert" style="margin-top:20px;">
      A simple dark alert with <a href="#" class="alert-link">My Elementary School</a>. Give it a click if you like.
    </div>
    <div class="alert alert-danger" role="alert" style="margin-top:20px;">
      A simple dark alert with <a href="#" class="alert-link">My Middle School</a>. Give it a click if you like.
    </div>
    <div class="alert alert-warning" role="alert" style="margin-top:20px;">
      A simple dark alert with <a href="#" class="alert-link">My High School</a>. Give it a click if you like.
    </div>
    <div class="alert alert-success" role="alert" style="margin-top:20px;">
      A simple dark alert with <a href="#" class="alert-link">My University</a>. Give it a click if you like.
    </div>
  </div>
  
</body>
@endsection
