@extends('layouts.app')

@section('content')
<div class="container  col-sm-12 verkennenWrapper">
    {{-- <div class="searchBar">
        <input type="text" placeholder="Zoek door onze bibliotheek...">
        <button>
            <img src="{{asset('images/search.svg')}}" />
        </button>
    </div> --}}
    {{-- LATER VOOR DATABSE  (Bronvideo: https://www.youtube.com/watch?v=CKwSW3sEIp8&ab_channel=EasyLearning) --}}
    <form action="{{route('verkennen')}}" method="GET" class="searchBar">
        <input type="text" name="search" placeholder="Zoek door onze bibliotheek...">
        <button>
            <img src="{{asset('images/search.svg')}}" alt="">
        </button>
    </form>
    <h3>Onze bibliotheek</h3>
    <div class="verkenItems">
        {{-- @for ($i = 0; $i < 10; $i++)
            <a href="{{route('bandinfo')}}">
                <div class="itemContainer">
                    <div name="item" class="item">
                    </div>
                    <p id="bandname">AC/DC</p>
                </div>
            </a>
        @endfor --}}
        {!!  Form::open(['method'=>'GET','url'=>'/bands/','class'=>'searchBar','role'=>'search'])  !!}
        @csrf
            <input type="text" name="keyword" placeholder="Zoek door onze bibliotheek...">
            <button type="submit">
                <img src="{{asset('images/search.svg')}}" alt="">
            </button>
        {!! Form::close() !!}

        @foreach($bands as $band)
            <a href="{{route('bandinfo')}}">
                <div class="itemContainer">
                    <div name="item" class="item">
                    </div>
                    <p>{{$band->bandnaam}}</p>
                </div>
            </a>
        @endforeach
    </div>
</div>
@endsection