@extends('layouts.app')

@section('content')
@foreach($band as $value)
<div class="container col-md-7 col-sm-12 bandInfoWrapper">
    <div class="banner">
        <h1>{{$value->bandnaam}}</h1>
        <img src="{{$value->banner}}" alt="banner photo" />
    </div>
    <div class="info">
        <div class="bio">
            <h2>biographie</h2>
            <p>{{$value->biografie}}</p>
        </div>
        <div class="muziek">
            <h2>muziek</h2>
            <div id="carouselExampleControls" class="carousel slide" data-bs-interval="false">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <iframe width="100%" height="300" src="{{$value->url1}}"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                    <div class="carousel-item">
                        <iframe width="100%" height="300" src="{{$value->url2}}"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                    <div class="carousel-item">
                        <iframe width="100%" height="300" src="{{$value->url3}}"
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
@endforeach
@endsection