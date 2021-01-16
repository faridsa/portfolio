@extends('layouts.back')

@section('content')
<section class="content-header">
        <h1>
            Blog &raquo; Creación de nota
        </h1>
   </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'admin.posts.store', 'files' => true]) !!}

                        @include('admin.posts.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
