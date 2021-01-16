@inject('request', 'Illuminate\Http\Request')
@extends('layouts.back')

@section('content')
<h3 class="text-2xl">Datos</h3>

<div class="">
    <div class="text-xl">
        Listado
    </div>
    <div class="">
        <table class="table-auto mx-auto my-4 w-full">

            <thead>
                <tr class="border-solid border-black">
                    <th class="px-4 py-2">Título</th>
                    <th class="px-4 py-2">Seccion</th>
                    <th class="px-4 py-2">Publicado</th>
                    <th class="px-4 py-2">&nbsp;</th>
                </tr>
            </thead>

            <tbody>
                @if (count($datos) > 0)
                @foreach ($datos as $dato)
                <tr data-entry-id="{{ $dato->id }}">
                    <td class="px-4 py-2">{{ $dato->titulo }}</td>
                    <td class="px-4 py-2">{{ $dato->seccion }}</td>
                    <td class="px-4 py-2 text-center">{{ $dato->publicado === 1 ? 'Si' : 'No' }}</td>
                    <td class="px-4 py-2 text-center">
                            <a href="{{ route('admin.datos.show',[$dato->id]) }}" class="bg-gray-300 mx-2 px-2  py-1 rounded text-sm hover:bg-gray-500 hover:text-white">Detalles</a>
                            <a href="{{ route('admin.datos.edit',[$dato->id]) }}" class="bg-orange-500 mx-2 px-2 py-1 rounded  text-sm text-white hover:bg-orange-700">Modificar</a>
                    </td>


                </tr>

                @endforeach
                @endif
            </tbody>
        </table>
    </div>


</div>

@stop