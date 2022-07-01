@extends('layouts.app')

@section('content')
<div class="container  col-sm-12 verkennenWrapper">
        {!! Form::open(['method'=>'GET','url'=>'/verkennen/','class'=>'searchBar','role'=>'search'])  !!}
        @csrf
        <input type="text" name="keyword" placeholder="Zoek door onze bibliotheek...">
        <button>
            <img src="{{asset('images/search.svg')}}" alt="">
        </button>
        {!! Form::close() !!}

    <h3>Onze bibliotheek</h3>
    <div class="verkenItems">
        @foreach($band as $value)
        <a href="{{url('bandinfo/'. $value->id)}}">
            <div class="itemContainer">
                <div name="item" style="background:url({{$value->libary}}) no-repeat center center; background-size: cover;" class="item"></div>
            </div>
            <p class="bandname">{{$value->bandnaam}}</p>
        </a>
        @endforeach
    </div>
</div>
@endsection
