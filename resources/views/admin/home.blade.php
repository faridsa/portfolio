@extends('layouts.back')

@section('content')
<div class="container mx-auto h-full">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    Bienvenid@ al panel de gestión de contenidos
                </div>
            </div>
        </div>
    </div>
</div>
@endsection