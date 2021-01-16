@extends('layouts.back')
@section('content')

<div class="card">
    <div class="card-header">
        Datos del usuario
    </div>

    <div class="card-body">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th class="text-left">
                            ID
                        </th>
                        <td>
                            {{ $user->id }}
                        </td>
                    </tr>
                    <tr>
                        <th class="text-left">
                            Nombre
                        </th>
                        <td>
                            {{ $user->name }}
                        </td>
                    </tr>
                    <tr>
                        <th class="text-left">
                            Email
                        </th>
                        <td>
                            {{ $user->email }}
                        </td>
                    </tr>
                    <tr>
                        <th class="text-left">
                            Rol
                        </th>
                        <td>
                            {{ $user->role->title }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <a style="margin-top:40px;" class="bg-gray-400 px-2 py-1 text-white" href="{{ url()->previous() }}">
                <i class="fa fa-arrow-left"></i> Volver
            </a>
    </div>
</div>
@endsection