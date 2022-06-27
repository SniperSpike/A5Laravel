@extends('layouts.app')

@section('content')
<div class="container  col-sm-12 dashboardWrapper">
    <h1>Dashboard</h1>
    <h3>Mijn Bands</h3>
    <div class="bandListContainer">
        {{-- @for ($i = 0; $i < 1; $i++) 
        <a href="{{ route('edit')}}">
            <div class="bandItem">
                <p>AC/DC</p>
                <img src="{{ asset('images/test/dashboardBanner.png')}}" alt="">
            </div>
        </a>
        @endfor  --}}
    @foreach($bands as $value)
    <a href="{{ route('edit')}}">
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