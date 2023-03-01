@extends('layouts.app')

@section('content')
<main>
    <section id="comics" class="my">
        <div class="container">
            <ul>
                @foreach($comics as $comic)
                <li>
                    <a href="{{ route('comics.show', $comic['id']) }}">
                        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                    </a>
                    <p>{{$comic['title']}}</p>
                </li>
                @endforeach
            </ul>
        </div>
        <div class="text-center">
            <a class="btn btn-primary">SING-UP NOW</a>
            <a class="btn btn-primary ms-2">ADD COMICS</a>
        </div>
    </section>

    <section id="icon" class="my">
        <div class="container flex-icon">
            <figcaption>
                <img class="custom-img" src="{{ asset('img/buy-comics-digital-comics.png') }}" alt="">
                <span>DIGITAL COMICS</span>
            </figcaption>
            <figcaption>
                <img class="custom-img" src="{{ asset('img/buy-comics-merchandise.png') }}" alt="">
                <span>DC MERCHANDISE</span>
            </figcaption>
            <figcaption>
                <img class="custom-img" src="{{ asset('img/buy-comics-subscriptions.png') }}" alt="">
                <span>SUBSCRIPTION</span>
            </figcaption>
            <figcaption>
                <img class="custom-img position" src="{{ asset('img/buy-comics-shop-locator.png') }}" alt="">
                <span>COMICS SHOP LOCATOR</span>
            </figcaption>
            <figcaption>
                <img class="custom-img" src="{{ asset('img/buy-dc-power-visa.svg') }}" alt="">
                <span>DC POWER VISA</span>
            </figcaption>
        </div>
    </section>
</main>
@endsection