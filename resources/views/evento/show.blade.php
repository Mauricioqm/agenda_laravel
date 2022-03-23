@extends('layouts.app')

@section('template_title')
    {{ $evento->name ?? 'Show Evento' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver cita</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('eventos.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Documento:</strong>
                            {{ $evento->document }}
                        </div>
                        <div class="form-group">
                            <strong>Nombres dueño de la mascota:</strong>
                            {{ $evento->name }}
                        </div>
                        <div class="form-group">
                            <strong>Mascota:</strong>
                            {{ $evento->pet }}
                        </div>
                        <div class="form-group">
                            <strong>Dia:</strong>
                            {{ $evento->start }}
                        </div>
                        <div class="form-group">
                            <strong>Hora:</strong>
                            {{ $evento->hour }}
                        </div>
                        {{-- <div class="form-group">
                            <strong>End:</strong>
                            {{ $evento->end }}
                        </div> --}}

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
