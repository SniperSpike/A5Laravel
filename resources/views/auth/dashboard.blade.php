@extends('layouts.app')

@section('content')
<div class="container  col-sm-12 dashboardWrapper">
    <h1>Dashboard</h1>
    <h3>Mijn Bands</h3>
    <div class="bandListContainer">
        @for ($i = 0; $i < 1; $i++) 
        <a href="{{ route('edit')}}">
            <div class="bandItem">
                <p>AC/DC</p>
                <img src="{{ asset('images/test/dashboardBanner.png')}}" alt="">
            </div>
        </a>
        @endfor 
        <div class="addBandItem">
            <img src="{{ asset('images/addBand.svg') }}" alt="Add Bands">
        </div>
    </div>
</div>
@endsection