@extends('layouts.app')

@section('template_title')
    {{ $pasajero->name ?? 'Show Pasajero' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Pasajero</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('pasajeros.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Bus:</strong>
                            {{ $pasajero->id_bus }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $pasajero->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Cedula:</strong>
                            {{ $pasajero->cedula }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
