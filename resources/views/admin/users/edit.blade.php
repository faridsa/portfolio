@extends('layouts.back')
@section('content')
<h3 class="mt-2 pb-2">
    Usuarios
</h3>
<div class="card">
    <div class="card-header">
        Modificar usuario
    </div>

    <div class="card-body">
        <form action="{{ route("admin.users.update", [$user->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="hidden" name="roles[]" value="{{ $user->roles[0]->id }}">
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">Nombre de usuario *</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($user) ? $user->name : '') }}" required>
                @if($errors->has('name'))
                    <em class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </em>
                @endif
                <p class="helper-block">
                </p>
            </div>
            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                <label for="email">Email *</label>
                <input type="email" id="email" name="email" class="form-control" value="{{ old('email', isset($user) ? $user->email : '') }}" required>
                @if($errors->has('email'))
                    <em class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </em>
                @endif
                <p class="helper-block">
                </p>
            </div>
            <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" class="form-control">
                @if($errors->has('password'))
                    <em class="invalid-feedback">
                        {{ $errors->first('password') }}
                    </em>
                @endif
                <p class="helper-block">
                    Dejar en blanco para no modificar
                </p>
            </div>
            {{--<div class="form-group {{ $errors->has('roles') ? 'has-error' : '' }}">
                <label for="roles">{{ trans('cruds.user.fields.roles') }}*
                    <span class="btn btn-info btn-xs select-all">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all">{{ trans('global.deselect_all') }}</span></label>
                <select name="roles[]" id="roles" class="form-control select2" multiple="multiple" required>
                    @foreach($roles as $id => $roles)
                        <option value="{{ $id }}" {{ (in_array($id, old('roles', [])) || isset($user) && $user->roles->contains($id)) ? 'selected' : '' }}>{{ $roles }}</option>
                    @endforeach
                </select>
                @if($errors->has('roles'))
                    <em class="invalid-feedback">
                        {{ $errors->first('roles') }}
                    </em>
                @endif
  
            </div>--}}
            <div>
              <button class="btn btn-danger" type="submit"><i class="far fa-save"></i> Guardar</button>
              <a href="{{ route("admin.home") }}" class="btn btn-info"><i class="fas fa-arrow-left"></i> Cancelar</a>
            </div>
        </form>
    </div>
</div>
@endsection