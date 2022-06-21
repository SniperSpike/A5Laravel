@extends('layouts.app')

@section('content')
<div class="container  col-sm-12 verkennenWrapper">
    {{-- <div class="searchBar">
        <input type="text" placeholder="Zoek door onze bibliotheek...">
        <button>
            <img src="{{asset('images/search.svg')}}" />
        </button>
    </div> --}}
    <form action="{{route('verkennen')}}" class="searchBar">
        <input type="text" name="query" placeholder="Zoek door onze bibliotheek...">
        <button>
            <img src="{{asset('images/search.svg')}}" alt="">
        </button>
    </form>
    <h3>Onze bibliotheek</h3>
    <div class="verkenItems">
        @for ($i = 0; $i < 10; $i++)
            <a href="{{route('bandinfo')}}">
                <div class="itemContainer">
                    <div class="item">
                    </div>
                    <p>AC/DC</p>
                </div>
            </a>
        @endfor
    </div>
</div>
@endsection