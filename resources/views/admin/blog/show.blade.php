@extends('layouts.back')

@section('content')
    <h3 class="page-title">Blog</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
           Detalles
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>Titulo</th>
                            <td field-key='title'>{{ $post->title }}</td>
                        </tr>
                        <tr>
                            <th>Contenido</th>
                            <td field-key='content'>{!! $post->content !!}</td>
                        </tr>
                        <tr>
                            <th>Imagen</th>
                            <td field-key='image'>{{ $post->image }}</td>
                        </tr>
                        <tr>
                            <th>Publicada</th>
                            <td field-key='comments'><i class="fa fa-togle-{{ $post->published == 1 ? 'on' : 'off'}}"></i></td>
                        </tr>
                        <tr>
                            <th>Fecha</th>
                            <td field-key='read'>{{ $post->created_at }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.contacts.index') }}" class="btn btn-default">Volver</a>
        </div>
    </div>
@stop