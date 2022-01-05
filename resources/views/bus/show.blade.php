@extends('layouts.app')

@section('template_title')
    {{ $bus->name ?? 'Show Bus' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Bus</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('buses.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Placa:</strong>
                            {{ $bus->placa }}
                        </div>
                        <div class="form-group">
                            <strong>Capacidad:</strong>
                            {{ $bus->capacidad }}
                        </div>
                        <div class="form-group">
                            <strong>Id Ruta:</strong>
                            {{ $bus->id_ruta }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
