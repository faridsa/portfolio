@extends('layouts.back')

@section('content')
    <section class="my-4">
        <h1 class="flex content-between">
            <span class="text-xl">Blog &raquo; Listado de notas</span>
            <a class="px-2 py-1 btn bg-gray-400 hover:bg-gray-500 ml-auto" href="{{ route('admin.posts.create') }}">Agregar</a>
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                    @include('admin.posts.table')
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

