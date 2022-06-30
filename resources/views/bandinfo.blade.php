@foreach($band as $value)
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ _('EPK Media')}}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bandinfo.css')}}" rel="stylesheet">




</head>

<body style="background-color: {{$value->achtergrondkleur}}">
    <div id="app">
        <nav class="navbar sticky-top navbar-expand-md navbar-light bg-white" style="background-color: {{$value->achtergrondkleur}} !important;">
            <div class="container">
                <a class="navbar-brand" style="color: {{$value->themakleur}} !important;" href="{{ url('/') }}">
                    {{__('EPK Media')}}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ url('/') }}">{{ __('Home') }}</a>
                        </li>
                        <li class="nav-item {{ Request::is('verkennen') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('verkennen') }}">{{ __('Verkennen') }}</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a href="{{ route('login') }}"><button type="button" class="btn btn-login"><img
                                        class="loginIcon" src="{{asset('images/loginBtn.svg')}}" /> Login</button></a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4 footerfix">
        <div class="container col-md-7 col-sm-12 bandInfoWrapper">
            <div class="banner">
                <h1>{{$value->bandnaam}}</h1>
                <img src="{{$value->banner}}" alt="banner photo" />
            </div>
            <div class="info">
                <div class="bio">
                    <h2 style="color: {{$value->themakleur}}">biografie</h2>
                    <p style="color: {{$value->tekstkleur}} !important;">{{$value->biografie}}</p>
                </div>
                <div class="muziek">
                    <h2 style="color: {{$value->themakleur}}">muziek</h2>
                    <div id="carouselExampleControls" class="carousel slide" data-bs-interval="false">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <iframe width="100%" height="300" src="{{$value->url1}}"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                            <div class="carousel-item">
                                <iframe width="100%" height="300" src="{{$value->url2}}"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                            <div class="carousel-item">
                                <iframe width="100%" height="300" src="{{$value->url3}}"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <footer style="background-color: {{$value->themakleur}};" >
            <span>Copyright © 2022</span>
        </footer>
    </main>
</div>

</body>
@endforeach
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<script>
    function rgbToHexBasedOnBg(bgColor, lightColor, darkColor) {
        let rgb = bgColor.substring(4, bgColor.length-1)
        .replace(/ /g, '')
        .split(',');
        return (((rgb[0] * 0.299) + (rgb[1] * 0.587) + (rgb[2] * 0.114)) > 186) ?
            darkColor : lightColor;
    }

    const color = document.querySelector('footer');
    const colorSpan = document.querySelector('footer>span');
    colorSpan.style.color = rgbToHexBasedOnBg(color.style.backgroundColor, '#FFFFFF', '#000000');

    // zorgt voor de hover color op de nav-items
    var r = document.querySelector(':root');
    r.style.setProperty('--primaryColor', color.style.backgroundColor);
</script>
</html>