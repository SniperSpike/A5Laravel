@extends('layouts.app')

@section('content')
<div class="homecontent-wrapper">
    <div class="personalised-wrapper">
        <img src="{{asset('images/calltoaction.svg')}}" alt="">
    </div>

    <div class="about-wrapper">
        <article>
            <h1>Over EPK Media</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tellus ligula, gravida ut velit eu, molestie interdum lacus. Proin in lacus risus. Phasellus odio est, venenatis in orci non, aliquam congue lacus. Aliquam et nisi eu urna consectetur malesuada. In hac habitasse platea dictumst. Nam commodo nibh vel elit molestie, ac malesuada mauris congue. Donec congue nibh justo, in porta ex finibus vel. Cras purus augue, mattis eget justo non, fermentum fermentum nulla. Vivamus vestibulum, urna ut aliquet varius, elit est consectetur neque, in molestie nisi ex eget libero. Integer molestie lorem vitae ante semper, id accumsan ligula rhoncus. Vivamus rhoncus nibh nulla, sit amet scelerisque orci facilisis et. Nulla velit neque, dictum vel gravida sit amet, dignissim quis massa. Etiam elementum, diam eget congue finibus, augue dui rhoncus lorem, sodales accumsan urna metus pulvinar risus.
            </p>
        </article>
        <img src="{{asset('images/about.svg')}}" alt="">
    </div>
    <div class="inspiratie-wrapper">
        <div class="tiles-container">
            <h1>Inspiratie</h1>
            <div class="tiles">
                @for($i = 0; $i < 10; $i++)
                    <img src="{{asset('images/test/inspiratie.png')}}">
                @endfor
            </div>
        </div>
    </div>
</div>
@endsection
