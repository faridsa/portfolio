<!-- Title Field -->
<div class="form-group mb-6">
    {!! Form::label('title', 'Titulo:', ['class'=>'block text-gray-700 text-sm font-bold mb-2"']) !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Section Field -->
<div class="form-group mb-6">
    {!! Form::label('section', 'Seccion:') !!}
    {!! Form::select('section', ['blog' => 'Blog', 'school' => 'Escuela'], null, ['class' => 'px-2', 'placeholder'=>'Seleccione']) !!}
</div>

<!-- Content Field -->
<div class="form-group mb-6">
    {!! Form::label('content', 'Contenido:') !!}
    {!! Form::textarea('content', null, ['class' => 'editor']) !!}
</div>

<div class="md:flex md:items-center mb-6">
    <div class="md:w-1/2">
    {!! Form::label('image', 'Image:') !!}
    {!! Form::file('image', ['class'=>'w-full py-1']) !!}
    </div>
    <div class="md:w-1/2">
        {!! Form::label('video', 'Video: (solo el id del video en youtube)') !!}
        {!! Form::text('video', null, ['class' => 'form-control', 'placeholder'=>'ej: YXE5lzc7CjA']) !!}
    </div>
</div>

<div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
        {!! Form::label('published', 'Publicada:') !!}
        {!! Form::radio('published',1, true) !!} Sí
        {!! Form::radio('published',0, false) !!} No
    </div>

    <!-- Order Field -->
    <div class="md:w-1/3">
        {!! Form::label('order', 'Orden:') !!}
        {!! Form::number('order', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Submit Field -->
    <div class="flex my-4">
        <a href="{{ route('admin.posts.index') }}" class="btn bg-gray-300 mr-4 hover:bg-gray-400">Cancelar</a>
        {!! Form::submit('Guardar', ['class' => 'btn bg-red-300 hover:bg-red-400']) !!}
    </div>
</div>
@section('scripts')
<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script>
  var options = {
    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
  };
  CKEDITOR.replace('content', options);

</script>
@stop