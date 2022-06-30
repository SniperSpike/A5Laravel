@extends('layouts.app')

@section('content')
<div class="container  col-sm-12 verkennenWrapper">
        <form action="{{url('bands.index')}}" method="post" class="searchBar">
        @csrf
        <input type="text" name="term" placeholder="Zoek door onze bibliotheek...">
        <button>
            <img src="{{asset('images/search.svg')}}" alt="">
        </button>
    </form>

    <h3>Onze bibliotheek</h3>
    <div class="verkenItems">
        @foreach($band as $value)
        <a href="{{url('bandinfo/'. $value->id)}}">
            <div class="itemContainer">
                <div name="item" style="background:url({{$value->banner}}) no-repeat center center; background-size: cover;" class="item"></div>
            </div>
            <p class="bandname">{{$value->bandnaam}}</p>
        </a>
        @endforeach
    </div>
</div>
@endsection
