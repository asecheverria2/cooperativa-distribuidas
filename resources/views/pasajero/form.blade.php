<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            <label>Bus</label>
            <br>
            <select name="id_bus"  required="required" class="form-select">
            <br>
                @foreach($buses as $bus)

                        <option value="{{$bus->id}}">{{$bus->placa}} | {{$bus->ruta->origenN}}- {{$bus->ruta->destinoN}} </option>

                @endforeach

            </select>
        </div>

        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $pasajero->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cedula') }}
            {{ Form::text('cedula', $pasajero->cedula, ['class' => 'form-control' . ($errors->has('cedula') ? ' is-invalid' : ''), 'placeholder' => 'Cedula']) }}
            {!! $errors->first('cedula', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
