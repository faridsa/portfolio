@extends('layouts.front')
@section('content')
<header id="hero" class="bg-gray-800 w-full text-center py-8 text-white">
    <h1 class="font-bebas text-2xl">FadiSpots</h1>
</header>
<main class="pt-8 pb-4">
    <section class="container mx-auto gallery grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6">
        @if ($browser->isMobile())
            @foreach ($spots as $spot)
            <figure class="p-6 relative">
                <img class="lazyload w-full" src="{{ asset('images/icons/isologo.svg') }}" data-src="{{ asset('images/spots/'.$spot->image) }}" alt="{{ $spot->description }}">
                @if(!empty($spot->name ))
                <figcaption class="bg-gray-600 text-white p-4 w-full">{{ $spot->name }}</figcaption>
                @endif
            </figure>
            @endforeach
        @else
            @foreach ($spots as $spot)
                <a href="{{ asset('images/spots/'.$spot->image) }}" data-caption="{{ $spot->name }}" class="h-40 overflow-hidden mx-auto mb-4">
                    <img class="lazyload object-cover" src="{{ asset('images/icons/isologo.svg') }}" data-src="{{ asset('images/spots/'.$spot->image) }}" alt="{{ $spot->description }}">
                </a>
            @endforeach
        @endif
    </section>

    @include('partials.contact')

</main>
@stop
@section('scripts')
@parent
<link rel="stylesheet" href="{{ asset('css/baguetteBox.min.css') }}">
<script src="{{ asset('js/lazysizes.js') }}"></script>
<script src="{{ asset('js/baguetteBox.min.js') }}"></script>
<script>
    window.addEventListener('load', function() {
        baguetteBox.run('.gallery', {
            animation: 'fadeIn',
            noScrollbars: true
        });
    });
</script>
@stop
