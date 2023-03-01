@php
$links = config('menu')
@endphp


<header class="my bg-custom">
    <div class="container flex-header">
        <figure>
            <img src="{{ asset('img/dc-logo.png') }}" alt="">
        </figure>
        <ul class="m-0">
            @foreach($links as $link)
            <li><a class="@if (Route::is($link['route_name'])) active @endif" href="{{  route($link['route_name'])  }}">{{$link['title']}}</a></li>
            @endforeach
        </ul>
        <input type="text" name="serch" placeholder="serch">
    </div>
</header>