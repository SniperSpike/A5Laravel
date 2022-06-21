@extends('layouts.app')

@section('content')
<div class="homecontent-wrapper">
    <div class="personalised-wrapper">
        <div class="cta-container">
            <h1>Gepersonaliseerde persmap met één druk op de knop! </h1>
            @if(!Auth::check())
            <a href="{{route('register')}}"><button class="cta-btn">Aan de slag</button></a>
            @endif
            @if(Auth::check())
            <a href="{{route('dashboard')}}"><button class="cta-btn">Naar dashboard</button></a>
            @endif
            <div class="searchBar">
                <input type="text" placeholder="Zoek door onze bibliotheek...">
                <button>
                    <img src="{{asset('images/search.svg')}}" />
                </button>
            </div>
        </div>
        <img src="{{asset('images/calltoaction.svg')}}" alt="cta-banner">
    </div>

    <div class="about-wrapper">
        <article>
            <h1>Over EPK Media</h1>
            <p>
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.
                <br><br>
                eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem . 
            </p>
        </article>
        <img src="{{asset('images/about.svg')}}" alt="">
    </div>
    <div class="inspiratie-wrapper">
        <div class="tiles-container">
            <h1>Inspiratie</h1>
            <div class="tiles">
                @for($i = 0; $i < 10; $i++)
                    <img src="{{asset('images/test/inspiratie.png')}}">
                @endfor
            </div>
        </div>
    </div>
    @if (!Auth::check()))
    <div class="interesse-wrapper">
        <div class="interesse">
            <h1>Geïnteresseerd?</h1>
            <p>Maak dan nu een account en begin met het ontwerpen van jouw ideale penmap!</p>
            <a href="{{route('register')}}">Meld je gratis aan</a>
        </div>
    </div>
    @endif
</div>
@endsection
