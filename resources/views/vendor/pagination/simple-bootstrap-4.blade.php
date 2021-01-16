@if ($paginator->hasPages())
<div class="block text-center p-4 w-full">
    <ul class="pagination flex justify-center items-center mx-auto" role="navigation">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="disabled text-gray-500 mr-4" aria-disabled="true"><span>Anterior</span></li>
        @else
            <li class="text-gray-300 mr-4"><a href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo; Anterior</a></li>
        @endif
        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="text-gray-300 ml-4"><a href="{{ $paginator->nextPageUrl() }}" rel="next">Siguiente &raquo;</a></li>
        @else
            <li class="disabled text-gray-500" aria-disabled="true"><span>Siguiente</span></li>
        @endif
    </ul>
</div>
@endif
