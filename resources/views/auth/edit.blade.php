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
    <link href="{{ asset('css/edit.css')}}" rel="stylesheet">

</head>
<body>
    <div id="app">
        {{-- overlay voor edit opties --}}
        <div id="overlay">
            <div class="top">
                <div class="settingsBox">
                    <div class="header">
                        <img src="{{asset('images/icons/feather-settings.svg')}}" alt="settings icon">
                        <h3>Band Instellingen</h3>
                    </div>
                    <div class="contentBox">
                        <div class="inputBox">
                            <label for="bandNaam" class="col-form-label">Band Naam</label>
                            <input id="bandNaam" name="bandNaam" type="text" value="AC/DC">
                        </div>
                    </div>
                </div>
                <div class="settingsBox">
                    <div class="header">
                        <img src="{{asset('images/icons/material-color-lens.svg')}}" alt="settings icon">
                        <h3>Kleur Instellingen</h3>
                    </div>
                    <div class="contentBox">
                        <div class="colorContainer">
                            <input type="color" class=" colorPicker" id="achtergrondColor" value="#FFFFFF" title="Choose your color">
                            <h3>Achtergrond kleur</h3>
                        </div>
                        <div class="colorContainer">
                            <input type="color" class=" colorPicker" id="textColor" value="#433DA0" title="Choose your color">
                            <h3>Text kleur</h3>
                        </div>
                    </div>
                </div>
                <div class="settingsBox">
                    <div class="header">
                        <img src="{{asset('images/icons/awesome-youtube.svg')}}" alt="settings icon">
                        <h3>Video Urls's</h3>
                    </div>
                    <div class="contentBox">
                        <div class="inputBox">
                            <label for="video1" class="col-form-label">Video 1</label>
                            <input id="video1" name="video1" type="text" value="https://www.youtube.com/embed/v2AC41dglnM">
                        </div>
                        <div class="inputBox">
                            <label for="video2" class="col-form-label">Video 2</label>
                            <input id="video2" name="video2" type="text" value="https://www.youtube.com/embed/l482T0yNkeo">
                        </div>
                        <div class="inputBox">
                            <label for="video3" class="col-form-label">Video 3</label>
                            <input id="video3" name="video3" type="text" value="https://www.youtube.com/embed/etAIpkdhU9Q">
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom">
                <button class="editBtn btn-opslaan">Opslaan</button>
                <a href="{{route('dashboard')}}"><button class="editBtn btn-annuleren">Annuleren</button></a>
            </div>
        </div>

        <nav class="navbar sticky-top navbar-expand-md navbar-light bg-white">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{__('EPK Media')}}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
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
                </div>
            </div>
        </nav>

        <main class="py-4 footerfix">
            <div class="container col-md-7 col-sm-12 editWrapper">
                <div id="bandBanner" class="banner" style="background:url({{url('images/test/banner.png')}}) no-repeat center center;">
                    <h1>AC/DC</h1>
                    <div class="banner-edit">
                        <input type="file" id="editBanner" accept=".png, .jpg, .jpeg"/>
                        <label for="editBanner">Edit</label>
                    </div>
                </div>
                <div class="info">
                    <div class="bio">
                        <h2>biographie</h2>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore
                            et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea
                            rebum. Stet clita kasd gubergren, no sea takimata sanctus
                            <br>
                            <br>
                            est Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet, consetetur adipscing elitr, sed diam nonumy
                            eirmod tempor invidunt ut labore et dolore magna
                        </p>
                    </div>
                    <div class="muziek">
                        <h2>muziek</h2>
                        {{-- <div id="carouselExampleControls" class="carousel slide" data-bs-interval="false">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <iframe width="100%" height="300" src="https://www.youtube.com/embed/v2AC41dglnM"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                                <div class="carousel-item">
                                    <iframe width="100%" height="300" src="https://www.youtube.com/embed/l482T0yNkeo"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                                <div class="carousel-item">
                                    <iframe width="100%" height="300" src="https://www.youtube.com/embed/etAIpkdhU9Q"
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
                        </div> --}}
                    </div>
                </div>
            </div>
            <footer>
                <span>Copyright © 2022</span>
            </footer>
        </main>
    </div>
</body>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script>
    function readURL(input) {
        if(input.files && input.files[0]) {
            let reader = new FileReader();
            reader.onload = function (e) {
                $('#bandBanner').css('background', 'url(' + e.target.result + ') no-repeat center center');
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#editBanner").change(function() {
        readURL(this);
    })
</script>
</html>
