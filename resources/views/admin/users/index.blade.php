@extends('layouts.back')
@section('content')
<h3 class="mt-2 pb-2">
    @can('user_create')
    <a class="btn btn-success float-right" href="{{ route("admin.users.create") }}">
        Agregar usuario
    </a>
    @endcan
    Usuarios
</h3>

<div class="card">
    <div class="card-header">
        Listado
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable">
                <thead>
                    <tr>

                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Rol</th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $key => $user)
                    <tr data-entry-id="{{ $user->id }}">
                        <td>
                            {{ $user->name ?? '' }}
                        </td>
                        <td>
                            {{ $user->email ?? '' }}
                        </td>
                        <td>
                            @foreach($user->roles as $key => $item)
                            <span class="badge badge-info">{{ $item->title }}</span>
                            @endforeach
                        </td>
                        <td>
                            @can('user_edit')
                            <a class="btn btn-xs btn-info" href="{{ route('admin.users.edit', $user->id) }}">
                                Modificar
                            </a>
                            @endcan
                            @can('user_delete')
                            <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Confirma eliminación?');" style="display: inline-block;">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="submit" class="btn btn-xs btn-danger" value="Eliminar">
                            </form>
                            @endcan
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent
<script>
    $(function () {
      let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
      let deleteButton = {
        text: deleteButtonTrans,
        url: "{{ route('admin.users.massDestroy') }}",
        className: 'btn-danger',
        action: function (e, dt, node, config) {
          var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
              return $(entry).data('entry-id')
          });

          if (ids.length === 0) {
            alert('{{ trans('global.datatables.zero_selected') }}')

            return
        }

        if (confirm('{{ trans('global.areYouSure') }}')) {
            $.ajax({
              headers: {'x-csrf-token': _token},
              method: 'POST',
              url: config.url,
              data: { ids: ids, _method: 'DELETE' }})
            .done(function () { location.reload() })
        }
    }
}
let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
$.extend(true, $.fn.dataTable.defaults, {
    order: [[ 1, 'desc' ]],
    pageLength: 100,
});
@can('user_delete')
dtButtons.push(deleteButton)
@endcan

$('.datatable:not(.ajaxTable)').DataTable({ buttons: dtButtons })
})

</script>
@endsection