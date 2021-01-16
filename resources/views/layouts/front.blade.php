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
        padding-top:80px;
    }

    .svg:hover {
        opacity: .8;
        transform: scale(1.2);
        transition: all .5s linear;
    }

    img{
        max-width: 100%;
        transition: all 1s ease;
    }
    .lazyload{
        opacity: 0;
    }
    .lazyloaded{
        opacity: 1;
    }
    .mobile-navigation {
        z-index:100;
        position: fixed;
        top:72px;
        left: -100%;
        overflow: hidden;
        transition: all 1s ease;
    }

     .mobile-navigation.open {
        left:0;
     }

    </style>
</head>

<body class="font-sans h-full bg-gray-900">
<a id="top">
        @include('partials.navigation')
        @yield('content')
        @include('partials.footer')
        <link href="{{ asset('css/app.css') }}?2" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}?2"></script>
        <script>
        window.onload = function() {
            checkScreenHeight();
            document.querySelector("body").style.opacity = "1";
        };
        window.addEventListener("scroll", checkScreenHeight);

        function checkScreenHeight(){
            if(document.body.clientHeight < window.innerHeight) {
                document.getElementById("footer").classList.add("fixed");
            }
        }
        </script>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
        </style>
        @yield('css')
        @yield('scripts')
        @if($browser->isPhone())
        <script src="{{ asset('js/alpine.js') }}?2"></script>
        <script>
            function showMenu(){
                document.getElementById('menu').classList.toggle('open');
            }
        </script>
        @endif
</body>

</html>
