@extends('layouts.app')

@section('content')
<div class="container  col-sm-12 dashboardWrapper">
    <h1>Dashboard</h1>
    <h3>Mijn Bands</h3>
    <div class="bandListContainer">
    @foreach($bands as $value)
    <a href="{{ url('edit/'.$value->id)}}">
        <div class="bandItem" style="background:url({{$value->banner}}) no-repeat center center;">
            <p>{{$value->bandnaam}}</p>
        </div>
    </a>
    @endforeach
        <div class="addBandItem">
            <a href="{{route('edit')}}">
                <img src="{{ asset('images/addBand.svg') }}" alt="Add Bands">
            </a>
        </div>
    </div>
</div>
@endsection