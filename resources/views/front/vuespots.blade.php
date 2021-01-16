@extends('layouts.front')
@section('content')
<header id="hero" class="bg-gray-800 w-full text-center py-8 text-white">
    <h1 class="font-bebas text-2xl">FadiSpots</h1>
</header>
<div id="app">
    <spots></spots>
</div>
@stop

@section('scripts')
@parent
<link rel="stylesheet" href="{{ asset('css/baguetteBox.min.css') }}">
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
