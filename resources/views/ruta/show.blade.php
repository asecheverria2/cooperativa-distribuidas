@extends('layouts.app')

@section('template_title')
    {{ $ruta->name ?? 'Show Ruta' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Ruta</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('rutas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Origenn:</strong>
                            {{ $ruta->origenN }}
                        </div>
                        <div class="form-group">
                            <strong>Destinon:</strong>
                            {{ $ruta->destinoN }}
                        </div>
                        <div class="form-group">
                            <strong>Distancia:</strong>
                            {{ $ruta->distancia }}
                        </div>
                        <div class="form-group">
                            <strong>Tarifa:</strong>
                            {{ $ruta->tarifa }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
