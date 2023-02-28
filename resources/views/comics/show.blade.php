@extends('layouts.app')

@section('content')
<div class="container my-5">

    <figcaption class="my-3">
        <img src="{{ $comics->thumb }}" alt="{{ $comics->title }}" class="img-fluid" width="200">
    </figcaption>
    <h1 class="text-primary">{{ $comics->title }}</h1>
    
    <div class="d-flex justify-content-between">
        <div>
            <div class='bg-success d-flex justify-content-between text-light p-2'>
                <div class='d-flex'>
                    <p class="m-0">U.S.Price: <strong class='comic-price'>{{ $comics->price }}</strong></p>
                </div>
                <div class='availability'>
                    <strong>AVAILABLE</strong>
                    <span class="ps-2 ms-2 border-start" type="button">Check Availability &#9660;</span> 
                </div>
            </div>
            <div>
                <p>{{ $comics->description }}</p>
            </div>
        </div>
        <figure class="ms-5">
            <h6 class="text-secondary text-end">ADVERTISMENT</h6>
            <img src="{{ asset('img/adv.jpg') }}" class="img-fluid" width="1000" type="button">
        </figure>
    </div>
      
    <div class="d-flex align-items-start border-top my-1 py-3">
        <div class="talent me-5">
            <h3 class="text-primary">Talent</h3>
            <p class="text-primary">Art by: </p>
            <span>{{ $comics->artists }}</span>
            <p class="mt-3 text-primary">Writer by: </p>
            <span>{{ $comics->writers }}</span>
        </div>
        <div class="mx-5">
            <h3 class="text-primary">Specs</h3>
            <div class="specs">
                <p><strong class="text-primary">Series : </strong>{{ $comics->series }}</p>
                <p><strong class="text-primary">U.S.Price: </strong> {{ $comics->price }}</p>
                <p><strong class="text-primary">Series : </strong>{{ $comics->sale_date }}</p>
            </div>
        </div>
    </div>
</div>
    @endsection