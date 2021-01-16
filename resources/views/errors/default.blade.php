<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {!! SEO::generate() !!}
    <style>
    html {
        scroll-behavior: smooth;
    }

    body {
        opacity: 0;
        transition: opacity .6s ease;
    }

    .svg:hover {
        opacity: .8;
        transform: scale(1.2);
        transition: all .5s linear;
    }
    </style>
</head>

<body class="font-sans h-full pt-24 bg-gray-900"><a id="top">
        @include('partials.navigation')
        @yield('content')
        @include('partials.footer')
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}"></script>
        <script>
        window.onload = function() {
            checkScreenHeight();
            document.querySelector("body").style.opacity = "1";
        };
        window.addEventListener("scroll", checkScreenHeight);

        function checkScreenHeight(){
            if(document.body.clientHeight < window.innerHeight) {
                document.getElementById("footer").classList.add("absolute");
            }
        }
        </script>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
        </style>
        @yield('css')
        @yield('scripts')
</body>

</html>