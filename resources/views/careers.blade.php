@extends('layouts.app')

@section('content')


<div class="container">

<div class="jumbotron text-white" style="background:#800000; color:#ffffff; height:150px;">
  <div class="container">
    <h1 class="align-middle text-center">Careers</h1>
  </div>
</div>

    <div class="row justify-content-center">

    <div class="row justify-content-center bg-dark">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner align-center fluid">
                <div class="carousel-item active">
                <img class="d-block w-100" src="\storage\1 (1).jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                <img class="d-block  w-100" src="\storage\1 (3).jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>

        </div>

    </div>
        <div class="col-md-8">
    </div>
</div>
@endsection
