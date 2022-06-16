@extends('layouts.app')

@section('content')
<div class="container  col-sm-12 verkennenWrapper">
    <div class="searchBar">
        <input type="text" placeholder="Zoek door onze bibliotheek...">
        <button>
            <img src="{{asset('images/search.svg')}}" />
        </button>
    </div>
</div>
@endsection