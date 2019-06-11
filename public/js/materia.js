$(function() {
    $('#id_carrera').ready(function(e){
        console.log(e);
        var id = document.getElementById("id_carrera").value;
        
        $.get("http://localhost/bySemestre/"+id,function(data) {
          $('#id_semestre').empty();
            document.getElementById("id_semestre").options.length = 0;
          $.each(data, function(fetch, obj){
            
            for (var i = 1; i <= obj.cantidad_semestre; i++) {
                //console.log(i);
                if(i == 1){
                    $('#id_semestre').append('<option value="'+i+'" selected>'+i+'</option>');
                }else {
                    $('#id_semestre').append('<option value="'+i+'">'+i+'</option>');
                }
            }
                
           
          })
        });
      });
});

$(function() {
    $('#id_carrera').on('change', function(e){
        
        var id = document.getElementById("id_carrera").value;
        $.get("http://localhost/bySemestre/"+id,function(data) {
            $('#id_semestre').empty();
              document.getElementById("id_semestre").options.length = 0;
            $.each(data, function(fetch, obj){
              
                for (var i = 1; i <= obj.cantidad_semestre; i++) {
                    //console.log(i);
                    if(i == 1){
                        $('#id_semestre').append('<option value=\"'+i+'\" selected>'+i+'</option>');
                    }else {
                        $('#id_semestre').append('<option value=\"'+i+'\">'+i+'</option>');
                    }
                }
                  
             
            })
        });
    });
});