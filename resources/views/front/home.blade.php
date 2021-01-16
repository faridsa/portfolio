@extends('layouts.front')
@section('content')
<header id="hero" class="bg-gray-900 w-full text-center">
    <div class="w-full swiper-container" id="slideshow">
        <div class="swiper-wrapper w-full">
            @foreach($slides as $slide)
            <div class="swiper-slide">
                <img src="{{ asset('images/slideshow/'.$slide->image_desktop) }}"
                    class="w-full swiper-lazy" alt="{{ $slide->name }}">
            </div>
            @endforeach
        </div>
    </div>
</header>
@include('partials.contact')
@stop
@section('scripts')
@parent
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>

var slideshow = new Swiper('#slideshow', {
    effect: 'fade',
    autoplay: {
        delay: 5000,
        speed: 2500,
        disableOnInteraction: false,
    },
    fadeEffect: {
        crossFade: false,
        speed: 800
    },
});
</script>
@stop