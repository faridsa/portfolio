@extends('layouts.app')

@section('content')
<section class="content-header">
        <h1>
            Blog &raquo; Detalles de nota
        </h1>
   </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('admin.posts.show_fields')
                    <a href="{{ route('admin.posts.index') }}" class="btn bg-gray-300">Volver</a>
                    <a href="{{ route('admin.posts.edit', ['post' => $post]) }}" class="btn bg-red-300">Modificar</a>
                </div>
            </div>
        </div>
    </div>
@endsection
