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

    <!-- Cropper -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.css">

</head>

<body>
    <div id="loading">
        <img src="{{asset('images/loading.svg')}}" alt="Loading...">
    </div>
    <div id="app">
        <form action="{{url('edit/submit')}}" method="POST">
            @csrf
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
                            <input id="bandNaam" name="bandNaam" type="text" required>
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
                            <input type="color" class=" colorPicker" name="achtergrondKleur" id="achtergrondColor" value="#FFFFFF"
                                title="Choose your color">
                            <h3>Achtergrond kleur</h3>
                        </div>
                        <div class="colorContainer">
                            <input type="color" class=" colorPicker" name="textKleur" id="textColor" value="#1a2542"
                                title="Choose your color">
                            <h3>Text kleur</h3>
                        </div>
                        <div class="colorContainer">
                            <input type="color" class="colorPicker" name="themaKleur" id="themeColor" value="#433DA0"
                            title="Choose your color">
                            <h3>Thema kleur</h3>
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
                            <input id="video1" name="video1" type="text">
                        </div>
                        <div class="inputBox">
                            <label for="video2" class="col-form-label">Video 2</label>
                            <input id="video2" name="video2" type="text">
                        </div>
                        <div class="inputBox">
                            <label for="video3" class="col-form-label">Video 3</label>
                            <input id="video3" name="video3" type="text">
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom">
                <button class="editBtn btn-opslaan">Opslaan</button>
                <a class="editBtn btn-annuleren" href="{{route('dashboard')}}">Annuleren</a>
            </div>
        </div>

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
                </div>
            </div>
        </nav>

        <main class="py-4 footerfix">
            <div class="container col-md-7 col-sm-12 editWrapper">
                <div id="bandBanner" class="banner"
                    style="background:url({{url('images/placeholder.jpg')}}) no-repeat center center;">
                    <h1 id="band-title"></h1>
                    <div class="banner-edit">
                        <input type="file" name="banner" id="editBanner" />
                        <input type="hidden" name="base64data" id="base64data" />
                        <label for="editBanner">Edit</label>
                    </div>
                </div>
                <div class="info">
                    <div class="bio">
                        <header class="bio_header">
                            <h2>biografie</h2>
                            <span class="bio_edit">Edit</span>
                        </header>
                        <textarea id="bio_textarea" name="biografie" readonly>Druk op edit om de tekst aan te passen.</textarea>
                    </div>
                    <div class="muziek">
                        <h2>muziek</h2>

                        <!-- Button trigger modal -->
                        <button type="button" id="popupBtn" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
        
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false"
                            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  
                                <div class="modal-content modal-dialog modal-xl">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Band banner croppen</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="img-container">
                                            <div class="row">
                                                <div class="col-mid-11">
                                                    <img id="image" src="" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button id="crop" type="button" class="btn btn-cropImage" data-bs-dismiss="modal">Save changes</button>
                                    </div>
                                </div>
                        </div>
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
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleControls" data-bs-slide="next">
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
</form>
</body>
<!-- Scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.js"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script>
    // in samenwerking met:
    // - stack overflow 
    // - VM Learning Hub (Youtuber)
    $.fn.hasAttr = function(name) {  
        return this.attr(name) !== undefined;
    };  

    $('documment').ready(function () {
        $('#loading').css('opacity', '0');
        $('body').css('overflow', 'auto');

        const $modal = $('#exampleModal');
        const image = document.getElementById('image');
        let cropper;

        function readURL(input) {
            if (input.files && input.files[0]) {
                let reader = new FileReader();
                reader.onload = function (e) {
                    $('#bandBanner').css('background', 'url(' + e.target.result + ') no-repeat center center');
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
      

        $('body').on("change", "#editBanner", function (e) {
            var files = e.target.files;
            var done = function (url) {
                image.src = url;
                // scuffed fix omdat Ik in geen 100 jaar $('#modalnaam').modal('show') werkend kon krijgen. F**k Bootstrap v5.2
                $('#popupBtn').click();
            };
            var reader;
            var file;
            var url;
            if (files && files.length > 0) {
                file = files[0];
                if (URL) {
                    done(URL.createObjectURL(file));
                } else if (FileReader) {
                    reader = new FileReader();
                    reader.onload = function (e) {
                        done(reader.result);
                    };
                    reader.readAsDataURL(file);
                }
            }
        });

        var myModal = document.getElementById('exampleModal')

        myModal.addEventListener('shown.bs.modal', function () {
            cropper = new Cropper(image, {
                aspectRatio: 19 / 7,
                viewMode: 3,
                responsive: true,
            });
        })
        myModal.addEventListener('hidden.bs.modal', function () {
            cropper.destroy();
            cropper = null;
        })

        $('body').on('click', '#crop', function () {

            canvas = cropper.getCroppedCanvas({
                width: 1272,
                height: 350,
            });

            canvas.toBlob(function (blob) {
                url = URL.createObjectURL(blob);
                reader = new FileReader();
                reader.readAsDataURL(blob);
                reader.onloadend = function(){
                    let base64data = reader.result;
                    $('#bandBanner').css('background', 'url(' + base64data + ') no-repeat center center');
                    $('#base64data').val(base64data);
                    readURL(base64data);
                }
            })
        })



        $(".bio_edit").on('click', function(){
            if($('#bio_textarea').hasAttr("readonly")){
                $('#bio_textarea').removeAttr('readonly');
                $('.bio_edit').addClass('active');
                $('.bio_edit').html('Save');
            }else{
                $('#bio_textarea').attr('readonly', true);
                $('.bio_edit').removeClass('active');
                $('.bio_edit').html('Edit');
            }

        });
        $('textarea').on('change', function(){
            $("textarea").height( $("textarea")[0].scrollHeight );
        });
        
        $("#bandNaam").on("input", function() {
            $("#band-title").html($(this).val());
        });

        // zorgt voor de hover color op de nav-items
        var r = document.querySelector(':root');
        r.style.setProperty('--primaryColor', color.style.backgroundColor);
    })
</script>

</html>