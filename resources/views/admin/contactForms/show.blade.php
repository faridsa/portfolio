@extends('layouts.back')

@section('content')
    <h3 class="page-title">Formularios de Contacto</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
           Detalles
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>Nombre</th>
                            <td field-key='name'>{{ $contact->name }}</td>
                        </tr>
                        <tr>
                            <th>Teléfono</th>
                            <td field-key='phone'>{{ $contact->phone }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td field-key='email'>{{ $contact->email }}</td>
                        </tr>
                        <tr>
                            <th>Comentarios</th>
                            <td field-key='comments'>{!! $contact->comments !!}</td>
                        </tr>
                        <tr>
                            <th>Leído</th>
                            <td field-key='read'>{{ $contact->read }}</td>
                        </tr>
                        <tr>
                            <th>Fecha</th>
                            <td field-key='read'>{{ $contact->created_at }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.contacts.index') }}" class="btn btn-default">Volver</a>
        </div>
    </div>
@stop