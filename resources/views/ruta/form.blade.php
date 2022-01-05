<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Origen') }}
            {{ Form::text('origenN', $ruta->origenN, ['class' => 'form-control' . ($errors->has('origenN') ? ' is-invalid' : ''), 'placeholder' => 'Origen']) }}
            {!! $errors->first('origenN', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Destino') }}
            {{ Form::text('destinoN', $ruta->destinoN, ['class' => 'form-control' . ($errors->has('destinoN') ? ' is-invalid' : ''), 'placeholder' => 'Destino']) }}
            {!! $errors->first('destinoN', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Distancia km') }}
            {{ Form::text('distancia', $ruta->distancia, ['class' => 'form-control' . ($errors->has('distancia') ? ' is-invalid' : ''), 'placeholder' => 'Distancia']) }}
            {!! $errors->first('distancia', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tarifa') }}
            {{ Form::text('tarifa', $ruta->tarifa, ['class' => 'form-control' . ($errors->has('tarifa') ? ' is-invalid' : ''), 'placeholder' => 'Tarifa']) }}
            {!! $errors->first('tarifa', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
