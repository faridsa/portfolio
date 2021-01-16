@inject('request', 'Illuminate\Http\Request')
@extends('layouts.back')
@section('content')
<h3 class="text-2xl">Datos</h3>
<div class="">
    <div class="text-xl">
        Modificar
    </div>
    <form action="{{ route("admin.datos.update", [$dato->id]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
        <div class="m-2 p-2 border-solid border border-gray-200">
            <p  class="block text-bold">Título:</p>
            <input type="text" id="titulo" name="titulo" class="w-full border rounded px-2 py-1" value="{{ old('titulo', isset($dato) ? $dato->titulo : '') }}" required>
            @if($errors->has('titulo'))
            <em class="invalid-feedback">
            {{ $errors->first('titulo') }}
            </em>
            @endif
        </div>
        <div class="m-2 p-2 border-solid border border-gray-200">
            <p class="block text-bold">Sección:</p>
            <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline" name="seccion" id="seccion" required>
                <option value="0">Seleccione</option>
                @foreach($enum_secciones as $seccion)
                <option value="{{ $seccion }}" {{ $seccion == $dato->seccion ? 'selected' : '' }}>{{ $seccion }}</option>
                @endforeach
            </select>
        </div>
        @isset($dato->pdf)
        <div class="m-2 p-2 border-solid border border-gray-200">
            <p class="block text-bold">PDF:  <a href="{{ asset($dato->pdf) }}" target="_blank">{{ $dato->pdf ?? '' }}</a></p>
            <input type="file" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 pl-0 py-0 pr-8 rounded shadow">
        </div>
        @endif
        <div class="m-2 p-2 border-solid border border-gray-200">
            <p  class="block text-bold">Contenido:</p>
            <textarea name="contenido" id="contenido" cols="80" rows="10" class="w-full border rounded px-2 py-1">{!!  $dato->contenido ?? '' !!}</textarea>
        </div>
        <div>
            <a href="{{ route('admin.datos.index',[$dato->id]) }}" class="bg-gray-300 mx-2 px-2  py-1 rounded text-sm hover:bg-gray-500 hover:text-white">Cancelar</a>
            <button type="submit" class="bg-orange-500 mx-2 px-2 py-1 rounded  text-sm text-white hover:bg-orange-700">Guardar</button>
        </div>
    </form>
</div>
@stop