<div class="table-responsive">
    <table class="table-auto border-collapse" id="posts-table">
        <thead class="border-0 border-b-1">
            <tr>
                <th class="px-2">Titulo</th>
                <th class="px-2">Seccion</th>
                <th class="px-2">Imagen</th>
                <th class="px-2">Publicada</th>
                <th class="px-2">Orden</th>
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
            <td class="px-2">{{ $post->title }}</td>
            <td class="px-2">{{ $post->section }}</td>
            <td class="px-2">{{ $post->image }}</td>
            <td class="px-2 text-center"><i class="fas fa-toggle-{{ $post->published == 1 ? 'on' : 'off'}}"></i></td>
            <td class="px-2">{{ $post->order }}</td>
            <td class="px-2">
                <div class="flex">
                    <a href="{{ route('admin.posts.show', [$post->id]) }}" class="px-2" title="Ver nota"><i class="fa fa-eye"></i></a>
                    <a href="{{ route('admin.posts.edit', [$post->id]) }}" class="px-2" title="Modificar nota"><i class="fa fa-edit"></i></a>
                    {!! Form::open(['route' => ['admin.posts.destroy', $post->id], 'method' => 'delete']) !!}
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'px-2', 'title' => 'Eliminar nota', 'onclick' => "return confirm('Confirmas que vas a eliminar la nota?')"]) !!}
                    {!! Form::close() !!}
                </div>
            </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
