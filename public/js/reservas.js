document.addEventListener('DOMContentLoaded', function() {

  let formulario = document.querySelector('#formularioReservas');
  
  var calendarEl = document.getElementById('reserva');
  
  var calendar = new FullCalendar.Calendar(calendarEl, {

    initialView: 'dayGridMonth',
    
    locale: 'es',
    
    headerToolbar: {
      rigth: 'prev, next today',

      center: 'title',

      left: 'dayGridMonth,timeGridWeek,listWeek'
    },

    events: "http://127.0.0.1:8000/reservas/mostrar", 

    dateClick:function(info){
      formulario.reset();

      
      var actual =  new Date();
      // console.log(actual.toISOString().split('T')[0]);
      // console.log(info.date.toISOString().split('T')[0] );
      if(info.date.toISOString().split('T')[0] >= actual.toISOString().split('T')[0]){
        $('#reservas').modal('show');
        daySelected = info.dateStr;
        $('#btnModificar').hide();
      }else{
        alert("No puedes agendar una cita en una fecha pasada");
      }
    },

  });

  calendar.render();

  document.getElementById('btnGuardar').addEventListener('click', function(){
    const data = new FormData(formulario);
    
    // console.log(data);
    // console.log(formulario);

    //Permite enviar / guardar informacion a travez de la url
    axios.post("http://127.0.0.1:8000/reservas/agregar", data).
    then(
      (resp) => {
        $("#reservas").modal("hide");
      }
    ).catch(
      error=>{
        if(error.response){
          console.log(error.response.data.message);
        }
      }
    )
  });
});
