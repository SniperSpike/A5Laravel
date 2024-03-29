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
    <link href="{{ asset('css/homecontent.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bandinfo.css')}}" rel="stylesheet">
    <link href="{{ asset('css/dashboard.css')}}" rel="stylesheet">
    <link href="{{ asset('css/verkennen.css')}}" rel="stylesheet">
    <link href="{{ asset('css/edit.css')}}" rel="stylesheet">

</head>

<body style="overflow: hidden">
    <div id="loading">
        <img src="{{asset('images/loading.svg')}}" alt="Loading...">
    </div>
    <div id="app">
        <nav class="navbar sticky-top navbar-expand-md navbar-light bg-white">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
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
                                <a href="{{ route('settings') }}" class="dropdown-item">{{__('Instellingen')}}</a>
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
            @yield('content')
            <footer>
                <span>Copyright © 2022</span>
            </footer>
        </main>
        {{-- <template>
            <p>Deze zooi werkt</p>
        </template> --}}
    </div>
</body>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script>
    $.fn.hasAttr = function(name) {
        return this.attr(name) !== undefined;
    };
    $('document').ready(function () {  
        $('#loading').css('opacity', '0');
        $('body').css('overflow', 'auto');
    });
</script>
</html>