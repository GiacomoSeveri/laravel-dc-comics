@php
$links = config('menu')
@endphp


<header class="my">
    <div class="container flex-header">
        <figure>
            <img src="{{ asset('img/dc-logo.png') }}" alt="">
        </figure>
        <ul>
            @foreach($links as $link)
            <li><a href="{{  route($link['route_name'])  }}">{{$link['title']}}</a></li>
            @endforeach
        </ul>
        <input type="text" name="serch" placeholder="serch">
    </div>
</header>