@extends('layouts.front')
@section('content')
<header id="hero" class="bg-gray-800 w-full text-center py-8 text-white">
    <h1 class="font-bebas text-2xl">Blog &raquo; {{ $post->title }}</h1>
</header>
<main class="pt-8 pb-4">
    <section class="mx-auto w-full" style="max-width:50rem">
        <picture class="bg-white p-4 block mb-8">
            <img src="{{ asset('images/blog/'.$post->image) }}" class="mx-auto" alt="{{ $post->slug }}">
        </picture>
        <div class="py-4 px-8 bg-white mb-4 block">
        {!! $post->content !!}
        </div>
        
    </section>
</main>

@stop
@section('scripts')
@parent
@stop