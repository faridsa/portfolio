@extends('layouts.front')
@section('content')
<header id="hero" class="bg-gray-800 w-full text-center py-8 text-white">
    <h1 class="font-bebas text-2xl">Blog</h1>
</header>
<main class="pt-8 pb-4">
    <section class="container mx-auto gallery grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($posts as $post)

        @include('partials.blogItem')

        @endforeach
    </section>
</main>

@stop
@section('scripts')
@parent
@stop