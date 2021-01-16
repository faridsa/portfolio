@inject('request', 'Illuminate\Http\Request')
@extends('layouts.back')

@section('content')
<h3 class="text-2xl">Blog</h3>

<div class="panel panel-default">
    <div class="text-xl">
        Listado de notas
    </div>

    <div class="">
        <table class="table-auto mx-auto my-4 w-full">
            <thead>
                <tr class="border-solid">
                    <th class="px-4 py-2">Fecha</th>
                    <th class="px-4 py-2">Titulo</th>
                    <th class="px-4 py-2">Publicada</th>
                    <th class="px-4 py-2">&nbsp;</th>
                </tr>
            </thead>

            <tbody>
                @if (count($posts) > 0)
                @foreach ($posts as $post)
                <tr data-entry-id="{{ $post->id }}">
                   <td field-key='name'>{{ str_limit($post->created_at, 10, '') }}</td>
                   <td field-key='name'>{{ $post->title }}</td>
                   <td field-key='viewed'><i class="fa fa-togle-{{ $post->published == 1 ? 'on' : 'off'}}"></i></td>
                   @if( request('show_deleted') == 1 )
                   <td>
                    @can('contact_delete')
                    {!! Form::open(array(
                        'style' => 'display: inline-block;',
                        'method' => 'POST',
                        'onsubmit' => "return confirm('".trans("admin.qa_are_you_sure")."');",
                        'route' => ['admin.contacts.restore', $post->id])) !!}
                        {!! Form::submit(trans('admin.qa_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                        {!! Form::close() !!}
                        @endcan
                        @can('contact_delete')
                        {!! Form::open(array(
                            'style' => 'display: inline-block;',
                            'method' => 'DELETE',
                            'onsubmit' => "return confirm('".trans("admin.qa_are_you_sure")."');",
                            'route' => ['admin.contacts.perma_del', $post->id])) !!}
                            {!! Form::submit(trans('admin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                            {!! Form::close() !!}
                            @endcan
                        </td>
                        @else
                        <td>
                            @can('contact_view')
                            <a href="{{ route('admin.contacts.show',[$post->id]) }}" class="btn btn-xs btn-primary">@lang('admin.qa_view')</a>
                            @endcan
                            @can('contact_edit')
                            <a href="{{ route('admin.contacts.edit',[$post->id]) }}" class="btn btn-xs btn-info">@lang('admin.qa_edit')</a>
                            @endcan
                            @can('contact_delete')
                            {!! Form::open(array(
                                'style' => 'display: inline-block;',
                                'method' => 'DELETE',
                                'onsubmit' => "return confirm('".trans("admin.qa_are_you_sure")."');",
                                'route' => ['admin.contacts.destroy', $post->id])) !!}
                                {!! Form::submit(trans('admin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                {!! Form::close() !!}
                                @endcan
                            </td>
                            @endif
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td colspan="10">Sin datos disponibles</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
        @stop

        @section('javascript') 
        <script>
            @can('contact_delete')
            @if ( request('show_deleted') != 1 ) window.route_mass_crud_entries_destroy = '{{ route('admin.contacts.mass_destroy') }}'; @endif
            @endcan

        </script>
        @endsection