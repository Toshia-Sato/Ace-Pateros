<title>ACE MEDICAL CENTER PATEROS</title>

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center bg-dark">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner align-center fluid">
                <div class="carousel-item active">
                <img class="d-block w-100" src="\storage\uploads\Slide1.PNG" alt="First slide">
                </div>
                <div class="carousel-item">
                <img class="d-block  w-100" src="\storage\uploads\Slide2.PNG" alt="Second slide">
                </div>
                <div class="carousel-item">
                <img class="d-block  w-100" src="\storage\uploads\Slide3.PNG" alt="Third slide">
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
    <br><br><hr>


    <div class="container d-flex p-10">
        <div class="logo-image ml-2">
            <a href="https://www.facebook.com/acemedicalcenterpateros" target="_blank">
            <img src="/img/logo.jpg" class="center rounded-circle img-thumbnail" style="">
            </a>
        </div>
        <div class="logo-image">
            <a href="https://www.facebook.com/acemedicalcenterpateros" target="_blank">
            <img src="/img/logo.jpg" class="center rounded-circle img-thumbnail" style="">
            </a>
        </div>
        <div class="logo-image">
            <a href="https://www.facebook.com/acemedicalcenterpateros" target="_blank">
            <img src="/img/logo.jpg" class="center rounded-circle img-thumbnail" style="">
            </a>
    </div>
</div>


@endsection
