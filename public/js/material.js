$(function() {
    
    $('#id_carrera').on('change', function(e){
        console.log(e);
        var id = e.target.value;
        
        $.get("byCarrera/"+id,function(data) {
          $('#id_materia').empty();
          $('#id_materia').append('<option value="0" disable="true" selected="true">--Materias--</option>');
    
          $.each(data, function(fetch, obj){
            if(obj.id === null) {
              alert('nada');
            }
            console.log(data);
            $('#id_materia').append('<option value="'+ obj.id +'">'+ obj.nombre +'</option>');
          })
        });
      });
});

function confirmar() {
			if(confirm('¿Estas seguro de visitar esta url?'))
				return true;
			else
				return false;
		}

/*
$(function() {
    $('#id_carrera').ready(function(e){
        console.log(e);
        var id = document.getElementById('id_carrera').value;
        var name = document.getElementById('id_materia').value;
        $.get("byCarrera/"+id,function(data) {
          $('#id_materia').empty();
          $('#id_materia').append('<option value="0" disable="true" selected="true">--Materias--</option>');
    
          $.each(data, function(fetch, obj){
            console.log(data);
            if (obj.id === name) {
              alert('si');
              $('#id_materia').append('<option selected="selected" value="'+ obj.id +'">'+ obj.nombre +'</option>');
            } else {
              $('#id_materia').append('<option value="'+ obj.id +'">'+ obj.nombre +'</option>');
            }
            
          })
        });
      });
});
*/