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
            {!! Form::open(['method'=>'GET','url'=>'/verkennen/','class'=>'searchBar','role'=>'search'])  !!}
                <input type="text" name="keyword" placeholder="Zoek door onze bibliotheek...">
                <button>
                    <img src="{{asset('images/search.svg')}}" />
                </button>
            {!! Form::close() !!}
        </div>
        <img src="{{asset('images/calltoaction.svg')}}" alt="cta-banner">
    </div>

    <div class="about-wrapper">
        <article>
            <h1>Over EPK Media</h1>
            <p>
                EPK Media, kort voor Electronic Band Press is een platform waar bands diverse pagina's kunnen aanmaken en de pagina naar eigen smaak inrichten om hun muziek te promoten.
                <br><br>
                Deze pagina's kunnen gedeeld worden met andere bandleden om zo een pagina gezamenlijk te kunnen beheren. Op deze pagina's staat onder andere een korte biografie met foto's en muziekvideo's.
                Het idee is hierbij dat bands zichzelf eenvoudig kunnen promoten en hun muziek delen met eventuele liefhebbers. 
            </p>
        </article>
        <img src="{{asset('images/about.svg')}}" alt="">
    </div>
    <div class="inspiratie-wrapper">
        <div class="tiles-container">
            <h1>Inspiratie</h1>
            <div class="tiles">
                @foreach($bands as $value)
                <a href="{{url('bandinfo/'. $value->id)}}">
                    <div name="item" style="background-image:url({{$value->library}});" class="item"></div>
                </a>
                @endforeach
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
