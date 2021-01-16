@inject('request', 'Illuminate\Http\Request')
@extends('layouts.back')
@section('content')
<h3 class="text-2xl">Datos</h3>
<div class="">
    <div class="text-xl">
        Detalles
    </div>
        <div class="m-2 p-2 border-solid border border-gray-200">
            <p  class="block text-bold">Título:</p>
            {{ $dato->titulo ?? '' }}
        </div>
        <div class="m-2 p-2 border-solid border border-gray-200">
            <p class="block text-bold">Sección:</p>
            {{ $dato->seccion ?? '' }}
        </div>
        @isset($dato->pdf)
        <div class="m-2 p-2 border-solid border border-gray-200">
            <p class="block text-bold">PDF:</p>
            <a href="{{ asset($dato->pdf) }}" target="_blank">{{ $dato->pdf ?? '' }}</a>
        </div>
        @endif
        <div class="m-2 p-2 border-solid border border-gray-200">
            <p  class="block text-bold">Contenido:</p>
            {!!  $dato->contenido ?? '' !!}
        </div>
        <div>
            <a href="{{ route('admin.datos.index',[$dato->id]) }}" class="bg-gray-300 mx-2 px-2  py-1 rounded text-sm hover:bg-gray-500 hover:text-white">Volver</a>
            <a href="{{ route('admin.datos.edit',[$dato->id]) }}" class="bg-orange-500 mx-2 px-2 py-1 rounded  text-sm text-white hover:bg-orange-700">Modificar</a>
        </div>

</div>
@stop