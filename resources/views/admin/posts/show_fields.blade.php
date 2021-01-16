<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Titulo:') !!}
    <h2>{{ $post->title }}</h2>
</div>

<!-- Section Field -->
<div class="form-group">
    {!! Form::label('section', 'Seccion:') !!}
    <p>{{ $post->section }}</p>
</div>

<!-- Content Field -->
<div class="form-group">
    {!! Form::label('content', 'Contenido:') !!}
    <p>{!! $post->content !!}</p>
</div>

<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', 'Imagen:') !!}
    <p>{{ $post->image }}</p>
</div>

<!-- Video Field -->
<div class="form-group">
    {!! Form::label('video', 'Video:') !!}
    <p>{{ $post->video }}</p>
</div>

<!-- Published Field -->
<div class="form-group">
    {!! Form::label('published', 'Publicada:') !!}
    <p><i class="fas fa-toggle-{{ $post->published == 1 ? 'on' : 'off'}}"></i></p>
</div>

<!-- Order Field -->
<div class="form-group">
    {!! Form::label('order', 'Orden:') !!}
    <p>{{ $post->order }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Fecha de creación:') !!}
    <p>{{ $post->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Ultima modificación:') !!}
    <p>{{ $post->updated_at }}</p>
</div>

