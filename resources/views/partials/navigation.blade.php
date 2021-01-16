<nav class="bg-black fixed w-full z-10 top-0 text-platinum">
    <div class="container flex items-center justify-between flex-wrap mr-auto">
        <a href="{{ route('home') }}" class="flex items-center">
            <img src="{{ asset('images/icons/isologo.png') }}" alt="isologo" class="w-12 mr-6">
            <span class="font-bebas text-white text-2xl inline">Carlos Fadigati - Fotógrafo</span>
        </a>
        @if ($browser->isPhone())
        <button id="menuToggler">
            <img src="{{ asset('images/icons/menu.svg') }}" onClick="showMenu()" alt="Menu">
        </button>
        @else
        @include('partials.desktop-navigation')
        @endif
    </div>
</nav>
@if ($browser->isPhone())
    @include('partials.mobile-navigation')
@endif
