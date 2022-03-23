<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('documento') }}
            {{ Form::text('document', $evento->document, ['class' => 'form-control' . ($errors->has('document') ? ' is-invalid' : ''), 'placeholder' => 'Document0']) }}
            {!! $errors->first('document', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('name', $evento->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('mascota') }}
            {{ Form::text('pet', $evento->pet, ['class' => 'form-control' . ($errors->has('pet') ? ' is-invalid' : ''), 'placeholder' => 'Mascota']) }}
            {!! $errors->first('pet', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Hora') }}
            {{ Form::text('hour', $evento->hour, ['class' => 'form-control' . ($errors->has('hour') ? ' is-invalid' : ''), 'placeholder' => 'Hora']) }}
            {!! $errors->first('hour', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Día') }}
            {{ Form::text('start', $evento->start, ['class' => 'form-control' . ($errors->has('start') ? ' is-invalid' : ''), 'placeholder' => 'Día']) }}
            {!! $errors->first('start', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group" style="display: none">
            {{ Form::label('end') }}
            {{ Form::text('end', $evento->start, ['class' => 'form-control' . ($errors->has('start') ? ' is-invalid' : ''), 'placeholder' => 'End']) }}
            {!! $errors->first('start', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </div>
</div>