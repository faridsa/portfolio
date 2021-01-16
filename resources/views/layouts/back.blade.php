<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body class="bg-gray-100  leading-normal tracking-normal mt-12">
        <!--Nav-->
        <nav class="bg-gray-900 py-2 h-auto fixed w-full z-20 top-0">
            <div class="flex flex-wrap items-center container mx-auto">
                <div class="flex flex-shrink md:w-1/3 justify-center md:justify-start text-white">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        Fadi
                    </a>
                </div>
                @auth
                <ul class="flex w-full  content-center justify-end text-gray-100">
                    <li class="mr-4">
                        <i class="fas fa-user"></i>{{ Auth::user()->name }} <span class="caret"></span>
                    </li>
                    <li class="mr-4">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <i class="fas fa-power-off"></i> {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                    <li>
                        <a href="" class=""><i class="fas fa-desktop"></i> Ver sitio</a>
                    </li>
                </ul>
                @endauth
            </div>

        </nav>
        <div id="app" class="flex flex-row justify-start items-start min-h-screen">
            @auth
            <aside class="px-6 py-8 w-1/5 text-gray-200 bg-gray-900 min-h-screen">
                <ul class="mx-auto">
                    <li class="p-2"> <a href="{{ route("admin.home") }}"><i class="fas fa-tachometer-alt"></i> Dashboard</a> </li>
                    <li class="p-2"><a href="{{ route("admin.posts.index") }}"><i class="fas fa-film"></i> Slideshow</a></li>
                    <li class="p-2"><a href="{{ route("admin.posts.index") }}"><i class="fas fa-images"></i> Galería</a></li>
                    <li class="p-2"><a href="{{ route("admin.posts.index") }}"><i class="fas fa-bullhorn"></i> FadiSpots</a></li>
                    <li class="p-2"><a href="{{ route("admin.posts.index") }}"><i class="fas fa-newspaper"></i> Blog / Escuela</a></li>
                    <li class="p-2"><a href="{{ route("admin.contact-forms.index") }}"><i class="fas fa-inbox"></i> Formularios de contacto</a></li>
                </ul>
            </aside>
            @endauth
            <main class="w-3/4 p-8 bg-gray-100 h-full">
                @include ('partials.alert')
                @yield('content')
            </main>
        </div>
        @yield('css')
        @yield('scripts')

    </body>
</html>