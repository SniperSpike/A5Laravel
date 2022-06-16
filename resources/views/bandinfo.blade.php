@extends('layouts.app')

@section('content')
<div class="container col-md-7 col-sm-12 bandInfoWrapper">
    <div class="banner">
        <h1>AC/DC</h1>
        <img src="{{asset('images/test/banner.png')}}" alt="banner photo" />
    </div>
    <div class="info">
        <div class="bio">
            <h2>biographie</h2>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore
                et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea
                rebum. Stet clita kasd gubergren, no sea takimata sanctus
                <br>
                <br>
                est Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet, consetetur adipscing elitr, sed diam nonumy
                eirmod tempor invidunt ut labore et dolore magna
            </p>
        </div>
        <div class="muziek">
            <h2>muziek</h2>
            <div id="carouselExampleControls" class="carousel slide" data-bs-interval="false">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <iframe width="100%" height="300" src="https://www.youtube.com/embed/v2AC41dglnM"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                    <div class="carousel-item">
                        <iframe width="100%" height="300" src="https://www.youtube.com/embed/l482T0yNkeo"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                    <div class="carousel-item">
                        <iframe width="100%" height="300" src="https://www.youtube.com/embed/etAIpkdhU9Q"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</div>
@endsection