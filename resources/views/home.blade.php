@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="text-center">Bienvenidos</h1>
            <p>Dirigase a la pestaña reservar una cita presione el siguiente botón</p>
            <a class="btn btn-success" href="{{ url('reservas') }}">Agendar cita</a>
        </div>
    </div>
</div>
@endsection
