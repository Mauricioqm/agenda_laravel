@extends('layouts.app')
@section('content')

<div class="container">
  <div id="reserva">
   
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="reservas" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true" data-keyboard="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Agendar cita</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
       <form action="" id="formularioReservas" name="formularioReservas">

        {{ csrf_field() }}

        <div class="form-group">
          <label for="document">Documento</label>
          <input type="number" class="form-control" name="document" id="document" aria-describedby="helpId" placeholder="Documento">
          {{-- <small id="helpId" class="form-text text-muted">Help text</small> --}}
        </div>

         <div class="form-group">
           <label for="name">Nombres dueño de la mascota</label>
           <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="Nombres">
           {{-- <small id="helpId" class="form-text text-muted">Help text</small> --}}
         </div>

         <div class="form-group">
           <label for="pet">Nombre mascota</label>
           <input type="text" class="form-control" name="pet" id="pet" aria-describedby="helpId" placeholder="Nombre mascota">
           {{-- <small id="helpId" class="form-text text-muted">Help text</small> --}}
         </div>
         
         <div class="form-group">
           <label for="hour">Confirmar fecha</label>
           <input type="date" class="form-control" name="start" id="start" aria-describedby="helpId" placeholder="" min=<?php $hoy=date("Y-m-d"); echo $hoy;?>>
         </div>

         <div class="form-group">
          <label for="hour">Hora</label>
          <input type="time" class="form-control" name="hour" id="hour" aria-describedby="helpId" placeholder="Hora">
          {{-- <small id="helpId" class="form-text text-muted">Help text</small> --}}
        </div>

       </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" id="btnGuardar">Reservar</button>
        {{-- <button type="button" class="btn btn-warning" id="btnModificar">Modificar</button> --}}
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>

@endsection