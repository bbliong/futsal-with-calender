@extends('layouts.home')

@section('body')
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
    <li data-target="#myCarousel" data-slide-to="5"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <center><img src="assets/img/1.jpeg"></center>
    </div>

    <div class="item">
     <center><img src="assets/img/2.jpeg"></center>
    </div>

    <div class="item">
      <center><img src="assets/img/3.jpeg"></center>
    </div>

    <div class="item">
      <center><img src="assets/img/4.jpeg"></center>
    </div>

    <div class="item">
      <center><img src="assets/img/5.jpeg"></center>
    </div>

    <div class="item">
      <center><img src="assets/img/6.jpeg"></center>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

@endsection