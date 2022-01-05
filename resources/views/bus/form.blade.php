<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('placa') }}
            {{ Form::text('placa', $bus->placa, ['class' => 'form-control' . ($errors->has('placa') ? ' is-invalid' : ''), 'placeholder' => 'Placa']) }}
            {!! $errors->first('placa', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('capacidad') }}
            {{ Form::text('capacidad', $bus->capacidad, ['class' => 'form-control' . ($errors->has('capacidad') ? ' is-invalid' : ''), 'placeholder' => 'Capacidad']) }}
            {!! $errors->first('capacidad', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            <label>Ruta</label>
            <br>
            <select name="id_ruta"  required="required" class="form-select">
            <br>
                @foreach($rutas as $ruta)

                        <option value="{{$ruta->id}}">{{$ruta->origenN}} - {{$ruta->destinoN}} </option>

                @endforeach

            </select>
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
