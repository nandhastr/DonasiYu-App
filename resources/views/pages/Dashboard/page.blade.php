@extends('components.layouts.MainLayout')
@section('content')

    @include('components.Carousel.index', ['carouselItem' => $carouselItem])

    <div class="d-flex justify-content-center align-items-center content-dashboard">
        <h1 class="text-umum font-weight-bold">Ulurkan Tangan Anda Melalui Kami</h1>
    </div>
    <div class="d-flex justify-content-center align-items-center content-dashboard px-5 mb-5">
       @include('components.Card.index', ['cardItem' => $cardItem])
    </div>


@endsection